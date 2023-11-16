<?php
require_once 'shared/style.php';

$retailLatestBuild = "22631.1";
$rpLatestBuild = "22631.1";
$betaLatestBuild = "22635.1";
$devLatestBuild = "22631.1";

$templateOk = true;
$enableuf = uupApiConfigIsTrue('enable_unsupported_features');
styleUpper('downloads', $s['addNewBuild']);
require 'templates/newbuild.php';
styleLower();
