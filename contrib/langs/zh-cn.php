<?php
/*
UUP dump translation file.

Translation information:
English language name: Chinese (Simplified)
Localized language name: 中文（简体）
Language code: zh-CN
Authors: wordlesswind, JRJSheep; Remastered by JRJSheep, Nov 2023
*/

//Language information
$s['code'] = 'zh-CN';
$s['timeZone'] = 'Asia/Shanghai'; //Supported timezones: https://www.php.net/manual/zh/timezones.php

//shared strings
$s['uupdump'] = 'UUP dump';
$s['uupdumpSub'] = '%s - UUP dump'; //Browse known builds - UUP dump
$s['build'] = '内部版本';
$s['arch'] = '体系结构';
$s['ring'] = '推送渠道';
$s['updateid'] = '更新 ID';
$s['update'] = '更新名称';
$s['lang'] = '语言';
$s['edition'] = 'SKU 版本';
$s['type'] = '更新类型（仅Windows Core OS）';
$s['seachForBuilds'] = '搜索内部版本……';
$s['no'] = '否';
$s['yes'] = '是';
$s['next'] = '下一步';
$s['ok'] = '确定';
$s['cancel'] = '取消';
$s['information'] = '信息';
$s['totalDlSize'] = '总下载大小';
$s['file'] = '文件';
$s['expires'] = '过期时间';
$s['sha1'] = 'SHA-1';
$s['size'] = '大小';
$s['additionalEdition'] = '虚拟升级版本';
$s['requiredEdition'] = '所需 SKU 版本';
$s['unknown'] = '未知';

//global
$s['home'] = '首页';
$s['downloads'] = '下载';
$s['faq'] = '常见问题';
$s['sourceCode'] = '源代码';
$s['menu'] = '菜单';
$s['notAffiliated'] = '此项目不隶属于 Microsoft Corporation。Windows 是 Microsoft Corporation 的注册商标。';
$s['copyrightNew'] = '© %d UUP dump 作者和贡献者们。';
$s['selectLanguage'] = '请选择你的语言';
$s['uupDumpDesc'] = 'UUP dump 允许你直接从 Windows 更新下载统一更新平台（Unified Update Platform）的文件，例如 Windows 预览体验计划更新。';
$s['uupDumpDescSub'] = '在 UUP dump 上%s。UUP dump 允许你直接从 Windows 更新下载统一更新平台（Unified Update Platform）的文件，例如 Windows 预览体验计划更新。'; //Select language for Windows 11 Insider Preview 25188.1000 (rs_prerelease) amd64 on UUP dump. UUP dump lets you download Unified Update Platform files, like Windows Insider updates, directly from Windows Update.
$s['themeButton'] = '主题';
$s['selectTheme'] = '选择主题';
$s['themeAuto'] = '自动选择';
$s['themeLight'] = '浅色模式主题';
$s['themeDark'] = '深色模式主题';
$s['themeLegacy'] = '旧版主题';

//index.php
$s['slogan'] = '轻松地从 Windows 更新服务器下载 UUP 文件。';
$s['quickOptions'] = '快速选项';
$s['tHeadReleaseType'] = '发布类型';
$s['tHeadDescription'] = '描述';
$s['tHeadArchitectures'] = '体系结构';
$s['latestPublicRelease'] = '公开发布的最新内部版本';
$s['latestPublicReleaseSub'] = '面向普通用户的最新更新版本。';
$s['latestDevRelease'] = '最新 Dev 渠道版本';
$s['latestDevReleaseSub'] = '具有新想法和长期领先功能的内部版本，运行有些不可靠。<br>它是面向爱好者的理想之选。';
$s['latestBetaRelease'] = '最新 Beta 渠道版本';
$s['latestBetaReleaseSub'] = '具有大多数即将推出的功能的可靠版本。<br>它是早期采用者的理想选择。';
$s['latestRPRelease'] = '最新 Release Preview 渠道版本';
$s['latestRPReleaseSub'] = '预览下一个发行版本，拥有更好的可靠性。<br>它是试用即将发布版本的理想选择。';
$s['newlyAdded'] = '最近添加的内部版本';
$s['dateAdded'] = '添加日期';
$s['latestCanaryRelease'] = '最新 Canary 渠道版本';
$s['latestCanaryReleaseSub'] = '具有最新平台更改和早期功能的内部版本，运行有些不稳定。<br>非常适合高度技术性用户。';
$s['checkOutAddANewBuild'] = '没有找到所需的选项？请查看<i><a href="newbuild.php">添加新内部版本</a></i>页面。';

