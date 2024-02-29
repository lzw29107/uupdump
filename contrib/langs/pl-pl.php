<?php
/*
UUP dump translation file.

Translation information:
English language name: Polish
Localized language name: polski
Language code: pl-PL
Authors: UUP dump authors and contributors
*/

//Language information
$s['code'] = 'pl-PL';
$s['timeZone'] = 'Europe/Warsaw'; //Supported timezones: https://www.php.net/manual/en/timezones.php

//shared strings
$s['uupdump'] = 'UUP dump';
$s['uupdumpSub'] = '%s - UUP dump'; //Browse known builds - UUP dump
$s['build'] = 'Kompilacja';
$s['arch'] = 'Architektura';
$s['ring'] = 'Kanał';
$s['branch'] = 'Gałąź';
$s['updateid'] = 'Identyfikator aktualizacji';
$s['update'] = 'Aktualizacja';
$s['lang'] = 'Język';
$s['edition'] = 'Edycja';
$s['seachForBuilds'] = 'Szukaj kompilacji...';
$s['no'] = 'Nie';
$s['yes'] = 'Tak';
$s['next'] = 'Dalej';
$s['ok'] = 'OK';
$s['cancel'] = 'Anuluj';
$s['information'] = 'Informacja';
$s['totalDlSize'] = 'Całkowity rozmiar pobrania';
$s['file'] = 'Plik';
$s['expires'] = 'Wygasa';
$s['sha1'] = 'SHA-1';
$s['size'] = 'Rozmiar';
$s['additionalEdition'] = 'Dodatkowa edycja';
$s['requiredEdition'] = 'Wymagana edycja';
$s['unknown'] = 'Brak danych';

//global
$s['home'] = 'Strona główna';
$s['downloads'] = 'Pobrania';
$s['faq'] = 'Często zadawane pytania';
$s['sourceCode'] = 'Kod źródłowy';
$s['menu'] = 'Menu';
$s['notAffiliated'] = 'Ten projekt nie jest powiązany z Microsoft Corporation. Windows jest zarejestrowanym znakiem towarowym firmy Microsoft Corporation.';
$s['copyrightNew'] = '© %d Autorzy oraz współtwórcy UUP dump.';
$s['selectLanguage'] = 'Proszę wybrać swój język';
$s['uupDumpDesc'] = 'UUP dump umożliwia Ci pobieranie plików Unified Update Platform, takich jak aktualizacje programu Windows Insider, bezpośrednio z usługi Windows Update.';
$s['uupDumpDescSub'] = '%s na UUP dump. UUP dump umożliwia Ci pobieranie plików Unified Update Platform, takich jak aktualizacje programu Windows Insider, bezpośrednio z usługi Windows Update.'; //Select language for Windows 11 Insider Preview 25188.1000 (rs_prerelease) amd64 on UUP dump. UUP dump lets you download Unified Update Platform files, like Windows Insider updates, directly from Windows Update.
$s['themeButton'] = 'Motyw';
$s['selectTheme'] = 'Wybierz motyw';
$s['themeAuto'] = 'Automatyczny';
$s['themeLight'] = 'Jasny';
$s['themeDark'] = 'Ciemny';
$s['themeLegacy'] = 'Starszy';

//index.php
$s['slogan'] = 'Pobieraj pliki UUP z serwerów Windows Update z łatwością.';
$s['quickOptions'] = 'Szybkie opcje';
$s['tHeadReleaseType'] = 'Rodzaj wydania';
$s['tHeadDescription'] = 'Opis';
$s['tHeadArchitectures'] = 'Architektury';
$s['latestPublicRelease'] = 'Najnowsza publicznie wydana kompilacja';
$s['latestPublicReleaseSub'] = 'Najnowsza kompilacja dla zwykłych użytkowników.';
$s['latestDevRelease'] = 'Najnowsza kompilacja kanału deweloperów';
$s['latestDevReleaseSub'] = 'Poniekąd niepewne kompilacje zawierające z dużym wyprzedzeniem nowe funkcje oraz nowe pomysły.<br>Idealne dla entuzjastów.';
$s['latestBetaRelease'] = 'Najnowsza kompilacja kanału beta';
$s['latestBetaReleaseSub'] = 'Pewne kompilacje z większością nowych funkcji.<br>Idealne dla wczesnych adaptacji.';
$s['latestRPRelease'] = 'Najnowsza kompilacja zapoznawcza';
$s['latestRPReleaseSub'] = 'Pewne kompilacje z podglądami następnego wydania.<br>Idealne do spróbowania nadchodzących wydań.';
$s['newlyAdded'] = 'Ostatnio dodane kompilacje';
$s['dateAdded'] = 'Data dodania';
$s['latestCanaryRelease'] = 'Najnowsza kompilacja kanału Canary';
$s['latestCanaryReleaseSub'] = 'Poniekąd niestabilne kompilacje z najnowszymi zmianami platformy i wczesnymi funkcjami.<br>Idealne dla wysoce kompetentnych technicznie użytkowników.';
$s['checkOutAddANewBuild'] = 'Brakuje interesującej Cię opcji? Sprawdź stronę <i><a href="newbuild.php">Dodaj nową kompilację</a></i>.';

