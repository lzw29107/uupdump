<?php
/*
UUP dump translation file.

Translation information:
English language name: English (United States)
Localized language name: English (United States)
Language code: en-US
Authors: UUP dump authors and contributors
*/

//Language information
$s['code'] = 'en-US';
$s['timeZone'] = 'UTC'; //Supported timezones: https://www.php.net/manual/en/timezones.php

//shared strings
$s['uupdump'] = 'UUP dump';
$s['uupdumpSub'] = '%s - UUP dump'; //Browse known builds - UUP dump
$s['build'] = 'Build';
$s['arch'] = 'Architecture';
$s['ring'] = 'Channel';
$s['branch'] = 'Branch';
$s['updateid'] = 'Update ID';
$s['update'] = 'Update';
$s['lang'] = 'Language';
$s['edition'] = 'Edition';
$s['seachForBuilds'] = 'Search for builds...';
$s['no'] = 'No';
$s['yes'] = 'Yes';
$s['next'] = 'Next';
$s['ok'] = 'OK';
$s['cancel'] = 'Cancel';
$s['information'] = 'Information';
$s['totalDlSize'] = 'Total download size';
$s['file'] = 'File';
$s['expires'] = 'Expires';
$s['sha1'] = 'SHA-1';
$s['size'] = 'Size';
$s['additionalEdition'] = 'Additional edition';
$s['requiredEdition'] = 'Required edition';
$s['unknown'] = 'Unknown';

//global
$s['home'] = 'Home';
$s['downloads'] = 'Downloads';
$s['faq'] = 'FAQ';
$s['sourceCode'] = 'Source code';
$s['menu'] = 'Menu';
$s['notAffiliated'] = 'This project is not affiliated with Microsoft Corporation. Windows is a registered trademark of Microsoft Corporation.';
$s['copyrightNew'] = '© %d UUP dump authors and contributors.';
$s['selectLanguage'] = 'Please select your language';
$s['uupDumpDesc'] = 'UUP dump lets you download Unified Update Platform files, like Windows Insider updates, directly from Windows Update.';
$s['uupDumpDescSub'] = '%s on UUP dump. UUP dump lets you download Unified Update Platform files, like Windows Insider updates, directly from Windows Update.'; //Select language for Windows 11 Insider Preview 25188.1000 (rs_prerelease) amd64 on UUP dump. UUP dump lets you download Unified Update Platform files, like Windows Insider updates, directly from Windows Update.
$s['themeButton'] = 'Theme';
$s['selectTheme'] = 'Select theme';
$s['themeAuto'] = 'Automatic';
$s['themeLight'] = 'Light';
$s['themeDark'] = 'Dark';
$s['themeLegacy'] = 'Legacy';

//index.php
$s['slogan'] = 'Download UUP files from Windows Update servers with ease.';
$s['quickOptions'] = 'Quick options';
$s['tHeadReleaseType'] = 'Release type';
$s['tHeadDescription'] = 'Description';
$s['tHeadArchitectures'] = 'Architectures';
$s['latestPublicRelease'] = 'Latest Public Release build';
$s['latestPublicReleaseSub'] = 'Latest updated build for regular users.';
$s['latestDevRelease'] = 'Latest Dev Channel build';
$s['latestDevReleaseSub'] = 'Somewhat unreliable builds with new ideas and long lead features.<br>Ideal for enthusiasts.';
$s['latestBetaRelease'] = 'Latest Beta Channel build';
$s['latestBetaReleaseSub'] = 'Reliable builds with most upcoming features available.<br>Ideal for early adopters.';
$s['latestRPRelease'] = 'Latest Release Preview build';
$s['latestRPReleaseSub'] = 'Reliable builds for previewing the next release.<br>Ideal for trying out upcoming releases.';
$s['newlyAdded'] = 'Recently added builds';
$s['dateAdded'] = 'Date added';
$s['latestCanaryRelease'] = 'Latest Canary Channel build';
$s['latestCanaryReleaseSub'] = 'Somewhat unstable builds with latest platform changes and early features.<br>Ideal for highly technical users.';
$s['checkOutAddANewBuild'] = 'Haven\'t found a desired option? Check out the <i><a href="newbuild.php">Add a new build</a></i> page.';