//newbuild.php
$s['addNewBuild'] = '添加新内部版本';
$s['newBuildNextText'] = '单击<i>下一步</i>按钮开始搜索指定的选项。';
$s['optionsNotice'] = '选项注意';
$s['optionsNoticeText'] = '在此处找到的选项是配置基础 Windows 更新客户端向 Microsoft 服务器报告自身的方式。正确设置这些内容至关重要，否则你将会遇到错误，从而无法完成添加。';
$s['otherOptions'] = '其他选项';
$s['otherOpt1'] = '只检查指定的内部版本';
$s['otherOpt2'] = '检查标记为 [Internal Corpnet Required] 的内部更新';
$s['otherOptNotice'] = '（仅对桌面版本生效）';

//known.php
$s['browseKnown'] = '浏览已知内部版本';
$s['chooseBuild'] = '选择内部版本';
$s['weFoundBuilds'] = '根据你的查询，共找到 <b>%d</b> 个内部版本。'; //<b>692</b> builds were found for your query.
$s['sortByDate'] = '按添加日期排序结果';

//fetchupd.php
$s['foundUpdates'] = '已找到 %d 个更新'; //Found 1 update(s)
$s['foundTheseUpdates'] = '已找到下列更新，单击所需更新的名称继续。';
$s['buildNumber'] = '内部版本号：%s'; //Build number: 18890.1000

//selectlang.php
$s['selectLangFor'] = '选择 %s 的语言'; //Select language for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['chooseLang'] = '选择语言';
$s['chooseLangDesc'] = '选择你所需要的语言';
$s['allLangs'] = '所有语言';
$s['selLangFiles'] = '文件';
$s['allFiles'] = '所有文件';
$s['selectLangInfoText1'] = '单击<i>下一步</i>按钮选择你要下载的版本。';
$s['noLangsAvailable'] = '在此内部版本中没有可用的语言。<br>此内部版本将无法转换为 ISO 镜像。<br>有关详细信息，请参阅常见问题。';
$s['Metadatanotgenerated'] = '此更新的元数据未生成。';
$s['Generatemetadata'] = '生成元数据';
$s['browseFiles'] = '浏览文件';
$s['browseFilesDesc'] = '快速浏览所选内部版本中的文件';
$s['searchFiles'] = '搜索文件';
$s['toSearchForCUUseQuery'] = '若要搜索累积更新，请使用 <i>%s</i> 搜索查询。'; //To search for Cumulative Updates use the <i>Windows10 KB</i> search query.
$s['updateNotProcessed'] = 'UUP dump 尚未处理此更新的元数据 —— 这将每 %d 分钟自动发起一次。在此之前，你只能浏览更新的文件列表。'; //UUP dump hasn't processed this update's metadata yet - this happens automatically once every 30 minutes. You can only browse the update's file list until then.
$s['updateIsBlocked'] = '此更新存在阻止创建有效 ISO 文件的已知问题。因此，你只能手动浏览其文件。';

//selectedition.php
$s['selectEditionFor'] = '选择 %s 的 SKU 版本'; //Select edition for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States)
$s['chooseEdition'] = '选择 SKU 版本';
$s['chooseEditionDesc'] = '选择你需要的 SKU 版本';
$s['allEditions'] = '所有 SKU 版本';
$s['selectEditionInfoText'] = '单击<i>下一步</i>按钮以打开所选内容的版本摘要页面。';
$s['additionalEditionsInfo'] = '如果你需要右侧表格中的<b>虚拟升级版本</b>，请在上方选择<b>所需 SKU 版本</b>，然后单击<i>下一步</i>继续。<br>在摘要页上，选择“<b>创建虚拟升级版本</b>”选项。';
$s['showHiddenEditions'] = '显示隐藏的 SKU 版本（不推荐）';

