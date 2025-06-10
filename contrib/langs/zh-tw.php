<?php
/*
UUP dump translation file.

Translation information:
English language name: Chinese (Traditional)
Localized language name: 中文（繁體）
Language code: zh-TW
Authors: pan93412（原始作者，Original Author）、JRJSheep（Remaster Author）
*/

//Language information
$s['code'] = 'zh-TW';
$s['timeZone'] = 'Asia/Taipei'; //Supported timezones: https://www.php.net/manual/en/timezones.php

//shared strings
$s['uupdump'] = 'UUP dump';
$s['uupdumpSub'] = '%s - UUP dump'; //Browse known builds - UUP dump
$s['build'] = '組建';
$s['arch'] = '架構';
$s['ring'] = '通道';
$s['branch'] = '分支';
$s['updateid'] = '更新 ID';
$s['update'] = '更新';
$s['lang'] = '語言';
$s['edition'] = '版本';
$s['seachForBuilds'] = '搜尋組建...';
$s['no'] = '否';
$s['yes'] = '是';
$s['next'] = '下一步';
$s['ok'] = '確定';
$s['cancel'] = '取消';
$s['information'] = '資訊';
$s['totalDlSize'] = '總計下載大小';
$s['file'] = '檔案';
$s['expires'] = '過期時間';
$s['sha1'] = 'SHA-1';
$s['size'] = '大小';
$s['additionalEdition'] = '額外版本';
$s['requiredEdition'] = '必須版本';
$s['unknown'] = '未知';

//global
$s['home'] = '首頁';
$s['downloads'] = '下載';
$s['faq'] = 'FAQ';
$s['sourceCode'] = '原始程式碼';
$s['menu'] = '選單';
$s['notAffiliated'] = '這個專案與 Microsoft Corporation 無關。Windows 是 Microsoft Corporation 的註冊商標。';
$s['copyrightNew'] = '© %d UUP dump 著作者和貢獻者們。';
$s['selectLanguage'] = '請選擇語言';
$s['uupDumpDesc'] = 'UUP dump 允許您直接從 Windows Update 下載統一更新平台檔，例如 Windows Insider 更新。';
$s['uupDumpDescSub'] = 'UUP dump 上的 %s。UUP dump 允許您直接從 Windows Update 下載統一更新平台檔，例如 Windows Insider 更新。'; //Select language for Windows 11 Insider Preview 25188.1000 (rs_prerelease) amd64 on UUP dump. UUP dump lets you download Unified Update Platform files, like Windows Insider updates, directly from Windows Update.
$s['themeButton'] = '主題';
$s['selectTheme'] = '選擇主題';
$s['themeAuto'] = '自動';
$s['themeLight'] = '亮色模式';
$s['themeDark'] = '暗色模式';
$s['themeLegacy'] = '傳統模式';

//index.php
$s['slogan'] = '輕鬆地從 Windows Update 伺服器下載 UUP 檔案。';
$s['quickOptions'] = '快速選項';
$s['tHeadReleaseType'] = '版本類型';
$s['tHeadDescription'] = '說明';
$s['tHeadArchitectures'] = '架構';
$s['latestPublicRelease'] = '最新公開發行組建版本';
$s['latestPublicReleaseSub'] = '供一般使用者下載的最新更新組建版本。';
$s['latestDevRelease'] = '最新開發人員通道組建版本';
$s['latestDevReleaseSub'] = '有點不穩定的組建版本，包含新的想法和長期領先功能。適合非常熟悉電腦操作的使用者的理想選擇。';
$s['latestBetaRelease'] = '最新 Beta 版通道組建版本';
$s['latestBetaReleaseSub'] = '包含了大多數即將推出的功能可靠組建。適合想提早熟悉新功能的使用者的理想選擇。';
$s['latestRPRelease'] = '最新版本預覽通道組建版本';
$s['latestRPReleaseSub'] = '用於預覽下個發行版本的可靠組建版本。非常適合嘗鮮即將發佈的版本的使用者。';
$s['newlyAdded'] = '新加入的組建版本';
$s['dateAdded'] = '加入日期';
$s['latestCanaryRelease'] = '最新 Canary 版通道組建版本';
$s['latestCanaryReleaseSub'] = '包含最新平台和早期功能改進的不穩定組建版本。非常適合技術含量高的使用者。';
$s['checkOutAddANewBuild'] = '還沒有找到所需的選項？請查看<i><a href="newbuild.php">「添加新組建版本」</a></i>頁面。';