//newbuild.php
$s['addNewBuild'] = 'Add a new build';
$s['newBuildNextText'] = 'Click the <i>Next</i> button to start searching with the specified options.';
$s['optionsNotice'] = 'Options notice';
$s['optionsNoticeText'] = 'Options found here configure how the underlying Windows Update client reports itself to the Microsoft servers. It is crucial to set these properly, otherwise you will receive an error.';
$s['autoSelect'] = 'Automatic selection';
$s['thisOnly'] = 'Return the specified build only';
$s['corpnet'] = 'Check for internal updates marked as [Internal Corpnet Required]';
$s['corpnetNotice'] = ' (Desktop SKU only) ';
$s['vbs'] = 'Enable VBS';

//known.php
$s['browseKnown'] = 'Browse known builds';
$s['chooseBuild'] = 'Choose build';
$s['weFoundBuilds'] = '<b>%d</b> builds were found for your query.'; //<b>692</b> builds were found for your query.
$s['sortByDate'] = 'Sort results by addition date';

//fetchupd.php
$s['foundUpdates'] = 'Found %d update(s)'; //Found 1 update(s)
$s['foundTheseUpdates'] = 'The following updates were found. Click the name of your desired update to continue.';
$s['buildNumber'] = 'Build number: %s'; //Build number: 18890.1000

//selectlang.php
$s['selectLangFor'] = 'Select language for %s'; //Select language for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['chooseLang'] = 'Choose language';
$s['chooseLangDesc'] = 'Choose your desired language';
$s['allLangs'] = 'All languages';
$s['allFiles'] = 'All files';
$s['selectLangInfoText1'] = 'Click the <i>Next</i> button to select the desired edition.';
$s['metadataNotGenerated'] = 'Metadata for this update is not generated.';
$s['generateMetadata'] = 'Generate metadata';
$s['browseFiles'] = 'Browse files';
$s['browseFilesDesc'] = 'Quickly browse files in selected build';
$s['searchFiles'] = 'Search files';
$s['toSearchForCUUseQuery'] = 'To search for Cumulative Updates use the <i>%s</i> search query.'; //To search for Cumulative Updates use the <i>Windows10 KB</i> search query.
$s['aboutBuild'] = 'Build information';
$s['downloadNotAvailable'] = 'No downloads available';
$s['processingUpdate'] = 'Processing build...';
$s['noLangsAvailablev2'] = 'This build can\'t be converted to an ISO image.<br>See the FAQ for details.';
$s['updateIsBlockedv2'] = 'This build has known issues preventing the creation of a working ISO.<br>See the FAQ for details.';
$s['updateNotProcessedv2'] = 'Download options for this build are not yet available as it is being processed.<br>Please try again in a minute.';

//selectedition.php
$s['selectEditionFor'] = 'Select edition for %s'; //Select edition for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States)
$s['chooseEdition'] = 'Choose edition';
$s['chooseEditionDesc'] = 'Choose your desired edition';
$s['allEditions'] = 'All editions';
$s['selectEditionInfoText'] = 'Click the <i>Next</i> button to open the summary page of your selection.';
$s['additionalEditionsInfo'] = 'If you need <b>additional editions</b> from the table on the right, select their <b>Required edition</b> above and proceed by clicking <i>Next</i>.<br>On the summary page select the <b>Create additional editions</b> option.';
$s['showHiddenEditions'] = 'Show hidden editions (not recommended)';

