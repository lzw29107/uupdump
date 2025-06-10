function checkfetchOpt ()
{
    sku = $( 'select[name="sku"]' ).val();

    if ( sku == 123 || sku == 131 || sku == 135 || sku == 180 || sku == 184 || sku == 189 )
    {
        $( '#type' ).slideDown( 300 );
    } else
    {
        $( '#type' ).slideUp( 300 );
        $( '.ui.dropdown.selection:eq(4)' ).dropdown( 'restore defaults' )
    }
}

function initDropdowns ()
{
    $( '.ui.search.dropdown' ).dropdown( {
        allowAdditions: true
    } );
}

document.addEventListener( 'DOMContentLoaded', initDropdowns );
window.addEventListener( 'pageshow', function ( event )
{
    if ( event.persisted )
    {
        initDropdowns();
    }
} );

$( 'select[name="sku"]' ).on( 'click change', function ()
{
    checkfetchOpt();
} );

checkfetchOpt();