//download.php
$s['summary'] = '摘要';
$s['summaryDesc'] = '查看你的选择，并选择下载方式';
$s['summaryFor'] = '%s 的摘要'; //Summary for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States), Windows 10 Pro
$s['summaryOfSelection'] = '来自你所选择版本的摘要';
$s['browseList'] = '浏览文件列表';
$s['browseListDesc'] = '打开包含 UUP 文件集中用于手动下载的文件列表页面。';
$s['aria2Opt1'] = '下载 UUP 文件集';
$s['aria2Opt1Desc'] = '使用 aria2 轻松下载所选 UUP 文件集。';
$s['aria2Opt2'] = '下载并转换为 ISO 镜像文件';
$s['aria2Opt2Desc'] = '使用 aria2 轻松下载所选 UUP 文件集，并将其转换为 ISO 镜像文件。';
$s['aria2Opt3'] = '下载、添加虚拟升级版本并转换为 ISO 镜像文件';
$s['aria2Opt3Desc'] = '使用 aria2 轻松下载所选 UUP 文件集，转换、创建虚拟升级版本，最后创建 ISO 镜像文件。';
$s['aria2Opt4'] = '针对这些更新创建下载包';
$s['jsRequiredToConf'] = '配置并使用此选项需要 JavaScript。';
$s['selAdditionalEditions'] = '请选择虚拟升级版本';
$s['noAdditionalEditions'] = '你选择的 SKU 版本没有虚拟升级版本可用。';
$s['learnMore'] = '了解更多信息';
$s['learnMoreAdditionalEditions1'] = '此选项可以自动创建所选的其他 SKU 版本。';
$s['learnMoreAdditionalEditions2'] = '其他 SKU 版本的列表由所选的基础 SKU 版本确定，你可以在下方查看创建其他 SKU 版本所需的基本 SKU 版本的列表：';
$s['learnMoreUpdates1'] = '只有在以下系统上运行转换脚本时，才会将更新集成到转换后的映像中：';
$s['learnMoreUpdates2'] = '如果在其他任何系统上运行转换脚本，更新将不会集成到所创建的映像中。';
$s['systemWithAdk'] = '%s（已安装 Windows 10 评估和部署工具包）'; //Windows 7 with Windows 10 ADK installed
$s['additionalUpdates'] = '其他更新';
$s['additionalUpdatesDesc'] = '此 UUP 文件集包含在转换过程中将会集成的其他更新，这将会明显增加创建时间。';
$s['browseUpdatesList'] = '浏览更新列表';
$s['selectDownloadOptions'] = '请选择你的下载选项';
$s['selectDownloadOptionsSub'] = '配置使用何种方式下载你所选择的内容';
$s['downloadMethod'] = '下载方式';
$s['conversionOptions'] = '转换选项';
$s['convOpt1'] = '使用固实压缩（ESD）';
$s['convOpt2'] = '包括更新（仅 Windows 转换程序）';
$s['convOpt3'] = '运行组件清理（仅 Windows 转换程序）';
$s['convOpt4'] = '集成 .NET Framework 3.5（仅 Windows 转换程序）';
$s['convOpt5'] = '运行清理时删除组件存储中所有已被取代的组件（需先选中“在集成更新后运行清理”）';
$s['conversionAdvOptions'] = '高级选项';
$s['startDownload'] = '创建下载包';
$s['legalCopeHarder'] = '单击<i>创建下载包</i>按钮即表示你同意以下内容：';
$s['legalCope1'] = '使用 UUP dump 提供的脚本创建的安装映像仅可用于<b>评估目的</b>';
$s['legalCope2'] = 'Microsoft Corporation <b>不以任何方式支持</b>映像及其部署';
$s['legalCope3v2'] = '<b>作者不会对</b>因滥用本网站所<b>导致的任何损害负责</b>';
$s['win1122h2OrLaterv2'] = '需要 Windows 才能创建 ISO 映像';
$s['requiresWindows102004v2'] = '你需要使用现代版本的 Windows（如 Windows 10 版本 2004 或 Windows 11）来创建此内部版本的 ISO 映像。在其他平台上将无法正常工作。';

