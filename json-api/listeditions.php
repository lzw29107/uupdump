<?php
require_once 'shared/main.php';
include_once 'shared/unsymlink.php';
require_once 'api/listeditions.php';

$lang = $_GET['lang'] ?? 'en-us';
$updateId = $_GET['id'] ?? null;

header('Content-Type: application/json');

$apiResponse = uupListEditions($lang, $updateId);
if(isset($apiResponse['error']))
    http_response_code(400);

sendResponse($apiResponse);
