<?php
/*
Copyright 2020 whatever127

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
require_once 'api/listid.php';
require_once 'shared/style.php';

$retailLatestBuild = "22631.1";
$rpLatestBuild = "22631.1";
$betaLatestBuild = "22635.1";
$devLatestBuild = "22631.1";

$buildsAvailable = 1;
$ids = uupListIds(null, 1);

if(isset($ids['error']) || !isset($ids['builds']) || empty($ids['builds'])) {
    $idsError = true;
} else {
    $ids = $ids['builds'];
}

$templateOk = true;

styleUpper('home');
require 'templates/home.php';
styleLower();
