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

require_once dirname(__FILE__).'/shared/main.php';
require_once dirname(__FILE__).'/shared/requests.php';
require_once dirname(__FILE__).'/shared/cache.php';
require_once dirname(__FILE__).'/shared/fileinfo.php';
require_once dirname(__FILE__).'/listid.php';

function uupApiPrivateParseFlags($str) {
    $split = explode('+', $str);
    $flagsSafe = [];

    if(isset($split[1])) {
        $flags = array_unique(explode(',', strtolower($split[1])));
        $flagsSafe = array_intersect(getAllowedFlags(), $flags);
    }

    return [$split[0], $flagsSafe];
}

function uupApiPrivateGetLatestBuild() {
    $builds = array('22000.1');

    $ids = uupListIds();
    if(isset($ids['error'])) {
        $ids['builds'] = array();
    }

    if(empty($ids['builds'])) {
        $build = $builds[0];
    } else {
        $build = $ids['builds'][0]['build'];
    }

    return $build;
}

function uupApiPrivateGetAcceptableBranches() {
    return [
        'auto',
        'rs2_release',
        'rs3_release',
        'rs4_release',
        'rs5_release',
        'rs5_release_svc_hci',
        '19h1_release',
        'vb_release',
        'fe_release_10x',
        'fe_release',
        'co_release',
        'ni_release',
        'zn_release',
        'ge_release',
        'rs_prerelease',
    ];
}

function uupApiPrivateNormalizeFetchParams($params) {
    $np = array_replace([
        'arch' => 'amd64',
        'ring' => 'WIF',
        'flight' => 'Active',
        'branch' => 'ge_release',
        'build' => 'latest',
        'minor' => 0,
        'sku' => 48,
        'type' => 'Production',
        'flags' => [],
    ], $params);

    if(!is_array($np['flags'])) $np['flags'] = [];

    $np['arch'] = strtolower($np['arch']);
    $np['ring'] = strtoupper($np['ring']);
    $np['flight'] = ucwords(strtolower($np['flight']));
    $np['branch'] = strtolower($np['branch']);
    $np['build'] = strtolower($np['build']);
    $np['minor'] = intval($np['minor']);
    $np['sku'] = intval($np['sku']);
    $np['type'] = ucwords(strtolower($np['type']));
    $np['flags'] = array_map('strtolower', $np['flags']);

    return $np;
}

function uupFetchUpd(
    $arch = 'amd64',
    $ring = 'WIF',
    $flight = 'Active',
    $build = 'latest',
    $minor = '0',
    $sku = '48',
    $type = 'Production',
    $cacheRequests = 0
) {
    [$build, $flags] = uupApiPrivateParseFlags($build);

    $params = [
        'arch' => $arch,
        'ring' => $ring,
        'flight' => $flight,
        'build' => $build,
        'minor' => $minor,
        'sku' => $sku,
        'type' => $type,
        'flags' => $flags,
    ];

    return uupFetchUpd2($params, $cacheRequests);
}

