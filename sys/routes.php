<?php defined( 'URL' ) OR exit( 'No direct script access allowed' );

/**
 * route
 *
 * as rotas do sistema
 *
 */
function route( $path ) {

    // a pagina padrao
    $default = 'home';

    // as rotas predefinidas
    $config = [
        '/' => 'home'
    ];

    // volta a rota
    return ( isset( $config[$path] ) ) ? $config[$path] : $default;
}

/* end of file */