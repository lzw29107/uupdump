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
<h3 class="ui centered header">
    <div class="content">
        <i class="fa-solid fa-magnifying-glass fa-mr"></i>
        <?= $s['browseKnown'] ?>
    </div>
</h3>

<div class="ui top attached segment">
    <form class="ui form" action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
        <div class="field">
            <div class="ui big labeled action input">
                <div class="ui basic label">
                    <div class="ui checkbox" title="<?= $s['sortByDate'] ?>">
                        <input type="checkbox" name="sort" value="1">
                        <label><i class="fa-solid fa-calendar-day"></i></label>
                    </div>
                </div>

                <input type="text" name="q" value="<?= $htmlQuery ?>" placeholder="<?= $s['seachForBuilds'] ?>">
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
                    <a class="item" href="known.php?q=category:w11-24h2-current-dev">
                        24H2 Current Dev
                    </a>

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
</div>

<div class="ui bottom attached success message">
    <i class="fa-solid fa-magnifying-glass icon"></i>
    <?php printf($s['weFoundBuilds'], $count); ?>
</div>

<table class="ui celled striped table">
    <thead>
        <tr>
            <th><?= $s['build'] ?></th>
            <th class="collapsing"><?= $s['arch'] ?></th>
            <th class="collapsing"><?= $s['dateAdded'] ?></th>
        </tr>
    </thead>
    <?php foreach ($idsPaginated as $val): ?>
        <?php $arch = $val['arch']; ?>
        <?php if ($arch == 'amd64') $arch = 'x64'; ?>

        <tr>
            <td>
                <i class="fa-brands fa-microsoft icon"></i>
                <a href="./selectlang.php?id=<?= htmlentities($val['uuid']) ?>">
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

<?php if ($pages > 1): ?>
    <div class="ui center aligned container">
        <div class="ui pagination menu">
            <?php if ($pages <= 7): ?>
                <?php foreach ((range(1, $pages)) as $p): ?>
                    <?php if ($page == $p): ?>
                        <div class="active item"><b><?= $p ?></b></div>
                    <?php else: ?>
                        <a class="item" href="<?= $PageBaseUrl ?><?= $p ?>"><?= $p ?></a>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php elseif ($page <= 3): ?>
                <?php foreach ((range(1, 5)) as $p): ?>
                    <?php if ($page == $p): ?>
                        <div class="active item"><b><?= $p ?></b></div>
                    <?php else: ?>
                        <a class="item" href="<?= $PageBaseUrl ?><?= $p ?>"><?= $p ?></a>
                    <?php endif; ?>
                <?php endforeach; ?>
                <div class="disabled item">...</div>
                <a class="item" href="<?= $PageBaseUrl ?><?= $pages ?>"><?= $pages ?></a>
            <?php elseif ($page >= ($pages - 2)): ?>
                <div class="item" href="<?= $PageBaseUrl ?>1">1</div>
                <div class="disabled item">...</div>
                <?php foreach ((range($pages - 4, $pages)) as $p): ?>
                    <?php if ($page == $p): ?>
                        <div class="active item"><b><?= $p ?></b></div>
                    <?php else: ?>
                        <a class="item" href="<?= $PageBaseUrl ?><?= $p ?>"><?= $p ?></a>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="item" href="<?= $PageBaseUrl ?>1">1</div>
                <?php if ($page == 4): ?>
                    <a class="item" href="<?= $PageBaseUrl ?>2">2</a>
                <?php else: ?>
                    <div class="disabled item">...</div>
                <?php endif; ?>
                <a class="item" href="<?= $PageBaseUrl ?><?= ($page - 1) ?>"><?= ($page - 1) ?></a>
                <a class="active item"><b><?= $page ?></b></a>
                <a class="item" href="<?= $PageBaseUrl ?><?= ($page + 1) ?>"><?= ($page + 1) ?></a>
                <?php if ($page <= ($pages - 4)): ?>
                    <div class="disabled item">...</div>
                <?php else: ?>
                    <a class="item" href="<?= $PageBaseUrl ?><?= ($pages - 1) ?>"><?= ($pages - 1) ?></a>
                <?php endif; ?>
                <a class="item" href="<?= $PageBaseUrl ?><?= $pages ?>"><?= $pages ?></a>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
