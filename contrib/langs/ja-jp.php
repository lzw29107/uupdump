<?php
/*
UUP dump translation file.

Translation information:
English language name: Japanese
Localized language name: 日本語
Language code: ja-JP
Authors: UUP dump authors and contributors
*/

//Language information
$s['code'] = 'ja-JP';
$s['timeZone'] = 'Asia/Tokyo'; //Supported timezones: https://www.php.net/manual/en/timezones.php

//shared strings
$s['uupdump'] = 'UUP dump';
$s['uupdumpSub'] = '%s - UUP dump'; //Browse known builds - UUP dump
$s['build'] = 'ビルド';
$s['arch'] = 'アーキテクチャ';
$s['ring'] = 'チャネル';
$s['branch'] = 'ブランチ';
$s['updateid'] = '更新 ID';
$s['update'] = '更新';
$s['lang'] = '言語';
$s['edition'] = 'エディション';
$s['seachForBuilds'] = 'ビルドを検索...';
$s['no'] = 'いいえ';
$s['yes'] = 'はい';
$s['next'] = '次へ';
$s['ok'] = 'OK';
$s['cancel'] = 'キャンセル';
$s['information'] = '情報';
$s['totalDlSize'] = '合計ダウンロードサイズ';
$s['file'] = 'ファイル';
$s['expires'] = 'Expires';
$s['sha1'] = 'SHA-1';
$s['size'] = 'サイズ';
$s['additionalEdition'] = '追加エディション';
$s['requiredEdition'] = '必須エディション';
$s['unknown'] = '不明';

//global
$s['home'] = 'ホーム';
$s['downloads'] = 'ダウンロード';
$s['faq'] = 'よくある質問 (FAQ)';
$s['sourceCode'] = 'ソースコード';
$s['menu'] = 'メニュー';
$s['notAffiliated'] = 'このプロジェクトは米国Microsoft Corporationとは一切関係ありません。Microsoft、Windowsは、米国Microsoft Corporationの米国およびその他の国における登録商標または商標です。';
$s['copyrightNew'] = '© %d UUP dumpの開発者たちと貢献者たち。';
$s['selectLanguage'] = '言語を選択';
$s['uupDumpDesc'] = 'UUP dumpを使用すると、Windows InsiderアップデートなどのUnified Update PlatformファイルをWindows Updateから直接ダウンロードできます。';
$s['uupDumpDescSub'] = 'UUP dumpで%s. UUP dumpを使用すると、Windows InsiderアップデートなどのUnified Update PlatformファイルをWindows Updateから直接ダウンロードできます。'; //Select language for Windows 11 Insider Preview 25188.1000 (rs_prerelease) amd64 on UUP dump. UUP dump lets you download Unified Update Platform files, like Windows Insider updates, directly from Windows Update.
$s['themeButton'] = 'テーマ';
$s['selectTheme'] = 'テーマ設定';
$s['themeAuto'] = 'オート';
$s['themeLight'] = 'ライト';
$s['themeDark'] = 'ダーク';
$s['themeLegacy'] = 'レガシー';

//index.php
$s['slogan'] = 'Windows Update サーバからUUPファイルを簡単にダウンロードできます。';
$s['quickOptions'] = 'クイックオプション';
$s['tHeadReleaseType'] = 'リリースタイプ';
$s['tHeadDescription'] = '説明';
$s['tHeadArchitectures'] = 'アーキテクチャ';
$s['latestPublicRelease'] = '最新の公開ビルド';
$s['latestPublicReleaseSub'] = '一般的なユーザー向けに更新された最新ビルドです。';
$s['latestDevRelease'] = '最新のDev チャネル';
$s['latestDevReleaseSub'] = '新しいアイデアやリードタイムの長い機能については、信頼性の低いビルド。<br>非常に専門的なユーザーに最適です。';
$s['latestBetaRelease'] = '最新のベータチャネル';
$s['latestBetaReleaseSub'] = '今後提供されるほとんどの機能を備えたDev チャネルより信頼性の高いビルド。<br>早期導入者に最適です。';
$s['latestRPRelease'] = '最新のリリースプレビューチャネル';
$s['latestRPReleaseSub'] = '次のリリースをプレビューするための信頼性の高いビルド。<br>今後のリリースを試すのに最適です。';
$s['newlyAdded'] = '最近追加されたビルド';
$s['dateAdded'] = '追加された日付';
$s['latestCanaryRelease'] = '最新のCanary チャネル';
$s['latestCanaryReleaseSub'] = '最新のプラットフォームの変更と初期の機能を含む、不安定なビルド。<br>上級ユーザーに最適です。';
$s['checkOutAddANewBuild'] = '目的のオプションがない場合は、<i><a href="newbuild.php">新しいビルドを追加</a></i>ページをご覧ください。';

