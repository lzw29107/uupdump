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

function uupApiPrintBrand() {
    global $uupApiBrandPrinted;

    if(!isset($uupApiBrandPrinted)) {
        consoleLogger('UUP dump API v'.uupApiVersion());
        $uupApiBrandPrinted = 1;
    }
}

function randStr($length = 4) {
    $characters = '0123456789abcdef';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function genUUID() {
    return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        rand(0, 0xffff),
        rand(0, 0xffff),

        rand(0, 0xffff),

        rand(0, 0x0fff) | 0x4000,

        rand(0, 0x3fff) | 0x8000,

        rand(0, 0xffff),
        rand(0, 0xffff),
        rand(0, 0xffff)
    );
}

function sendWuPostRequestInternal($url, $postData, $saveCookie = true) {
    $req = curl_init($url);

    $config = uupDumpApiGetConfig();
    if(isset($config['proxy'])) {
        curl_setopt($req, CURLOPT_PROXY, $config['proxy']);
    }

    curl_setopt($req, CURLOPT_HEADER, 0);
    curl_setopt($req, CURLOPT_POST, 1);
    curl_setopt($req, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($req, CURLOPT_ENCODING, '');
    curl_setopt($req, CURLOPT_POSTFIELDS, $postData);
  
    if(isset($config['fetch_timeout']) && intval($config['fetch_timeout']) > 0) {
      set_time_limit($config['fetch_timeout']);
      curl_setopt($req, CURLOPT_TIMEOUT, $config['fetch_timeout']);
      curl_setopt($req, CURLOPT_CONNECTTIMEOUT, $config['fetch_timeout'] / 3);
    } else if(uupApiConfigIsTrue('production_mode')) {
      curl_setopt($req, CURLOPT_CONNECTTIMEOUT, 5);
      curl_setopt($req, CURLOPT_TIMEOUT, 15);
    }
    curl_setopt($req, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($req, CURLOPT_HTTPHEADER, array(
        'User-Agent: Windows-Update-Agent/10.0.10011.16384 Client-Protocol/2.50',
        'Content-Type: application/soap+xml; charset=utf-8',
    ));

    $out = curl_exec($req);
    $error = curl_getinfo($req, CURLINFO_RESPONSE_CODE);

    curl_close($req);

    if($saveCookie === true)
        uupSaveCookieFromResponse($out);

    return [
        'error' => $error,
        'out' => $out
    ];
}

function sendWuPostRequest($url, $postData) {
    return sendWuPostRequestInternal($url, $postData)['out'];
}

function sendWuPostRequestHelper(
    $endpoint,
    $postComposer,
    $postComposerArgs,
    $saveCookie = true
) {
    $endpoints = [
        'client' => 'https://fe3.delivery.mp.microsoft.com/ClientWebService/client.asmx',
        'clientSecured' => 'https://fe3cr.delivery.mp.microsoft.com/ClientWebService/client.asmx/secured'
    ];

    $postData = call_user_func_array($postComposer, $postComposerArgs);
    if($postData === false)
        return false;

    if(!uupApiConfigIsTrue('production_mode')) file_put_contents('lastpostdata.xml', $postData);

    $data = sendWuPostRequestInternal($endpoints[$endpoint], $postData, $saveCookie);

    if($data['error'] == 500 && preg_match('/<ErrorCode>(ConfigChanged|CookieExpired|InvalidCookie)<\/ErrorCode>/', $data['out'])) {
        uupInvalidateCookie();
        $postData = call_user_func_array($postComposer, $postComposerArgs);
        return sendWuPostRequestInternal($endpoints[$endpoint], $postData, $saveCookie);
    }

    if(!uupApiConfigIsTrue('production_mode')) file_put_contents('lastfetched.xml', $data['out']);

    return $data;
}

function consoleLogger($message, $showTime = 1) {
    if(php_sapi_name() != 'cli') return
    $currTime = '';
    if($showTime) {
        $currTime = '['.date('Y-m-d H:i:s T', time()).'] ';
    }

    $msg = $currTime.$message;
    fwrite(STDERR, $msg."\n");
}

function uupDumpApiGetConfig() {
    if(!file_exists('config.ini')) {
        return null;
    }

    return parse_ini_file('config.ini');
}

function uupApiCheckUpdateId($updateId) {
    return preg_match(
        '/^[\da-fA-F]{8}-([\da-fA-F]{4}-){3}[\da-fA-F]{12}(_rev\.\d+)?$/',
        $updateId
    );
}

function uupApiIsServer($skuId) {
    $serverSkus = [
        7, 8, 12, 13, 79, 80, 120, 145, 146,
        147, 148, 159, 160, 406, 407, 408
    ];

    return in_array($skuId, $serverSkus);
}

function uupApiBuildMajor($build) {
    if($build == null)
        return null;

    if(!str_contains($build, '.'))
        return intval($build);

    return intval(explode('.', $build)[0]);
}

function uupApiFixDownloadLink($link) {
    return $link;
}

function uupApiReadJson($path) {
    $data = @file_get_contents($path);

    if(empty($data))
        return false;

    return json_decode($data, true);
}

function uupApiWriteJson($path, $data) {
    return file_put_contents($path, json_encode($data)."\n");
}

function uupApiPacksExist($updateId) {
    return file_exists('packs/'.$updateId.'.json.gz');
}

function uupApiConfigIsTrue($config) {
    $data = uupDumpApiGetConfig();

    if(!isset($data[$config]))
        return false;

    return $data[$config] == true;
}

function getAllowedFlags() {
    $flags = ['thisonly', 'vbs'];

    if(uupApiConfigIsTrue('allow_corpnet'))
        $flags[] = 'corpnet';

    return $flags;
}

function uupAreAppxPresent($genPack) {
    return isset($genPack['neutral']['APP']);
}
