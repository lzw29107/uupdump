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
<div class="welcome-text">
    <img src="img/logo.svg" class="logo" alt="{$s['uupdump']}">
    <p class="header"><?= $s['uupdump'] ?></p>
    <p class="sub"><i><?= $s['slogan'] ?></i></p>
</div>

<form class="ui form" action="known.php" method="get">
    <div class="field">
        <div class="ui big action input">
            <input type="text" name="q" placeholder="<?= $s['seachForBuilds'] ?>">
            <button class="ui big blue icon button" type="submit"><i class="search icon"></i></button>
        </div>
    </div>
</form>

<div class="quick-search-buttons">
    <div class="ui tiny compact menu">
        <a class="item" href="known.php?q=category:canary">
            <i class="search icon"></i>
            <?= $s['channel_canary'] ?>
        </a>
    </div>

    <div class="ui tiny compact menu">
        <a class="item" href="known.php?q=category:dev">
            <i class="search icon"></i>
            <?= $s['channel_dev'] ?>
        </a>
    </div>

    <div class="ui tiny compact menu">
        <div class="ui dropdown item">
            <i class="search icon"></i>
            Windows 11
            <i class="dropdown icon"></i>

            <div class="menu">
                <a class="item" href="known.php?q=category:w11-23h2-pm-beta">
                    23H2 Post Moment Beta
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
            <i class="search icon"></i>
            Windows Server
            <i class="dropdown icon"></i>

            <div class="menu">
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
            <i class="search icon"></i>
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
        <i class="fitted rocket icon"></i>&nbsp;
        <?= $s['quickOptions'] ?>
    </div>
</h3>

<table class="ui large tablet stackable padded top attached table">
    <thead>
        <tr>
            <th><?= $s['tHeadReleaseType'] ?></th>
            <th><?= $s['tHeadDescription'] ?></th>
            <th><?= $s['tHeadArchitectures'] ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="collapsing">
                <i class="large box icon"></i>
                <b><?= $s['latestPublicRelease'] ?></b>
            </td>
            <td><?= $s['latestPublicReleaseSub'] ?></td>
            <td class="center aligned collapsing">
                <a href="fetchupd.php?arch=amd64&ring=retail&build=<?= $retailLatestBuild ?>"><button class="ui blue button">x64</button></a>
                <a href="fetchupd.php?arch=arm64&ring=retail&build=<?= $retailLatestBuild ?>"><button class="ui button">arm64</button></a>
                <a href="fetchupd.php?arch=all&ring=retail&build=<?= $retailLatestBuild ?>"><button class="ui black button">all</button></a>
            </td>
        </tr>
        <tr>
            <td class="collapsing">
                <i class="large fire extinguisher icon"></i>
                <b><?= $s['latestRPRelease'] ?></b>
            </td>
            <td><?= $s['latestRPReleaseSub'] ?></td>
            <td class="center aligned">
                <a href="fetchupd.php?arch=amd64&ring=rp&build=<?= $rpLatestBuild ?>"><button class="ui blue button">x64</button></a>
                <a href="fetchupd.php?arch=arm64&ring=rp&build=<?= $rpLatestBuild ?>"><button class="ui button">arm64</button></a>
				<a href="fetchupd.php?arch=all&ring=rp&build=<?= $rpLatestBuild ?>"><button class="ui black button">all</button></a>
            </td>
        </tr>
        <tr>
            <td class="collapsing">
                <i class="large fire icon"></i>
                <b><?= $s['latestBetaRelease'] ?></b>
            </td>
            <td><?= $s['latestBetaReleaseSub'] ?></td>
            <td class="center aligned">
                <a href="fetchupd.php?arch=amd64&ring=wis&build=<?= $betaLatestBuild ?>"><button class="ui blue button">x64</button></a>
                <a href="fetchupd.php?arch=arm64&ring=wis&build=<?= $betaLatestBuild ?>"><button class="ui button">arm64</button></a>
				<a href="fetchupd.php?arch=all&ring=wis&build=<?= $betaLatestBuild ?>"><button class="ui black button">all</button></a>
            </td>
        </tr>
        <tr>
            <td class="collapsing">
                <i class="large bomb icon"></i>
                <b><?= $s['latestDevRelease'] ?></b>
            </td>
            <td><?= $s['latestDevReleaseSub'] ?></td>
            <td class="center aligned">
                <a href="fetchupd.php?arch=amd64&ring=wif&build=<?= $devLatestBuild ?>"><button class="ui blue button">x64</button></a>
                <a href="fetchupd.php?arch=arm64&ring=wif&build=<?= $devLatestBuild ?>"><button class="ui button">arm64</button></a>
				<a href="fetchupd.php?arch=all&ring=wif&build=<?= $devLatestBuild ?>"><button class="ui black button">all</button></a>
            </td>
        </tr>
        <tr>
            <td class="collapsing">
                <i class="large flask icon"></i>
                <b><?= $s['latestCanaryRelease'] ?></b>
            </td>
            <td><?= $s['latestCanaryReleaseSub'] ?></td>
            <td class="center aligned">
                <a href="fetchupd.php?arch=amd64&ring=canary&build=latest"><button class="ui blue button">x64</button></a>
                <a href="fetchupd.php?arch=arm64&ring=canary&build=latest"><button class="ui button">arm64</button></a>
				<a href="fetchupd.php?arch=all&ring=canary&build=latest"><button class="ui black button">all</button></a>
            </td>
        </tr>
    </tbody>
</table>
<div class="ui bottom attached info message">
  <i class="icon lightbulb outline"></i>
  <?= $s['checkOutAddANewBuild'] ?></div>


<h3 class="ui centered header">
    <div class="content">
        <i class="fitted star outline icon"></i>&nbsp;
        <?= $s['newlyAdded'] ?>
    </div>
</h3>

<?php if(isset($idsError) && $idsError == true): echo $s['error_SEARCH_NO_RESULTS']; ?>
<?php else: ?>
<table class="ui striped table">
    <thead>
        <tr>
            <th><?= $s['build'] ?></th>
            <th><?= $s['arch'] ?></th>
            <th><?= $s['dateAdded'] ?></th>
        </tr>
    </thead>

    <?php $i = 0; foreach($ids as $val): ?>
        <?php if(++$i > 15) break; ?>

        <?php $arch = $val['arch']; ?>
        <?php if($arch == 'amd64') $arch = 'x64'; ?>

        <tr><td>
            <i class="windows icon"></i>
            <a href="selectlang.php?id=<?= htmlentities($val['uuid']) ?>">
                <?= htmlentities($val['title']) ?> <?= htmlentities($val['arch']) ?>
            </a>
            </td><td>
                <?= htmlentities($arch) ?>
            </td><td>

            <?php if($val['created'] == null): ?>
                <?= $s['unknown'] ?>
            <?php else: ?>
                <?= date("Y-m-d H:i:s T", $val['created']) ?>
            <?php endif; ?>
        </td></tr>
    <?php endforeach; ?>
</table>
<?php endif; ?>