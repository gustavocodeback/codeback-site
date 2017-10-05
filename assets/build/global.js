/**
 * toggleMenu
 * 
 * esconde/mostra o menu lateral
 * 
 */
function toggleMenu() {
    $( '#menu-lateral' ).toggleClass( 'active' );
}

/**
 * between
 * 
 * verifica se um ponto está localizando dentro de uma faixa
 * 
 */
function between( ponto, inicio, fim ) {
    if ( ponto > inicio ) {
        if ( ponto < fim ) {
            return true;
        } else return false;
    } else return false;
}

/**
 * animateIt
 * 
 * faz a animacao na tela
 * 
 */
function animateIt() {

    // percorre todos os items que deve ser animados
    $( '.animated' ).each( function( index, item ) {
        
        // pega a faixa visivel na tela
        var start = $( window ).scrollTop();
        var end   = start + $( window ).height();

        // pega o ponto a ser comparado
        var ponto = $( item ).offset().top;

        // verifica se esta na area visivel
        if ( between( ponto, start, end ) ) {
            
            // pega a classe da animacao
            var animateClass = $( item ).attr( 'data-animate' );

            // adiciona as classes
            $( item ).addClass( 'actived' ).addClass( animateClass );
        }
    });
}

$( document ).ready( function() {

    $( window ).scroll( animateIt );
    
});