//newbuild.php
$s['addNewBuild'] = 'Dodaj nową kompilację';
$s['newBuildNextText'] = 'Kliknij przycisk <i>Dalej</i>, aby rozpocząć wyszukiwanie przy użyciu wybranych opcji.';
$s['optionsNotice'] = 'Uwaga dotycząca opcji';
$s['optionsNoticeText'] = 'Opcje dostępne tutaj konfigurują sposób w jaki klient usługi Windows Update raportuje się serwerom firmy Microsoft. Ważne jest, aby ustawić je prawidłowo, w przeciwnym wypadku otrzymany zostanie błąd.';
$s['autoSelect'] = 'Wybór automatyczny';
$s['thisOnly'] = 'Zwróć wyłącznie podaną kompilację';

//known.php
$s['browseKnown'] = 'Przeglądaj znane kompilacje';
$s['chooseBuild'] = 'Wybierz kompilację';
$s['weFoundBuilds'] = 'Znaleziono <b>%d</b> kompilacji dla Twojego zapytania.'; //<b>692</b> builds were found for your query.
$s['sortByDate'] = 'Sortuj wyniki po dacie dodania';

//fetchupd.php
$s['foundUpdates'] = 'Odnaleziono aktualizacji: %d'; //Found 1 update(s)
$s['foundTheseUpdates'] = 'Odnaleziono następujące aktualizacje. Kliknij nazwę aktualizacji aby kontynuować.';
$s['buildNumber'] = 'Numer kompilacji: %s'; //Build number: 18890.1000

//selectlang.php
$s['selectLangFor'] = 'Wybierz język dla %s'; //Select language for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['chooseLang'] = 'Wybierz język';
$s['chooseLangDesc'] = 'Wybierz żądany język';
$s['allLangs'] = 'Wszystkie języki';
$s['allFiles'] = 'Wszystkie pliki';
$s['selectLangInfoText1'] = 'Kliknij przycisk <i>Dalej</i> w celu przejścia do strony wyboru edycji.';
$s['browseFiles'] = 'Przeglądaj pliki';
$s['browseFilesDesc'] = 'Szybko przejrzyj pliki w wybranej kompilacji';
$s['searchFiles'] = 'Przeszukaj pliki';
$s['toSearchForCUUseQuery'] = 'W celu wyszukania aktualizacji kumulacyjnych użyj frazy <i>%s</i>.'; //To search for Cumulative Updates use the <i>Windows10 KB</i> search query.
$s['aboutBuild'] = 'Informacje o kompilacji';
$s['downloadNotAvailable'] = 'Brak dostępnych pobrań';
$s['processingUpdate'] = 'Przetwarzanie kompilacji...';
$s['noLangsAvailablev2'] = 'Ta kompilacja nie może zostać przekonwertowana na obraz ISO.<br>Sprawdź często zadawane pytania w celu uzyskania szczegółów.';
$s['updateIsBlockedv2'] = 'Ta kompilacja posiada znane problemy uniemożliwiające stworzenie działającego obrazu ISO.<br>Sprawdź często zadawane pytania w celu uzyskania szczegółów.';
$s['updateNotProcessedv2'] = 'Opcje pobierania dla tej kompilacji nie są jeszcze dostępne, ponieważ jest ona przetwarzana.<br>Spróbuj ponownie za minutę.';

