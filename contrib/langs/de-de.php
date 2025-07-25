<?php
/*
UUP dump translation file.

Translation information:
English language name: German
Localized language name: Deutsch
Language code: de-DE
Author: UUP dump authors and contributors
*/

//Language information
$s['code'] = 'de-DE';
$s['timeZone'] = 'Europe/Berlin'; //Supported timezones: https://www.php.net/manual/en/timezones.php

//shared strings
$s['uupdump'] = 'UUP dump';
$s['uupdumpSub'] = '%s - UUP dump'; //Browse known builds - UUP dump
$s['build'] = 'Build';
$s['arch'] = 'Architektur';
$s['ring'] = 'Kanal';
$s['updateid'] = 'Update ID';
$s['update'] = 'Update';
$s['lang'] = 'Sprache';
$s['edition'] = 'Edition';
$s['seachForBuilds'] = 'Suche nach Builds...';
$s['no'] = 'Nein';
$s['yes'] = 'Ja';
$s['yesRecommended'] = 'Ja (empfohlen)';
$s['next'] = 'Weiter';
$s['ok'] = 'OK';
$s['cancel'] = 'Abbrechen';
$s['information'] = 'Information';
$s['totalDlSize'] = 'Gesamte Download-Größe';
$s['file'] = 'Datei';
$s['expires'] = 'Verfällt';
$s['sha1'] = 'SHA-1';
$s['size'] = 'Größe';
$s['additionalEdition'] = 'Zusätzliche Edition';
$s['requiredEdition'] = 'Erforderliche Edition';
$s['unknown'] = 'Unbekannt';

//global
$s['home'] = 'Startseite';
$s['downloads'] = 'Downloads';
$s['lightMode'] = 'Heller Modus';
$s['darkMode'] = 'Dunkler Modus';
$s['sourceCode'] = 'Quellcode';
$s['menu'] = 'Menü';
$s['websiteDesc'] = 'Laden Sie UUP-Dateien von Windows Update-Servern mit Leichtigkeit herunter. Dieses Projekt ist nicht mit der Microsoft Corporation verbunden.';
$s['notAffiliated'] = 'Dieses Projekt ist nicht mit der Microsoft Corporation verbunden. Windows ist ein eingetragenes Warenzeichen der Microsoft Corporation.';
$s['copyright'] = '© %d %s und Mitwirkende.'; //© 2019 whatever127 and contributors.
$s['copyrightNew'] = '© %d UUP Dump Autoren und Mitwirkende.';
$s['selectLanguage'] = 'Bitte wählen Sie Ihre Sprache aus';
$s['uupDumpDesc'] = 'Mit dem UUP Dump können Sie Unified Update Plattform-Dateien, wie Windows Insider Updates, direkt von Windows Update herunterladen.';
$s['uupDumpDescSub'] = '%s über UUP-Dump. Mit dem UUP Dump können Sie Unified Update Plattform-Dateien, wie Windows Insider Updates, direkt von Windows Update herunterladen.'; //Select language for Windows 11 Insider Preview 25188.1000 (rs_prerelease) amd64 on UUP dump. UUP dump lets you download Unified Update Platform files, like Windows Insider updates, directly from Windows Update.
$s['themeButton'] = 'Erscheinungsbild';
$s['selectTheme'] = 'Erscheinungsbild auswählen';
$s['themeAuto'] = 'Automatisch';
$s['themeLight'] = 'Hell';
$s['themeDark'] = 'Dunkel';
$s['themeLegacy'] = 'Legacy';

