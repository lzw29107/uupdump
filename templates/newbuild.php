<?php if(!isset($templateOk)) die(); ?>
<h3 class="ui centered header">
    <div class="content">
        <i class="fa-solid fa-plus fa-mr"></i>
        <?= $s['addNewBuild'] ?>
    </div>
</h3>

<script src="static/js/newbuild.js" defer></script>

<div class="ui two columns mobile stackable centered grid">
    <div class="column">
        <div class="ui red header">
            <i class="fa-solid fa-triangle-exclamation icon"></i>
            <div class="ui justified container content">
                <?= $s['optionsNotice'] ?>                <div class="sub header"><?= $s['optionsNoticeText'] ?></div>
            </div>
        </div>

        <form class="ui form" action="fetchupd.php" method="get">
            <div class="field">
                <label><?= $s['arch'] ?></label>
                <select class="ui dropdown"  name="arch">
                    <option value="all">all</option>
                    <option value="amd64" selected>x64 / amd64</option>
                    <option value="x86">x86</option>
                    <option value="arm">arm</option>
                    <option value="arm64">arm64</option>
                </select>
            </div>

            <div class="field">
                <label><?= $s['ring'] ?></label>
                <select class="ui dropdown" name="ring">
                    <option value="msit"><?= $s['channel_msit'] ?></option>
                    <option value="canary" selected><?= $s['channel_canary'] ?></option>
                    <option value="wif"><?= $s['channel_dev'] ?></option>
                    <option value="wis"><?= $s['channel_beta'] ?></option>
                    <option value="rp"><?= $s['channel_releasepreview'] ?></option>
                    <option value="retail"><?= $s['channel_retail'] ?></option>
                </select>
            </div>

            <div class="field">
                <label><?= $s['branch'] ?></label>
                <select class="ui dropdown" name="branch">
                    <option value="auto" selected><?= $s['autoSelect'] ?></option>
                    <option value="rs_prerelease">rs_prerelease</option>
                    <option value="rs2_release">rs2_release</option>
                    <option value="rs3_release">rs3_release</option>
                    <option value="rs4_release">rs4_release</option>
                    <option value="rs5_release">rs5_release</option>
                    <option value="rs5_release_svc_hci">rs5_release_svc_hci</option>
                    <option value="19h1_release">19h1_release</option>
                    <option value="vb_release">vb_release</option>
                    <option value="fe_release_10x">fe_release_10x</option>
                    <option value="fe_release">fe_release</option>
                    <option value="co_release">co_release</option>
                    <option value="ni_release">ni_release</option>
                    <option value="zn_release">zn_release</option>
                    <option value="ge_release">ge_release</option>
                </select>
            </div>

            <div class="field">
                <label><?= $s['build'] ?></label>
                <input type="text" value="22631.1" name="build">
            </div>

            <div class="field">
                <label><?= $s['edition'] ?></label>
                <select class="ui dropdown" name="sku">
                    <option value="4" selected><?= $s['edition_ENTERPRISE'] ?></option>
                    <option value="7"><?= $s['edition_SERVERSTANDARD'] ?></option>
                    <option value="8"><?= $s['edition_SERVERDATACENTER'] ?></option>
                    <option value="48"><?= $s['edition_PROFESSIONAL'] ?></option>
                    <option value="101"><?= $s['edition_CORE'] ?></option>
                    <option value="119"><?= $s['edition_PPIPRO'] ?></option>
                    <option value="121"><?= $s['edition_EDUCATION'] ?></option>
                    <option value="125"><?= $s['edition_ENTERPRISES'] ?></option>
                    <option value="210">WNC</option>
                    <option value="406"><?= $s['edition_SERVERAZURESTACKHCICOR'] ?></option>
                    <option value="407"><?= $s['edition_SERVERTURBINE'] ?></option>
                    <?php if($enableuf): ?>
                    <option value="104">MobileCore</option>
                    <option value="123">IoTUAP</option>
                    <option value="131">IoTUAPCommercial</option>
                    <option value="133">MobileEnterprise</option>
                    <option value="135"><?= $s['edition_HOLOGRAPHIC'] ?></option>
                    <option value="180">HubOS</option>
                    <option value="184">Andromeda</option>
                    <option value="189"><?= $s['edition_LITE'] ?></option>
                    <?php endif; ?>
                </select>
            </div>
          
            <div class="field" id="type" style="display: none;"
                <label><?= $s['type'] ?></label>
                <select class="ui dropdown" name="type">
                    <option value="Production" selected>Production</option>
                    <option value="Test">Test</option>
                </select>
            </div>

            <div class="field" id="other-options">
                <div class="grouped fields">
                    <div class="field">
                        <div class="ui checkbox">
                            <input type="checkbox" name="flags[]" value="thisonly" class="other-options">
                            <label><?= $s['thisOnly'] ?></label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui checkbox"
                            <?= uupApiConfigIsTrue('allow_corpnet') ? '' : 'style="display:none;"' ?>>
                            <input type="checkbox" name="flags[]" value="corpnet" class="other-options"
                            <?= uupApiConfigIsTrue('allow_corpnet') ? 'checked' : 'disabled' ?>>
                            <label><?= $s['corpnet'] ?><?= $enableuf ? "{$s['corpnetNotice']}" : ''?></label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui checkbox">
                            <input type="checkbox" name="flags[]" value="vbs" class="other-options" checked>
                            <label><?= $s['vbs'] ?></label>
                        </div>
                    </div>
                </div>
            </div>

            <button class="ui fluid right labeled icon primary button" id="submitForm" type="submit">
                <i class="fa-solid fa-angle-right icon"></i>
                <?= $s['next'] ?>
            </button>
        </form>

        <div class="ui info message">
            <i class="fa-solid fa-info icon"></i>
            <?= $s['newBuildNextText'] ?>
        </div>
    </div>

    <div class="column">
        <div class="ui centered header">
            <div class="content">
                <i class="fa-solid fa-paper-plane fa-mr"></i>
                <?= $s['quickOptions'] ?>
            </div>
        </div>

        <table class="ui large tablet stackable table">
            <thead>
                <tr>
                    <th><?= $s['tHeadReleaseType'] ?></th>
                    <th><?= $s['tHeadArchitectures'] ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="ui small header">
                            <i class="fa-solid fa-box fa-fw fa-xl fa-mr"></i>
                            <?= $s['latestPublicRelease'] ?>
                        </div>
                    </td>
                    <td class="collapsing center aligned">
                        <a class="ui button" href="fetchupd.php?arch=amd64&ring=retail&build=<?= $retailLatestBuild ?>">x64</a>
                        <a class="ui button" href="fetchupd.php?arch=arm64&ring=retail&build=<?= $retailLatestBuild ?>">arm64</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="ui small header">
                            <i class="fa-solid fa-dolly fa-fw fa-xl fa-mr"></i>
                            <?= $s['latestRPRelease'] ?>
                        </div>
                    </td>
                    <td class="collapsing center aligned">
                        <a class="ui button" href="fetchupd.php?arch=amd64&ring=rp&build=<?= $rpLatestBuild ?>">x64</a>
                        <a class="ui button" href="fetchupd.php?arch=arm64&ring=rp&build=<?= $rpLatestBuild ?>">arm64</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="ui small header">
                            <i class="fa-solid fa-paint-roller fa-fw fa-xl fa-mr"></i>
                            <?= $s['latestBetaRelease'] ?>
                        </div>
                    </td>
                    <td class="collapsing center aligned">
                        <a class="ui button" href="fetchupd.php?arch=amd64&ring=wis&build=<?= $betaLatestBuild ?>">x64</a>
                        <a class="ui button" href="fetchupd.php?arch=arm64&ring=wis&build=<?= $betaLatestBuild ?>">arm64</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="ui small header">
                            <i class="fa-solid fa-laptop-code fa-fw fa-xl fa-mr"></i>
                            <?= $s['latestDevRelease'] ?>
                        </div>
                    </td>
                    <td class="collapsing center aligned">
                        <a class="ui button" href="fetchupd.php?arch=amd64&ring=wif&build=<?= $devLatestBuild ?>">x64</a>
                        <a class="ui button" href="fetchupd.php?arch=arm64&ring=wif&build=<?= $devLatestBuild ?>">arm64</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="ui small header">
                            <i class="fa-solid fa-flask fa-fw fa-xl fa-mr"></i>
                            <?= $s['latestCanaryRelease'] ?>
                        </div>
                    </td>
                    <td class="collapsing center aligned">
                        <a class="ui button" href="fetchupd.php?arch=amd64&ring=canary&build=latest">x64</a>
                        <a class="ui button" href="fetchupd.php?arch=arm64&ring=canary&build=latest">arm64</a>
                    </td>
                </tr>
            </tbody>
        </table>
</div>