//get.php
$s['listOfFilesFor'] = '%s 的文件列表'; //List of files for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['totalSizeOfFiles'] = '文件总大小：%s'; //Total size of files: 2.86 GiB
$s['fileRenamingScript'] = '文件重命名脚本';
$s['fileRenamingScriptDesc1'] = '下方提供的脚本可用于快速重命名已下载的文件。';
$s['fileRenamingScriptDesc2'] = '只需将下方表格中的内容复制到带有 <code>cmd</code> 扩展名的新文件，并将其放在带有下载文件的文件夹中运行即可。';
$s['sha1File'] = 'SHA-1 文件校验';
$s['sha1FileDesc'] = '你可以使用此信息快速验证文件是否已正确下载。';
$s['aria2NoticeTitle'] = '使用 aria2 选项下载通知';
$s['aria2NoticeText1'] = '使用 aria2 选项下载将创建一个需要你下载的压缩包，在下载的压缩包中包含实现所选任务所需的所有文件。';
$s['aria2NoticeText2'] = '若要开始下载过程，请使用适用于你的平台的脚本：';
$s['aria2NoticeText3'] = 'Aria2 是一个开源项目，你可以在这里找到它：%s。'; //Aria2 is an open source project. You can find it here: https://aria2.github.io/.
$s['aria2NoticeText4'] = 'UUP 转换脚本（Windows 版本）由 %s 创建。'; //UUP Conversion script (Windows version) has been created by abbodi1406.
$s['aria2NoticeText5'] = 'UUP 转换脚本（Linux 版本、macOS 版本）是开源的，你可以在这里找到它：%s。'; //UUP Conversion script (Linux version, macOS version) is open source. You can find it here: https://github.com/uup-dump/converter.

//findfiles.php
$s['findFilesIn'] = '在 %s 中查找文件'; //Find files in Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['fileRenamingScriptDescFindFiles'] = '如果你要对从此页面下载的文件进行快速重命名，可以生成重命名脚本，此脚本将自动为你执行此操作。';
$s['fileRenamingScriptGenW'] = '生成重命名脚本（Windows）';
$s['fileRenamingScriptGenL'] = '生成重命名脚本（Linux、macOS）';
$s['searchForFiles'] = '搜索文件……';
$s['weFoundFiles'] = '根据你的查询，已找到 <b>%d</b> 个文件。'; //<b>692</b> files were found for your query.
$s['sizeOfShownFiles'] = '显示文件大小：%s'; //Size of shown files: 2.86 GiB

//style.php
$s['render'] = '页面呈现用了 %s 毫秒。'; //Page rendered in 1 ms.

//Error pages
$s['error'] = '出现错误';
$s['arm64Warning2023'] = '<b>这是一个 <a href="https://support.microsoft.com/zh-cn/windows/477f51df-2e3b-f68f-31b0-06f5e4f8ebb5">ARM64</a> 内部版本。</b>UUP dump 的作者们没有与之兼容的单一设备，因此<b>绝对不会提供任何的支持</b>。';