//newbuild.php
$s['addNewBuild'] = '添加新組建版本';
$s['newBuildNextText'] = '請按下<i>下一步</i>按鈕開始使用指定的選項進行搜尋。';
$s['optionsNotice'] = '選項通知';
$s['optionsNoticeText'] = '選擇向 Microsoft 伺服器報告 Windows 更新用戶端更新狀態的方式。请正確設定這些选项(重要)，否則您將收到錯誤。';
$s['autoSelect'] = '自動選擇';
$s['thisOnly'] = '僅返回指定的組建版本';

//known.php
$s['browseKnown'] = '瀏覽已知組建';
$s['chooseBuild'] = '選擇組建';
$s['weFoundBuilds'] = '我們已依您的搜尋內容找到 <b>%d</b> 個組建。'; //<b>692</b> builds were found for your query.
$s['sortByDate'] = '按添加時間進行排序';

//fetchupd.php
$s['foundUpdates'] = '找到 %d 個更新'; //Found 1 update(s)
$s['foundTheseUpdates'] = '找到以下更新。請按下您想要的更新名稱以繼續。';
$s['buildNumber'] = '組建版本: %s'; //Build number: 18890.1000

//selectlang.php
$s['selectLangFor'] = '選擇 %s 的語言'; //Select language for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['chooseLang'] = '選擇語言';
$s['chooseLangDesc'] = '請選擇您想要的語言';
$s['allLangs'] = '所有語言';
$s['allFiles'] = '所有檔案';
$s['selectLangInfoText1'] = '請按下<i>下一步</i>按鈕來選擇您想下載的版本。';
$s['browseFiles'] = '瀏覽檔案';
$s['browseFilesDesc'] = '快速瀏覽選取組建版本的檔案';
$s['searchFiles'] = '搜尋檔案';
$s['toSearchForCUUseQuery'] = '請使用 <i>%s</i> 搜尋以尋找累積更新。'; //To search for Cumulative Updates use the <i>Windows10 KB</i> search query.
$s['aboutBuild'] = '組建資訊';
$s['downloadNotAvailable'] = '沒有可用的下載';
$s['processingUpdate'] = '正在處理組建版本...';
$s['noLangsAvailablev2'] = '該組建版本無法轉換為 ISO 檔。<br>相關資訊，請參閱常見問題解答。';
$s['updateIsBlockedv2'] = '該組建版本存在阻止創建工作 ISO 檔的已知問題。<br>相關資訊，請參閱常見問題解答。';
$s['updateNotProcessedv2'] = '目前正在處理中，該組建版本的下載配置選項仍不可用。<br>請稍後再試。';

//selectedition.php
$s['selectEditionFor'] = '選取 %s 的版本'; //Select edition for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States)
$s['chooseEdition'] = '選取版本';
$s['chooseEditionDesc'] = '選取您想要的版本';
$s['allEditions'] = '所有版本';
$s['selectEditionInfoText'] = '按下<i>下一步</i>按鈕開啟選擇項目的摘要頁面。';
$s['additionalEditionsInfo'] = '如果您需要可以在右方表格找到的<b>額外版本</b>，請先選擇指示的<b>必須版本</b>後按下<i>下一步</i>。<br>在摘要頁面上選擇「<b>建立額外版本</b>」選項。';
$s['showHiddenEditions'] = '顯示已隱藏的版本(不推薦)';

