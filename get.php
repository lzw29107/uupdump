<?php
/*
Copyright 2021 whatever127

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

   http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/

//get parameters
$updateId = $_GET['id'] ?? null;
$simple = $_GET['simple'] ?? 0;
$aria2 = $_GET['aria2'] ?? 0;
$renameScript = $_GET['renscript'] ?? 0;
$autoDl = $_GET['autodl'] ?? 0;
$usePack = $_GET['pack'] ?? 0;
$desiredEdition = $_GET['edition'] ?? 0;
$sha1 = $_GET['sha1'] ?? 0;

//post parameters
$autoDl = $_POST['autodl'] ?? $autoDl;
$desiredVE = $_POST['virtualEditions'] ?? array();
$moreOptions = [
    'updates' => $_POST['updates'] ?? 0,
    'cleanup' => $_POST['cleanup'] ?? 0,
    'resetbase' => $_POST['resetbase'] ?? 0,
    'netfx' => $_POST['netfx'] ?? 0,
    'esd' => $_POST['esd'] ?? 0,
];

require_once 'api/get.php';
require_once 'api/updateinfo.php';
require_once 'contrib/get.php';
require_once 'shared/style.php';
require_once 'shared/ratelimits.php';

if(!$updateId) {
    fancyError('UNSPECIFIED_UPDATE', 'downloads');
    die();
}

if(!checkUpdateIdValidity($updateId)) {
    fancyError('INCORRECT_ID', 'downloads');
    die();
}

if(!uupApiPacksExist($updateId)) {
    fancyError('UNSUPPORTED_COMBINATION', 'downloads');
    die();
}

$resource = hash('sha1', strtolower("get-$updateId"));
if(checkIfUserIsRateLimited($resource)) {
    fancyError('RATE_LIMITED', 'downloads');
    die();
}

if(is_array($desiredEdition)) {
    $desiredEditionMixed = $desiredEdition;
    $desiredEdition = implode(';', $desiredEdition);
} else {
    $desiredEditionMixed = explode(';', $desiredEdition);

    if(count($desiredEditionMixed) == 1)
        $desiredEditionMixed = $desiredEdition;
}

if($autoDl && !$aria2) {
    $files = uupGetFiles($updateId, $usePack, $desiredEditionMixed, 2);
    $urls = setUrlsForPacks($updateId, $usePack, $desiredEdition);
    $archiveName = setArchiveNames($usePack, $desiredEditionMixed, $updateId, $files['build'], $files['arch']);

    if($autoDl <= 1) {
        createAria2Package($urls['url'], $archiveName, $urls['app']);
    } else createUupConvertPackage($urls['url'], $archiveName, $virtualEditions = ($autoDl - 2), $desiredVE, $moreOptions, $urls['app']);
} else {
    $files = uupGetFiles($updateId, $usePack, $desiredEditionMixed, 1);

    if($aria2 && !$sha1) {
        header('Content-Type: text/plain');

        if(isset($files['error'])) {
            if($aria2 == 2) {
                echo '#UUPDUMP_ERROR:';
            } else {
                http_response_code(400);
            }

            echo $files['error'];
            die();
        }

        if($autoDl) {
            header('Content-Disposition: attachment; filename="aria2_script.txt"');
        }

        $files = $files['files'];
        $filesKeys = array_keys($files);

        usort($filesKeys, 'sortBySize');
        foreach($filesKeys as $val) {
            echo $files[$val]['url']."\n";
            echo '  out='.$val."\n";
            echo '  checksum=sha-1='.$files[$val]['sha1']."\n\n";
        }
        /*
        //add debugging information to the file
        echo "# --- BEGIN UUP DUMP DEBUG INFO ---\n";
        foreach($filesKeys as $val) {
            echo "#debug=";
            echo base64_encode($val);
            echo ":";
            echo base64_encode($files[$val]['debug']);
            echo "\n";
        }
        echo "# --- END UUP DUMP DEBUG INFO ---\n";
        */
        die();
    }

    if(isset($files['error'])) {
        if($files['error'] == 'EMPTY_FILELIST') {
            $oldError = $files['error'];
            $files = uupGetFiles($updateId, $usePack, $desiredEditionMixed, 2);
            if(isset($files['error'])) {
                $files['error'] = 'NOT_FOUND';
            } else {
                $files['error'] = $oldError;
            }
        }

        fancyError($files['error'], 'downloads');
        die();
    }

    $updateName = $files['updateName'];
    $updateBuild = $files['build'];
    $updateArch = $files['arch'];
    $files = $files['files'];
    $filesKeys = array_keys($files);

    $request = explode('?', $_SERVER['REQUEST_URI'], 2);

    if($sha1) {
        $id = substr($updateId, 0, 8);
        header('Content-Type: text/plain');
        header('Content-Disposition: attachment; filename="checksums_'.$id.'.sha1"');
        foreach($filesKeys as $val) {
            echo $files[$val]['sha1'].' *'.$val."\n";
        }
        die();
    }

    if($renameScript) {
        if($renameScript == 2) {
            header('Content-Type: application/sh');
            header('Content-Disposition: attachment; filename="rename_script.sh"');

            echo "#!/bin/bash\n\n";
            foreach($filesKeys as $val) {
                echo 'mv "'.$files[$val]['uuid'].'" "'.$val."\" 2>/dev/null\n";
            }
            /*
            //add debugging information to the file
            echo "\n# --- BEGIN UUP DUMP DEBUG INFO ---\n";
            foreach($filesKeys as $val) {
                echo "#debug=";
                echo base64_encode($val);
                echo ":";
                echo base64_encode($files[$val]['debug']);
                echo "\n";
            }
            echo "# --- END UUP DUMP DEBUG INFO ---\n";
            */
            die();
        }

        header('Content-Type: application/cmd');
        header('Content-Disposition: attachment; filename="rename_script.cmd"');

        echo "@echo off\r\ncd /d \"%~dp0\"\r\n\r\n";
        foreach($filesKeys as $val) {
            echo "IF EXIST \"{$files[$val]['uuid']}\" ";
            echo 'RENAME "'.$files[$val]['uuid'].'" "'.$val."\"\r\n";
        }
        /*
        //add debugging information to the file
        echo "\n:: --- BEGIN UUP DUMP DEBUG INFO ---\n";
        foreach($filesKeys as $val) {
            echo "::debug=";
            echo base64_encode($val);
            echo ":";
            echo base64_encode($files[$val]['debug']);
            echo "\n";
        }
        echo ":: --- END UUP DUMP DEBUG INFO ---\n";
        */
        die();
    }

    if($simple) {
        header('Content-Type: text/plain');
        usort($filesKeys, 'sortBySize');
        foreach($filesKeys as $val) {
            echo $val."|".$files[$val]['sha1']."|".$files[$val]['url']."\n";
        }
        die();
    }

    $renameTextArea = "@echo off\n";
    $renameTextArea .= "cd /d \"%~dp0\"\n";
    foreach($filesKeys as $val) {
        $renameTextArea .= 'rename "'.$files[$val]['uuid'].'" "'.$val."\"\n";
    }

    $sha1TextArea = '';
    foreach($filesKeys as $val) {
        $sha1TextArea .= $files[$val]['sha1'].' *'.$val."\n";
    }

    $templateOk = true;

    styleUpper('downloads', sprintf($s['listOfFilesFor'], "$updateName $updateArch"));
    require 'templates/get.php';
    styleLower();
}