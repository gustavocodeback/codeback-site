<?php defined( 'URL' ) OR exit( 'No direct script access allowed' );

/**
 * debug
 *
 * faz o dump da variavel
 *
 */
function debug( $var, $break = false ) {

    // exibe o conteudo da variavel
    echo '<pre>';
    var_dump( $var );

    // verifica se deve pausar
    if ( $break ) die();
}

/**
 * lorem
 *
 * gera um texto aleatório
 *
 */
function lorem( $length = 255 ) {

    // as letras do alfabeto
    $letters = [ 'a', 'b', 'c', 
                 'd', 'e', 'f', 
                 'g', 'h', 'i',
                 'j', 'k', 'l',
                 'm', 'n', 'o',
                 'p', 'q', 'r',
                 's', 't', 'u',
                 'v', 'x', 'w',
                 'y', 'z' ];

    // texto gerado
    $text = '';

    // percorre o tamanho
    for( $i = 0; $i < $length; $i++ ) {

        // pega uma letra aleatorio
        $letter = $letters[rand( 0, 25 ) ];

        // gera um numero aleatorio
        $step = rand( 0, 99 ) % 3;

        // verifica se o step é 0
        if ( $step == 0 ) {
            $text .= ' ';
        } else {
            $text .= $letter;
        }
    }

    // volta o text formatado
    return $text;
}
/* end of file */