//newbuild.php
$s['addNewBuild'] = '新しいビルドを追加';
$s['newBuildNextText'] = '<i>次へ</i>ボタンをクリックして、目的のオプションで検索します。';
$s['optionsNotice'] = 'オプションのお知らせ';
$s['optionsNoticeText'] = 'ここにあるオプションは、基礎となるWindows UpdateクライアントがMicrosoftサーバーにどのように報告するかを設定します。 正しく設定しないとエラーになります。';
$s['autoSelect'] = '自動選択';
$s['thisOnly'] = '選択されたビルドのみを検索';

//known.php
$s['browseKnown'] = '既知のビルドを参照';
$s['chooseBuild'] = 'ビルドを選択';
$s['weFoundBuilds'] = '<b>%d</b>件 見つかりました。'; //<b>692</b> builds were found for your query.
$s['sortByDate'] = '結果を追加日でソート';

//fetchupd.php
$s['foundUpdates'] = '%d件 更新が見つかりました'; //Found 1 update(s)
$s['foundTheseUpdates'] = '次の更新が見つかりました。目的の更新の名前をクリックして続行します。';
$s['buildNumber'] = 'ビルド番号: %s'; //Build number: 18890.1000

//selectlang.php
$s['selectLangFor'] = '%s の言語を選択'; //Select language for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['chooseLang'] = '言語を選択';
$s['chooseLangDesc'] = '利用したい言語を選択してください';
$s['allLangs'] = 'すべての言語';
$s['allFiles'] = 'すべてのファイル';
$s['selectLangInfoText1'] = '<i>次へ</i>ボタンをクリックして、目的のエディションを選択します。';
$s['browseFiles'] = 'ファイルを参照';
$s['browseFilesDesc'] = '選択したビルドのファイルをすばやく参照する';
$s['searchFiles'] = 'ファイルを検索';
$s['toSearchForCUUseQuery'] = '累積的な更新プログラムを検索するには、<i>%s</i> 検索クエリを使用します。'; //To search for Cumulative Updates use the <i>Windows10 KB</i> search query.
$s['aboutBuild'] = 'ビルド情報';
$s['downloadNotAvailable'] = 'ダウンロードは見つかりません';
$s['processingUpdate'] = 'ビルドを処理中…';
$s['noLangsAvailablev2'] = 'このビルドはISOイメージに変換できません。<br>詳細は FAQ を参照してください。';
$s['updateIsBlockedv2'] = 'この更新には、ISOの作成を妨げる既知の問題があります。<br>詳細は FAQ を参照してください。';
$s['updateNotProcessedv2'] = 'このビルドは処理中のため、ダウンロードオプションはまだ利用できません。<br>しばらくしてから、もう一度お試しください。';

//selectedition.php
$s['selectEditionFor'] = '%s のエディションを選択'; //Select edition for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States)
$s['chooseEdition'] = 'エディションを選択';
$s['chooseEditionDesc'] = '利用したいエディションを選択してください';
$s['allEditions'] = 'すべてのエディション';
$s['selectEditionInfoText'] = '<i>次へ</i>ボタンをクリックして概要ページを開きます。';
$s['additionalEditionsInfo'] = '<b>追加エディション</b>が必要な場合右の表を参照してください。記載されてる<b>必要なエディション</b>を選択し<i>次へ</i>をクリックしてください。<br>そして概要ページで<b>追加エディションの選択</b>を選択してください。';
$s['showHiddenEditions'] = '隠しエディションを表示 (推奨しません)';

