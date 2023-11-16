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
        <i class="fitted shopping basket icon"></i>&nbsp;
        <?= $s['browseKnown'] ?>
    </div>
</h3>

<div class="ui top attached segment">
    <form class="ui form" action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
        <div class="field">
            <div class="ui big action input">
                <input type="text" name="q" value="<?= $htmlQuery ?>" placeholder="<?= $s['seachForBuilds'] ?>">
                <button class="ui big blue icon button" type="submit"><i class="search icon"></i></button>
            </div>
        </div>
        <div class="field">
            <div class="ui checkbox">
                <input type="checkbox" name="sort" value="1" <?= $dateSortChecked ?>>
                <label><?= $s['sortByDate'] ?></label>
            </div>
        </div>
    </form>
</div>

<div class="ui bottom attached success message">
    <i class="search icon"></i>
    <?php printf($s['weFoundBuilds'], $count); ?>
</div>

<table class="ui celled striped table">
    <thead>
        <tr>
            <th><?= $s['build'] ?></th>
            <th><?= $s['arch'] ?></th>
            <th><?= $s['dateAdded'] ?></th>
        </tr>
    </thead>
    <?php foreach($idsPaginated as $val): ?>
        <?php $arch = $val['arch']; ?>
        <?php if($arch == 'amd64') $arch = 'x64'; ?>

        <tr><td>
            <i class="windows icon"></i>
            <a href="./selectlang.php?id=<?= htmlentities($val['uuid']) ?>">
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

<?php if($pages > 1): ?>
<div class="ui center aligned container">
    <div class="ui pagination menu">
    <?php if($pages <= 7): ?>
        <?php foreach((range(1, $pages)) as $p): ?>
            <?php if($page == $p): ?>
        <div class="active item"><b><?= $p ?></b></div>
            <?php else: ?>
        <a class="item" href="<?= $PageBaseUrl ?><?= $p ?>"><?= $p ?></a>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php elseif($page <= 3): ?>
        <?php foreach((range(1, 5)) as $p): ?>
            <?php if($page == $p): ?>
        <div class="active item"><b><?= $p ?></b></div>
            <?php else: ?>
        <a class="item" href="<?= $PageBaseUrl ?><?= $p ?>"><?= $p ?></a>
            <?php endif; ?>
        <?php endforeach; ?>
        <div class="disabled item">...</div>
        <a class="item" href="<?= $PageBaseUrl ?><?= $pages ?>"><?= $pages ?></a>
    <?php elseif($page >= ($pages - 2)): ?>
        <div class="item" href="<?= $PageBaseUrl ?>1">1</div>
        <div class="disabled item">...</div>
        <?php foreach((range($pages-4, $pages)) as $p): ?>
            <?php if($page == $p): ?>
        <div class="active item"><b><?= $p ?></b></div>
            <?php else: ?>
        <a class="item" href="<?= $PageBaseUrl ?><?= $p ?>"><?= $p ?></a>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="item" href="<?= $PageBaseUrl ?>1">1</div>
        <?php if($page == 4): ?>
        <a class="item" href="<?= $PageBaseUrl ?>2">2</a>
        <?php else: ?>
        <div class="disabled item">...</div>
        <?php endif; ?>
        <a class="item" href="<?= $PageBaseUrl ?><?= ($page-1) ?>"><?= ($page-1) ?></a>
        <a class="active item"><b><?= $page ?></b></a>
        <a class="item" href="<?= $PageBaseUrl ?><?= ($page+1) ?>"><?= ($page+1) ?></a>
        <?php if($page == ($pages - 4)): ?>
        <div class="disabled item">...</div>
        <?php else: ?>
        <a class="item" href="<?= $PageBaseUrl ?><?= ($pages-1) ?>"><?= ($pages-1) ?></a>
        <?php endif; ?>
        <a class="item" href="<?= $PageBaseUrl ?><?= $pages ?>"><?= $pages ?></a>
    <?php endif; ?>
    </div>
</div>
<?php endif; ?>