<?php defined( 'URL' ) OR exit( 'No direct script access allowed' );

// inclui as rotas
require( 'routes.php' );

/**
 * routerPage
 *
 * pega a página que deve ser carregada
 *
 */
function routerPage() {

    // pega a url inteira
    $path = ( isset( $_SERVER['HTTPS'] ) ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    // retira o path
    $path = str_replace( URL, '', $path );

    // verifica o que sobrou
    $path = strlen( $path ) > 0 ? $path : '/';

    // volta a rota selecionada
    return route( $path );
}

/* end of file */