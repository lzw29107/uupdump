function checkfetchOpt() {
    sku = $('select[name="sku"]').val();
    thisonly = $('#thisonly:checked').val();
    corpnet = $('#corpnet:checked').val();

    if(thisonly !== undefined && corpnet !== undefined) {
        $('input[name="flags"]').val('+' + thisonly + ',' + corpnet);
    } else if(thisonly !== undefined) {
        $('input[name="flags"]').val('+' + thisonly);
    } else if(corpnet !== undefined) {
        $('input[name="flags"]').val('+' + corpnet);
    }

    if(sku == 123 || sku == 131 || sku == 135 || sku == 180 || sku == 184 || sku == 189) {
        $('#type').slideDown(300);
    } else {
        $('#type').slideUp(300);
        $('.ui.dropdown.selection:eq(3)').dropdown('restore defaults')
    }
}

$('select[name="sku"], #thisonly, #corpnet').on('click change', function() {
    checkfetchOpt();
});

checkfetchOpt();