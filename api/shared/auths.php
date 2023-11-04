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

function uupDevice() {
    $tValueHeader = '13003002c377040014d5bcac7a66de0d50beddf9bba16c87edb9e019898000';
    $tValueRandom = randStr(1054);
    $tValueEnd = 'b401';

    $tValue = base64_encode(hex2bin($tValueHeader.$tValueRandom.$tValueEnd));
    $data = 't='.$tValue.'&p=';
    return base64_encode(chunk_split($data, 1, "\0"));
}

function uupSaveCookieFromResponse($out) {
    $outDecoded = html_entity_decode($out);
    preg_match('/<NewCookie>.*?<\/NewCookie>|<GetCookieResult>.*?<\/GetCookieResult>/', $outDecoded, $cookieData);

    if(empty($cookieData))
        return false;

    preg_match('/<Expiration>.*<\/Expiration>/', $cookieData[0], $expirationDate);
    preg_match('/<EncryptedData>.*<\/EncryptedData>/', $cookieData[0], $encryptedData);

    $expirationDate = preg_replace('/<Expiration>|<\/Expiration>/', '', $expirationDate[0]);
    $encryptedData = preg_replace('/<EncryptedData>|<\/EncryptedData>/', '', $encryptedData[0]);

    $cookieData = array(
        'expirationDate' => $expirationDate,
        'encryptedData' => $encryptedData,
    );

    $cookieStorage = new UupDumpCache('WuRequestCookie', false);
    $cookieStorage->put($cookieData, false);

    return $cookieData;
}

function uupInvalidateCookie() {
    $cookieStorage = new UupDumpCache('WuRequestCookie', false);
    $cookieInfo = $cookieStorage->delete();
}

function uupEncryptedData() {
    $cookieStorage = new UupDumpCache('WuRequestCookie', false);
    $cookieInfo = $cookieStorage->get();

    if(empty($cookieInfo)) {
        $data = sendWuPostRequestHelper('client', 'composeGetCookieRequest', [], false);
        $cookieInfo = uupSaveCookieFromResponse($data['out']);
    }

    return $cookieInfo['encryptedData'];
}