//download.php
$s['summary'] = 'Summary';
$s['summaryDesc'] = 'Review your selection and choose the download method';
$s['summaryFor'] = 'Summary for %s'; //Summary for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States), Windows 10 Pro
$s['summaryOfSelection'] = 'Summary for your selection';
$s['browseList'] = 'Browse the file list';
$s['browseListDesc'] = 'Opens the page with a list of files in the UUP set for manual download.';
$s['aria2Opt1'] = 'Download UUP set';
$s['aria2Opt1Desc'] = 'Easily download the selected UUP set using aria2.';
$s['aria2Opt2'] = 'Download and convert to ISO';
$s['aria2Opt2Desc'] = 'Easily download the selected UUP set using aria2 and convert it to ISO.';
$s['aria2Opt3'] = 'Download, add additional editions and convert to ISO';
$s['aria2Opt3Desc'] = 'Easily download the selected UUP set using aria2, convert, create additional editions and finally create an ISO image.';
$s['aria2Opt4'] = 'Create download package for these updates';
$s['jsRequiredToConf'] = 'JavaScript is required to configure and use this option.';
$s['selAdditionalEditions'] = 'Select additional editions';
$s['noAdditionalEditions'] = 'No additional editions are available for your selected editions.';
$s['learnMore'] = 'Learn more';
$s['learnMoreAdditionalEditions1'] = 'This option enables automatic creation of selected additional editions.';
$s['learnMoreAdditionalEditions2'] = 'The list of additional editions is determined by the selected base editions. Below you can check the list of base editions which are needed to create the desired additional editions:';
$s['learnMoreUpdates1'] = 'Updates will be integrated to the converted image only when the conversion script is run on the following systems:';
$s['learnMoreUpdates2'] = 'If you run the conversion script on any other system, the updates will not be integrated to the resulting image.';
$s['systemWithAdk'] = '%s with Windows 10 ADK installed'; //Windows 7 with Windows 10 ADK installed
$s['additionalUpdates'] = 'Additional updates';
$s['additionalUpdatesDesc'] = 'This UUP set contains additional updates which will be integrated during the conversion process, significantly increasing the creation time.';
$s['browseUpdatesList'] = 'Browse the list of updates';
$s['selectDownloadOptions'] = 'Select your download options';
$s['selectDownloadOptionsSub'] = 'Configure how you would like to download your selection';
$s['downloadMethod'] = 'Download method';
$s['conversionOptions'] = 'Conversion options';
$s['convOpt1'] = 'Use solid (ESD) compression';
$s['convOpt2'] = 'Include updates (Windows converter only)';
$s['convOpt3'] = 'Run component cleanup (Windows converter only)';
$s['convOpt4'] = 'Integrate .NET Framework 3.5 (Windows converter only)';
$s['convOpt5'] = 'Cleanup all superseded components in the component store (run component cleanup option needs to be checked)';
$s['conversionAdvOptions'] = 'Advanced options';
$s['startDownload'] = 'Create download package';
$s['legalCopeHarder'] = 'By clicking the <i>Create download package</i> button you agree with the following:';
$s['legalCope1'] = 'Installation images created using the scripts provided by UUP dump are meant only for <b>evaluation purposes</b>';
$s['legalCope2'] = 'The images and their deployments are <b>not supported</b> in any way by Microsoft Corporation';
$s['legalCope3v2'] = '<b>The authors are not liable for any damages</b> caused by a misuse of the website';
$s['win1122h2OrLaterv2'] = 'Windows is required to create the ISO image';
$s['requiresWindows102004v2'] = 'You\'ll need to use a modern version of Windows such as Windows 10, version 2004 or Windows 11 to create an ISO image of this build. Other platforms won\'t work.';

//get.php
$s['listOfFilesFor'] = 'List of files for %s'; //List of files for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['totalSizeOfFiles'] = 'Total file size: %s'; //Total size of files: 2.86 GiB
$s['fileRenamingScript'] = 'File renaming script';
$s['fileRenamingScriptDesc1'] = 'The script found below can be used to quickly rename downloaded files.';
$s['fileRenamingScriptDesc2'] = 'Simply copy the contents of the form below to a new file with <code>cmd</code> extension, put it in folder with downloaded files and run.';
$s['sha1File'] = 'SHA-1 checksums file';
$s['sha1FileDesc'] = 'You can use this file to quickly verify that files were downloaded correctly.';
$s['aria2NoticeTitle'] = 'Download using aria2 options notice';
$s['aria2NoticeText1'] = 'Download using aria2 options create an archive which needs to be downloaded. The downloaded archive contains all needed files to achieve the selected task.';
$s['aria2NoticeText2'] = 'To start the download process use a script for your platform:';
$s['aria2NoticeText3'] = 'Aria2 is an open source project. You can find it here: %s.'; //Aria2 is an open source project. You can find it here: https://aria2.github.io/.
$s['aria2NoticeText4'] = 'The UUP Conversion script (Windows version) has been created by %s.'; //UUP Conversion script (Windows version) has been created by abbodi1406.
$s['aria2NoticeText5'] = 'The UUP Conversion script (Linux version, macOS version) is open source. You can find it here: %s.'; //UUP Conversion script (Linux version, macOS version) is open source. You can find it here: https://github.com/uup-dump/converter.