//download.php
$s['summary'] = '摘要';
$s['summaryDesc'] = '再次確認您的選擇，並選擇下載方式';
$s['summaryFor'] = '%s 的摘要'; //Summary for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States), Windows 10 Pro
$s['summaryOfSelection'] = '選擇項目摘要';
$s['browseList'] = '瀏覽檔案列表';
$s['browseListDesc'] = '開啟包含設置為手動下載之包含在 UUP 集合中檔案列表的頁面。';
$s['aria2Opt1'] = '下載 UUP 集合';
$s['aria2Opt1Desc'] = '使用 aria2 輕鬆地下載選取的 UUP 集合。';
$s['aria2Opt2'] = '下載並轉換為 ISO';
$s['aria2Opt2Desc'] = '使用 aria2 輕鬆地下載選取的 UUP 集合並轉換成 ISO 檔。';
$s['aria2Opt3'] = '下載、添加額外版本並轉換為 ISO';
$s['aria2Opt3Desc'] = '使用 aria2 輕鬆地下載選取的 UUP 集合，轉換，建立額外版本，最後建立 ISO 檔。';
$s['aria2Opt4'] = '為這些更新建立離線安裝包下載套件';
$s['jsRequiredToConf'] = '配置及使用此選項需要 JavaScript。';
$s['selAdditionalEditions'] = '選擇額外版本';
$s['noAdditionalEditions'] = '此選取項目沒有可用的額外版本。';
$s['learnMore'] = '瞭解更多';
$s['learnMoreAdditionalEditions1'] = '這個選項允許自動建立選擇的額外版本。';
$s['learnMoreAdditionalEditions2'] = '其他額外版本的列表由選定的基礎版本確定。您可以在下面檢視建立所需的額外版本所需的基礎版本列表：';
$s['learnMoreUpdates1'] = '只有在以下系統執行轉換指令碼時，更新才會整合到轉換後的映像中：';
$s['learnMoreUpdates2'] = '如果在任何其他系統上執行轉換指令碼，更新將不會集成到結果映像中。';
$s['systemWithAdk'] = '%s ，且安裝了 Windows 10 ADK'; //Windows 7 with Windows 10 ADK installed
$s['additionalUpdates'] = '額外更新';
$s['additionalUpdatesDesc'] = '這個 UUP 集合包含了會在轉換工具整合進去的額外更新，將會顯著增加建立時間。';
$s['browseUpdatesList'] = '瀏覽更新列表';
$s['selectDownloadOptions'] = '請選擇下載選項';
$s['selectDownloadOptionsSub'] = '請選擇設定您想下載的項目方式';
$s['downloadMethod'] = '下載方式';
$s['conversionOptions'] = '轉換選項';
$s['convOpt1'] = '使用固體 (ESD) 壓縮';
$s['convOpt2'] = '包括更新 (僅適用於 Windows 轉換工具)';
$s['convOpt3'] = '運行元件清理 (僅適用於 Windows 轉換工具)';
$s['convOpt4'] = '整合 .NET Framework 3.5 (僅適用於 Windows 轉換工具)';
$s['startDownload'] = '建立下載套件';
$s['legalCopeHarder'] = '按下<i>建立下載套件</i>按鈕，即表示您同意以下內容：';
$s['legalCope1'] = '使用 UUP dump 提供的指令碼建立的安裝映像僅用於<b>評估目的</b>';
$s['legalCope2'] = 'Microsoft Corporation <b>不以任何方式支援</b>映像及其部署';
$s['legalCope3v2'] = '對於因濫用本網站而造成的<b>任何損害，著作者概不負責</b>';
$s['win1122h2OrLaterv2'] = '需要 Windows 才能建立 ISO 鏡像';
$s['requiresWindows102004v2'] = '您需要使用現有版本的 Windows（例如 Windows 10 版本 2004 或 Windows 11）來建立此版本的 ISO 鏡像。其他平台將無法執行。';

