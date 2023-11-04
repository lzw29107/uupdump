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
        <i class="fitted binoculars icon"></i>&nbsp;
        <?= $s['foundUpdates'] ?>
    </div>
</h3>

<div class="ui info message">
    <i class="check info icon"></i>
    <?= $s['foundTheseUpdates'] ?>
</div>
<table class="ui celled striped table">
    <thead>
        <tr>
            <th><?= $s['update'] ?></th>
            <th><?= $s['arch'] ?></th>
            <th><?= $s['updateid'] ?></th>
        </tr>
    </thead>
    <?php foreach($updateArray as $update): ?>
        <tr><td>
            <a href="./selectlang.php?id=<?= $update['updateId'] ?>">
                <big><b><?= $update['updateTitle'] ?></b></big>
            </a>
            <p><i>
                <?php printf($s['buildNumber'], $update['foundBuild']); ?>
            </i></p>
        </td><td>
            <?= $update['arch'] ?>
        </td><td>
            <code><?= $update['updateId'] ?></code>
        </td></tr>
    <?php endforeach; ?>
</table>
