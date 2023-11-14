<?php
require_once 'shared/style.php';

$templateOk = true;
$enableuf = uupApiConfigIsTrue('enable_unsupported_features');
styleUpper('downloads', $s['addNewBuild']);
require 'templates/newbuild.php';
styleLower();