//Error messages
$s['error_ERROR'] = '一般错误。';
$s['error_UNSUPPORTED_API'] = '已安装的 API 版本与此版本的 UUP dump 不兼容。';
$s['error_NO_FILEINFO_DIR'] = 'fileinfo 目录不存在。';
$s['error_NO_BUILDS_IN_FILEINFO'] = '在 fileinfo 数据库中不包含任何内部版本。';
$s['error_SEARCH_NO_RESULTS'] = '找不到要执行查询的项目。';
$s['error_UNKNOWN_ARCH'] = '未知处理器体系结构。';
$s['error_UNKNOWN_RING'] = '未知频道。';
$s['error_UNKNOWN_FLIGHT'] = '未知外部测试版本。';
$s['error_UNKNOWN_COMBINATION'] = '外部测试版本和圈的组合不正确。只有快圈才支持 Skip ahead。';
$s['error_ILLEGAL_BUILD'] = '指定的内部版本号小于 %d 或大于 %d。'; //Specified build number is less than 9841 or larger than 2147483646.
$s['error_ILLEGAL_MINOR'] = '指定的次要版本不正确。';
$s['error_NO_UPDATE_FOUND'] = '服务器没有返回任何更新。';
$s['error_XML_PARSE_ERROR'] = '响应 XML 解析失败。Microsoft 服务器可能存在问题。请稍后再试。';
$s['error_EMPTY_FILELIST'] = '服务器返回了空文件列表。';
$s['error_NO_FILES'] = '没有可供你选择的文件。';
$s['error_NOT_FOUND'] = '找不到指定的选择。';
$s['error_MISSING_FILES'] = '所选的 UUP 文件集缺少文件。';
$s['error_NO_METADATA_ESD'] = '没有元数据 ESD 文件可供你选择。';
$s['error_UNSUPPORTED_LANG'] = '指定的语言不受支持。';
$s['error_UNSPECIFIED_LANG'] = '未指定语言。';
$s['error_UNSUPPORTED_EDITION'] = '指定 SKU 版本不受支持。';
$s['error_UNSUPPORTED_COMBINATION'] = '语言和 SKU 版本的组合不正确。';
$s['error_NOT_CUMULATIVE_UPDATE'] = '所选更新不包含累积更新。';
$s['error_UPDATE_INFORMATION_NOT_EXISTS'] = '数据库中不存在有关指定更新的信息。';
$s['error_KEY_NOT_EXISTS'] = '更新信息中不存在指定的关键词。';
$s['error_UNSPECIFIED_UPDATE'] = '未指定更新 ID。';
$s['error_INCORRECT_ID'] = '指定的更新 ID 不正确。请确保指定了正确的更新 ID。';
$s['error_RATE_LIMITED'] = '你受到了限制。请在几秒钟后重试。';
$s['error_UNSPECIFIED_VE'] = '你尚未选择任何其他 SKU 版本。如果不想创建其他 SKU 版本，请选择（使用 aria2 下载并转换）选项。';
$s['error_VE_UNAVAILABLE'] = '此选择不支持其他 SKU 版本。';
$s['error_INVALID_PAGE'] = '指定的页面无效';
$s['error_WU_REQUEST_FAILED'] = '向 Windows 更新服务请求失败。';
$s['errorNoMessage'] = '错误消息不可用。';

//Languages
$s['lang_neutral'] = '任何语言';
$s['lang_ar-sa'] = '阿拉伯语（沙特阿拉伯）';
$s['lang_bg-bg'] = '保加利亚语';
$s['lang_cs-cz'] = '捷克语';
$s['lang_da-dk'] = '丹麦语';
$s['lang_de-de'] = '德语';
$s['lang_el-gr'] = '希腊语';
$s['lang_en-gb'] = '英语（英国）';
$s['lang_en-us'] = '英语（美国）';
$s['lang_es-es'] = '西班牙语（西班牙）';
$s['lang_es-mx'] = '西班牙语（墨西哥）';
$s['lang_et-ee'] = '爱沙尼亚语';
$s['lang_fi-fi'] = '芬兰语';
$s['lang_fr-ca'] = '法语（加拿大）';
$s['lang_fr-fr'] = '法语（法国）';
$s['lang_he-il'] = '希伯来语';
$s['lang_hr-hr'] = '克罗地亚语';
$s['lang_hu-hu'] = '匈牙利语';
$s['lang_it-it'] = '意大利语';
$s['lang_ja-jp'] = '日语';
$s['lang_ko-kr'] = '朝鲜语';
$s['lang_lt-lt'] = '立陶宛语';
$s['lang_lv-lv'] = '拉脱维亚语';
$s['lang_nb-no'] = '挪威语（博克马尔语）';
$s['lang_nl-nl'] = '荷兰语';
$s['lang_pl-pl'] = '波兰语';
$s['lang_pt-br'] = '葡萄牙语（巴西）';
$s['lang_pt-pt'] = '葡萄牙语（葡萄牙）';
$s['lang_ro-ro'] = '罗马尼亚语';
$s['lang_ru-ru'] = '俄语';
$s['lang_sk-sk'] = '斯洛伐克语';
$s['lang_sl-si'] = '斯洛文尼亚语';
$s['lang_sr-latn-rs'] = '塞尔维亚语（拉丁语）';
$s['lang_sv-se'] = '瑞典语';
$s['lang_th-th'] = '泰语';
$s['lang_tr-tr'] = '土耳其语';
$s['lang_uk-ua'] = '乌克兰语';
$s['lang_vi-vn'] = '越南语（越南）';
$s['lang_zh-cn'] = '中文（简体）';
$s['lang_zh-hk'] = '中文（香港）';
$s['lang_zh-tw'] = '中文（繁体）';