//download.php
$s['summary'] = '概要';
$s['summaryDesc'] = '選択内容を確認し、ダウンロード方法を選択';
$s['summaryFor'] = '%s の概要'; //Summary for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States), Windows 10 Pro
$s['summaryOfSelection'] = '選択内容の概要';
$s['browseList'] = 'ファイル一覧を検索';
$s['browseListDesc'] = '手動ダウンロード用に設定されたUUP内のファイルのリストが含まれるページを開きます。';
$s['aria2Opt1'] = 'UUPセットをダウンロード';
$s['aria2Opt1Desc'] = '選択したUUPセットを aria2 で簡単にダウンロードできます。';
$s['aria2Opt2'] = 'ダウンロードしてISOに変換';
$s['aria2Opt2Desc'] = '選択したUUPセットを aria2 で簡単にダウンロードした後にISOに変換できます。';
$s['aria2Opt3'] = 'ダウンロード、エディションの追加、ISOへの変換';
$s['aria2Opt3Desc'] = '選択したUUPセットを aria2 で簡単にダウンロードし、追加のエディションを作成した後にISOイメージに変換します。';
$s['aria2Opt4'] = '更新のダウンロードパッケージを作成';
$s['jsRequiredToConf'] = 'このオプションを設定して使用するには、JavaScriptが必要です。';
$s['selAdditionalEditions'] = '追加エディションの選択';
$s['noAdditionalEditions'] = '選択したエディションで使用できる追加エディションはありません。';
$s['learnMore'] = '詳しく見る';
$s['learnMoreAdditionalEditions1'] = 'このオプションは、選択した追加エディションの自動作成を有効にします。';
$s['learnMoreAdditionalEditions2'] = '追加エディションのリストは、選択した基本エディションによって決まります。以下では、目的の追加エディションを作成するために必要な基本エディションのリストを確認できます:';
$s['learnMoreUpdates1'] = '更新は、変換スクリプトが次のシステムで実行された場合にのみ、変換されたイメージに統合されます:';
$s['learnMoreUpdates2'] = '他のシステムで変換スクリプトを実行すると、更新は変換されたイメージに統合されません。';
$s['systemWithAdk'] = 'Windows 10 ADK がインストールされている %s'; //Windows 7 with Windows 10 ADK installed
$s['additionalUpdates'] = '追加の更新';
$s['additionalUpdatesDesc'] = 'このUUPセットでは、変換プロセス中に追加の更新を統合するように設定しているため作成時間が大幅に増加する恐れがあります。';
$s['browseUpdatesList'] = '更新プログラムの一覧を参照する';
$s['selectDownloadOptions'] = 'ダウンロードオプションを選択';
$s['selectDownloadOptionsSub'] = '選択した項目をダウンロードする方法を設定します';
$s['downloadMethod'] = 'ダウンロード方法';
$s['conversionOptions'] = '変換オプション';
$s['convOpt1'] = 'install.wimの代わりにinstall.esdを使用してISOを作成する';
$s['convOpt2'] = '可能な場合は更新プログラムをISOに統合する (Windowsコンバータのみ)';
$s['convOpt3'] = '更新プログラムの統合後にクリーンアップを実行する (Windowsコンバータのみ)';
$s['convOpt4'] = 'NET Framework 3.5 をISOに統合する(Windowsコンバータのみ)';
$s['startDownload'] = 'ダウンロードパッケージを作成';
$s['legalCopeHarder'] = '<i>ダウンロードパッケージを作成</i>ボタンをクリックすると、以下の内容に同意したことになります：';
$s['legalCope1'] = 'UUP dumpが提供するスクリプトを使用して作成されたインストールイメージは、<b>評価目的にのみ使用されます</b>。';
$s['legalCope2'] = 'イメージおよびその展開は、Microsoft Corporationによっていかなる形でも<b>サポートされていません</b>。';
$s['legalCope3v2'] = '開発者たちは、ウェブサイトの誤用によって生じたいかなる<b>損害にも責任を負いません</b>。';
$s['win1122h2OrLaterv2'] = 'ISOイメージを作成するには、Windowsを使用する必要があります。';
$s['requiresWindows102004v2'] = 'このビルドのISOイメージを作成するには、Windows 10のバージョン2004やWindows 11などの最新バージョンのWindowsを使用する必要があります。他のプラットフォームでは動作しません。';

//get.php
$s['listOfFilesFor'] = '%s のファイル一覧'; //List of files for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['totalSizeOfFiles'] = '合計ファイルサイズ: %s'; //Total size of files: 2.86 GiB
$s['fileRenamingScript'] = 'ファイル名変更スクリプト';
$s['fileRenamingScriptDesc1'] = 'このスクリプトを使用すると、ダウンロードしたファイルの名前をすばやく変更できます。';
$s['fileRenamingScriptDesc2'] = '以下のフォームの内容を<code>cmd</code>拡張子の新しいファイルにコピペし、ダウンロードしたファイルのあるフォルダに入れて実行します。';
$s['sha1File'] = 'SHA-1 チェックサムファイル';
$s['sha1FileDesc'] = 'このファイルを使用すると、ファイルが正しくダウンロードされたことをすばやく確認できます。';
$s['aria2NoticeTitle'] = 'aria2を利用したダウンロードについて';
$s['aria2NoticeText1'] = 'aria2を使用したダウンロードでは、ダウンロードに必要なアーカイブを作成しダウンロードします。このアーカイブには、選択したタスクを実行するために必要なすべてのファイルが含まれています。';
$s['aria2NoticeText2'] = 'ダウンロードを開始するには、ダウンロードに利用するプラットフォームに合わせたスクリプトを実行する必要があります:';
$s['aria2NoticeText3'] = 'Aria2はオープンソースのプロジェクトです。こちらを参照してください: %s.'; //Aria2 is an open source project. You can find it here: https://aria2.github.io/.
$s['aria2NoticeText4'] = 'UUP変換スクリプト(Windows版)は%sによって作成されました。'; //UUP Conversion script (Windows version) has been created by abbodi1406.
$s['aria2NoticeText5'] = 'UUP変換スクリプト(Linux版、macOS版)はオープンソースのプロジェクトです。こちらを参照してください: %s.'; //UUP Conversion script (Linux version, macOS version) is open source. You can find it here: https://github.com/uup-dump/converter.