//get.php
$s['listOfFilesFor'] = '列出 %s 的檔案'; //List of files for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['totalSizeOfFiles'] = '檔案總計大小: %s'; //Total size of files: 2.86 GiB
$s['fileRenamingScript'] = '檔案重新命名指令碼';
$s['fileRenamingScriptDesc1'] = '下方所找到的指令碼可用來快速地重新命名下載檔案。';
$s['fileRenamingScriptDesc2'] = '簡單地將下方表單的內容複製成一個新檔案，副檔名為 <code>cmd</code>，接著把檔案放在下載檔案的資料夾內，之後執行。';
$s['sha1File'] = 'SHA-1 檔案總和檢查';
$s['sha1FileDesc'] = '您可以使用這個檔案簡單地驗證下載的檔案是否正確。';
$s['aria2NoticeTitle'] = '使用 aria2 下載選項提示';
$s['aria2NoticeText1'] = '使用 aria2 下載選項會建立一個需要下載的封存檔。下載回來的封存檔包含了所有用來完成選取作業的必須檔案。';
$s['aria2NoticeText2'] = '請使用適用於您的平台的指令碼來開始下載程序:';
$s['aria2NoticeText3'] = 'Aria2 是個開放原始碼的專案。您可以在這裡找到: %s.'; //Aria2 is an open source project. You can find it here: https://aria2.github.io/.
$s['aria2NoticeText4'] = 'UUP 轉換指令碼 (Windows 版本) 是由 %s 製作的。'; //UUP Conversion script (Windows version) has been created by abbodi1406.
$s['aria2NoticeText5'] = 'UUP 轉換指令碼 (Linux 版本, macOS 版本) 是開放原始碼的。您可以在這裡找到: %s.'; //UUP Conversion script (Linux version, macOS version) is open source. You can find it here: https://github.com/uup-dump/converter.

//findfiles.php
$s['findFilesIn'] = '在 %s 尋找檔案'; //Find files in Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['fileRenamingScriptDescFindFiles'] = '如果您想要快速地重新命名下載的檔案，那麽您可以產生重新命名指令碼來自動幫您重新命名。';
$s['fileRenamingScriptGenW'] = '產生重新命名指令碼 (Windows)';
$s['fileRenamingScriptGenL'] = '產生重新命名指令碼 (Linux, macOS)';
$s['searchForFiles'] = '搜尋檔案...';
$s['weFoundFiles'] = '我們已依您的搜尋內容找到了 <b>%d</b> 個檔案。'; //<b>692</b> files were found for your query.
$s['sizeOfShownFiles'] = '顯示檔案的大小: %s'; //Size of shown files: 2.86 GiB

//Error pages
$s['error'] = '錯誤';
$s['arm64Warning2023'] = '<b>這是一個 <a href="https://support.microsoft.com/zh-tw/windows/477f51df-2e3b-f68f-31b0-06f5e4f8ebb5">ARM64</a> 組建版本。</b>UUP dump 著作者沒有與之相容的單個設備，因此<b>絕對不會提供任何支援</b>。';