//index.php
$s['slogan'] = 'Laden Sie UUP-Dateien von Windows Update-Servern mit Leichtigkeit herunter.';
$s['quickOptions'] = 'Schnelle Optionen';
$s['tHeadReleaseType'] = 'Release-Typen';
$s['tHeadDescription'] = 'Beschreibung';
$s['tHeadArchitectures'] = 'Architekturen';
$s['latestPublicRelease'] = 'Letzter Build der öffentlichen Version';
$s['latestPublicReleaseSub'] = 'Neuester aktualisierter Build für normale Benutzer.';
$s['latestDevRelease'] = 'Neueste Dev Channel-Version';
$s['latestDevReleaseSub'] = 'Etwas unzuverlässigere Builds mit den neuesten Funktionen. Ideal für hochtechnische Benutzer.';
$s['latestBetaRelease'] = 'Neueste Beta Channel-Version';
$s['latestBetaReleaseSub'] = 'Zuverlässigere Builds mit den meisten verfügbaren Funktionen. Ideal für Personen, die gerne früh neue Funktionen wollen.';
$s['latestRPRelease'] = 'Neueste Release Vorschau-Version';
$s['latestRPReleaseSub'] = 'Zuverlässiges Build für die Vorschau auf die nächste Version. Ideal zum Ausprobieren kommender öffentlichen Versionen.';
$s['advOptions'] = 'Erweiterte Optionen';
$s['browseBuilds'] = 'Bekannte Builds durchsuchen.';
$s['browseBuildsSub'] = 'Wählen Sie ein bereits bekanntes Build aus und laden Sie es herunter.';
$s['fetchLatest'] = 'Hole den aktuellen Build';
$s['fetchLatestSub'] = 'Abrufen der neuesten Buildinformationen von Windows Update-Servern.';
$s['newlyAdded'] = 'Kürzlich hinzugefügte Builds';
$s['dateAdded'] = 'Datum des Hinzufügens';
$s['latestCanaryRelease'] = 'Letzte Canary Channel-Version';
// $s['latestCanaryReleaseSub'] = 'Somewhat unstable builds with latest platform changes and early features. Ideal for highly technical users.';
$s['checkOutAddANewBuild'] = 'Nicht die gewünschte Option gefunden? Schau doch mal auf der <i><a href="newbuild.php">Neuen Build hinzufügen</a></i> Seite nach.';

//newbuild.php
$s['newBuild'] = 'Neuer Build';
$s['addNewBuild'] = 'Neuen Build hinzufügen';
$s['selectOptions'] = 'Optionen auswählen';
$s['newBuildNextText'] = 'Klicken Sie auf die Schaltfläche <i>Weiter</i>, um mit den angegebenen Optionen zu suchen.';
$s['newBuildUsing'] = 'Verwendung dieser Seite';
$s['newBuildUsingText'] = 'This page is meant to be used by advanced users, who would like to add a build not found on the website. In case you want to use one of the most commonly used parameters, please use one of the <i>Quick options</i> found on the home page.';
$s['newBuildUsingText'] = 'Diese Seite ist für fortgeschrittene Benutzer gedacht, die einen Build hinzufügen möchten, der auf der Website nicht gefunden wurde. Wenn Sie einen der am häufigsten verwendeten Parameter verwenden möchten, verwenden Sie bitte eine der <i>Schnellen Optionen</i> auf der Startseite.';
$s['optionsNotice'] = 'Hinweis zu den Optionen';
$s['optionsNoticeText'] = 'Die hier gefundenen Optionen konfigurieren, wie der zugrunde liegende Windows Update-Client sich den Microsoft-Servern meldet. Es ist wichtig, diese richtig einzustellen, sonst erhalten Sie einen Fehler.';

//known.php
$s['browseKnown'] = 'Durchsuchen der bekannten Builds';
$s['chooseBuild'] = 'Build auswählen';
$s['weFoundBuilds'] = 'Wir haben <b>%d</b> Builds wurden für Ihre Anfrage gefunden.'; //We have found <b>692</b> builds for your query.
$s['sortByDate'] = 'Ergebnisse nach Datum sortieren';
$s['nextPage'] = 'Weiter';
$s['previousPage'] = 'Zurück';
$s['pageOf'] = 'Seite %d von %d'; //Page 1 of 48