//selectedition.php
$s['selectEditionFor'] = 'Wybierz edycję dla %s'; //Select edition for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States)
$s['chooseEdition'] = 'Wybierz edycję';
$s['chooseEditionDesc'] = 'Wybierz żądaną edycję';
$s['allEditions'] = 'Wszystkie edycje';
$s['selectEditionInfoText'] = 'Kliknij przycisk <i>Dalej</i> w celu otworzenia strony z podsumowaniem wyboru.';
$s['additionalEditionsInfo'] = 'W przypadku, gdy potrzebna jest <b>dodatkowa edycja</b> znajdująca się w tabeli po prawej, wybierz <b>wymaganą edycję</b> powyżej i kontynuuj używając przycisku <i>Dalej</i>.<br>Na stronie podsumowania użyj opcji <b>Utwórz dodatkowe edycje</b>.';
$s['showHiddenEditions'] = 'Wyświetl ukryte edycje (niezalecane)';

//download.php
$s['summary'] = 'Podsumowanie';
$s['summaryDesc'] = 'Przejrzyj swój wybór i wybierz metodę pobrania';
$s['summaryFor'] = 'Podsumowanie dla %s'; //Summary for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States), Windows 10 Pro
$s['summaryOfSelection'] = 'Podsumowanie Twojego wyboru';
$s['browseList'] = 'Przeglądaj listę plików';
$s['browseListDesc'] = 'Otwiera listę plików zawartych w zestawie UUP do ręcznego pobrania.';
$s['aria2Opt1'] = 'Pobierz zestaw UUP';
$s['aria2Opt1Desc'] = 'Łatwo pobierz wybrany zestaw UUP przy użyciu programu aria2.';
$s['aria2Opt2'] = 'Pobierz i przekonwertuj na obraz ISO';
$s['aria2Opt2Desc'] = 'Łatwo pobierz wybrany zestaw UUP przy użyciu programu aria2 i przekonwertuj na obraz ISO.';
$s['aria2Opt3'] = 'Pobierz, dodaj dodatkowe edycje i przekonwertuj na obraz ISO';
$s['aria2Opt3Desc'] = 'Łatwo pobierz wybrany zestaw UUP przy użyciu programu aria2, stwórz dodatkowe edycje a następnie przekonwertuj na obraz ISO.';
$s['aria2Opt4'] = 'Utwórz pakiet pobierający dla tych aktualizacji';
$s['jsRequiredToConf'] = 'Obsługa JavaScript jest wymagana, aby móc skonfigurować i użyć tej opcji.';
$s['selAdditionalEditions'] = 'Wybierz dodatkowe edycje';
$s['noAdditionalEditions'] = 'Brak dodatkowych edycji dostępnych dla tego wyboru.';
$s['learnMore'] = 'Dowiedz się więcej';
$s['learnMoreAdditionalEditions1'] = 'Ta opcja włącza automatyczne tworzenie wybranych dodatkowych edycji.';
$s['learnMoreAdditionalEditions2'] = 'Lista dodatkowych edycji jest zależna od wybranych edycji bazowych. Poniżej możesz sprawdzić listę bazowych edycji wymaganych do stworzenia żądanej edycji dodatkowej:';
$s['learnMoreUpdates1'] = 'Aktualizacje zostaną dodane do konwertowanego obrazu tylko gdy skrypt konwertujący jest uruchomiony na następujących systemach:';
$s['learnMoreUpdates2'] = 'W przypadku uruchomienia skryptu konwertującego na jakimkolwiek innym systemie, aktualizacje nie zostaną dodane do końcowego obrazu.';
$s['systemWithAdk'] = '%s z zainstalowanym Windows 10 ADK'; //Windows 7 with Windows 10 ADK installed
$s['additionalUpdates'] = 'Dodatkowe aktualizacje';
$s['additionalUpdatesDesc'] = 'Ten zestaw UUP zawiera dodatkowe aktualizacje, które zostaną automatycznie dodane podczas procesu konwersji znacząco wydłużając czas tworzenia.';
$s['browseUpdatesList'] = 'Przeglądaj listę aktualizacji';
$s['selectDownloadOptions'] = 'Wybierz opcje pobierania';
$s['selectDownloadOptionsSub'] = 'Skonfiguruj w jaki sposób chcesz pobrać swój wybór';
$s['downloadMethod'] = 'Metoda pobierania';
$s['conversionOptions'] = 'Opcje konwersji';
$s['convOpt1'] = 'Użyj kompresji z użyciem bloku ciągłego (ESD)';
$s['convOpt2'] = 'Dołącz aktualizacje (tylko konwerter Windows)';
$s['convOpt3'] = 'Uruchom oczyszczanie komponentów (tylko konwerter Windows)';
$s['convOpt4'] = 'Zintegruj .NET Framework 3.5 (tylko konwerter Windows)';
$s['startDownload'] = 'Utwórz pakiet pobierający';
$s['legalCopeHarder'] = 'Poprzez kliknięcie przycisku <i>Utwórz pakiet pobierający</i> zgadzasz się z następującym:';
$s['legalCope1'] = 'Obrazy instalacyjne stworzone przez skrypty udostępniane przez UUP dump przeznaczone są wyłącznie do <b>celów ewaluacyjnych</b>';
$s['legalCope2'] = 'Obrazy te oraz ich wdrożenia <b>nie są wspierane</b> w żaden sposób przez Microsoft Corporation';
$s['legalCope3v2'] = '<b>Autorzy nie ponoszą odpowiedzialności za jakiekolwiek szkody</b> wynikłe z nieprawidłowego użytkowania strony.';
$s['win1122h2OrLaterv2'] = 'System Windows jest wymagany w celu utworzenia obrazu ISO';
$s['requiresWindows102004v2'] = 'W celu utworzenia obrazu ISO tej kompilacji potrzebna będzie nowoczesna wersja systemu Windows, taka jak Windows 10, wersja 2004 lub Windows 11. Na pozostałych platformach proces ten nie powiedzie się.';

