jQuery( function($) {

    //$(window).on('load', function() {
        if( location.host === 'www.mt-finder.com' ) {          

            var canonical = $('link[rel="canonical"]').attr( 'href' );
            canonical = canonical.replace( 'mt-finder.com', 'mt-police.com' );

            $('link[rel="canonical"]').attr( 'href', canonical );
        }
    //});    
});