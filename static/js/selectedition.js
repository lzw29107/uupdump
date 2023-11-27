/*
* UUP dump Select Edition Page JavaScript
* https://uupdump.net/
* 
* Copyright (C) 2023 UUP dump authors. All rights reserved.
*/

function checkEditions() {
    if($('.edition-selection:checked').length == 0) {
        $('#edition-selection-confirm').prop('disabled', 1);
    } else {
        $('#edition-selection-confirm').prop('disabled', 0);
    }
}

function showHiddenEditions() {
    $('.hidden-edition').show();
    $('.hidden-edition .edition-selection').prop('disabled', 0);
    $('#show-hidden-editions').hide();
}

$('.edition-selection').on('click change', function() {
    checkEditions();
});

$('#show-hidden-editions').click(function() {
    showHiddenEditions();
});

if($('.hidden-edition').length > 0) {
    $('#show-hidden-editions').show();
    $('.hidden-edition .edition-selection').prop('disabled', 1);
    $('.hidden-edition').hide();    
}

checkEditions();
