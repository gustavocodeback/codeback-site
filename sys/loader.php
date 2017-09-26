<?php defined( 'URL' ) OR exit( 'No direct script access allowed' );

/**
 * page
 *
 * carrega uma página
 *
 */
function page( $page ) {

    // inclui a pagina
    require( 'pages/'.$page.'.php' );
}

/**
 * component
 *
 * carrega o componente
 *
 */
function component( $component ) {

    // inclui o component
    require( 'components/'.$component.'.php' );
}

/**
 * asset
 *
 * carrega o asset
 *
 */
function asset( $path ) {
    return URL.$path;
}

/**
 * bootstrap
 *
 * carrega o bootstrap
 *
 */
function bootstrap( $css = false ) {

    // verifica se é css
    if ( $css ) {
        echo '<link rel="stylesheet" type="text/css" href="'.asset( 'assets/bootstrap/dist/css/bootstrap.min.css' ).'">';        
    } else {
        echo '<script src="'.asset( 'assets/jquery/dist/jquery.min.js' ).'"></script>';
        echo '<script src="'.asset( 'assets/bootstrap/dist/js/bootstrap.min.js' ).'"></script>';
    }
}

/* end of file */