//fetchupd.php
$s['responseFromServer'] = 'Antwort des Servers';
$s['foundUpdates'] = 'Gefunden %d Aktualisierung(en)'; //Found 1 update(s)
$s['foundTheseUpdates'] = 'Die folgenden Updates wurden gefunden. Klicken Sie auf den Namen des gewünschten Updates, um fortzufahren.';
$s['buildNumber'] = 'Build-Nummer: %s'; //Build number: 18890.1000

//selectlang.php
$s['selectLangFor'] = 'Sprache auswählen für %s'; //Select language for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['chooseLang'] = 'Sprache auswählen';
$s['chooseLangDesc'] = 'Wählen Sie Ihre gewünschte Sprache';
$s['allLangs'] = 'Alle Sprachen';
$s['selLangFiles'] = 'Dateien';
$s['allFiles'] = 'Alle Dateien';
$s['wubOnly'] = 'Nur WindowsUpdateBox';
$s['updateOnly'] = 'Nur Update';
$s['selectLangInfoText1'] = 'Klicken Sie auf die Schaltfläche <i>Weiter</i>, um die gewünschte Edition auszuwählen.';
$s['selectLangInfoText2'] = 'WindowsUpdateBox.exe und Kumulatives Update finden Sie unter Sprache <i>Alle Sprachen</i>.';
$s['allLangsWarn'] = 'Die Option <i>Alle Sprachen</i> unterstützt keine Editionsauswahl.';
$s['clickNextToOpenFindFiles'] = 'Klicken Sie auf die Schaltfläche <i>Weiter</i>, um die Seite zu öffnen, die das Finden der Dateien ermöglicht.';
$s['noLangsAvailable'] = 'Es sind keine Sprachen für diesen Build verfügbar.<br>Dieser Build kann nicht in ein ISO-Image konvertiert werden.<br>Siehe die FAQ für Details.';
$s['browseFiles'] = 'Dateien durchsuchen';
$s['browseFilesDesc'] = 'Schnelles Durchsuchen von Dateien im ausgewählten Build';
$s['searchFiles'] = 'Dateien suchen';
$s['toSearchForCUUseQuery'] = 'Um nach kumulativen Updates zu suchen, verwenden Sie die Suchanfrage <i>%s</i>.'; //To search for Cumulative Updates use the <i>Windows10 KB</i> search query.
$s['updateNotProcessed'] = 'UUP dump hat die Metadaten dieses Updates noch nicht verarbeitet - dies geschieht automatisch einmal alle %d Minuten. Bis dahin können Sie nur die Dateiliste dieses Updates durchsuchen.';
$s['updateIsBlocked'] = 'Dieses Update hat bekannte Probleme, die die Erstellung einer funktionierenden ISO-Datei verhindern. Aus diesem Grund können Sie die Dateien nur manuell durchsuchen.';

//selectedition.php
$s['selectEditionFor'] = 'Edition auswählen für %s'; //Select edition for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States)
$s['chooseEdition'] = 'Edition auswählen';
$s['chooseEditionDesc'] = 'Wählen Sie die gewünschte Edition aus';
$s['allEditions'] = 'Alle Editionen';
$s['selectEditionInfoText'] = 'Klicken Sie auf die Schaltfläche <i>Weiter</i>, um die Zusammenfassungsseite Ihrer Auswahl zu öffnen.';
$s['additionalEditionsInfo'] = 'Wenn Sie eine zusätzliche Edition benötigen, die Sie in der rechten Tabelle finden, wählen sie die Erforderliche Edition und klicken Sie auf <i>Weiter</i>. Wählen Sie auf der Zusammenfassungsseite die Option <b>Herunterladen, zusätzliche Editionen hinzufügen und in eine ISO konvertieren</b> aus.';
$s['showHiddenEditions'] = 'Ausgeblendete Editionen anzeigen (nicht empfohlen)';

