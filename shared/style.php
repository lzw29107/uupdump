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

require_once dirname(__FILE__).'/main.php';
require_once 'shared/utils.php';

function styleUpper($pageType = 'home', $subtitle = '') {
    global $websiteVersion, $s;

    if($subtitle) {
        $title = sprintf($s['uupdumpSub'], $subtitle);
        $description = htmlentities(sprintf($s['uupDumpDescSub'], $subtitle));
        $subTitleOnly = htmlentities($subtitle);
    } else {
        $title = $s['uupdump'];
        $description = htmlentities($s['uupDumpDesc']);
        $subTitleOnly = htmlentities($s['uupdump']);
    }

    $theme = 'auto';
    if(isset($_COOKIE['Website-Theme'])) {
        switch($_COOKIE['Website-Theme']) {
            case 'auto':
                $theme = 'auto';
                break;

            case 'light':
                $theme = 'light';
                break;

            case 'dark':
                $theme = 'dark';
                break;

            case 'legacy':
                $theme = 'legacy';
                break;

            default:
                $theme = 'auto';
                break;
        }
    }

    $baseUrl = getBaseUrl();
    $fullUrl = htmlentities(getBaseUrl().$_SERVER['REQUEST_URI']);

    if($theme == 'auto') {
        $ThemeMode = '<style>@import url(\'static/css/dark.css\') (prefers-color-scheme: dark);</style>';
    } elseif($theme == 'light') {
      $ThemeMode = '';
    } elseif($theme == 'dark') {
      $ThemeMode = '<link rel="stylesheet" href="static/css/dark.css">';
    } elseif($theme == 'legacy') {
      $ThemeMode = '<link rel="stylesheet" href="static/css/legacy.css">';
    }

    switch ($pageType) {
        case 'home':
            $navbarLink = '<a class="active item" href="./"><i class="fa-solid fa-house icon"></i>'.$s['home'].'</a>'.
                          '<a class="item" href="known.php"><i class="fa-solid fa-download icon"></i>'.$s['downloads'].'</a>'.
                          '<a class="item" target=_blank href="https://git.uupdump.net/uup-dump/misc/src/branch/master/FAQ.md"><i class="fa-solid fa-question icon"></i>'.$s['faq'].'</a>';
            $pageheader = '<div class="page-header extended">';
        break;

        case 'downloads':
            $navbarLink = '<a class="item" href="./"><i class="fa-solid fa-house icon"></i>'.$s['home'].'</a>'.
                          '<a class="active item" href="known.php"><i class="fa-solid fa-download icon"></i>'.$s['downloads'].'</a>'.
                          '<a class="item" target=_blank href="https://git.uupdump.net/uup-dump/misc/src/branch/master/FAQ.md"><i class="fa-solid fa-question icon"></i>'.$s['faq'].'</a>';
            $pageheader = '<div class="page-header regular">';
        break;

        default:
            $navbarLink = '<a class="active item" href="./">'.$s['home'].'</a>';
            $pageheader = '<div class="page-header regular">';
        break;
    }

    $langSelect = '<a class="item language-selector-btn"><i class="fa-solid fa-globe icon"></i>'.$s['currentLanguage'].'</a>';
    $ThemeSelect = '<a class="item theme-selector-btn"><i class="fa-solid fa-brush icon"></i>'.$s['themeButton'].'</a>';
    $sourceCodeLink = '<a class="item" href="https://git.uupdump.net/uup-dump"><i class="fa-solid fa-code icon"></i>'.$s['sourceCode'].'</a>';
    $discordInvite = '<a class="item" href="https://discord.gg/yVRbtb2"><i class="fa-brands fa-discord icon"></i>Discord</a>';

    $navbarRight = $langSelect.$ThemeSelect.$sourceCodeLink.$discordInvite;
    $navbarMobile = $ThemeSelect.$sourceCodeLink.$discordInvite.$langSelect;

    $iso639lang = preg_replace("/-.*/i", "", $s['code']);
    $title = htmlentities($title);

    echo <<<HTML
<!DOCTYPE html>
<html lang="$iso639lang">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="description" content="$description">

        <meta property="twitter:card" content="summary_large_image">
        <meta property="og:site_name" content="{$s['uupdump']}">
        <meta property="og:title" content="$subTitleOnly">
        <meta property="og:type" content="website">
        <meta property="og:description" content="$description">
        <meta property="og:image" content="$baseUrl/static/images/cover.png">
        <meta property="og:url" content="$fullUrl">

        <link rel="stylesheet" href="static/semantic-ui/semantic.min.css">
        <link rel="stylesheet" href="static/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="static/css/flags.css">
        <link rel="stylesheet" href="static/css/light.css">
        $ThemeMode
        <script src="static/js/jquery.min.js"></script>
        <script src="static/semantic-ui/semantic.min.js"></script>
        <script src="static/js/common.js" defer></script>

        <title>$title</title>
    </head>
    <body>
        <div class="ui sidebar inverted vertical menu">
            <div class="ui container">
                $navbarLink $navbarMobile
            </div>
        </div>
        <div class="pusher">
            $pageheader
                <div class="ui title container">
                    <h1><img src="static/images/logo.svg" class="logo" alt="{$s['uupdump']}">{$s['uupdump']}</h1>
                </div>

                <div class="ui one column grid page-header-menu">
                    <div class="ui attached secondary menu computer only column">
                        <div class="ui container">
                            $navbarLink
                            <div class="right menu">
                                $navbarRight
                            </div>
                        </div>
                    </div>
      
                    <div class="ui attached secondary menu mobile tablet only column">
                        <div class="ui container">
                            <a class="item sidebar-open-btn">
                                <i class="fa-solid fa-bars icon"></i>{$s['menu']}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ui container">
                
HTML;
}

