<?php 
/*
Copyright 2022 UUP dump authors

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
if(!isset($templateOk)) die();
?>
<h3 class="ui centered header">
    <div class="content">
        <i class=""fa-solid fa-briefcase fa-mr"></i>
        <?= $s['summaryOfSelection'] ?>
    </div>
</h3>

<script src="static/js/download.js" defer></script>

<?php if($updateArch == 'arm64') styleCluelessUserArm64Warn(); ?>

<div class="ui two columns mobile reversed stackable centered grid">
    <div class="column">
        <h3 class="ui header">
            <i class="fa-solid fa-download icon"></i>
            <div class="content">
                <?= $s['selectDownloadOptions'] ?>
                <div class="sub header"><?= $s['selectDownloadOptionsSub'] ?></div>
            </div>
        </h3>

        <form class="ui form" action="<?= $url; ?>" method="post" id="download-options">
            <div class="field">
                <label><?= $s['downloadMethod']; ?></label>
                <div class="grouped fields">
                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="autodl" value="1"<?= $dlOnly ? ' checked' : '' ?>>
                            <label>
                                <?= $s['aria2Opt1']; ?><br/>
                                <small><?= $s['aria2Opt1Desc']; ?></small>
                            </label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="autodl" value="2"
                            <?= $dlOnly ? 'disabled' : 'checked' ?>>
                            <label>
                                <?= $s['aria2Opt2']; ?><br/>
                                <small><?= $s['aria2Opt2Desc'] ?></small>
                            </label>
                        </div>
                    </div>
                    <div class="field">
                        <div id="VEConvertOpt" class="ui radio checkbox">
                            <input type="radio" name="autodl" value="3"
                            <?php if($disableVE) echo 'disabled'; ?>>
                            <label>
                                <?= $s['aria2Opt3']; ?><br/>
                                <small>
                                    <?= $s['aria2Opt3Desc'] ?>
                                    <span id="VEConvertLearnMoreLink" style="display: none;">
                                        <a href="#" id="learn-more-ve-link">
                                            <?= $s['learnMore'] ?>
                                        </a>
                                    </span>
                                </small>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="field" id="conversion-options">
                <label><?= $s['conversionOptions'] ?></label>
                <div class="grouped fields">
                    <div class="field">
                        <div class="ui checkbox">
                            <input type="checkbox" name="updates" value="1" checked class="conversion-option">
                            <label><?= $s['convOpt2'] ?></label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui checkbox">
                            <input type="checkbox" name="cleanup" value="1" checked class="conversion-option">
                            <label><?= $s['convOpt3'] ?></label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui checkbox">
                            <input type="checkbox" name="resetbase" value="1" class="conversion-option">
                            <label><?= $s['convOpt5'] ?></label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui checkbox">
                            <input type="checkbox" name="netfx" value="1" class="conversion-option">
                            <label><?= $s['convOpt4'] ?></label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui checkbox">
                            <input type="checkbox" name="esd" value="1" class="conversion-option">
                            <label><?= $s['convOpt1'] ?></label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="field" id="additional-editions-list">
                <label><?= $s['selAdditionalEditions'] ?></label>
                <div class="grouped fields">
                    <?php $printedEditions = 0; ?>
                    <?php if(!$disableVE) foreach($virtualEditions as $key => $val): ?>
                        <div class="field">
                            <div class="ui checkbox">
                                <input class="virtual-edition" type="checkbox" name="virtualEditions[]" value="<?= $key ?>" checked>
                                <label><?= $val ?></label>
                            </div>
                        </div>
                        <?php $printedEditions++; ?>
                    <?php endforeach; ?>

                    <?php if(!$printedEditions): ?>
                        <p><?= $s['noAdditionalEditions'] ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="ui negative justified container message" id="legal-cope">
                <i class="fa-solid fa-scale-balanced icon"></i>
                <b><?= $s['legalCopeHarder'] ?></b>

                <div class="ui bulleted list">
                    <div class="item"><?= $s['legalCope1'] ?></div>
                    <div class="item"><?= $s['legalCope2'] ?></div>
                    <div class="item"><?= $s['legalCope3v2'] ?></div>
				</div>
            </div>

            <button class="ui fluid right labeled icon primary button" type="submit">
                <i class="fa-solid fa-download icon"></i>
                <?= $s['startDownload'] ?>
            </button>
        </form>
    </div>

    <div class="column">
        <div class="ui small header">
            <i class="fa-brands fa-microsoft icon"></i>
            <div class="content">
                <?= $s['update']; ?>
                <div class="sub header"><?= htmlentities($updateTitle) ?></div>
            </div>
        </div>

        <div class="ui small header">
            <i class="fa-brands fa-globe icon"></i>
            <div class="content">
                <?= $s['lang']; ?>
                <div class="sub header"><?= $selectedLangName ?></div>
            </div>
        </div>

        <div class="ui small header">
            <i class="fa-solid fa-box-archive icon"></i>
            <div class="content">
                <?= $s['edition']; ?>
                <div class="sub header"><?= $selectedEditionName ?></div>
            </div>
        </div>

        <div class="ui small header">
            <i class="fa-solid fa-download icon"></i>
            <div class="content">
                <?= $s['totalDlSize']; ?>
                <div class="sub header"><?= $totalSize ?></div>
            </div>
        </div>

        <?php if($build > 22557): ?>
        <div class="ui small red header">
            <i class="fa-solid fa-triangle-exclamation icon"></i>
            <div class="content">
                <?= $s['win1122h2OrLaterv2'] ?>
                <div class="sub header"><?= $s['requiresWindows102004v2'] ?></div>
            </div>
        </div>
        <?php endif; ?>

        <?php if($hasUpdates): ?>
            <div class="ui small header" style="margin-bottom:0;">
                <i class="fa-solid fa-info icon"></i>
                <div class="content">
                    <?= $s['additionalUpdates'] ?>
                    <div class="sub header">
                        <?= $s['additionalUpdatesDesc'] ?>

                        <a href="#" id="learn-more-updates-link" style="display: none;">
                            <?= $s['learnMore'] ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="ui center aligned container">
                <a class="ui tiny labeled icon button" href="<?= $urlUpd; ?>" style="margin-top:1em;">
                    <i class="fa-regular fa-folder-open icon"></i>
                    <?= $s['browseUpdatesList'] ?>
                </a>
            </div>
        <?php endif; ?>

        <div class="ui divider"></div>
        <a class="ui fluid right labeled icon button" href="<?= $url; ?>">
            <i class="fa-solid fa-list icon"></i>
            <?= $s['browseList'] ?>
        </a>
    </div>
</div>

<div class="ui positive justified container message">
    <div class="header">
        <?= $s['aria2NoticeTitle'] ?>
    </div>
    <p><?= $s['aria2NoticeText1'] ?></p>

    <p><b><?= $s['aria2NoticeText2'] ?></b><br/>
    - Windows: <code>uup_download_windows.cmd</code><br/>
    - Linux: <code>uup_download_linux.sh</code><br/>
    - macOS: <code>uup_download_macos.sh</code><br/>
    </p>

    <p>
        <?php printf($s['aria2NoticeText3'], '<a href="https://aria2.github.io/">https://aria2.github.io/</a>') ?>
        <br>
        <?php printf($s['aria2NoticeText4'], '<a href="https://forums.mydigitallife.net/members/abbodi1406.204274/">abbodi1406</a>'); ?>
        <br>
        <?php printf($s['aria2NoticeText5'], '<a href="https://git.uupdump.net/uup-dump/converter">https://git.uupdump.net/uup-dump/converter</a>'); ?>
    </p>
</div>

<div class="ui fluid tiny three steps">
    <div class="completed step">
          <i class="fa-solid fa-globe icon"></i>
          <div class="content">
              <div class="title"><?= $s['chooseLang'] ?></div>
              <div class="description"><?= $s['chooseLangDesc'] ?></div>
          </div>
    </div>

    <div class="completed step">
          <i class="fa-solid fa-box-archive icon"></i>
          <div class="content">
              <div class="title"><?= $s['chooseEdition'] ?></div>
              <div class="description"><?= $s['chooseEditionDesc'] ?></div>
          </div>
    </div>

    <div class="active step">
          <i class="fa-solid fa-briefcase icon"></i>
          <div class="content">
              <div class="title"><?= $s['summary'] ?></div>
              <div class="description"><?= $s['summaryDesc'] ?></div>
          </div>
    </div>
</div>

<div class="ui normal modal virtual-editions-info">
    <div class="header">
        <?= $s['learnMore'] ?>
    </div>
    <div class="content">
        <p><?= $s['learnMoreAdditionalEditions1'] ?></p>

        <p><b><?= $s['learnMoreAdditionalEditions2'] ?></b></p>

        <p><b><?= $s['edition_CORE'] ?></b></p>
        <ul>
            <li><?= $s['edition_CORESINGLELANGUAGE'] ?></li>
        </ul>
        <p><b><?= $s['edition_PROFESSIONAL'] ?></b></p>
        <ul>
            <li><?= $s['edition_PROFESSIONALWORKSTATION'] ?></li>
            <li><?= $s['edition_PROFESSIONALEDUCATION'] ?></li>
            <li><?= $s['edition_EDUCATION'] ?></li>
            <li><?= $s['edition_ENTERPRISE'] ?></li>
            <li><?= $s['edition_SERVERRDSH'] ?></li>
            <li><?= $s['edition_IOTENTERPRISE'] ?></li>
        </ul>
        <p><b><?= $s['edition_PROFESSIONALN'] ?></b></p>
        <ul>
            <li><?= $s['edition_PROFESSIONALWORKSTATIONN'] ?></li>
            <li><?= $s['edition_PROFESSIONALEDUCATIONN'] ?></li>
            <li><?= $s['edition_EDUCATIONN'] ?></li>
            <li><?= $s['edition_ENTERPRISEN'] ?></li>
        </ul>
    </div>
    <div class="actions">
        <div class="ui primary ok button">
            <i class="fa-solid fa-check icon"></i>
            <?= $s['ok'] ?>
        </div>
    </div>
</div>

<div class="ui normal tiny modal updates">
    <div class="header">
        <?= $s['learnMore'] ?>
    </div>
    <div class="content">
        <p><?= $s['learnMoreUpdates1'] ?></p>
        <ul>
            <li>Windows 11</li>
            <li>Windows 10</li>
            <li><?php printf($s['systemWithAdk'], 'Windows 8.1'); ?></li>
        </ul>
        <p><?= $s['learnMoreUpdates2']; ?></p>
    </div>
    <div class="actions">
        <div class="ui primary ok button">
            <i class="fa-solid fa-check icon"></i>
            <?= $s['ok'] ?>
        </div>
    </div>
</div>