//findfiles.php
$s['findFilesIn'] = 'Find files in %s'; //Find files in Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['fileRenamingScriptDescFindFiles'] = 'If you want to quickly rename files downloaded from this page, you can generate a renaming script, which will automatically do this for you.';
$s['fileRenamingScriptGenW'] = 'Generate renaming script (Windows)';
$s['fileRenamingScriptGenL'] = 'Generate renaming script (Linux, macOS)';
$s['searchForFiles'] = 'Search for files...';
$s['weFoundFiles'] = '<b>%d</b> files were found for your query.'; //<b>692</b> files were found for your query.
$s['sizeOfShownFiles'] = 'Size of shown files: %s'; //Size of shown files: 2.86 GiB

//style.php
$s['render'] = 'Page rendered in %s ms.'; //Page rendered in 1 ms.

//Error pages
$s['error'] = 'Error';
$s['arm64Warning2023'] = '<b>This is an <a href="https://support.microsoft.com/en-us/windows/477f51df-2e3b-f68f-31b0-06f5e4f8ebb5">ARM64</a> build.</b> UUP dump authors don\'t have a single device compatible with it and therefore <b>will provide absolutely no support</b>.';

//Error messages
$s['error_ERROR'] = 'Generic error.';
$s['error_UNSUPPORTED_API'] = 'Installed API version is not compatible with this version of UUP dump.';
$s['error_NO_FILEINFO_DIR'] = 'The fileinfo directory does not exist.';
$s['error_NO_BUILDS_IN_FILEINFO'] = 'The fileinfo database does not contain any build.';
$s['error_SEARCH_NO_RESULTS'] = 'No items found for the performed query.';
$s['error_UNKNOWN_ARCH'] = 'Unknown processor architecture.';
$s['error_UNKNOWN_RING'] = 'Unknown channel.';
$s['error_UNKNOWN_FLIGHT'] = 'Unknown flight.';
$s['error_UNKNOWN_COMBINATION'] = 'The flight and ring combination is not correct. Skip ahead is only supported for Insider Fast ring.';
$s['error_ILLEGAL_BUILD'] = 'Specified build number is less than %d or larger than %d.'; //Specified build number is less than 9841 or larger than 2147483646.
$s['error_ILLEGAL_MINOR'] = 'Specified build minor is incorrect.';
$s['error_NO_UPDATE_FOUND'] = 'The server returned no updates.';
$s['error_XML_PARSE_ERROR'] = 'Response XML parsing failed. There may be a problem with Microsoft servers. Try again later.';
$s['error_EMPTY_FILELIST'] = 'The server has returned an empty file list.';
$s['error_NO_FILES'] = 'There are no files available for your selection.';
$s['error_NOT_FOUND'] = 'Specified selection cannot be found.';
$s['error_MISSING_FILES'] = 'The selected UUP set has missing files.';
$s['error_NO_METADATA_ESD'] = 'There are no metadata ESD files available for your selection.';
$s['error_UNSUPPORTED_LANG'] = 'Specified language is not supported.';
$s['error_UNSPECIFIED_LANG'] = 'Language was not specified.';
$s['error_UNSUPPORTED_EDITION'] = 'Specified edition is not supported.';
$s['error_UNSUPPORTED_COMBINATION'] = 'The language and edition combination is not correct.';
$s['error_NOT_CUMULATIVE_UPDATE'] = 'Selected update does not contain a Cumulative Update.';
$s['error_UPDATE_INFORMATION_NOT_EXISTS'] = 'Information about the specified update doesn\'t exist in the database.';
$s['error_KEY_NOT_EXISTS'] = 'Specified key does not exist in update information.';
$s['error_UNSPECIFIED_UPDATE'] = 'Update ID was not specified.';
$s['error_INCORRECT_ID'] = 'Specified Update ID is incorrect. Please make sure that the specified Update ID is correct.';
$s['error_RATE_LIMITED'] = 'You are being rate limited. Please try again in a few seconds.';
$s['error_UNSPECIFIED_VE'] = 'You have not selected any additional editions. If do not wish to create additional editions, please use the (Download using aria2 and convert) option.';
$s['error_VE_UNAVAILABLE'] = 'Additional editions are not supported for this selection.';
$s['error_INVALID_PAGE'] = 'Specified page is invalid';
$s['error_WU_REQUEST_FAILED'] = 'A request to the Windows Update service has failed.';
$s['errorNoMessage'] = 'Error message unavailable.';