function styleLower() {
    global $websiteVersion, $s, $languageCoreSelectorModal;
    $api = uupApiVersion();

    $config = uupDumpApiGetConfig();
    $renderText = '';
    if(isset($config['show_render_time']) && $config['show_render_time']) {
        $render = floor((microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"])*1000);
        $renderText = sprintf($s['render'], $render);
    }

    $copyright = sprintf(
        $s['copyrightNew'],
        date('Y')
    );

    $ThemeCoreSelectorModal = <<<EOD
    <div class="ui normal mini modal select-theme">
        <div class="header">
            {$s['selectTheme']}
        </div>
        <div class="content">
            <p><a class="ui primary fluid labeled icon button change-theme" theme-select="auto" href>
                <i class="fa-solid fa-wand-magic-sparkles icon"></i>
                {$s['themeAuto']}
            </a></p>

            <div class="ui divider"></div>

            <p><a class="ui fluid labeled icon button change-theme" theme-select="light" href>
                <i class="fa-solid fa-sun icon"></i>
                {$s['themeLight']}
            </a></p>
            <p><a class="ui fluid labeled icon button change-theme" theme-select="dark" href>
                <i class="fa-solid fa-moon icon"></i>
                {$s['themeDark']}
            </a></p>
            <p><a class="ui fluid labeled icon button change-theme" theme-select="legacy" href>
                <i class="fa-solid fa-rotate-left icon"></i>
                {$s['themeLegacy']}
            </a></p>
        </div>
        <div class="actions">
            <div class="ui ok button">
                <i class="fa-solid fa-xmark icon"></i>
                {$s['cancel']}
            </div>
        </div>
    </div>

    EOD;
  
    echo <<<HTML
                <div class="ui center aligned container footer">
                    <div class="ui divider"></div>
                    <p><i>$renderText
                        <b>{$s['uupdump']}</b> $websiteVersion /
                        <b>API</b> $api (<a href="https://git.uupdump.net/uup-dump/api/commit/37cefa11c65dea250e1dcc03facc28b9834d1fdc">37cefa1</a>) /
                        <b>contrib</b> <a href="https://git.uupdump.net/uup-dump/contrib/commit/060027d8005bb0a5201e063eeefb2421c7570a8b">060027d</a> /
                        <b>misc</b> <a href="https://git.uupdump.net/uup-dump/misc/commit/15733464a44f03d0a7fc281c7dcdcead88ee82e2">1573346</a><br/>
                        $copyright
                        <span class="info">{$s['notAffiliated']}</span>
                    </i></p>
                </div>
            </div>
        </div>
        $languageCoreSelectorModal
        $ThemeCoreSelectorModal
    </body>
</html>
HTML;
}

function fancyError($errorCode = 'ERROR', $pageType = 'home', $moreText = 0) {
    global $s;

    $errorNumber = 500;
    switch ($errorCode) {
        case 'ERROR':
            $errorFancy = $s['error_ERROR'];
            break;
        case 'UNSUPPORTED_API':
            $errorFancy = $s['error_UNSUPPORTED_API'];
            break;
        case 'NO_FILEINFO_DIR':
            $errorFancy = $s['error_NO_FILEINFO_DIR'];
            break;
        case 'NO_BUILDS_IN_FILEINFO':
            $errorFancy = $s['error_NO_BUILDS_IN_FILEINFO'];
            break;
        case 'SEARCH_NO_RESULTS':
            $errorNumber = 400;
            $errorFancy = $s['error_SEARCH_NO_RESULTS'];
            break;
        case 'UNKNOWN_ARCH':
            $errorNumber = 400;
            $errorFancy = $s['error_UNKNOWN_ARCH'];
            break;
        case 'UNKNOWN_RING':
            $errorNumber = 400;
            $errorFancy = $s['error_UNKNOWN_RING'];
            break;
        case 'UNKNOWN_FLIGHT':
            $errorNumber = 400;
            $errorFancy = $s['error_UNKNOWN_FLIGHT'];
            break;
        case 'UNKNOWN_COMBINATION':
            $errorNumber = 400;
            $errorFancy = $s['error_UNKNOWN_COMBINATION'];
            break;
        case 'ILLEGAL_BUILD':
            $errorNumber = 400;
            $errorFancy = sprintf($s['error_ILLEGAL_BUILD'], 9841, PHP_INT_MAX-1);
            break;
        case 'ILLEGAL_MINOR':
            $errorNumber = 400;
            $errorFancy = $s['error_ILLEGAL_MINOR'];
            break;
        case 'NO_UPDATE_FOUND':
            $errorFancy = $s['error_NO_UPDATE_FOUND'];
            break;
        case 'XML_PARSE_ERROR':
            $errorFancy = $s['error_XML_PARSE_ERROR'];
            break;
        case 'EMPTY_FILELIST':
            $errorFancy = $s['error_EMPTY_FILELIST'];
            break;
        case 'NO_FILES':
            $errorNumber = 404;
            $errorFancy = $s['error_NO_FILES'];
            break;
        case 'NOT_FOUND':
            $errorNumber = 404;
            $errorFancy = $s['error_NOT_FOUND'];
            break;
        case 'MISSING_FILES':
            $errorFancy = $s['error_MISSING_FILES'];
            break;
        case 'NO_METADATA_ESD':
            $errorFancy = $s['error_NO_METADATA_ESD'];
            break;
        case 'UNSUPPORTED_LANG':
            $errorNumber = 400;
            $errorFancy = $s['error_UNSUPPORTED_LANG'];
            break;
        case 'UNSPECIFIED_LANG':
            $errorNumber = 400;
            $errorFancy = $s['error_UNSPECIFIED_LANG'];
            break;
        case 'UNSUPPORTED_EDITION':
            $errorNumber = 400;
            $errorFancy = $s['error_UNSUPPORTED_EDITION'];
            break;
        case 'UNSUPPORTED_COMBINATION':
            $errorNumber = 400;
            $errorFancy = $s['error_UNSUPPORTED_COMBINATION'];
            break;
        case 'NOT_CUMULATIVE_UPDATE':
            $errorNumber = 400;
            $errorFancy = $s['error_NOT_CUMULATIVE_UPDATE'];
            break;
        case 'UPDATE_INFORMATION_NOT_EXISTS':
            $errorFancy = $s['error_UPDATE_INFORMATION_NOT_EXISTS'];
            break;
        case 'KEY_NOT_EXISTS':
            $errorNumber = 400;
            $errorFancy = $s['error_KEY_NOT_EXISTS'];
            break;
        case 'UNSPECIFIED_UPDATE':
            $errorNumber = 400;
            $errorFancy = $s['error_UNSPECIFIED_UPDATE'];
            break;
        case 'INCORRECT_ID':
            $errorNumber = 400;
            $errorFancy = $s['error_INCORRECT_ID'];
            break;
        case 'RATE_LIMITED':
            $errorNumber = 429;
            $errorFancy = $s['error_RATE_LIMITED'];
            break;
        case 'UNSPECIFIED_VE':
            $errorNumber = 400;
            $errorFancy = $s['error_UNSPECIFIED_VE'];
            break;
        case 'VE_UNAVAILABLE':
            $errorNumber = 400;
            $errorFancy = $s['error_VE_UNAVAILABLE'];
            break;
        case 'INVALID_PAGE':
            $errorNumber = 400;
            $errorFancy = $s['error_INVALID_PAGE'];
            break;
        case 'WU_REQUEST_FAILED':
            $errorFancy = $s['error_WU_REQUEST_FAILED'];
            break;
        default:
            $errorFancy = "<i>{$s['errorNoMessage']}</i><br><br>$errorCode";
            break;
    }

    $safeError = htmlentities($errorFancy);

    if($moreText) {
        $safeError = $safeError.'<br>'.htmlentities($moreText);
    }

    http_response_code($errorNumber);
    header('Cache-Control: no-cache');

    if($errorNumber == 429) {
        header('Retry-After: 10');
    }

    styleUpper($pageType, $s['error']);

    echo <<<ERROR
<h1 class="ui red center aligned icon header error-page-message">
    <i class="fa-solid fa-circle-xmark icon"></i>
    <div class="content">
        {$s['error']}
        <div class="sub header">
            <p>$safeError</p>
        </div>
    </div>
</h1>
ERROR;

    styleLower();
}

function styleCluelessUserArm64Warn() {
    global $s;

    echo <<<INFO
<div class="ui warning message">
    <i class="fa-solid fa-mobile-screen icon"></i>
    {$s['arm64Warning2023']}
</div>

INFO;
}
