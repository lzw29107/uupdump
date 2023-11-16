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
        <i class="fitted cubes icon"></i>&nbsp;
        <?= htmlentities($updateTitle) ?>
    </div>
</h3>

<script src="js/selectedition.js" defer></script>

<?php if($updateArch == 'arm64') styleCluelessUserArm64Warn(); ?>

<div class="ui equal width mobile stackable grid">
    <div class="column">
        <h3 class="ui header">
            <i class="archive icon"></i>
            <div class="content">
                <?= $s['chooseEdition']; ?>
                <div class="sub header"><?= $s['chooseEditionDesc'] ?></div>
            </div>
        </h3>
        <form class="ui form" action="prepdl.php" method="post">
            <input type="hidden" name="id" value="<?= $updateId; ?>">
            <input type="hidden" name="pack" value="<?= $selectedLang; ?>">

            <div class="field">
                <label><?= $s['lang'] ?></label>
                <p>
                    <i class="green checkmark icon"></i>
                    <?= $selectedLangName ?>
                </p>
            </div>

            <div class="field">
                <label><?= $s['edition'] ?></label>
                <div class="grouped fields">
                    <?php foreach($editions as $key => $val): ?>
                        <?php $isHidden = $editionsNum > 1 && in_array($key, $hiddenEditions); ?>
                        <?php $isRecommended = !$recommend || in_array($key, $recommendedEditions); ?>
                        <?php $isChecked = !$isHidden && $isRecommended; ?>

                        <div class="field <?= $isHidden ? 'hidden-edition' : '' ?>">
                            <div class="ui checkbox">
                                <input type="checkbox" name="edition[]" value="<?= $key ?>" class="edition-selection" <?= $isChecked ? 'checked' : '' ?>>
                                <label><?= $val ?></label>
                            </div>
                        </div>

                    <?php endforeach; ?>
                    <button id="show-hidden-editions" type="button" class="ui mini button" style="display: none;">
                        <?= $s['showHiddenEditions'] ?>
                    </button>
                </div>
            </div>

            <p><?php if(!$disableVE) echo $s['additionalEditionsInfo'] ?></p>

            <button id="edition-selection-confirm" class="ui fluid right labeled icon primary button" type="submit">
                <i class="right arrow icon"></i>
                <?= $s['next'] ?>
            </button>
            <div class="ui info message">
                <i class="info icon"></i>
                <?= $s['selectEditionInfoText'] ?>
            </div>
        </form>
    </div>

    <?php if(!$disableVE): ?>
        <div class="column">
            <table class="ui very compact celled table">
                <thead>
                    <th><?= $s['additionalEdition'] ?></th>
                    <th><?= $s['requiredEdition'] ?></th>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $s['edition_CORESINGLELANGUAGE'] ?></td>
                        <td><?= $s['edition_CORE'] ?></td>
                    </tr>
                    <tr>
                        <td><?= $s['edition_PROFESSIONALWORKSTATION'] ?></td>
                        <td><?= $s['edition_PROFESSIONAL'] ?></td>
                    </tr>
                    <tr>
                        <td><?= $s['edition_PROFESSIONALEDUCATION'] ?></td>
                        <td><?= $s['edition_PROFESSIONAL'] ?></td>
                    </tr>
                    <tr>
                        <td><?= $s['edition_EDUCATION'] ?></td>
                        <td><?= $s['edition_PROFESSIONAL'] ?></td>
                    </tr>
                    <tr>
                        <td><?= $s['edition_ENTERPRISE'] ?></td>
                        <td><?= $s['edition_PROFESSIONAL'] ?></td>
                    </tr>
                    <tr>
                        <td><?= $s['edition_SERVERRDSH'] ?></td>
                        <td><?= $s['edition_PROFESSIONAL'] ?></td>
                    </tr>
                    <tr>
                        <td><?= $s['edition_IOTENTERPRISE'] ?></td>
                        <td><?= $s['edition_PROFESSIONAL'] ?></td>
                    </tr>
                    <tr>
                        <td><?= $s['edition_PROFESSIONALWORKSTATIONN'] ?></td>
                        <td><?= $s['edition_PROFESSIONALN'] ?></td>
                    </tr>
                    <tr>
                        <td><?= $s['edition_PROFESSIONALEDUCATIONN'] ?></td>
                        <td><?= $s['edition_PROFESSIONALN'] ?></td>
                    </tr>
                    <tr>
                        <td><?= $s['edition_EDUCATIONN'] ?></td>
                        <td><?= $s['edition_PROFESSIONALN'] ?></td>
                    </tr>
                    <tr>
                        <td><?= $s['edition_ENTERPRISEN'] ?></td>
                        <td><?= $s['edition_PROFESSIONALN'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>

<div class="ui fluid tiny three steps">
      <div class="completed step">
            <i class="world icon"></i>
            <div class="content">
                <div class="title"><?= $s['chooseLang'] ?></div>
                <div class="description"><?= $s['chooseLangDesc'] ?></div>
            </div>
      </div>

      <div class="active step">
            <i class="archive icon"></i>
            <div class="content">
                <div class="title"><?= $s['chooseEdition'] ?></div>
                <div class="description"><?= $s['chooseEditionDesc'] ?></div>
            </div>
      </div>

      <div class="step">
            <i class="briefcase icon"></i>
            <div class="content">
                <div class="title"><?= $s['summary'] ?></div>
                <div class="description"><?= $s['summaryDesc'] ?></div>
            </div>
      </div>
</div>