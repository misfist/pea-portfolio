// Set height equal to width

( function( $ ) {
    
    $( '.gallery-icon' ).each( function( index, element ) {
        var img = $( element ).find( 'img' );
        //$( this ).height( $( this ).width() );
        $( this ).css( 'background-image', 'url(' + img.attr( 'src' ) + ')' );
    } );

} )( jQuery );
