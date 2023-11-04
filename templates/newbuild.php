<?php if(!isset($templateOk)) die(); ?>
<h3 class="ui centered header">
    <div class="content">
        <i class="fitted plus circle icon"></i>&nbsp;
        <?= $s['addNewBuild'] ?>
    </div>
</h3>

<div class="ui two columns mobile stackable centered grid">
    <div class="column">
        <h3 class="ui header">
            <i class="list icon"></i>
            <?= $s['selectOptions'] ?>
        </h3>
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
                <label><?= $s['build'] ?></label>
                <input type="text" value="22621.1" id="build">
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
                <label><?= $s['otherOptions'] ?></label>
                <div class="grouped fields">
                    <div class="field">
                        <div class="ui checkbox">
                            <input type="checkbox" id="thisonly" value="thisonly" class="other-options">
                            <label><?= $s['otherOpt1'] ?></label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui checkbox"
                            <?= uupApiConfigIsTrue('allow_corpnet') ? '' : 'style="display:none;"' ?>>
                            <input type="checkbox" id="corpnet" value="corpnet" class="other-options"
                            <?= uupApiConfigIsTrue('allow_corpnet') ? 'checked' : 'disabled' ?>>
                            <label><?= $s['otherOpt2'] ?><?= $enableuf ? "{$s['otherOptNotice']}" : ''?></label>
                        </div>
                    </div>
                </div>
            </div>

            <input type="hidden" value="22621.1" name="build">

            <button class="ui fluid right labeled icon primary button" id="submitForm" type="submit">
                <i class="right arrow icon"></i>
                <?= $s['next'] ?>
            </button>
        </form>

        <div class="ui info message">
            <i class="info icon"></i>
            <?= $s['newBuildNextText'] ?>
        </div>
    </div>

    <div class="column">
        <h3 class="ui header">
            <i class="info circle icon"></i>
            <?= $s['newBuildUsing'] ?>
        </h3>
        <p><?= $s['newBuildUsingText'] ?></p>
        <div class="ui negative icon message">
            <i class="exclamation triangle icon"></i>
            <div class="content">
                <div class="header">
                    <?= $s['optionsNotice'] ?>
                </div>
                <p><?= $s['optionsNoticeText'] ?></p>
            </div>
        </div>
    </div>
</div>

<script>
function checkfetchOpt() {
    sku = $('select[name="sku"]').val();
    build = $('#build').val();
    thisonly = $('#thisonly:checked').val();
    corpnet = $('#corpnet:checked').val();
  
    if(thisonly !== undefined && corpnet !== undefined) {
        $('input[name="build"]').val(build + '+' + thisonly + ',' + corpnet);
    } else if(thisonly !== undefined) {
        $('input[name="build"]').val(build + '+' + thisonly);
    } else if(corpnet !== undefined) {
        $('input[name="build"]').val(build + '+' + corpnet);
    } else {
        $('input[name="build"]').val(build);
    }
  
	  if(sku == 123 || sku == 131 || sku == 135 || sku == 180 || sku == 184 || sku == 189) {
        $('#type').slideDown(300);
        iswcos = true;
	  } else {
        $('#type').slideUp(300);
        iswcos = false;
        $('.ui.dropdown.selection:eq(3)').dropdown('restore defaults')
	  }
}

$('select[name="sku"], #build, #thisonly, #corpnet').on('click change', function() {
    checkfetchOpt();
});

checkfetchOpt();
</script>