//findfiles.php
$s['findFilesIn'] = '%s のファイルを検索'; //Find files in Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['fileRenamingScriptDescFindFiles'] = 'このページからダウンロードしたファイルの名前をすばやく変更するには、名前変更スクリプトを生成します。これにより、自動的に名前が変更されます。';
$s['fileRenamingScriptGenW'] = '名前変更スクリプトの生成 (Windows)';
$s['fileRenamingScriptGenL'] = '名前変更スクリプトを生成(Linux、macOS)';
$s['searchForFiles'] = 'ファイルを検索...';
$s['weFoundFiles'] = '<b>%d</b>個 のファイルが見つかりました。'; //We have found <b>692</b> files for your query.
$s['sizeOfShownFiles'] = '表示したファイルの合計サイズ: %s'; //Size of shown files: 2.86 GiB

//Error pages
$s['error'] = 'Error';
$s['arm64Warning2023'] = '<b>これは<a href="https://support.microsoft.com/ja-jp/windows/477f51df-2e3b-f68f-31b0-06f5e4f8ebb5">ARM64</a>ビルド。</b> UUP dumpの開発者たちは、互換性のあるデバイスをひとつも持っておらず、<b>まったくサポートを提供できません</b>。';

//Error messages
$s['error_ERROR'] = '一般エラー.';
$s['error_UNSUPPORTED_API'] = 'インストールされているAPIのバージョンは、このバージョンのUUP dumpと互換性がありません。';
$s['error_NO_FILEINFO_DIR'] = 'fileinfoディレクトリが存在しません。';
$s['error_NO_BUILDS_IN_FILEINFO'] = 'fileinfoデータベースにビルドが含まれていません。';
$s['error_SEARCH_NO_RESULTS'] = '実行されたクエリのアイテムが見つかりませんでした。';
$s['error_UNKNOWN_ARCH'] = '不明なプロセッサアーキテクチャです。';
$s['error_UNKNOWN_RING'] = '不明なチャネルです。';
$s['error_UNKNOWN_FLIGHT'] = '不明なフライトです。';
$s['error_UNKNOWN_COMBINATION'] = 'フライトとチャネルの組み合わせが間違っています。「フライティングをスキップ」は、Insider Fast チャネルだけでサポートされています。';
$s['error_ILLEGAL_BUILD'] = '指定されたビルド番号が %d より小さいか %d より大きいです。'; //Specified build number is less than 9841 or larger than 2147483646.
$s['error_ILLEGAL_MINOR'] = '指定されたマイナービルドが正しくありません。';
$s['error_NO_UPDATE_FOUND'] = 'サーバは更新を返しませんでした。';
$s['error_XML_PARSE_ERROR'] = 'XMLの解析に失敗しました。Microsoftサーバに問題がある可能性があります。後でもう一度お試しください。';
$s['error_EMPTY_FILELIST'] = 'サーバは空のファイルリストを返しました。';
$s['error_NO_FILES'] = '選択できるファイルはありません。';
$s['error_NOT_FOUND'] = '指定した項目は見つかりません。';
$s['error_MISSING_FILES'] = '選択したUUPセットに不足しているファイルがあります。';
$s['error_NO_METADATA_ESD'] = '選択できるメタデータESDファイルがありません。';
$s['error_UNSUPPORTED_LANG'] = '指定した言語はサポートされていません。';
$s['error_UNSPECIFIED_LANG'] = '言語が指定されていません。';
$s['error_UNSUPPORTED_EDITION'] = '指定したエディションはサポートされていません。';
$s['error_UNSUPPORTED_COMBINATION'] = '言語とエディションの組み合わせが正しくありません。';
$s['error_NOT_CUMULATIVE_UPDATE'] = '選択した更新プログラムに累積更新プログラムが含まれていません。';
$s['error_UPDATE_INFORMATION_NOT_EXISTS'] = '指定された更新プログラムに関する情報がデータベースに存在しません。';
$s['error_KEY_NOT_EXISTS'] = '指定されたキーは更新情報に存在しません。';
$s['error_UNSPECIFIED_UPDATE'] = '更新IDが指定されていません。';
$s['error_INCORRECT_ID'] = '指定された更新IDが正しくありません。指定された更新IDが正しいことを確認してください。';
$s['error_RATE_LIMITED'] = 'レート制限が課せられています。数秒後にもう一度お試しください。';
$s['error_UNSPECIFIED_VE'] = '追加のエディションを選択していません。追加のエディションを作成したくない場合は <i>aria2を使用してダウンロード後に変換</i> のオプションを使用してください。';
$s['error_VE_UNAVAILABLE'] = '指定した項目では、追加エディションはサポートされていません。';
$s['error_INVALID_PAGE'] = '指定されたページが無効';
$s['error_WU_REQUEST_FAILED'] = 'Windows Updateサービスへのリクエストが失敗になりました。';
$s['errorNoMessage'] = 'エラーメッセージは利用できません.';