//get.php
$s['listOfFilesFor'] = 'Lista plików dla %s'; //List of files for Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['totalSizeOfFiles'] = 'Całkowity rozmiar plików: %s'; //Total size of files: 2.86 GiB
$s['fileRenamingScript'] = 'Skrypt zmiany nazwy plików';
$s['fileRenamingScriptDesc1'] = 'Skrypt, który można znaleźć poniżej może zostać użyty do szybkiej zmiany nazw pobranych plików.';
$s['fileRenamingScriptDesc2'] = 'Aby użyć, skopiuj zawartość poniższego pola, zapisz do pliku z rozszerzeniem <code>cmd</code>, umieść w folderze z pobranymi plikami i uruchom.';
$s['sha1File'] = 'Plik sum kontrolnych SHA-1';
$s['sha1FileDesc'] = 'Możesz użyć tego pliku w celu szybkiej weryfikacji czy pliki zostały pobrane poprawnie.';
$s['aria2NoticeTitle'] = 'Informacja dotycząca opcji pobierania przy użyciu programu aria2';
$s['aria2NoticeText1'] = 'Opcje pobierania przy użyciu programu aria2 tworzą archiwum, które należy pobrać. Pobrane archiwum zawiera wszystkie niezbędne pliki do wykonania wybranego zadania.';
$s['aria2NoticeText2'] = 'Aby rozpocząć proces użyj skryptu przeznaczonego dla Twojej platformy:';
$s['aria2NoticeText3'] = 'Aria2 jest projektem otwartoźródłowym. Możesz znaleźć go tutaj: %s.'; //Aria2 is an open source project. You can find it here: https://aria2.github.io/.
$s['aria2NoticeText4'] = 'Skrypt konwersji UUP (wersja dla Windows) został stworzony przez %s.'; //UUP Conversion script (Windows version) has been created by abbodi1406.
$s['aria2NoticeText5'] = 'Skrypt konwersji UUP (wersja dla Linux oraz macOS) jest otwartoźródłowy. Możesz znaleźć go tutaj: %s.'; //UUP Conversion script (Linux version, macOS version) is open source. You can find it here: https://github.com/uup-dump/converter.