//Channels
$s['channel_msit'] = 'MSIT';
$s['channel_canary'] = 'Canary 渠道';
$s['channel_skipAhead'] = 'Skip Ahead';
$s['channel_dev'] = 'Dev 渠道';
$s['channel_beta'] = 'Beta 渠道';
$s['channel_releasepreview'] = 'Release Preview 渠道';
$s['channel_retail'] = '零售';

//Editions
$s['edition_APP'] = 'Microsoft Store 预装应用';
$s['edition_APP_MOMENT'] = 'Microsoft Store Moment 应用';
$s['edition_FOD'] = '按需功能（兼容性）';
$s['edition_CLOUD'] = 'Windows S';
$s['edition_CLOUDN'] = 'Windows S N';
$s['edition_CLOUDE'] = 'Windows Lean';
$s['edition_CLOUDEDITION'] = 'Windows SE';
$s['edition_CLOUDEDITIONN'] = 'Windows SE N';
$s['edition_CORE'] = 'Windows 家庭版';
$s['edition_CORECOUNTRYSPECIFIC'] = 'Windows 家庭中文版';
$s['edition_COREN'] = 'Windows 家庭版 N';
$s['edition_CORESINGLELANGUAGE'] = 'Windows 家庭单语言版';
$s['edition_EDUCATION'] = 'Windows 教育版';
$s['edition_EDUCATIONN'] = 'Windows 教育版 N';
$s['edition_ENTERPRISE'] = 'Windows 企业版';
$s['edition_ENTERPRISEEVAL'] = 'Windows 企业评估版';
$s['edition_ENTERPRISEN'] = 'Windows 企业版 N';
$s['edition_ENTERPRISES'] = 'Windows 企业版 LTSC';
$s['edition_ENTERPRISESEVAL'] = 'Windows 企业评估版 LTSC';
$s['edition_ENTERPRISESN'] = 'Windows 企业版 N LTSC';
$s['edition_ENTERPRISESNEVAL'] = 'Windows 企业评估版 N LTSC';
$s['edition_HOLOGRAPHIC'] = 'Windows Holographic';
$s['edition_IOTENTERPRISE'] = 'Windows IoT 企业版';
$s['edition_IOTENTERPRISEK'] = 'Windows IoT 企业版订阅';
$s['edition_IOTENTERPRISES'] = 'Windows IoT 企业版 LTSC';
$s['edition_IOTENTERPRISESK'] = 'Windows IoT 企业版 LTSC 订阅';
$s['edition_LITE'] = 'Windows 10X';
$s['edition_PPIPRO'] = 'Windows 协同版';
$s['edition_PROFESSIONAL'] = 'Windows 专业版';
$s['edition_PROFESSIONALN'] = 'Windows 专业版 N';
$s['edition_PROFESSIONALWORKSTATION'] = 'Windows 专业工作站版';
$s['edition_PROFESSIONALWORKSTATIONN'] = 'Windows 专业工作站版 N';
$s['edition_PROFESSIONALEDUCATION'] = 'Windows 专业教育版';
$s['edition_PROFESSIONALEDUCATIONN'] = 'Windows 专业教育版 N';
$s['edition_SERVERRDSH'] = 'Windows 企业版多会话 / 虚拟桌面';
$s['edition_SERVERARM64'] = 'Windows Server ARM64';
$s['edition_SERVERAZURESTACKHCICOR'] = 'Azure Stack HCI';
$s['edition_SERVERDATACENTER'] = 'Windows Server Datacenter';
$s['edition_SERVERDATACENTERCORE'] = 'Windows Server Datacenter（Core）';
$s['edition_SERVERSTANDARD'] = 'Windows Server Standard';
$s['edition_SERVERSTANDARDCORE'] = 'Windows Server Standard（Core）';
$s['edition_SERVERTURBINE'] = 'Windows Server Datacenter：Azure Edition';
$s['edition_SERVERTURBINECOR'] = 'Windows Server Datacenter：Azure Edition（Core）';
$s['edition_SERVERSTANDARDACOR'] = 'Windows Server Standard（半年频道）';
$s['edition_SERVERDATACENTERACOR'] = 'Windows Server Datacenter（半年频道）';