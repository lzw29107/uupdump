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
        <i class="fa-solid fa-binoculars fa-mr"></i>
        <?php printf($s['foundUpdates'], count($updateArray)); ?>
    </div>
</h3>

<div class="ui info message">
    <i class="fa-solid fa-info icon"></i>
    <?= $s['foundTheseUpdates'] ?>
</div>
<table class="ui celled striped table">
    <thead>
        <tr>
            <th><?= $s['update'] ?></th>
            <th class="collapsing"><?= $s['arch'] ?></th>
            <th class="collapsing"><?= $s['updateid'] ?></th>
        </tr>
    </thead>
    <?php foreach($updateArray as $update): ?>
  
        <?php $arch = $update['arch']; ?>
        <?php if($arch == 'amd64') $arch = 'x64'; ?>
  
        <tr><td>
            <div class="ui small header">
                <i class="fa-brands fa-microsoft icon"></i>
                <div class="content">
                    <a href="selectlang.php?id=<?= htmlentities($update['updateId']) ?>">
                        <?= htmlentities($update['updateTitle']) ?> <?= htmlentities($update['arch']) ?></a>
                    <div class="sub header">
                        <?php printf($s['buildNumber'], $update['foundBuild']); ?></div>
                </div>
            </div>
        </td><td class="collapsing">
            <?= htmlentities($arch) ?>        </td><td class="collapsing">
            <code><?= htmlentities($update['updateId']) ?></code>
        </td></tr>
    <?php endforeach; ?>
</table>
