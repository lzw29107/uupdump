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
if (!isset($templateOk)) die();
?>
<div class="welcome-text">
    <img src="static/images/logo.svg" class="logo" alt="<?= $s['uupdump'] ?>">
    <p class="header"><?= $s['uupdump'] ?></p>
    <p class="sub"><?= $s['slogan'] ?></p>
</div>

<form class="ui form home-search" action="known.php" method="get">
    <div class="field">
        <div class="ui big action input">
            <input type="text" name="q" placeholder="<?= $s['seachForBuilds'] ?>">
            <button class="ui big blue icon button" type="submit"><i class="fa-solid fa-magnifying-glass icon"></i></button>
        </div>
    </div>
</form>

<div class="quick-search-buttons">
    <div class="ui tiny compact menu">
        <a class="item" href="known.php?q=category:canarychannel">
            <i class="fa-solid fa-magnifying-glass icon"></i>
            <?= $s['channel_canarychannel'] ?>
        </a>
    </div>

    <div class="ui tiny compact menu">
        <a class="item" href="known.php?q=category:dev">
            <i class="fa-solid fa-magnifying-glass icon"></i>
            <?= $s['channel_dev'] ?>
        </a>
    </div>

    <div class="ui tiny compact menu">
        <div class="ui dropdown item">
            <i class="fa-solid fa-magnifying-glass icon"></i>
            Windows 11
            <i class="dropdown icon"></i>

            <div class="menu">
                <a class="item" href="known.php?q=category:w11-24h2-current-beta">
                    24H2 Current Beta
                </a>
                <a class="item" href="known.php?q=category:w11-24h2">
                    24H2
                </a>
                <a class="item" href="known.php?q=category:w11-23h2-current-beta">
                    23H2 Current Beta
                </a>
                <a class="item" href="known.php?q=category:w11-23h2">
                    23H2
                </a>
                <a class="item" href="known.php?q=category:w11-22h2m4-23h2-beta">
                    22H2 Moment 4/23H2 Beta
                </a>
                <a class="item" href="known.php?q=category:w11-22h2m3">
                    22H2 Moment 3 Beta
                </a>
                <a class="item" href="known.php?q=category:w11-22h2m2">
                    22H2 Moment 2 Beta
                </a>
                <a class="item" href="known.php?q=category:w11-22h2m1">
                    22H2 Moment 1 Beta
                </a>
                <a class="item" href="known.php?q=category:w11-22h2">
                    22H2
                </a>
                <a class="item" href="known.php?q=category:w11-21h2">
                    21H2
                </a>
            </div>
        </div>
    </div>

    <div class="ui tiny compact menu">
        <div class="ui dropdown item">
            <i class="fa-solid fa-magnifying-glass icon"></i>
            Windows Server
            <i class="dropdown icon"></i>

            <div class="menu">
                <a class="item" href="known.php?q=category:server-24h2">
                    LTSC 2025 (24H2)
                </a>
                <a class="item" href="known.php?q=category:server-23h2">
                    23H2
                </a>
                <a class="item" href="known.php?q=category:server-22h2">
                    22H2 (HCI only)
                </a>
                <a class="item" href="known.php?q=category:server-21h2">
                    LTSC 2022 (21H2)
                </a>
                <a class="item" href="known.php?q=category:server-21h1">
                    21H1
                </a>
                <a class="item" href="known.php?q=category:server-20h2">
                    20H2(2009)
                </a>
                <a class="item" href="known.php?q=category:server-2004">
                    20H1(2004)
                </a>
                <a class="item" href="known.php?q=category:server-1909">
                    19H2(1909)
                </a>
                <a class="item" href="known.php?q=category:server-1903">
                    19H1(1903)
                </a>
                <a class="item" href="known.php?q=category:server-20h2-hci">
                    20H2 (HCI only)
                </a>
                <a class="item" href="known.php?q=category:server-1809">
                    LTSC 2019 (1809)
                </a>
                <a class="item" href="known.php?q=category:server-1803">
                    1803
                </a>
                <a class="item" href="known.php?q=category:server-1709">
                    1709
                </a>
            </div>
        </div>
    </div>

    <div class="ui tiny compact menu">
        <div class="ui dropdown item">
            <i class="fa-solid fa-magnifying-glass icon"></i>
            Windows 10
            <i class="dropdown icon"></i>

            <div class="menu">
                <a class="item" href="known.php?q=category:w10-22h2">
                    22H2
                </a>

                <a class="item" href="known.php?q=category:w10-21h2">
                    LTSC 2022 (21H2)
                </a>

                <a class="item" href="known.php?q=category:w10-21h1">
                    21H1
                </a>

                <a class="item" href="known.php?q=category:w10-20h2">
                    20H2(2009)
                </a>

                <a class="item" href="known.php?q=category:w10-2004">
                    20H1(2004)
                </a>

                <a class="item" href="known.php?q=category:w10-1909">
                    19H2(1909)
                </a>

                <a class="item" href="known.php?q=category:w10-1903">
                    19H1(1903)
                </a>

                <a class="item" href="known.php?q=category:w10-1809">
                    LTSC 2019 (1809)
                </a>

                <a class="item" href="known.php?q=category:w10-1803">
                    1803
                </a>

                <a class="item" href="known.php?q=category:w10-1709">
                    1709
                </a>

                <a class="item" href="known.php?q=category:w10-1703">
                    1703
                </a>
            </div>
        </div>
    </div>