//Languages
$s['lang_neutral'] = 'Any Language';
$s['lang_ar-sa'] = 'Arabic (Saudi Arabia)';
$s['lang_bg-bg'] = 'Bulgarian';
$s['lang_cs-cz'] = 'Czech';
$s['lang_da-dk'] = 'Danish';
$s['lang_de-de'] = 'German';
$s['lang_el-gr'] = 'Greek';
$s['lang_en-gb'] = 'English (United Kingdom)';
$s['lang_en-us'] = 'English (United States)';
$s['lang_es-es'] = 'Spanish (Spain)';
$s['lang_es-mx'] = 'Spanish (Mexico)';
$s['lang_et-ee'] = 'Estonian';
$s['lang_fi-fi'] = 'Finnish';
$s['lang_fr-ca'] = 'French (Canada)';
$s['lang_fr-fr'] = 'French (France)';
$s['lang_he-il'] = 'Hebrew';
$s['lang_hr-hr'] = 'Croatian';
$s['lang_hu-hu'] = 'Hungarian';
$s['lang_it-it'] = 'Italian';
$s['lang_ja-jp'] = 'Japanese';
$s['lang_ko-kr'] = 'Korean';
$s['lang_lt-lt'] = 'Lithuanian';
$s['lang_lv-lv'] = 'Latvian';
$s['lang_nb-no'] = 'Norwegian (Bokmal)';
$s['lang_nl-nl'] = 'Dutch';
$s['lang_pl-pl'] = 'Polish';
$s['lang_pt-br'] = 'Portuguese (Brazil)';
$s['lang_pt-pt'] = 'Portuguese (Portugal)';
$s['lang_qps-ploc'] = 'Pseudo';
$s['lang_ro-ro'] = 'Romanian';
$s['lang_ru-ru'] = 'Russian';
$s['lang_sk-sk'] = 'Slovak';
$s['lang_sl-si'] = 'Slovenian';
$s['lang_sr-latn-rs'] = 'Serbian (Latin)';
$s['lang_sv-se'] = 'Swedish';
$s['lang_th-th'] = 'Thai';
$s['lang_tr-tr'] = 'Turkish';
$s['lang_uk-ua'] = 'Ukrainian';
$s['lang_zh-cn'] = 'Chinese (Simplified)';
$s['lang_zh-hk'] = 'Chinese (Hong Kong)';
$s['lang_zh-tw'] = 'Chinese (Traditional)';

//Channels
$s['channel_msit'] = 'MSIT';
$s['channel_canary'] = 'Canary Channel';
$s['channel_skipAhead'] = 'Skip Ahead';
$s['channel_dev'] = 'Dev Channel';
$s['channel_beta'] = 'Beta Channel';
$s['channel_releasepreview'] = 'Release Preview Channel';
$s['channel_retail'] = 'Retail';

