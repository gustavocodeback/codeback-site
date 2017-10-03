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
    <link href="https://fonts.googleapis.com/css?family=Crete+Round|Open+Sans+Condensed:300" rel="stylesheet">
</head>
<body>
    
    <div id="first-panel" class="container-fluid">
        <div class="navbar">
            <div class="container">
                <div class="col-xs-4">
                    <div class="menu" onclick="toggleMenu()">
                        <span></span>
                        <span class="middle"></span>
                        <span></span>
                    </div> 
                </div>
                <div class="col-xs-4 text-center">
                    <img width="40px" src="images/logo.png" alt="">
                </div>
                <div class="col-xs-4 text-right">
                </div>
            </div>
        </div><!-- navbar principal -->
        <div class="row">
            <div class="col-md-12 text-center">
                <h1><img class="img-responsive" width="800px" src="images/logo-1.png" alt=""></h1>
            </div>
        </div><!-- nome -->
        <div id="slogan" class="row">
            <div class="col-md-12 text-center">
                <h4>Yes, we code!</h4>
            </div>
        </div><!-- slogan -->

    </div><!-- painel numero 1 -->

    <div id="services-panel" class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2><img class="img-responsive" width="700px" src="images/a_codeback.png" alt=""></h2>
            </div>
        </div><!-- a codeback -->
        <div class="row">
            <div class="col-sm-4 text-left">
                <div class="service">
                    <h4>APLICATIVOS</h4>
                    <p><?= lorem( 100 ); ?></p>
                </div>
                <div class="service">
                    <h4>SITES</h4>
                    <p><?= lorem( 100 ); ?></p>
                </div>
            </div><!-- tipos de servico esquerda -->
            <div class=" col-sm-4 col-sm-push-4 text-right">
                <div class="service">
                    <h4>SISTEMAS</h4>
                    <p><?= lorem( 100 ); ?></p>
                </div>
            </div><!-- tipos de servico direita -->
            <div class="col-sm-4 col-sm-pull-4 mobile-screen-wrapper text-center">
                <div class="mobile-screen">
                    <img class="img-responsive" src="images/celular_1.png" alt="">
                </div>
            </div><!-- celular logo codeback -->
            
        </div><!-- servicos -->
        <div class="mission row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <p><?= lorem(); ?></p>
            </div>
        </div><!-- missao -->
    </div><!-- painel de apresentacao -->

    <div id="cases" class="container-fluid">
        <div class="row title-wrapper">
            <div class="col-md-12 text-center">
                <h2 class="title">Cases</h2>
            </div>
        </div><!-- titulo -->

        <div class="row backgroung-image-1" style="z-index: 9999;">
            <div class="description col-md-6">
                <h2>Checkme</h2>
                <p><?= lorem(); ?></p>
            </div><!-- descritivo -->
            <div class="mobile col-md-6 text-center">
                <div class="mobile-wrapper">
                <img class="img-responsive" src="images/celular_3.png" alt="">
                </div>
            </div><!-- celular -->
            <div class="clearfix"></div>
        </div>

        <div class="row backgroung-image-2" style="z-index: 9999;">
            <div class="description col-md-6 pull-right">
                <h2>#PartiuVender</h2>
                <p><?= lorem(); ?></p>
            </div><!-- descritivo -->
            <div class="mobile col-md-6 text-center">
                <div class="mobile-wrapper">
                    <img class="img-responsive" src="images/celular_4.png" alt="">
                </div>
            </div><!-- celular -->
            <div class="clearfix"></div>
        </div>

        <div class="row backgroung-image-3" style="z-index: 9999;">
            <div class="description col-md-6">
                <h2>Passapport</h2>
                <p><?= lorem(); ?></p>
            </div><!-- descritivo -->
            <div class="mobile col-md-6 text-center">
                <div class="mobile-wrapper">
                    <img class="img-responsive" src="images/celular_2.png" alt="">
                </div>
            </div><!-- celular -->
            <div class="clearfix"></div>
        </div>
    </div><!-- cases -->
    
    <div id="clientes" class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Clientes</h1>
            </div>
        </div><!-- titulo -->
        <div class="row">
            <div class="col-md-3 text-center">
                <img class="contaagil img-responsive" width="100%" src="images/contaagil.png" alt="">
            </div>
            <div class="col-md-3 text-center">
                <img class="sansung img-responsive" width="100%" src="images/sansung.png" alt="">
            </div>
            <div class="col-md-3 text-center">
                <img class="itau img-responsive" width="100%" src="images/itau.png" alt="">
            </div>
            <div class="col-md-3 text-center">
                <img width="100%" src="http://contaagil.com/wp-content/uploads/2017/09/logo_starta_ideia.png" alt="">
            </div>
        </div><!-- corpo -->
    </div><!-- clientes -->

    <div id="contact" class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Contato</h1>
            </div>
        </div><!-- titulo -->
        <div class="row">
            <div class="col-md-4 text-left">
                <p>gustavo.villasboas@codeback.com.br</p>
                <p>(15) 7070-7070</p>
                <p>(15) 7070-7070</p>
            </div>
            <div class="col-md-4 text-center">
                <p>agatha.magalhaes@codeback.com.br</p>
                <p>(15) 7070-7070</p>
                <p>(15) 7070-7070</p>
            </div>
            <div class="col-md-4 text-right">
                <p>vinicius.fernando@codeback.com.br</p>
                <p>(15) 7070-7070</p>
                <p>(15) 7070-7070</p>
            </div>
        </div><!-- dados de contato -->
        <div id="map" class="row">
            <div class="col-md-12 maps-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.2341819414073!2d-47.50270504981042!3d-23.48807308464428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5f4c57a7e42f5%3A0x66459c0c4b93e24f!2sR.+Jos%C3%A9+Em%C3%ADlio+Paes%2C+189+-+Wanel+Ville%2C+Sorocaba+-+SP%2C+18055-054!5e0!3m2!1spt-BR!2sbr!4v1507036914088" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div><!-- mapa -->
    </div><!-- contato -->

    <div id="equipe" class="container-fluid">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="col-sm-12">
                    <p>
                        <img class="team-profile img-circle" src="images/gustavo.jpg">
                    </p>
                </div>
                <div class="col-sm-12">
                    Gustavo Villas Boas
                </div>
                <div class="col-sm-12">
                    Papel na equipe
                </div>
                <div class="col-sm-12">
                    <?= lorem(); ?>
                </div>
            </div>
            <div class="col-md-4 text-center margin-top-col">
                <div class="col-sm-12">
                    <p>
                        <img class="team-profile img-circle" src="images/agatha.jpg">
                    </p>
                </div>
                <div class="col-sm-12">
                    Agatha Magalhães
                </div>
                <div class="col-sm-12">
                    Papel na equipe
                </div>
                <div class="col-sm-12">
                    <?= lorem(); ?>
                </div>
            </div>
            <div class="col-md-4 text-center margin-top-col">
                <div class="col-sm-12">
                    <p>
                        <img class="team-profile img-circle" src="images/anao.jpg">
                    </p>
                </div>
                <div class="col-sm-12">
                    Vinícius Fernando Sampaio
                </div>
                <div class="col-sm-12">
                    Papel na equipe
                </div>
                <div class="col-sm-12">
                    <?= lorem(); ?>
                </div>
            </div>
        </div>
    </div><!-- equipe -->

    <div id="footer" class="container-fluid">
        <div class="row">
            <div class="col-md-4 text-center col-image">
                <h4><img src="images/logo_branco.png" alt=""></h4>
            </div>
            <div class="col-md-4 links text-center">
                <a href="#services-panel"><h4>A Codeback</h4></a>
                <a href="#cases"><h4>Cases</h4></a>
                <a href="#clientes"><h4>Clientes</h4></a>
            </div>  
            <div class="col-md-4 links text-center">
                <a href="#contact"><h4>Contato</h4></a>
                <a href="#map"><h4>Mapa</h4></a>
                <a href="#equipe"><h4>Equipe</h4></a>
            </div>       
        </div>
    </div><!-- rodape -->

    <div id="menu-lateral" class="">
        <div id="title-menu">
            <h1>Menu</h1>
            <i class="fa fa-times" aria-hidden="true" onclick="toggleMenu()"></i>
        </div>         
        <ul class="lista">
            <li><a href="#services-panel">A Codeback</a></li>
            <li><a href="#cases">Cases</a></li>
            <li><a href="#clientes">Clientes</a></li>
            <li><a href="#contact">Contato</a></li>
            <li><a href="#map">Mapa</a></li>
            <li><a href="#equipe">Equipe</a></li>
        </ul>
    </div><!-- menu lateral -->

    <?php bootstrap(); ?>
    <script src="<?php echo asset( 'assets/build/global.js' ); ?>"></script>
</body>
</html>