//download.php
$s['summary'] = 'Zusammenfassung';
$s['summaryDesc'] = 'Überprüfen Sie Ihre Auswahl und wählen Sie die Download-Methode.';
$s['summaryFor'] = 'Zusammenfassung für %s'; //Summary for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States), Windows 10 Pro
$s['summaryOfSelection'] = 'Zusammenfassung Ihrer Auswahl';
$s['browseList'] = 'Dateiliste durchsuchen';
$s['browseListDesc'] = 'Öffnet eine Seite mit einer Liste der Dateien im UUP-Set für den manuellen Download.';
$s['aria2Opt1'] = 'UUP-Paket herunterladen';
$s['aria2Opt1Desc'] = 'Laden Sie das ausgewählte UUP-Set einfach mit aria2 herunter.';
$s['aria2Opt2'] = 'Herunterladen und Konvertieren in eine ISO';
$s['aria2Opt2Desc'] = 'Laden Sie das ausgewählte UUP-Set mit aria2 einfach herunter und konvertieren Sie es in eine ISO.';
$s['aria2Opt3'] = 'Herunterladen, zusätzliche Editionen hinzufügen und in eine ISO konvertieren';
$s['aria2Opt3Desc'] = 'Laden Sie das ausgewählte UUP-Set mit aria2 einfach herunter, konvertieren es, erstellen Sie zusätzliche Editionen und erstellen Sie schließlich ein ISO-Image.';
$s['aria2Opt4'] = 'Download-Paket für diese Updates erstellen';
$s['jsRequiredToConf'] = 'Für die Konfiguration und Verwendung dieser Option ist JavaScript erforderlich.';
$s['selAdditionalEditions'] = 'Zusätzliche Editionen auswählen';
$s['noAdditionalEditions'] = 'Für die von Ihnen ausgewählten Editionen sind keine zusätzlichen Editionen verfügbar.';
$s['learnMore'] = 'Mehr Infos';
$s['learnMoreAdditionalEditions1'] = 'Diese Option ermöglicht die automatische Erstellung der ausgewählten zusätzlichen Editionen.';
$s['learnMoreAdditionalEditions2'] = 'Die Liste der zusätzlichen Editionen wird durch die ausgewählte Basiseditionen bestimmt. Unten können Sie eine Liste der Basiseditionen einsehen, die benötigt werden, um die gewünschten zusätzlichen Editionen zu erstellen:';
$s['learnMoreUpdates1'] = 'Aktualisierungen werden nur dann in das konvertierte Image integriert, wenn das Konvertierungsskript auf den folgenden Systemen ausgeführt wird:';
$s['learnMoreUpdates2'] = 'Wenn Sie das Konvertierungsskript auf einem anderen System ausführen, werden Updates nicht in das konvertierte Image integriert.';
$s['systemWithAdk'] = '%s mit installiertem Windows 10 ADK'; //Windows 7 with Windows 10 ADK installed
$s['additionalUpdates'] = 'Zusätzliche Updates';
$s['additionalUpdatesDesc'] = 'Dieses UUP-Set enthält zusätzliche Updates, die während des Konvertierungsprozesses integriert werden und die Erstellungszeit deutlich erhöhen.';
$s['browseUpdatesList'] = 'Durchsuchen der Update-Liste';
$s['selectDownloadOptions'] = 'Wählen Sie Ihre Download-Optionen aus';
$s['selectDownloadOptionsSub'] = 'Konfigurieren Sie, wie Sie Ihre Auswahl herunterladen möchten';
$s['downloadMethod'] = 'Download-Methode';
$s['conversionOptions'] = 'Konvertierungsoptionen';
$s['convOpt1'] = 'ISO mit einer install.esd anstelle einer install.wim erstellen';
$s['convOpt2'] = 'Updates integrieren, wenn verfügbar (nur Windows-Konverter)';
$s['convOpt3'] = 'Bereinigung nach der Update-Integration durchführen (nur Windows-Konverter)';
$s['convOpt4'] = 'Integration von.NET Framework 3.5 (nur Windows-Konverter)';
$s['startDownload'] = 'Downloadpaket erstellen';
$s['legalCopeHarder'] = 'Indem Sie auf die Schaltfläche <i>Downloadpaket erstellen</i> klicken, erklären Sie sich mit Folgendem einverstanden:';
$s['legalCope1'] = 'Installations-Images, die mit den von UUP dump zur Verfügung gestellten Skripten erstellt wurden, sind nur für <b>Evaluierungszwecke</b> gedacht.';
$s['legalCope2'] = 'Die Images und ihre Bereitstellung werden <b>nicht in irgendeiner Weise von der Microsoft Corporation unterstützt</b>';
$s['legalCope3v2'] = '<b>Die Autoren haften nicht für Schäden</b>, die durch falschen Gebrauch dieser Webseite entstehen können.';
$s['win1122h2OrLaterv2'] = 'Windows wird benötigt, um eine ISO-Datei zu erstellen';
$s['requiresWindows102004v2'] = 'Sie müssen eine moderne Version von Windows 10, version 2004 oder Windows 11 verwenden, um eine ISO-Datei für diesen Build zu erstellen. Andere Plattformen werden nicht funktionieren.';

