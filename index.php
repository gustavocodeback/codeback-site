<?php

// seta o url
define( 'URL', 'http://localhost/codeback/codeback-site/' );

// inclui o sistema
require( 'sys/utils.php' );
require( 'sys/router.php' );
require( 'sys/loader.php' );

// carrega a página
page( routerPage() );

/* end of file */