function uupFetchUpd2($params, $cacheRequests = 0) {
    uupApiPrintBrand();

    $np = uupApiPrivateNormalizeFetchParams($params);

    $arch = $np['arch'];
    $ring = $np['ring'];
    $flight = 'Active';
    $branch = $np['branch'];
    $build = $np['build'];
    $minor = $np['minor'];
    $sku = $np['sku'];
    $type = $np['type'];
    $flags = $np['flags'];
    $flagsStr = implode(',', $flags);

    if(strtolower($build) == 'latest' || (!$build)) {
        $build = uupApiPrivateGetLatestBuild();
    }

    $build = explode('.', $build);
    if(isset($build[1])) $minor = intval($build[1]);
    $build = intval($build[0]);

    if(!($arch == 'amd64' || $arch == 'x86' || $arch == 'arm64' || $arch == 'arm' || $arch == 'all')) {
        return array('error' => 'UNKNOWN_ARCH');
    }

    if(!($ring == 'CANARY' || $ring == 'DEV' || $ring == 'BETA' || $ring == 'RELEASEPREVIEW' || $ring == 'WIF' || $ring == 'WIS' || $ring == 'RP' || $ring == 'RETAIL' || $ring == 'MSIT')) {
        return array('error' => 'UNKNOWN_RING');
    }

    if(!($flight == 'Mainline' || $flight == 'Active' || $flight == 'Skip')) {
        return array('error' => 'UNKNOWN_FLIGHT');
    }

    if($flight == 'Skip' && $ring != 'WIF') {
        return array('error' => 'UNKNOWN_COMBINATION');
    }

    if($build < 9841 || $build > PHP_INT_MAX-1) {
        return array('error' => 'ILLEGAL_BUILD');
    }

    if($minor < 0 || $minor > PHP_INT_MAX-1) {
        return array('error' => 'ILLEGAL_MINOR');
    }

    if(!in_array($branch, uupApiPrivateGetAcceptableBranches()))
        $branch = 'auto';

    if($ring == 'DEV') $ring = 'WIF';
    if($ring == 'BETA') $ring = 'WIS';
    if($ring == 'RELEASEPREVIEW') $ring = 'RP';

    if($flight == 'Active' && $ring == 'RP') $flight = 'Current';

    $build = '10.0.'.$build.'.'.$minor;

    $type = ucwords(strtolower($type));
    if(!($type == 'Production' || $type == 'Test')) {
        $type = 'Production';
    }

    $res = "api-fetch-$arch-$ring-$flight-$branch-$build-$flagsStr-$minor-$sku-$type";
    $cache = new UupDumpCache($res);
    $fromCache = $cache->get();
    if($fromCache !== false) return $fromCache;

    consoleLogger('Fetching information from the server...');
    $composerArgs = [$arch, $flight, $ring, $build, $sku, $type, $flags, $branch];
    $retry = 0;
    do {
        $retry++;
        $out = sendWuPostRequestHelper('client', 'composeFetchUpdRequest', $composerArgs);
    } while ($retry <= 3 && ($out === false || $out['error'] != 200));

    if($out === false || $out['error'] != 200) {
        consoleLogger('The request has failed');
        return array('error' => 'WU_REQUEST_FAILED');
    }

    $out = html_entity_decode($out['out']);
    consoleLogger('Information has been successfully fetched.');

    preg_match_all('/<UpdateInfo>.*?<\/UpdateInfo>/', $out, $updateInfos);
    $updateInfo = preg_grep('/<IsLeaf>true<\/IsLeaf>/', $updateInfos[0]);
    sort($updateInfo);

    if(empty($updateInfo)) {
        consoleLogger('An error has occurred');
        return array('error' => 'NO_UPDATE_FOUND');
    }

    $errorCount = 0;
    $updatesNum = count($updateInfo);
    $num = 0;
    $updateArray = array();

    foreach($updateInfo as $val) {
        $num++;
        consoleLogger("Checking build information for update {$num} of {$updatesNum}...");

        $info = parseFetchUpdate($val, $out, $arch, $ring, $flight, $build, $sku, $type, $flags, $branch);
        if(isset($info['error'])) {
            $errorCount++;
            continue;
        }

        $updateArray[] = $info;
    }

    if($errorCount == $updatesNum) {
        return array('error' => 'EMPTY_FILELIST');
    }

    $data = [
        'apiVersion' => uupApiVersion(),
        'updateId' => $updateArray[0]['updateId'],
        'updateTitle' => $updateArray[0]['updateTitle'],
        'foundBuild' => $updateArray[0]['foundBuild'],
        'arch' => $updateArray[0]['arch'],
        'fileWrite' => $updateArray[0]['fileWrite'],
        'updateArray' => $updateArray,
    ];

    if($cacheRequests == 1) {
        $cache->put($data, 120);
    }

    return $data;
}