//get.php
$s['listOfFilesFor'] = 'Liste der Dateien für %s'; //List of files for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['totalSizeOfFiles'] = 'Dateigröße insgesamt: %s'; //Total size of files: 2.86 GiB
$s['fileRenamingScript'] = 'Datei-Umbenennungsskript';
$s['fileRenamingScriptDesc1'] = 'Das untenstehende Skript kann verwendet werden, um heruntergeladene Dateien schnell umzubenennen.';
$s['fileRenamingScriptDesc2'] = 'Kopieren Sie einfach den Inhalt des untenstehenden Formulars in eine neue Datei mit der Dateiendung <code>cmd</code>, legen Sie dieses in den Ordner mit den heruntergeladenen Dateien und starten Sie dieses.';
$s['sha1File'] = 'SHA-1 Prüfsummen-Datei';
$s['sha1FileDesc'] = 'Mit dieser Datei können Sie schnell überprüfen, ob die Dateien korrekt heruntergeladen wurden.';
$s['aria2NoticeTitle'] = 'Informationen über die Option Download mit dem Programm aria2';
$s['aria2NoticeText1'] = 'Die Optionen <i>Download mit aria2</i> erstellt ein Archiv zum Herunterladen. Das heruntergeladene Archiv enthält alle Dateien, die für die Durchführung der ausgewählten Aufgabe erforderlich sind.';
$s['aria2NoticeText2'] = 'Um den Download-Prozess zu starten, verwenden Sie das Skript für Ihre Plattform:';
$s['aria2NoticeText3'] = 'Aria2 ist ein Open-Source-Projekt. Sie finden es hier: %s.'; //Aria2 is an open source project. You can find it here: https://aria2.github.io/.
$s['aria2NoticeText4'] = 'Das UUP Konvertierungsskript (Windows-Version) wurde erstellt von %s.'; //UUP Conversion script (Windows version) has been created by abbodi1406.
$s['aria2NoticeText5'] = 'Das UUP-Konvertierungsskript (Linux-Version, macOS-Version) ist Open Source. Sie finden es hier: %s.'; //UUP Conversion script (Linux version) is open source. You can find it here: https://github.com/uup-dump/converter.

//findfiles.php
$s['findFilesIn'] = 'Dateien finden in %s'; //Find files in Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['fileRenamingScriptDescFindFiles'] = 'Wenn Sie Dateien, die Sie von dieser Seite herunterladen, schnell umbenennen möchten, können Sie ein Umbenennungsskript generieren, das dies automatisch für Sie erledigt.';
$s['fileRenamingScriptGenW'] = 'Umbenennungsskript generieren (Windows)';
$s['fileRenamingScriptGenL'] = 'Umbenennungsskript generieren (Linux, macOS)';
$s['searchForFiles'] = 'Nach Dateien suchen...';
$s['weFoundFiles'] = 'Wir haben <b>%d</b> Dateien für Ihre Anfrage gefunden.'; //We have found <b>692</b> files for your query.
$s['sizeOfShownFiles'] = 'Größe der gezeigten Dateien: %s'; //Size of shown files: 2.86 GiB