//Languages
$s['lang_neutral'] = '言語中立';
$s['lang_ar-sa'] = 'アラビア語（サウジアラビア）';
$s['lang_bg-bg'] = 'ブルガリア語';
$s['lang_cs-cz'] = 'チェコ語';
$s['lang_da-dk'] = 'デンマーク語';
$s['lang_de-de'] = 'ドイツ語';
$s['lang_el-gr'] = 'ギリシャ語';
$s['lang_en-gb'] = '英語（イギリス）';
$s['lang_en-us'] = '英語（米国）';
$s['lang_es-es'] = 'スペイン語（スペイン）';
$s['lang_es-mx'] = 'スペイン語（メキシコ）';
$s['lang_et-ee'] = 'エストニア語';
$s['lang_fi-fi'] = 'フィンランド語';
$s['lang_fr-ca'] = 'フランス語（カナダ）';
$s['lang_fr-fr'] = 'フランス語（フランス）';
$s['lang_he-il'] = 'ヘブライ語';
$s['lang_hr-hr'] = 'クロアチア語';
$s['lang_hu-hu'] = 'ハンガリー語';
$s['lang_it-it'] = 'イタリア語';
$s['lang_ja-jp'] = '日本語';
$s['lang_ko-kr'] = '韓国語';
$s['lang_lt-lt'] = 'リトアニア語';
$s['lang_lv-lv'] = 'ラトビア語';
$s['lang_nb-no'] = 'ノルウェー語（ブークモール）';
$s['lang_nl-nl'] = 'オランダ語';
$s['lang_pl-pl'] = 'ポーランド語';
$s['lang_pt-br'] = 'ポルトガル語（ブラジル）';
$s['lang_pt-pt'] = 'ポルトガル語（ポルトガル）';
$s['lang_qps-ploc'] = '擬似言語';
$s['lang_ro-ro'] = 'ルーマニア語';
$s['lang_ru-ru'] = 'ロシア語';
$s['lang_sk-sk'] = 'スロバキア語';
$s['lang_sl-si'] = 'スロベニア語';
$s['lang_sr-latn-rs'] = 'セルビア語（ラテン）';
$s['lang_sv-se'] = 'スウェーデン語';
$s['lang_th-th'] = 'タイ語';
$s['lang_tr-tr'] = 'トルコ語';
$s['lang_uk-ua'] = 'ウクライナ語';
$s['lang_zh-cn'] = '中国語（簡体字）';
$s['lang_zh-hk'] = '中国語（香港）';
$s['lang_zh-tw'] = '中国語（繁体字）';

//Channels
$s['channel_canary'] = 'Canary チャネル';
$s['channel_skipAhead'] = 'Skip Ahead';
$s['channel_dev'] = 'Dev チャネル';
$s['channel_beta'] = 'ベータチャネル';
$s['channel_releasepreview'] = 'リリースプレビューチャネル';
$s['channel_retail'] = '市販';

//Editions
$s['edition_APP'] = 'Microsoft Storeのプリインストール(Inbox)アプリ';
$s['edition_APP_MOMENT'] = 'Microsoft StoreのMomentアプリ';
$s['edition_FOD'] = 'オンデマンド機能';
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
