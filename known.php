<?php
/*
Copyright 2019 whatever127

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

$search = $_GET['q'] ?? null;
$page = $_GET['p'] ?? 1;
$sort = $_GET['sort'] ?? null;

require_once 'api/listid.php';
require_once 'shared/style.php';

$searchstr = $search;

if(isset($search) && strstr($search, 'category:')) {
    $Category = strtolower(substr($search,9));
    switch ($Category) {
        case 'canarychannel':
            $searchstr = 'regex:(2((2(?!000|6[2-4][1-9])\d{3})|(5(?!398)\d{3})|[6-9]\d{3}))\.[1-9]|([3-9]\d{4})\.[1-9]';
            break;
        case 'dev':
            $searchstr = 'regex:2((3[4-6]\d{2}\.100\d)|(6(?!0[0-4])\d{3}\.\d))';
            break;
        case 'w11-24h2-25h2-current-dev':
            $searchstr = 'regex:Insider.*26200\.(5[5-9]|[6-9])';
            break;
        case 'w11-25h2':
            $searchstr = 'regex:11.*25H2.*26200';
            break;
        case 'w11-24h2-current-beta':
            $searchstr = '26120';
            break;
        case 'w11-24h2':
            $searchstr = 'regex:11.*24H2.*26100';
            break;
        case 'w11-23h2-current-beta':
            $searchstr = '22635';
            break;
        case 'w11-23h2':
            $searchstr = 'regex:11.*23H2.*22631';
            break;
        case 'w11-22h2m4-23h2-beta':
            $searchstr = 'regex:Insider.*22631';
            break;
        case 'w11-22h2m3':
            $searchstr = 'regex:Insider.*2262[1-4]\.1[3-7]\d{2}';
            break;
        case 'w11-22h2m2':
            $searchstr = 'regex:Insider.*2262[1-3]\.(1)?(?(1)[0-3]|[7-9])\d{2}';
            break;
        case 'w11-22h2m1':
            $searchstr = 'regex:Insider.*2262[1-2]\.[1-6]\d{2}\s';
            break;
        case 'w11-22h2':
            $searchstr = 'regex:\(2262\d';
            break;
        case 'w11-21h2':
            $searchstr = '22000';
            break;
        case 'server-24h2':
            $searchstr = 'regex:Server.*26100';
            break;
        case 'server-23h2':
            $searchstr = '25398';
            break;
        case 'server-22h2':
            $searchstr = '20349';
            break;
        case 'server-21h2':
            $searchstr = '20348';
            break;
        case 'server-21h1':
            $searchstr = 'regex:Server.*19043';
            break;
        case 'server-20h2':
            $searchstr = 'regex:Server.*19042';
            break;
        case 'server-2004':
            $searchstr = 'regex:Server.*19041';
            break;
        case 'server-1909':
            $searchstr = 'regex:Server.*18363';
            break;
        case 'server-1903':
            $searchstr = 'regex:Server.*18362';
            break;
        case 'server-1809-hci':
            $searchstr = '17784';
            break;
        case 'server-1809':
            $searchstr = 'regex:Server.*17763';
            break;
        case 'server-1803':
            $searchstr = 'regex:Server.*17134';
            break;
        case 'server-1709':
            $searchstr = 'regex:Server.*16299\.\d{2}';
            break;
        case 'w10-22h2':
            $searchstr = '19045';
            break;
        case 'w10-21h2':
            $searchstr = '19044';
            break;
        case 'w10-21h1':
            $searchstr = 'regex:10.*19043';
            break;
        case 'w10-20h2':
            $searchstr = 'regex:10.*19042';
            break;
        case 'w10-2004':
            $searchstr = 'regex:10.*19041';
            break;
        case 'w10-1909':
            $searchstr = 'regex:10.*18363';
            break;
        case 'w10-1903':
            $searchstr = 'regex:10.*18362';
            break;
        case 'w10-1809':
            $searchstr = 'regex:10.*17763';
            break;
        case 'w10-1803':
            $searchstr = 'regex:10.*17134';
            break;
        case 'w10-1709':
            $searchstr = 'regex:10.*16299.\d{2}';
            break;
        case 'w10-1703':
            $searchstr = '15063';
            break;
        default:
            $searchstr = $Category;
            break;
    }
}

$ids = uupListIds($searchstr, $sort);
if(isset($ids['error'])) {
    fancyError($ids['error'], 'downloads');
    die();
}

if(!isset($ids['builds']) || empty($ids['builds'])) {
    fancyError('NO_BUILDS_IN_FILEINFO', 'downloads');
    die();
}

$ids = $ids['builds'];
$count = count($ids);

$perPage = 100;
$pages = ceil($count / $perPage);
$startItem = ($page - 1) * $perPage;
$PageBaseUrl = getUrlWithoutParam('p').'p=';

if($page < 1 || $page > $pages) {
    fancyError('INVALID_PAGE', 'downloads');
    die();
}

$idsPaginated = array_splice($ids, $startItem, $perPage);

if($search != null) {
    $pageTitle = "$search - {$s['browseKnown']}";
    $htmlQuery = htmlentities($search);
} else {
    $pageTitle = $s['browseKnown'];
    $htmlQuery = '';
}

$dateSortChecked = $sort ? 'checked' : '';

$templateOk = true;

styleUpper('downloads', $pageTitle);
require 'templates/known.php';
styleLower();