</div>

<h3 class="ui centered header">
    <div class="content">
        <i class="fa-solid fa-paper-plane fa-mr"></i>
        <?= $s['quickOptions'] ?>
    </div>
</h3>

<div class="home-quick-options">
    <table class="ui top attached padded tablet stackable table">
        <thead>
            <tr>
                <th><?= $s['tHeadReleaseType'] ?></th>
                <th class="collapsing"><?= $s['tHeadArchitectures'] ?></th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>
                    <div class="ui small header">
                        <i class="fa-solid fa-box icon"></i>
			<div class="content">
                            <?= $s['latestPublicRelease'] ?>
			    <div class="sub header">
			        <?= $s['latestRPReleaseSub'] ?>
			    </div>
			</div>
                    </div>
                </td>
                <td class="collapsing center aligned">
                    <a class="ui blue button" href="fetchupd.php?arch=amd64&ring=retail&build=<?= $retailLatestBuild ?>">x64</a>
                    <a class="ui button" href="fetchupd.php?arch=arm64&ring=retail&build=<?= $retailLatestBuild ?>">arm64</a>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="ui small header">
                        <i class="fa-solid fa-dolly icon"></i>
			<div class="content">
                            <?= $s['latestRPRelease'] ?>
			    <div class="sub header">
			        <?= $s['latestRPReleaseSub'] ?>
			    </div>
			</div>
                    </div>
                </td>
                <td class="collapsing center aligned">
                    <a class="ui blue button" href="fetchupd.php?arch=amd64&ring=rp&build=<?= $rpLatestBuild ?>">x64</a>
                    <a class="ui button" href="fetchupd.php?arch=arm64&ring=rp&build=<?= $rpLatestBuild ?>">arm64</a>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="ui small header">
                        <i class="fa-solid fa-paint-roller icon"></i>
			<div class="content">
                            <?= $s['latestBetaRelease'] ?>
			    <div class="sub header">
			        <?= $s['latestBetaReleaseSub'] ?>
			    </div>
			</div>
                    </div>
                </td>
                <td class="collapsing center aligned">
                    <a class="ui blue button" href="fetchupd.php?arch=amd64&ring=wis&build=<?= $betaLatestBuild ?>">x64</a>
                    <a class="ui button" href="fetchupd.php?arch=arm64&ring=wis&build=<?= $betaLatestBuild ?>">arm64</a>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="ui small header">
                        <i class="fa-solid fa-laptop-code icon"></i>
			<div class="content">
                            <?= $s['latestDevRelease'] ?>
			    <div class="sub header">
			        <?= $s['latestDevReleaseSub'] ?>
			    </div>
			</div>
                    </div>
                </td>
                <td class="collapsing center aligned">
                    <a class="ui blue button" href="fetchupd.php?arch=amd64&ring=wif&build=<?= $devLatestBuild ?>">x64</a>
                    <a class="ui button" href="fetchupd.php?arch=arm64&ring=wif&build=<?= $devLatestBuild ?>">arm64</a>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="ui small header">
                        <i class="fa-solid fa-flask icon"></i>
			<div class="content">
                            <?= $s['latestCanaryRelease'] ?>
			    <div class="sub header">
			        <?= $s['latestCanaryReleaseSub'] ?>
			    </div>
			</div>
                    </div>
                </td>
                <td class="collapsing center aligned">
                    <a class="ui blue button" href="fetchupd.php?arch=amd64&ring=canarychannel&build=latest">x64</a>
                    <a class="ui button" href="fetchupd.php?arch=arm64&ring=canarychannel&build=latest">arm64</a>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="ui bottom attached info message">
        <i class="fa-regular fa-lightbulb icon"></i>
        <?= $s['checkOutAddANewBuild'] ?>
    </div>
</div>

<h3 class="ui centered header">
    <div class="content">
        <i class="fa-solid fa-clock fa-mr"></i>
        <?= $s['newlyAdded'] ?>
    </div>
</h3>

<?php if (isset($idsError) && $idsError == true): echo $s['error_SEARCH_NO_RESULTS']; ?>
<?php else: ?>
    <table class="ui celled striped table">
        <thead>
            <tr>
                <th><?= $s['build'] ?></th>
                <th class="collapsing"><?= $s['arch'] ?></th>
                <th class="collapsing"><?= $s['dateAdded'] ?></th>
            </tr>
        </thead>

        <?php $i = 0;
        foreach ($ids as $val): ?>
            <?php if (++$i > 15) break; ?>

            <?php $arch = $val['arch']; ?>
            <?php if ($arch == 'amd64') $arch = 'x64'; ?>

            <tr>
                <td>
                    <i class="fa-brands fa-microsoft icon"></i>
                    <a href="selectlang.php?id=<?= htmlentities($val['uuid']) ?>">
                        <?= htmlentities($val['title']) ?> <?= htmlentities($val['arch']) ?>
                    </a>
                </td>
                <td class="collapsing">
                    <?= htmlentities($arch) ?>
                </td>
                <td class="collapsing">

                    <?php if ($val['created'] == null): ?>
                        <?= $s['unknown'] ?>
                    <?php else: ?>
                        <?= date("Y-m-d H:i:s T", $val['created']) ?>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>