//Error messages
$s['error_ERROR'] = '一般錯誤。';
$s['error_UNSUPPORTED_API'] = '安裝的 API 版本與此 UUP dump 版本不相容。';
$s['error_NO_FILEINFO_DIR'] = 'fileinfo 目錄不存在。';
$s['error_NO_BUILDS_IN_FILEINFO'] = 'fileinfo 資料庫沒有任何組建。';
$s['error_SEARCH_NO_RESULTS'] = '找不到符合所執行查詢的項目。';
$s['error_UNKNOWN_ARCH'] = '處理器架構未知。';
$s['error_UNKNOWN_RING'] = '未知頻道。';
$s['error_UNKNOWN_FLIGHT'] = '未知正式發行前小眾測試版。';
$s['error_UNKNOWN_COMBINATION'] = '正式發行前小眾測試版與通道組合不正確。Skip ahead 僅支援 Insider 快速通道。';
$s['error_ILLEGAL_BUILD'] = '指定的組建號碼小於 %d 或大於 %d。'; //Specified build number is less than 9841 or larger than 2147483646.
$s['error_ILLEGAL_MINOR'] = '指定的組建次要版本不正確。';
$s['error_NO_UPDATE_FOUND'] = '伺服器沒有回傳更新。';
$s['error_XML_PARSE_ERROR'] = '解析 XML 回應失敗。可能是因為 Microsoft 伺服器發生問題。請稍候再試。';
$s['error_EMPTY_FILELIST'] = '伺服器回傳了空的檔案列表。';
$s['error_NO_FILES'] = '您所選擇的項目沒有可使用的檔案。';
$s['error_NOT_FOUND'] = '找不到指定的選擇項目。';
$s['error_MISSING_FILES'] = '選擇的 UUP 組合有缺少的檔案。';
$s['error_NO_METADATA_ESD'] = '您所選擇的項目沒有可使用的中繼資料 ESD 檔案。';
$s['error_UNSUPPORTED_LANG'] = '不支援指定語言。';
$s['error_UNSPECIFIED_LANG'] = '未指定語言。';
$s['error_UNSUPPORTED_EDITION'] = '不支援指定版本。';
$s['error_UNSUPPORTED_COMBINATION'] = '語言及版本組合不正確。';
$s['error_NOT_CUMULATIVE_UPDATE'] = '選取的更新不包含累積更新。';
$s['error_UPDATE_INFORMATION_NOT_EXISTS'] = '指定更新的資訊不存在資料庫。';
$s['error_KEY_NOT_EXISTS'] = '指定的索引碼不存在於更新資訊。';
$s['error_UNSPECIFIED_UPDATE'] = '未指定更新 ID。';
$s['error_INCORRECT_ID'] = '指定的更新 ID 不正確。請確保指定的更新 ID 正確。';
$s['error_RATE_LIMITED'] = '您的速率已被限制。請在幾秒後重試。';
$s['error_UNSPECIFIED_VE'] = '您未選取任何額外版本。如果不希望建立額外版本，請使用使用 aria2 下載並轉換選項。';
$s['error_VE_UNAVAILABLE'] = '此選項不支援額外版本。';
$s['error_INVALID_PAGE'] = '指定的頁面無效';
$s['error_WU_REQUEST_FAILED'] = '對 Windows 更新服務的請求失敗。';
$s['errorNoMessage'] = '沒有可用的錯誤訊息。';

//Languages
$s['lang_neutral'] = '任何語言';
$s['lang_ar-sa'] = '阿拉伯文 (沙烏地阿拉伯)';
$s['lang_bg-bg'] = '保加利亞文';
$s['lang_cs-cz'] = '捷克文';
$s['lang_da-dk'] = '丹麥文';
$s['lang_de-de'] = '德文';
$s['lang_el-gr'] = '希臘文';
$s['lang_en-gb'] = '英文 (英國)';
$s['lang_en-us'] = '英文 (美國)';
$s['lang_es-es'] = '西班牙文 (西班牙)';
$s['lang_es-mx'] = '西班牙文 (墨西哥)';
$s['lang_et-ee'] = '愛沙尼亞文';
$s['lang_fi-fi'] = '芬蘭文';
$s['lang_fr-ca'] = '法文 (加拿大)';
$s['lang_fr-fr'] = '法文 (法國)';
$s['lang_he-il'] = '希伯來文';
$s['lang_hr-hr'] = '克羅埃西亞文';
$s['lang_hu-hu'] = '匈牙利文';
$s['lang_it-it'] = '義大利文';
$s['lang_ja-jp'] = '日文';
$s['lang_ko-kr'] = '韓文';
$s['lang_lt-lt'] = '立陶宛文';
$s['lang_lv-lv'] = '拉脫維亞文';
$s['lang_nb-no'] = '挪威文 (巴克摩)';
$s['lang_nl-nl'] = '荷蘭文';
$s['lang_pl-pl'] = '波蘭文';
$s['lang_pt-br'] = '葡萄牙文 (巴西)';
$s['lang_pt-pt'] = '葡萄牙文 (葡萄牙)';
$s['lang_qps-ploc'] = '偽翻譯 (Pseudo)';
$s['lang_ro-ro'] = '羅馬尼亞文';
$s['lang_ru-ru'] = '俄文';
$s['lang_sk-sk'] = '斯洛伐克文';
$s['lang_sl-si'] = '斯洛維尼亞文';
$s['lang_sr-latn-rs'] = '賽爾維亞文 (拉丁)';
$s['lang_sv-se'] = '瑞典文';
$s['lang_th-th'] = '泰文';
$s['lang_tr-tr'] = '土耳其文';
$s['lang_uk-ua'] = '烏克蘭文';
$s['lang_zh-cn'] = '中文 (简体)';
$s['lang_zh-hk'] = '中文 (香港)';
$s['lang_zh-tw'] = '中文 (繁體)';