//Error pages
$s['error'] = 'Fehler';
$s['requestNotSuccessful'] = 'Anfrage nicht erfolgreich';
$s['anErrorHasOccurred'] = 'Beim Versuch, Ihre Anfrage zu bearbeiten, ist ein Fehler aufgetreten.';
$s['arm64Warning2023'] = 'Dies ist ein <a href="https://support.microsoft.com/de-de/windows/477f51df-2e3b-f68f-31b0-06f5e4f8ebb5">ARM64</a> Build. UUP dump-Autoren haben kein einziges Gerät, das damit kompatibel ist, und kann daher keinerlei Unterstützung anbieten.';

//Error messages
$s['error_ERROR'] = 'Allgemeiner Fehler.';
$s['error_UNSUPPORTED_API'] = 'Die installierte API-Version ist nicht kompatibel mit dieser Version von UUP dump.';
$s['error_NO_FILEINFO_DIR'] = 'Das Dateiinformations Verzeichnis existiert nicht.';
$s['error_NO_BUILDS_IN_FILEINFO'] = 'Die Dateiinformations Datenbank enthält kein Build.';
$s['error_SEARCH_NO_RESULTS'] = 'Es konnten keine Elemente für die angegebene Abfrage gefunden werden.';
$s['error_UNKNOWN_ARCH'] = 'Unbekannte Prozessorarchitektur.';
$s['error_UNKNOWN_RING'] = 'Unbekannter Kanal.';
$s['error_UNKNOWN_FLIGHT'] = 'Unbekannter flight.';
$s['error_UNKNOWN_COMBINATION'] = 'Die Flight und Ring Kombination ist nicht korrekt. Skip ahead wird nur für den Insider Fast Ring unterstützt.';
$s['error_ILLEGAL_BUILD'] = 'Die angegebene Build-Nummer ist kleiner als %d oder größer als %d.'; //Specified build number is less than 9841 or larger than 2147483646.
$s['error_ILLEGAL_MINOR'] = 'Die angegebene Build-Nummer ist falsch.';
$s['error_NO_UPDATE_FOUND'] = 'Der Server hat keine Updates zurückgegeben.';
$s['error_XML_PARSE_ERROR'] = 'Das Parsen der XML-Antwort ist fehlgeschlagen. Dies kann auf ein vorübergehendes Problem mit den Microsoft-Servern hinweisen. Versuchen Sie es später noch einmal.';
$s['error_EMPTY_FILELIST'] = 'Der Server hat eine leere Liste von Dateien zurückgegeben.';
$s['error_NO_FILES'] = 'Es stehen keine Dateien von Ihrer Auswahl zur Verfügung.';
$s['error_NOT_FOUND'] = 'Die angegebene Auswahl konnte nicht gefunden werden.';
$s['error_MISSING_FILES'] = 'Im ausgewählten UUP-Set fehlen einige Dateien.';
$s['error_NO_METADATA_ESD'] = 'Es stehen keine Metadaten-ESD-Dateien von Ihrer Auswahl zur Verfügung.';
$s['error_UNSUPPORTED_LANG'] = 'Die ausgewählte Sprache wird nicht unterstützt.';
$s['error_UNSPECIFIED_LANG'] = 'Die Sprache wurde nicht angegeben.';
$s['error_UNSUPPORTED_EDITION'] = 'Die ausgewählte Edition wird nicht unterstützt.';
$s['error_UNSUPPORTED_COMBINATION'] = 'Die Sprach- und Editionskombination ist nicht korrekt.';
$s['error_NOT_CUMULATIVE_UPDATE'] = 'Das ausgewählte Update enthält keine kumulativen Updates.';
$s['error_UPDATE_INFORMATION_NOT_EXISTS'] = 'Informationen über das ausgewählte Update sind in der Datenbank nicht vorhanden.';
$s['error_KEY_NOT_EXISTS'] = 'Der angegebene Schlüssel existiert nicht in den Updateinformationen.';
$s['error_UNSPECIFIED_UPDATE'] = 'Die Update-ID wurde nicht angegeben.';
$s['error_INCORRECT_ID'] = 'Die angegebene Update-ID ist nicht korrekt. Bitte stellen Sie sicher, dass die angegebene Update-ID korrekt ist.';
$s['error_RATE_LIMITED'] = 'Die Geschwindigkeit Ihrer Anfragen ist begrenzt. Bitte versuchen Sie es in wenigen Sekunden erneut.';
$s['error_UNSPECIFIED_VE'] = 'Sie haben keine zusätzliche Edition ausgewählt. Wenn Sie keine zusätzlichen Ausgaben erstellen möchten, verwenden Sie bitte die Option <i>Download mit aria2 und konvertieren</i>.';
$s['error_VE_UNAVAILABLE'] = 'Zusätzliche Editionen sind für diese Auswahl nicht verfügbar.';
$s['error_INVALID_PAGE'] = 'Angegebene Seite ist ungültig.';
$s['error_WU_REQUEST_FAILED'] = 'Eine Anfrage an den Windows Update-Dienst ist fehlgeschlagen.';
$s['errorNoMessage'] = 'Fehlermeldung ist nicht verfügbar.';

