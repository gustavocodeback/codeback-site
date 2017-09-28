<?php defined( 'URL' ) OR exit( 'No direct script access allowed' ); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Codeback Tecnologia - Aplicativos & Sistemas</title>

    <?php bootstrap( true ); ?>
    
    <link rel="stylesheet" type="text/css" href="<?php echo asset( 'assets/build/build.min.css' ); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset( 'assets/font-awesome/css/font-awesome.min.css' ); ?>">
</head>
<body>
    
    <div id="first-panel" class="container-fluid">
        <div class="navbar">
            <div class="container">
                <div class="col-xs-4">
                    <div class="menu">
                        <span></span>
                        <span class="middle"></span>
                        <span></span>
                    </div> 
                </div>
                <div class="col-xs-4 text-center">
                    <img width="40px" src="images/logo.png" alt="">
                </div>
                <div class="col-xs-4 text-right">
                    <a href="#contact"><img src="images/old-typical-phone.png" alt=""></a>
                </div>
            </div>
        </div><!-- navbar principal -->
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1><img width="800px" src="images/logo-1.png" alt=""></h1>
            </div>
        </div><!-- nome -->
        <div id="slogan" class="row">
            <div class="col-xs-12 text-center">
                <h4>Yes, we code!</h4>
            </div>
        </div><!-- slogan -->
    </div><!-- painel numero 1 -->

    <div id="services-panel" class="container-fluid">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2><img width="700px" src="images/a_codeback.png" alt=""></h2>
            </div>
        </div><!-- a codeback -->
        <div class="row">
            <div class="col-xs-4">
                <div class="service">
                    <h4>Aplicativos</h4>
                    <p><?= lorem( 100 ); ?></p>
                </div>
                <div class="service">
                    <h4>Sites</h4>
                    <p><?= lorem( 100 ); ?></p>
                </div>
            </div><!-- tipos de servico esquerda -->
            <div class="col-xs-4 mobile-screen-wrapper text-center">
                <div class="mobile-screen">
                    <img src="images/celular_1.png" alt="">
                </div>
            </div>
            <div class="col-xs-4"><!-- celular logo codeback -->
                <div class="service text-right">
                    <h4>Sistemas</h4>
                    <p><?= lorem( 100 ); ?></p>
                </div>
            </div><!-- tipos de servico direita -->
        </div><!-- servicos -->
        <div class="mission row">
            <div class="col-xs-6 col-xs-offset-3 text-center">
                <p><?= lorem(); ?></p>
            </div>
        </div><!-- missao -->
    </div><!-- painel de apresentacao -->

    <div id="cases" class="container-fluid">
        <div class="row title-wrapper">
            <div class="col-xs-12 text-center">
                <h2 class="title">Cases</h2class>
            </div>
        </div><!-- titulo -->

        <div class="row backgroung-image-1" style="z-index: 9999;">
            <div class="description col-xs-6">
                <h2>Checkme</h2>
                <p><?= lorem(); ?></p>
            </div><!-- descritivo -->
            <div class="mobile col-xs-6 text-center">
                <div class="mobile-wrapper"></div>
            </div><!-- celular -->
            <div class="clearfix"></div>
        </div>

        <div class="row backgroung-image-2" style="z-index: 9999;">
            <div class="description col-xs-6 pull-right">
                <h2>#PartiuVender</h2>
                <p><?= lorem(); ?></p>
            </div><!-- descritivo -->
            <div class="mobile col-xs-6 text-center">
                <div class="mobile-wrapper"></div>
            </div><!-- celular -->
            <div class="clearfix"></div>
        </div>

        <div class="row backgroung-image-3" style="z-index: 9999;">
            <div class="description col-xs-6">
                <h2>Passapport</h2>
                <p><?= lorem(); ?></p>
            </div><!-- descritivo -->
            <div class="mobile col-xs-6 text-center">
                <div class="mobile-wrapper"></div>
            </div><!-- celular -->
            <div class="clearfix"></div>
        </div>
    </div><!-- cases -->
    
    <div id="clientes" class="container-fluid">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1>Clientes</h1>
            </div>
        </div><!-- titulo -->
        <div class="row">
            <?php for( $i = 0; $i < 4; $i++ ): ?>
            <div class="col-md-3 text-center">
                <img width="100%" src="http://contaagil.com/wp-content/uploads/2017/09/logo_starta_ideia.png" alt="">
            </div>
            <?php endfor; ?>
        </div><!-- corpo -->
    </div><!-- clientes -->

    <div id="contact" class="container-fluid">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1>Contato</h1>
            </div>
        </div><!-- titulo -->
        <div class="row">
            <div class="col-md-4">
                <p>
                    <img class="contact-profile img-circle" src="images/gustavo.jpg">
                </p>
                <p>(15) 7070-7070</p>
                <p>(15) 7070-7070</p>
                <p>gustavo.villasboas@codeback.com.br</p>
            </div>
            <div class="col-md-4 text-center">
                <p>
                    <img class="contact-profile img-circle" src="images/agatha.jpg">
                </p>
                <p>(15) 7070-7070</p>
                <p>(15) 7070-7070</p>
                <p>agatha.magalhaes@codeback.com.br</p>
            </div>
            <div class="col-md-4 text-right">
                <p>
                    <img class="contact-profile img-circle" src="images/anao.jpg">
                </p>
                <p>(15) 7070-7070</p>
                <p>(15) 7070-7070</p>
                <p>vinicius.fernando@codeback.com.br</p>
            </div>
        </div><!-- dados de contato -->
        <div id="map" class="row">
            <div class="col-xs-12 maps-wrapper">
                <img width="100%" src="http://cdn.newsapi.com.au/image/v1/0a0ceda4bda18e664ffac1a8fa86a7d1" alt="">
            </div>
        </div><!-- mapa -->
    </div><!-- contato -->

    <div id="equipe" class="container-fluid">
        <div class="row">
            <div class="col-xs-4 text-center">
                <div class="col-xs-12">
                    <p>
                        <img class="team-profile img-circle" src="images/gustavo.jpg">
                    </p>
                </div>
                <div class="col-xs-12">
                    Gustavo Villas Boas
                </div>
                <div class="col-xs-12">
                    Papel na equipe
                </div>
                <div class="col-xs-12">
                    <?= lorem(); ?>
                </div>
            </div>
            <div class="col-xs-4 text-center">
                <div class="col-xs-12">
                    <p>
                        <img class="team-profile img-circle" src="images/agatha.jpg">
                    </p>
                </div>
                <div class="col-xs-12">
                    Agatha Magalhães
                </div>
                <div class="col-xs-12">
                    Papel na equipe
                </div>
                <div class="col-xs-12">
                    <?= lorem(); ?>
                </div>
            </div>
            <div class="col-xs-4 text-center">
                <div class="col-xs-12">
                    <p>
                        <img class="team-profile img-circle" src="images/anao.jpg">
                    </p>
                </div>
                <div class="col-xs-12">
                    Vinícius Fernando Sampaio
                </div>
                <div class="col-xs-12">
                    Papel na equipe
                </div>
                <div class="col-xs-12">
                    <?= lorem(); ?>
                </div>
            </div>
        </div>
    </div><!-- equipe -->

    <div id="footer" class="container-fluid">
        <div class="row">
            <div class="col-md-4 text-center col-image">
                <h4><img src="images/logo.png" alt=""></h4>
            </div>
            <div class="col-xs-4 links">
                <a href="#services-panel"><h4>A Codeback</h4></a>
                <a href="#cases"><h4>Cases</h4></a>
                <a href="#clientes"><h4>Clientes</h4></a>
            </div>  
            <div class="col-md-4 links">
                <a href="#contact"><h4>Contato</h4></a>
                <a href="#map"><h4>Mapa</h4></a>
                <a href="#equipe"><h4>Equipe</h4></a>
            </div>       
        </div>
    </div><!-- rodape -->

    <?php bootstrap(); ?>
    <script src="<?php echo asset( 'assets/build/global.js' ); ?>"></script>
</body>
</html>