function parseFetchUpdate($updateInfo, $out, $arch, $ring, $flight, $build, $sku, $type, $flags, $branch) {
    $updateNumId = preg_replace('/<UpdateInfo><ID>|<\/ID>.*/i', '', $updateInfo);

    $updates = preg_replace('/<Update>/', "\n<Update>", $out);
    preg_match_all('/<Update>.*<\/Update>/', $updates, $updates);

    $updateMeta = preg_grep('/<ID>'.$updateNumId.'<\/ID>/', $updates[0]);
    sort($updateMeta);

    $updateFiles = preg_grep('/<Files>.*<\/Files>/', $updateMeta);
    sort($updateFiles);

    if(!isset($updateFiles[0])) {
        consoleLogger('An error has occurred');
        return array('error' => 'EMPTY_FILELIST');
    }

    preg_match('/<Files>.*<\/Files>/', $updateFiles[0], $fileList);
    if(!isset($fileList[0]) || empty($fileList[0])) {
        consoleLogger('An error has occurred');
        return array('error' => 'EMPTY_FILELIST');
    }

    preg_match('/ProductReleaseInstalled Name\="(.*?)\..*\.(.*?)" Version\="10\.0\.(.*?)"/', $updateInfo, $info);
    $foundType = @strtolower($info[1]);
    $foundArch = @strtolower($info[2]);
    $foundBuild = @$info[3];

    if(!isset($foundArch) || empty($foundArch)) {
        preg_match('/ProductReleaseInstalled Name\="(.*?)\.(.*?)" Version\="10\.0\.(.*?)"/', $updateInfo, $info);
        $foundType = @strtolower($info[1]);
        $foundArch = @strtolower($info[2]);
        $foundBuild = @$info[3];
    }

    if(!isset($foundArch) || empty($foundArch)) {
        preg_match('/ProductReleaseInstalled Name\="(.*?)\.(.*?)" Version\="(.*?)"/', $updateInfo, $info);
        $foundType = @strtolower($info[1]);
        $foundArch = @strtolower($info[2]);
        $foundBuild = @$info[3];
    }

    $isNet = 0;
    if(strpos($foundArch, 'netfx') !== false) {
        $isNet = 1;
        preg_match('/ProductReleaseInstalled Name\=".*\.(.*?)\.(.*?)" Version\=".*\.\d{5}\.(.*?)"/', $updateInfo, $info);
        $foundType = @strtolower($info[1]);
        $foundArch = @strtolower($info[2]);
        $foundBuild = @$info[3];
    }

    $updateTitle = preg_grep('/<Title>.*<\/Title>/', $updateMeta);
    sort($updateTitle);

    preg_match('/<Title>.*?<\/Title>/i', $updateTitle[0], $updateTitle);
    $updateTitle = preg_replace('/<Title>|<\/Title>/i', '', $updateTitle);
    sort($updateTitle);

    if(isset($updateTitle[0])) {
        $updateTitle = $updateTitle[0];
    } else {
        $updateTitle = 'Windows 10 build '.$foundBuild;
    }

    if($foundType == 'hololens' || $foundType == 'wcosdevice0'|| $foundType == 'mobile'|| $foundType == 'iotcore')
        $updateTitle = preg_replace('/ for .{3,5}-based/i', ' for', $updateTitle);

    $isCumulativeUpdate = 0;
    if(preg_match('/\d{4}-\d{2}.+Update|Cumulative Update|Microsoft Edge|Windows Feature Experience Pack|Cumulative security Hotpatch/i', $updateTitle)) {
        $isCumulativeUpdate = 1;
        if($isNet) {
            $updateTitle = preg_replace("/3.5 and 4.8.1 |3.5 and 4.8 | for $foundArch| for x64| \(KB.*?\)/i", '', $updateTitle);
        } else {
            $updateTitle = preg_replace('/ for .{3,5}-based systems| \(KB.*?\)/i', '', $updateTitle);
        }
    }

    $updateTitle = preg_replace("/ ?\d{4}-\d{2}\D ?| ?$foundArch ?| ?x64 ?/i", '', $updateTitle);

    if($foundType == 'server') {
        $updateTitle = str_replace('Windows 10', 'Windows Server', $updateTitle);
        $updateTitle = str_replace('Windows 11', 'Windows Server', $updateTitle);
    }

    if($sku == 406)
        $updateTitle = str_replace('Microsoft server operating system', 'Azure Stack HCI', $updateTitle);

    if($foundType == 'sedimentpack')
        $updateTitle = $updateTitle.' - KB4023057';

    if($foundType == 'hololens' || $foundType == 'wcosdevice0'|| $foundType == 'mobile'|| $foundType == 'iotcore')
        $updateTitle = $updateTitle.' - '.$type;

    if(!preg_match("/$foundBuild/i", $updateTitle))
        $updateTitle = $updateTitle.' ('.$foundBuild.')';

    preg_match('/UpdateID=".*?"/', $updateInfo, $updateId);
    preg_match('/RevisionNumber=".*?"/', $updateInfo, $updateRev);

    $updateId = preg_replace('/UpdateID="|"$/', '', $updateId[0]);
    $updateRev = preg_replace('/RevisionNumber="|"$/', '', $updateRev[0]);

    consoleLogger('Successfully checked build information.');

    $updateString = $updateId;
    if($updateRev != 1) {
        $updateString = $updateId.'_rev.'.$updateRev;
    }

    $ids = uupListIds();
    if(!isset($ids['error'])) {
        $ids = $ids['builds'];
        $namesList = array();

        foreach($ids as $val) {
            $testName = $val['build'].' '.$val['title'].' '.$val['arch'];

            if($val['uuid'] != $updateString) {
                $namesList[$val['uuid']] = $testName;
            }
        }

        $num = 1;
        $buildName = $foundBuild.' '.$updateTitle.' '.$foundArch;
        while(in_array($buildName, $namesList, true)) {
            $num++;
            $buildName = "$foundBuild $updateTitle ($num) $foundArch";
        }

        if($num > 1) $updateTitle = "$updateTitle ($num)";
    }

    consoleLogger("--- UPDATE INFORMATION ---");
    consoleLogger("Title:        ".$updateTitle);
    consoleLogger("Architecture: ".$foundArch);
    consoleLogger("Build number: ".$foundBuild);
    consoleLogger("Update ID:    ".$updateString);
    consoleLogger("--- UPDATE INFORMATION ---");

    if((!$foundBuild) && (!$foundArch)) {
        consoleLogger('No architecture nor build number specified! What the hell is this?');
        return array('error' => 'BROKEN_UPDATE');
    }

    $isCorpnet = preg_match('/Corpnet Required/i', $updateTitle);
    if($isCorpnet && !uupApiConfigIsTrue('allow_corpnet')) {
        consoleLogger('Skipping corpnet only update...');
        return array('error' => 'CORPNET_ONLY_UPDATE');
    }

    $fileWrite = 'NO_SAVE';
    if(!uupApiFileInfoExists($updateId)) {
        consoleLogger('WARNING: This build is NOT in the database. It will be saved now.');
        consoleLogger('Parsing information to write...');

        $fileList = preg_replace('/<Files>|<\/Files>/', '', $fileList[0]);
        preg_match_all('/<File.*?<\/File>/', $fileList, $fileList);

        $shaArray = array();

        foreach($fileList[0] as $val) {
            preg_match('/Digest=".*?"/', $val, $sha1);
            $sha1 = preg_replace('/Digest="|"$/', '', $sha1[0]);
            $sha1 = bin2hex(base64_decode($sha1));

            preg_match('/FileName=".*?"/', $val, $name);
            $name = preg_replace('/FileName="|"$/', '', $name[0]);

            preg_match('/Size=".*?"/', $val, $size);
            $size = preg_replace('/Size="|"$/', '', $size[0]);

            preg_match('/(<AdditionalDigest.*Algorithm="SHA256".*>)(.*?)(<\/AdditionalDigest>)/', $val, $sha256);
            $sha256 = bin2hex(base64_decode($sha256[2]));

            $temp = array(
                'name' => $name,
                'size' => $size,
                'sha256' => $sha256,
            );

            $shaArray = array_merge($shaArray, array($sha1 => $temp));
        }

        unset($temp, $sha1, $name, $size);

        ksort($shaArray);

        $temp = array();
        $temp['title'] = $updateTitle;
        $temp['ring'] = $ring;
        $temp['flight'] = $flight;
        $temp['branch'] = $branch;
        $temp['arch'] = $foundArch;
        $temp['fetchArch'] = $arch == 'all' ? 'amd64' : $arch;
        $temp['build'] = $foundBuild;
        $temp['checkBuild'] = $build;
        $temp['sku'] = $sku;

        if($isCumulativeUpdate) {
            $temp['containsCU'] = 1;
        }

        if($foundType == 'hololens' || $foundType == 'wcosdevice0') {
            $temp['releasetype'] = $type;
        }

        if(!empty($flags)) {
            $temp['flags'] = $flags;
        }

        $temp['created'] = time();
        $temp['sha256ready'] = true;
        $temp['files'] = $shaArray;

        consoleLogger('Successfully parsed the information.');
        consoleLogger('Writing new build information to the disk...');

        $success = uupApiWriteFileinfo($updateString, $temp);
        if($success) {
            consoleLogger('Successfully written build information to the disk.');
            $fileWrite = 'INFO_WRITTEN';
            uupApiPrivateInvalidateFileinfoCache();
        } else {
            consoleLogger('An error has occured while writing the information to the disk.');
        }
    } else {
        consoleLogger('This build already exists in the database.');
    }

    return array(
        'updateId' => $updateString,
        'updateTitle' => $updateTitle,
        'foundBuild' => $foundBuild,
        'arch' => $foundArch,
        'fileWrite' => $fileWrite,
    );
}