//Languages
$s['lang_ar-sa'] = 'Arabisch (Saudi-Arabien)';
$s['lang_bg-bg'] = 'Bulgarisch';
$s['lang_cs-cz'] = 'Tschechisch';
$s['lang_da-dk'] = 'Dänisch';
$s['lang_de-de'] = 'Deutsch';
$s['lang_el-gr'] = 'Griechisch';
$s['lang_en-gb'] = 'Englisch (England)';
$s['lang_en-us'] = 'Englisch (Amerika)';
$s['lang_es-es'] = 'Spanisch (Spanien)';
$s['lang_es-mx'] = 'Spanisch (Mexico)';
$s['lang_et-ee'] = 'Estnisch';
$s['lang_fi-fi'] = 'Finnisch';
$s['lang_fr-ca'] = 'Französisch (Kanada)';
$s['lang_fr-fr'] = 'Französisch (Frankreich)';
$s['lang_he-il'] = 'Hebräisch';
$s['lang_hr-hr'] = 'Kroatisch';
$s['lang_hu-hu'] = 'Ungarisch';
$s['lang_it-it'] = 'Italienisch';
$s['lang_ja-jp'] = 'Japanisch';
$s['lang_ko-kr'] = 'Koreanisch';
$s['lang_lt-lt'] = 'Litauisch';
$s['lang_lv-lv'] = 'Lettisch';
$s['lang_nb-no'] = 'Norwegisch (Bokmal)';
$s['lang_nl-nl'] = 'Niederländisch';
$s['lang_pl-pl'] = 'Polnisch';
$s['lang_pt-br'] = 'Portugisisch (Brasilien)';
$s['lang_pt-pt'] = 'Portugisisch (Portugal)';
$s['lang_qps-ploc'] = 'Pseudo';
$s['lang_ro-ro'] = 'Rumänisch';
$s['lang_ru-ru'] = 'Russisch';
$s['lang_sk-sk'] = 'Slowakisch';
$s['lang_sl-si'] = 'Slowenisch';
$s['lang_sr-latn-rs'] = 'Serbisch (Latein)';
$s['lang_sv-se'] = 'Schwedisch';
$s['lang_th-th'] = 'Thailändisch';
$s['lang_tr-tr'] = 'Türkisch';
$s['lang_uk-ua'] = 'Ukrainisch';
$s['lang_zh-cn'] = 'Chinesisch (Vereinfacht)';
$s['lang_zh-hk'] = 'Chinesisch (Hong Kong)';
$s['lang_zh-tw'] = 'Chinesisch (Traditionell)';

//Channels
$s['channel_canarychannel'] = 'Canary Channel';
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
