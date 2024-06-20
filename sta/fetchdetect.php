<?php
$arch = $argv[1] ?? 'amd64';
$ring = $argv[2] ?? 'WIF';
$flight = $argv[3] ?? 'Active';
$build = $argv[4] ?? 16251;
$minor = $argv[5] ?? 0;
$sku = $argv[6] ?? 48;
$type = $argv[7] ?? 'Production';

require_once dirname(__FILE__).'/../api/fetchupd.php';
require_once dirname(__FILE__).'/main.php';
require_once dirname(__FILE__).'/genpack.php';

consoleLogger(brand('fetchupd'));

if(!get7ZipLocation()) {
    throwError('NO_7ZIP');
}

$fetchedUpdate = uupFetchUpd($arch, $ring, $flight, $build, $minor, $sku, $type);
if(isset($fetchedUpdate['error'])) {
    throwError($fetchedUpdate['error']);
}

foreach($fetchedUpdate['updateArray'] as $update) {
    generatePack($update['updateId']);
}

foreach($fetchedUpdate['updateArray'] as $update) {
    echo $update['foundBuild'];
    echo '|';
    echo $update['arch'];
    echo '|';
    echo $update['updateId'];
    echo '|';
    echo $update['updateTitle'];
    echo '|';
    echo $update['fileWrite'];
    echo "\n";
}
?>
