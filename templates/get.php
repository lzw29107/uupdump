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
        <i class="fa-brands fa-microsoft fa-mr"></i>
        <?= htmlentities($updateName.' '.$updateArch) ?>
    </div>
</h3>

<?php if($updateArch == 'arm64') styleCluelessUserArm64Warn(); ?>

<table class="ui celled striped table">
    <thead>
        <tr>
            <th><?= $s['file'] ?></th>
            <th class="collapsing"><?= $s['expires'] ?></th>
            <th class="collapsing"><?= $s['sha1'] ?></th>
            <th class="collapsing"><?= $s['size'] ?></th>
        </tr>
    </thead>
    <?php $totalSize = 0; foreach($filesKeys as $val): ?>
        <?php $size = $files[$val]['size']; ?>
        <?php $totalSize = $totalSize + $size; ?>
        <?php $size = readableSize($size); ?>

        <tr><td>
            <a href="<?= $files[$val]['url'] ?>">
                <?= $val ?>
            </a>
        </td><td class="collapsing">
            <?= date("Y-m-d H:i:s T", $files[$val]['expire']) ?>
        </td><td class="collapsing">
            <code><?= $files[$val]['sha1'] ?></code>
        </td><td class="collapsing">
            <?= $size ?>
        </td></tr>
    <?php endforeach; ?>

    <?php $totalSize = readableSize($totalSize, 2); ?>
    <?php $filesRows = (count($filesKeys)+3 > 30) ? 30 : count($filesKeys)+3 ?>
</table>

<div class="ui info message">
    <i class="fa-solid fa-info icon"></i>
    <?php printf($s['totalSizeOfFiles'], $totalSize); ?>
</div>

<?php if(isset($skipTextBoxes) && $skipTextBoxes) return; ?>

<div class="ui divider"></div>

<div class="ui icon message">
    <i class="fa-solid fa-terminal icon"></i>
    <div class="content">
        <div class="header"><?= $s['fileRenamingScript'] ?></div>
        <p>
            <?= $s['fileRenamingScriptDesc1'] ?><br>
            <?= $s['fileRenamingScriptDesc2'] ?>
        </p>
    </div>
</div>

<div class="ui form">
    <div class="field">
        <textarea readonly rows="<?= $filesRows ?>" style="font-family: monospace;"><?= $renameTextArea ?></textarea>
    </div>
</div>

<div class="ui divider"></div>

<div class="ui icon positive message">
    <i class="fa-solid fa-file-circle-check icon"></i>
    <div class="content">
        <div class="header"><?= $s['sha1File'] ?></div>
        <p><?= $s['sha1FileDesc'] ?></p>
    </div>
</div>

<div class="ui form">
    <div class="field">
        <textarea readonly rows="<?= $filesRows ?>" style="font-family: monospace;"><?= $sha1TextArea ?></textarea>
    </div>
</div>
