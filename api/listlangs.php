<?php
/*
Copyright 2023 UUP dump API authors

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

require_once dirname(__FILE__).'/shared/main.php';
require_once dirname(__FILE__).'/shared/packs.php';
require_once dirname(__FILE__).'/updateinfo.php';

function uupListLangsInternal($updateId) {
    $genPack = uupApiGetPacks($updateId);
    $fancyLangNames = uupGetInfoTexts()['fancyLangNames'];

    $langList = [];
    $langListFancy = [];

    foreach($genPack as $key => $val) {
        if(!count(array_diff(array_keys($val), ['LXP', 'FOD']))) {
            continue;
        }

        $fancyName = isset($fancyLangNames[$key]) ? $fancyLangNames[$key] : $key;

        $langList[] = $key;
        $langListFancy[$key] = $fancyName;
    }

    return [
        'langList' => $langList,
        'langFancyNames' => $langListFancy,
    ];
}

function uupListLangs($updateId = 0, $returnInfo = true) {
    if($returnInfo) {
        $info = uupUpdateInfo($updateId, ignoreFiles: true);
        $info = isset($info['info']) ? $info['info'] : false;
    }

    $langList = uupListLangsInternal($updateId);

    $response = [
        'apiVersion' => uupApiVersion(),
        'langList' => $langList['langList'],
        'langFancyNames' => $langList['langFancyNames'],
    ];

    if($returnInfo) $response['updateInfo'] = $info;

    return $response;
}
