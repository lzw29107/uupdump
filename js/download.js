/*
* UUP dump Download Page JavaScript
* https://uupdump.net/
* 
* Copyright (C) 2023 UUP dump authors. All rights reserved.
*/

function checkDlOpt() {
    autodl = $('input[name="autodl"]:checked').val();
    cleanup = $('input[name="cleanup"]').prop('checked');

	if(autodl < 2) {
		$('#legal-cope').slideUp(300);
	} else {
        $('#legal-cope').slideDown(300);
	}

    if(autodl == 1) {
        $('#conversion-options').slideUp(300);
        disabled_co = true;
    } else {
        $('#conversion-options').slideDown(300);
        disabled_co = false;
    }

    if(autodl == 3) {
        $('#additional-editions-list').slideDown(300);
        disabled_ve = false;
    } else {
        $('#additional-editions-list').slideUp(300);
        disabled_ve = true;
    }

  if(cleanup == true) {
    $('input[name="resetbase"]').prop('disabled',false);
  } else {
    $('input[name="resetbase"]').prop('checked',false);
    $('input[name="resetbase"]').prop('disabled',true);
  }
  
    $('.virtual-edition').prop('disabled', disabled_ve);
    $('.conversion-option').prop('disabled', disabled_co);
}

$('#learn-more-ve-link').click(function() {
    $('.ui.modal.virtual-editions-info').modal('show');
});

$('#learn-more-updates-link').click(function() {
    $('.ui.modal.updates').modal('show');
});

$('input[name="autodl"], input[name="cleanup"]').on('click change', function() {
    checkDlOpt();
});

$('#additional-editions-list').hide();
$('#learn-more-updates-link').css('display', 'inline');
$('#VEConvertLearnMoreLink').css('display', 'inline');

checkDlOpt();