//findfiles.php
$s['findFilesIn'] = 'Szukaj plików w %s'; //Find files in Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['fileRenamingScriptDescFindFiles'] = 'W przypadku chęci szybkiej zmiany nazwy plików pobranych z tej strony, możesz wygenerować skrypt zmieniający nazwy, który wykona tę operację za Ciebie.';
$s['fileRenamingScriptGenW'] = 'Wygeneruj skrypt zmiany nazw (wersja dla Windows)';
$s['fileRenamingScriptGenL'] = 'Wygeneruj skrypt zmiany nazw (wersja dla Linux oraz macOS)';
$s['searchForFiles'] = 'Szukaj plików...';
$s['weFoundFiles'] = 'Znaleziono <b>%d</b> plików dla Twojego zapytania.'; //We have found <b>692</b> files for your query.
$s['sizeOfShownFiles'] = 'Rozmiar widocznych plików: %s'; //Size of shown files: 2.86 GiB

//Error pages
$s['error'] = 'Błąd';
$s['arm64Warning2023'] = '<b>To jest kompilacja <a href="https://support.microsoft.com/pl-pl/windows/477f51df-2e3b-f68f-31b0-06f5e4f8ebb5">ARM64</a>.</b> Autorzy UUP dump nie posiadają żadnego urządzenia kompatybilnego z nią, w związku z czym <b>nie będą prowadzić jakiejkolwiek formy wsparcia</b>.';

//Error messages
$s['error_ERROR'] = 'Błąd ogólny.';
$s['error_UNSUPPORTED_API'] = 'Zainstalowana wersja API nie jest kompatybilna z tą wersją UUP dump.';
$s['error_NO_FILEINFO_DIR'] = 'Folder fileinfo nie istnieje.';
$s['error_NO_BUILDS_IN_FILEINFO'] = 'Baza fileinfo nie posiada żadnej kompilacji.';
$s['error_SEARCH_NO_RESULTS'] = 'Brak elementów dla podanego zapytania.';
$s['error_UNKNOWN_ARCH'] = 'Nieznana architektura procesora.';
$s['error_UNKNOWN_RING'] = 'Nieznany pierścień.';
$s['error_UNKNOWN_FLIGHT'] = 'Nieznany lot.';
$s['error_UNKNOWN_COMBINATION'] = 'Kombinacja lotu i pierścienia jest nieprawidłowa. Lot <i>Skip Ahead</i> jest tylko obsługiwany dla pierścienia Insider Fast.';
$s['error_ILLEGAL_BUILD'] = 'Podany numer kompilacji jest mniejszy od %d lub większy od %d.'; //Specified build number is less than 9841 or larger than 2147483646.
$s['error_ILLEGAL_MINOR'] = 'Podany numer poprawki jest nieprawidłowy.';
$s['error_NO_UPDATE_FOUND'] = 'Serwer nie zwrócił żadnych aktualizacji.';
$s['error_XML_PARSE_ERROR'] = 'Parsowanie XML odpowiedzi nie powiodło się. Ten błąd może oznaczać tymczasowy problem z serwerami firmy Microsoft. Proszę spróbować później.';
$s['error_EMPTY_FILELIST'] = 'Serwer zwrócił pustą listę plików.';
$s['error_NO_FILES'] = 'Brak plików dla podanego zapytania.';
$s['error_NOT_FOUND'] = 'Nie można znaleźć określonego wyboru.';
$s['error_MISSING_FILES'] = 'W wybranym zestawie UUP brakuje części plików.';
$s['error_NO_METADATA_ESD'] = 'Brak plików ESD z metadanymi dostępnych dla tego wyboru.';
$s['error_UNSUPPORTED_LANG'] = 'Podany język nie jest obsługiwany.';
$s['error_UNSPECIFIED_LANG'] = 'Nie określono języka.';
$s['error_UNSUPPORTED_EDITION'] = 'Podana edycja nie jest obsługiwana.';
$s['error_UNSUPPORTED_COMBINATION'] = 'Kombinacja języka i edycji jest nieprawidłowa.';
$s['error_NOT_CUMULATIVE_UPDATE'] = 'Wybrana aktualizacja nie zawiera aktualizacji kumulacyjnej.';
$s['error_UPDATE_INFORMATION_NOT_EXISTS'] = 'Informacja o określonej aktualizacji nie istnieje w bazie danych.';
$s['error_KEY_NOT_EXISTS'] = 'Wybrany klucz nie istnieje w informacji o aktualizacji.';
$s['error_UNSPECIFIED_UPDATE'] = 'Nie określono identyfikatora aktualizacji.';
$s['error_INCORRECT_ID'] = 'Określony identyfikator aktualizacji nie jest poprawny. Proszę upewnić się, że podano poprawny identyfikator aktualizacji.';
$s['error_RATE_LIMITED'] = 'Szybkość Twoich żądań została ograniczona. Proszę spróbować ponownie za kilka sekund.';
$s['error_UNSPECIFIED_VE'] = 'Nie wybrano żadnych edycji dodatkowych. Jeżeli nie chcesz tworzyć edycji dodatkowych, wybierz opcję <i>Pobierz przy użyciu programu aria2 i przekonwertuj</i>.';
$s['error_VE_UNAVAILABLE'] = 'Dodatkowe edycje nie są obsługiwane dla tego wyboru.';
$s['error_INVALID_PAGE'] = 'Podana strona jest nieprawidłowa';
$s['error_WU_REQUEST_FAILED'] = 'Żądanie do usługi Windows Update nie powiodło się.';
$s['errorNoMessage'] = 'Wiadomość o błędzie nie jest dostępna.';