//Channels
$s['channel_canarychannel'] = 'Canary 通道';
$s['channel_skipAhead'] = 'Skip Ahead';
$s['channel_dev'] = '開發人員通道';
$s['channel_beta'] = 'Beta 版通道';
$s['channel_releasepreview'] = '版本預覽通道';
$s['channel_retail'] = '零售';

//Editions
$s['edition_APP'] = 'Microsoft Store 內建應用程式';
$s['edition_APP_MOMENT'] = 'Microsoft Store Moment 應用程式';
$s['edition_FOD'] = '按照需求 (相容)';
$s['edition_CLOUD'] = 'Windows S';
$s['edition_CLOUDN'] = 'Windows S N';
$s['edition_CLOUDE'] = 'Windows Lean';
$s['edition_CLOUDEDITION'] = 'Windows SE';
$s['edition_CLOUDEDITIONN'] = 'Windows SE N';
$s['edition_CORE'] = 'Windows 家用版';
$s['edition_CORECOUNTRYSPECIFIC'] = 'Windows 家用版中國';
$s['edition_COREN'] = 'Windows 家用版 N';
$s['edition_CORESINGLELANGUAGE'] = 'Windows 家用版單一語言';
$s['edition_EDUCATION'] = 'Windows 教育版';
$s['edition_EDUCATIONN'] = 'Windows 教育版 N';
$s['edition_ENTERPRISE'] = 'Windows 企業版';
$s['edition_ENTERPRISEEVAL'] = 'Windows 企業評估版';
$s['edition_ENTERPRISEN'] = 'Windows 企業版 N';
$s['edition_ENTERPRISES'] = 'Windows 企業版 LTSC';
$s['edition_ENTERPRISESEVAL'] = 'Windows 企業版 LTSC 評估版';
$s['edition_ENTERPRISESN'] = 'Windows 企業版 N LTSC';
$s['edition_ENTERPRISESNEVAL'] = 'Windows 企業版 N LTSC 評估版';
$s['edition_HOLOGRAPHIC'] = 'Windows Holographic';
$s['edition_IOTENTERPRISE'] = 'Windows IoT 企業版';
$s['edition_IOTENTERPRISEK'] = 'Windows IoT 企業版訂閱';
$s['edition_IOTENTERPRISES'] = 'Windows IoT 企業版 LTSC';
$s['edition_IOTENTERPRISESK'] = 'Windows IoT 企業版 LTSC 訂閱';
$s['edition_LITE'] = 'Windows 10X';
$s['edition_PPIPRO'] = 'Windows 團隊版';
$s['edition_PROFESSIONAL'] = 'Windows 專業版';
$s['edition_PROFESSIONALN'] = 'Windows 專業版 N';
$s['edition_PROFESSIONALCOUNTRYSPECIFIC'] = 'Windows 專業版 - 中國限定';
$s['edition_PROFESSIONALWORKSTATION'] = 'Windows 專業工作站版';
$s['edition_PROFESSIONALWORKSTATIONN'] = 'Windows 專業工作站版 N';
$s['edition_PROFESSIONALEDUCATION'] = 'Windows 專業教育版';
$s['edition_PROFESSIONALEDUCATIONN'] = 'Windows 專業教育版 N';
$s['edition_SERVERRDSH'] = 'Windows 企業版多重工作階段 / 虛擬桌面';
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