//Editions
$s['edition_APP'] = 'Microsoft Store Inbox Apps';
$s['edition_APP_MOMENT'] = 'Microsoft Store Moment Apps';
$s['edition_FOD'] = 'Features on Demand (Capabilities)';
$s['edition_CLOUD'] = 'Windows S';
$s['edition_CLOUDN'] = 'Windows S N';
$s['edition_CLOUDE'] = 'Windows Lean';
$s['edition_CLOUDEDITION'] = 'Windows SE';
$s['edition_CLOUDEDITIONN'] = 'Windows SE N';
$s['edition_CORE'] = 'Windows Home';
$s['edition_CORECOUNTRYSPECIFIC'] = 'Windows Home China';
$s['edition_COREN'] = 'Windows Home N';
$s['edition_CORESINGLELANGUAGE'] = 'Windows Home Single Language';
$s['edition_EDUCATION'] = 'Windows Education';
$s['edition_EDUCATIONN'] = 'Windows Education N';
$s['edition_ENTERPRISE'] = 'Windows Enterprise';
$s['edition_ENTERPRISEEVAL'] = 'Windows Enterprise Evaluation';
$s['edition_ENTERPRISEN'] = 'Windows Enterprise N';
$s['edition_ENTERPRISES'] = 'Windows Enterprise LTSC';
$s['edition_ENTERPRISESEVAL'] = 'Windows Enterprise LTSC Evaluation';
$s['edition_ENTERPRISESN'] = 'Windows Enterprise N LTSC';
$s['edition_ENTERPRISESNEVAL'] = 'Windows Enterprise N LTSC Evaluation';
$s['edition_HOLOGRAPHIC'] = 'Windows Holographic';
$s['edition_IOTENTERPRISE'] = 'Windows IoT Enterprise';
$s['edition_IOTENTERPRISEK'] = 'Windows IoT Enterprise Subscription';
$s['edition_IOTENTERPRISES'] = 'Windows IoT Enterprise LTSC';
$s['edition_IOTENTERPRISESK'] = 'Windows IoT Enterprise LTSC Subscription';
$s['edition_LITE'] = 'Windows 10X';
$s['edition_PPIPRO'] = 'Windows Team';
$s['edition_PROFESSIONAL'] = 'Windows Pro';
$s['edition_PROFESSIONALN'] = 'Windows Pro N';
$s['edition_PROFESSIONALCOUNTRYSPECIFIC'] = 'Windows Pro China Only';
$s['edition_PROFESSIONALWORKSTATION'] = 'Windows Pro for Workstations';
$s['edition_PROFESSIONALWORKSTATIONN'] = 'Windows Pro N for Workstations';
$s['edition_PROFESSIONALEDUCATION'] = 'Windows Pro Education';
$s['edition_PROFESSIONALEDUCATIONN'] = 'Windows Pro Education N';
$s['edition_SERVERRDSH'] = 'Windows Enterprise multi-session / Virtual Desktops';
$s['edition_SERVERARM64'] = 'Windows Server ARM64';
$s['edition_SERVERAZURESTACKHCICOR'] = 'Azure Stack HCI';
$s['edition_SERVERDATACENTER'] = 'Windows Server Datacenter';
$s['edition_SERVERDATACENTERCORE'] = 'Windows Server Datacenter (Core)';
$s['edition_SERVERSTANDARD'] = 'Windows Server Standard';
$s['edition_SERVERSTANDARDCORE'] = 'Windows Server Standard (Core)';
$s['edition_SERVERTURBINE'] = 'Windows Server Datacenter: Azure Edition';
$s['edition_SERVERTURBINECOR'] = 'Windows Server Datacenter: Azure Edition (Core)';
$s['edition_SERVERTURBINECORE'] = 'Windows Server Datacenter: Azure Edition (Core)';
$s['edition_SERVERSTANDARDACOR'] = 'Windows Server Standard (Semi-Annual Channel)';
$s['edition_SERVERDATACENTERACOR'] = 'Windows Server Datacenter (Semi-Annual Channel)';
$s['edition_WNC'] = 'Windows WNC';
