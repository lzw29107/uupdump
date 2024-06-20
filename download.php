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

$updateId = $_GET['id'] ?? null;
$usePack = $_GET['pack'] ?? 0;
$desiredEdition = $_GET['edition'] ?? 0;

require_once 'api/get.php';
require_once 'api/listlangs.php';
require_once 'api/listeditions.php';
require_once 'shared/style.php';
require_once 'shared/utils.php';

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

if(!$usePack) {
    $url = "./findfiles.php?id=$updateId";

    header("Location: $url");
    echo "<h1>Moved to <a href=\"$url\">here</a>.";
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

$desiredEdition = strtolower($desiredEdition);
$url = "./get.php?id=$updateId&pack=$usePack&edition=$desiredEdition";
$urlUpd = "./get.php?id=$updateId&pack=0&edition=updateOnly";

if($desiredEdition == 'wubfile' || $desiredEdition == 'updateonly') {
    header("Location: $url");
    echo "<h1>Moved to <a href=\"$url\">here</a>.";
    die();
}

$files = uupGetFiles($updateId, $usePack, $desiredEditionMixed, 2);
if(isset($files['error'])) {
    fancyError($files['error'], 'downloads');
    die();
}

$hasUpdates = $files['hasUpdates'];

$uSku = $files['sku'];
$build = explode('.', $files['build']);
$build = @$build[0];

$EditionIsApp = isAppEdition($desiredEditionMixed);

$disableVE = 0;
if($EditionIsApp || !areVirtualEditonsSupported($build, $uSku)) {
    $disableVE = 1;
}

$updateTitle = "{$files['updateName']} {$files['arch']}";
$updateArch = $files['arch'];
$files = $files['files'];

$totalSize = 0;
foreach($files as $file) {
    $totalSize += $file['size'];
}

if($usePack) {
    if(isset($s['lang_'.strtolower($usePack)])) {
        $selectedLangName = $s['lang_'.strtolower($usePack)];
    } else {
        $langs = uupListLangs($updateId);
        $langs = $langs['langFancyNames'];

        $selectedLangName = $langs[strtolower($usePack)];
    }
} else {
    $selectedLangName = $s['allLanguages'];
}

if($usePack && $desiredEdition) {
    $editions = uupListEditions($usePack, $updateId);
    $desiredEdition = (strtoupper($desiredEdition));

    if(isset($s["edition_$desiredEdition"])) {
        $selectedEditionName = $s["edition_$desiredEdition"];
    } else {
        $fancyNames = [];
        foreach($desiredEditionMixed as $edition) {
            $edition = strtoupper($edition);
            $fancyNames[] = $s["edition_$edition"];
        }
        asort($fancyNames);
        $selectedEditionName = implode(', ', $fancyNames);
    }
} else {
    $selectedEditionName = $s['allEditions'];
}
$neutraleditions = uupListEditions('neutral', $updateId)['editionFancyNames'];
if(!$EditionIsApp) {
  if(isset($neutraleditions['APP'])) {
    $filesApp = uupGetFiles($updateId, 'neutral', 'APP', 2);
    $filesApp = $filesApp['files'];
    
foreach($filesApp as $file) {
        $totalSize += $file['size'];
    }
  }
}

$totalSize = readableSize($totalSize, 2);

$filesKeys = array_keys($files);
$virtualEditions = array();

if(preg_grep('/^.*Core_.*\.esd/i', $filesKeys)) {
    $virtualEditions['CoreSingleLanguage'] = $s['edition_CORESINGLELANGUAGE'];
}

if(preg_grep('/^.*Professional_.*\.esd/i', $filesKeys)) {
    $virtualEditions['ProfessionalWorkstation'] = $s['edition_PROFESSIONALWORKSTATION'];
    $virtualEditions['ProfessionalEducation'] = $s['edition_PROFESSIONALEDUCATION'];
    $virtualEditions['Education'] = $s['edition_EDUCATION'];
    $virtualEditions['Enterprise'] = $s['edition_ENTERPRISE'];
    $virtualEditions['ServerRdsh'] = $s['edition_SERVERRDSH'];

    if($build >= 18277) {
        $virtualEditions['IoTEnterprise'] = $s['edition_IOTENTERPRISE'];
    }

    if($build >= 25967) {
        $virtualEditions['IoTEnterpriseK'] = $s['edition_IOTENTERPRISEK'];
    }
}

if(preg_grep('/^.*ProfessionalN_.*\.esd/i', $filesKeys)) {
    $virtualEditions['ProfessionalWorkstationN'] = $s['edition_PROFESSIONALWORKSTAIONN'];
    $virtualEditions['ProfessionalEducationN'] = $s['edition_PROFESSIONALEDUCATIONN'];
    $virtualEditions['EducationN'] = $s['edition_EDUCATIONN'];
    $virtualEditions['EnterpriseN'] = $s['edition_ENTERPRISEN'];
}

$dlOnly = ($EditionIsApp || $uSku == 189 || $uSku == 135);

$templateOk = true;

styleUpper('downloads', sprintf($s['summaryFor'], "$updateTitle, $selectedLangName, $selectedEditionName"));
require 'templates/download.php';
styleLower();