//Languages
$s['lang_neutral'] = 'Język dowolny';
$s['lang_ar-sa'] = 'arabski (Arabia Saudyjska)';
$s['lang_bg-bg'] = 'bułgarski';
$s['lang_cs-cz'] = 'czeski';
$s['lang_da-dk'] = 'duński';
$s['lang_de-de'] = 'niemiecki';
$s['lang_el-gr'] = 'grecki';
$s['lang_en-gb'] = 'angielski (Wielka Brytania)';
$s['lang_en-us'] = 'angielski (Stany Zjednoczone)';
$s['lang_es-es'] = 'hiszpański (Hiszpania)';
$s['lang_es-mx'] = 'hiszpański (Meksyk)';
$s['lang_et-ee'] = 'estoński';
$s['lang_fi-fi'] = 'fiński';
$s['lang_fr-ca'] = 'francuski (Kanada)';
$s['lang_fr-fr'] = 'francuski (Francja)';
$s['lang_he-il'] = 'hebrajski';
$s['lang_hr-hr'] = 'chorwacki';
$s['lang_hu-hu'] = 'węgierski';
$s['lang_it-it'] = 'włoski';
$s['lang_ja-jp'] = 'japoński';
$s['lang_ko-kr'] = 'koreański';
$s['lang_lt-lt'] = 'litewski';
$s['lang_lv-lv'] = 'łotewski';
$s['lang_nb-no'] = 'norweski (Bokmal)';
$s['lang_nl-nl'] = 'duński';
$s['lang_pl-pl'] = 'polski';
$s['lang_pt-br'] = 'portugalski (Brazylia)';
$s['lang_pt-pt'] = 'portugalski (Portugalia)';
$s['lang_qps-ploc'] = 'pseudo';
$s['lang_ro-ro'] = 'rumuński';
$s['lang_ru-ru'] = 'rosyjski';
$s['lang_sk-sk'] = 'słowacki';
$s['lang_sl-si'] = 'słoweński';
$s['lang_sr-latn-rs'] = 'serbski (łacina)';
$s['lang_sv-se'] = 'szwedzki';
$s['lang_th-th'] = 'tajski';
$s['lang_tr-tr'] = 'turecki';
$s['lang_uk-ua'] = 'ukraiński';
$s['lang_zh-cn'] = 'chiński (uproszczony)';
$s['lang_zh-hk'] = 'chiński (Hong Kong)';
$s['lang_zh-tw'] = 'chiński (tradycyjny)';

//Channels
$s['channel_canary'] = 'Kanał Canary';
$s['channel_skipAhead'] = 'Skip Ahead';
$s['channel_dev'] = 'Kanał deweloperów';
$s['channel_beta'] = 'Kanał beta';
$s['channel_releasepreview'] = 'Wersja zapoznawcza';
$s['channel_retail'] = 'Wydanie publiczne';

//Editions
$s['edition_APP'] = 'Wstępnie zainstalowane aplikacje sklepu Microsoft Store';
$s['edition_APP_MOMENT'] = 'Aplikacje sklepu Microsoft Store aktualizacji Moment';
$s['edition_FOD'] = 'Funkcje na żądanie (możliwości)';
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
