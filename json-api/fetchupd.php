<?php
require_once 'shared/main.php';
require_once 'shared/ratelimits.php';
include_once 'shared/unsymlink.php';
require_once 'api/fetchupd.php';

$arch = $_GET['arch'] ?? 'amd64';
$ring = $_GET['ring'] ?? 'WIF';
$flight = $_GET['flight'] ?? 'Active';
$build = $_GET['build'] ?? 'latest';
$sku = $_GET['sku'] ?? '48';
$type = $_GET['type'] ?? 'Production';
if(isset($_GET['flags'])) {
    $build .= $_GET['flags'];
}

header('Content-Type: application/json');

$resource = hash('sha1', strtolower("fetch-$arch-$ring-$flight-$build-$sku-$type"));
if(checkIfUserIsRateLimited($resource)) {
    http_response_code(429);
    sendResponse(['error' => 'USER_RATE_LIMITED']);
    die();
}

$apiResponse = uupFetchUpd($arch, $ring, $flight, $build, 0, $sku, $type, 1);
if(isset($apiResponse['error'])) {
    switch($apiResponse['error']) {
        case 'EMPTY_FILELIST':
            http_response_code(500);
            break;

        case 'NO_UPDATE_FOUND':
            http_response_code(500);
            break;

        default:
            http_response_code(400);
    }
}

sendResponse($apiResponse);
