var gulp        = require( 'gulp' );
var concat      = require( 'gulp-concat' );
var cleanCSS    = require( 'gulp-clean-css' );
var runSequence = require( 'run-sequence' );

/**
 * style
 * 
 * agrupa os arquivos css
 * 
 */
gulp.task( 'style', function() {
  return gulp.src( [ './assets/pages/*.css', './assets/components/*.css' ] )
    .pipe( concat( 'build.min.css' ) )
    .pipe( gulp.dest( './assets/build/' ) );
});

/**
 * minify
 * 
 * minifica o arquivo css
 * 
 */
gulp.task( 'minify', function() {
  return gulp.src( './assets/build/build.min.css' )
    .pipe( cleanCSS( { compatibility: 'ie8'} ) )
    .pipe( gulp.dest( './assets/build/' ) );
});

/**
 * compile
 * 
 * compila os arquivos css
 * 
 */
gulp.task( 'compile',  function() {

  // executa as tarefas em sequencia
  runSequence(  'style', 'minify' );
});

/* end of file */