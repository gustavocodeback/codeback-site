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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round|Open+Sans+Condensed:300" rel="stylesheet">
    <style>
        .animated {
            opacity: 0
        }
        .animated.actived {
            opacity: 1;
        }
    </style>
</head>
<body>
    
    <div id="first-panel" class="container-fluid">
        <div class="navbar">
            <div class="container text-center">
                <div class="inline-block div-menu">
                    <div class="menu" onclick="toggleMenu()">
                        <span></span>
                        <span class="middle"></span>
                        <span></span>
                    </div> 
                </div>
                <div class="inline-block">
                    <img width="40px" src="images/logo.png" alt="">
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
                <h4><img class="img-responsive" src="images/yes_we_code (1).png" alt=""></h4>
            </div>
        </div><!-- slogan -->

    </div><!-- painel numero 1 -->

    <div id="services-panel" class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2><img class="img-responsive animated" data-animate="fadeInUp" width="700px" src="images/a_codeback.png" alt=""></h2>
            </div>
        </div><!-- a codeback -->
        <div class="row">
            <div class="col-sm-4 text-left">
                <div class="service animated" data-animate="fadeInLeft">
                    <h4>APLICATIVOS</h4>
                    <p>Você no bolso do seu cliente</p>
                </div>
                <div class="service animated" data-animate="fadeInLeft">
                    <h4>SITES</h4>
                    <p>Seu site acessivel a qualquer hora e em qualquer lugar</p>
                </div>
            </div><!-- tipos de servico esquerda -->
            <div class=" col-sm-4 col-sm-push-4 text-right">
                <div class="service animated" data-animate="fadeInRight">
                    <h4>SISTEMAS</h4>
                    <p>Controle sua empresa através de sistemas cloud</p>
                </div>
            </div><!-- tipos de servico direita -->
            <div class="col-sm-4 col-sm-pull-4 mobile-screen-wrapper text-center">
                <div class="mobile-screen">
                    <img class="img-responsive animated" data-animate="pulse" src="images/celular_1.png" alt="">
                </div>
            </div><!-- celular logo codeback -->
            
        </div><!-- servicos -->
        <div class="mission row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <p class="animated" data-animate="fadeIn">Somos apaixonados pelo que fazemos. Cada linha de código, cada aplicativo entregue e cada cliente atendido pela CODEBACK tem a garantia de qualidade e eficiência.</p>
            </div>
        </div><!-- missao -->
    </div><!-- painel de apresentacao -->

    <div id="cases" class="container-fluid">
        <div class="row title-wrapper">
            <div class="col-md-12 text-center">
                <h2 class="title animated" data-animate="fadeInUp">Cases</h2>
            </div>
        </div><!-- titulo -->

        <div class="row backgroung-image-1" style="z-index: 9999;">
            <div class="description col-md-6 animated" data-animate="fadeIn">
                <h2>Checkme</h2>
                <p>Aplicativo disponível para Android e IOS, o CHECKME teve como objetivo ser o guia comercial para turistas e visitantes dentro de uma cidade.</p>
            </div><!-- descritivo -->
            <div class="mobile col-md-6 text-center">
                <div class="mobile-wrapper">
                <img class="img-responsive animated" data-animate="slideInRight" src="images/celular_3.png" alt="">
                </div>
            </div><!-- celular -->
            <div class="clearfix"></div>
        </div>

        <div class="row backgroung-image-2" style="z-index: 9999;">
            <div class="description col-md-6 pull-right animated" data-animate="fadeIn">
                <h2>#PartiuVender</h2>
                <p>A CODEBACK foi a escolhida para desenvolver o app da campanha #PartiuVender para a SAMSUNG.</p>
                <p>Voltada em aumentar as vendas e premiar os vendedores melhores qualificados, este foi um case de sucesso para ambas as empresas.</p>
            </div><!-- descritivo -->
            <div class="mobile col-md-6 text-center">
                <div class="mobile-wrapper">
                    <img class="img-responsive animated" data-animate="slideInLeft" src="images/celular_4.png" alt="">
                </div>
            </div><!-- celular -->
            <div class="clearfix"></div>
        </div>

        <div class="row backgroung-image-3" style="z-index: 9999;">
            <div class="description col-md-6 animated" data-animate="fadeIn">
                <h2>Passapport</h2>
                <p>Um aplicativo de fidelidade. O principal objetivo desse case é fornecer uma ferramenta de interação entre o lojista e o cliente.</p>
            </div><!-- descritivo -->
            <div class="mobile col-md-6 text-center">
                <div class="mobile-wrapper">
                    <img class="img-responsive animated" data-animate="slideInRight" src="images/celular_2.png" alt="">
                </div>
            </div><!-- celular -->
            <div class="clearfix"></div>
        </div>
    </div><!-- cases -->
    
    <div id="clientes" class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="animated" data-animate="fadeInUp">Clientes</h1>
            </div>
        </div><!-- titulo -->
        <div class="row">

            <div class="col-md-3 text-center animated" data-animate="fadeInLeft">
                <img class="contaagil img-responsive" width="230px" src="images/contaagil.png" alt="">
            </div>
            <div class="col-md-3 text-center aux animated" data-animate="fadeInUp">
                <img class="samsung img-responsive" width="185px" src="images/samsung.png" alt="">
            </div>
            <div class="col-md-3 text-center animated" data-animate="fadeInDown">
                <img class="itau img-responsive" width="80px" src="images/logo-itau.png" alt="">
            </div>
            <div class="col-md-3 text-center animated" data-animate="fadeInRight">
                <img width="289px" src="http://contaagil.com/wp-content/uploads/2017/09/logo_starta_ideia.png" alt="">
            </div>
        </div><!-- corpo -->
    </div><!-- clientes -->

    <div id="contact" class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="animated" data-animate="fadeInUp">Contato</h1>
            </div>
        </div><!-- titulo -->
        <div class="row">
            <div class="col-md-4 text-left animated" data-animate="fadeInLeft">
                <p>gustavo.villasboas@codeback.com.br</p>
                <p>(15) 99148-0446</p>
                <p>(15) 30313421</p>
            </div>
            <div class="col-md-4 text-center animated" data-animate="fadeInUp">
                <p>agatha.magalhaes@codeback.com.br</p>
                <p>(15) 99131-6233</p>
                <p>(15) 3017-6699</p>
            </div>
            <div class="col-md-4 text-right animated" data-animate="fadeInRight">
                <p>vinicius.fernando@codeback.com.br</p>
                <p>(15) 998618741</p>
                <p>(15) 3037-5774</p>
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
            <div class="col-md-4 text-center animated" data-animate="fadeInLeft">
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
                    Amante de programação. Deixou o emprego para correr atrás de um sonho. Nessa aventura, surgiu a CODEBACK. Desenvolvedor mobile e web, fullstack.
                </div>
            </div>
            <div class="col-md-4 text-center margin-top-col animated" data-animate="fadeInDown">
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
                Desenvolvedora Web e Mobile. Bastante experiência em PHP, CSS, Bootstrap, JavaScript, HTML e Ionic.
                </div>
            </div>
            <div class="col-md-4 text-center margin-top-col  animated" data-animate="fadeInRight">
                <div class="col-sm-12">
                    <p>
                        <img class="team-profile img-circle" src="images/vinicius.jpg">
                    </p>
                </div>
                <div class="col-sm-12">
                    Vinícius Fernando Sampaio
                </div>
                <div class="col-sm-12">
                    Papel na equipe
                </div>
                <div class="col-sm-12">
                    Desenvolvedor web e mobile. Tem experiência em travalhar com Ionic, JavaScript, PHP e HTML.
                </div>
            </div>
        </div>
    </div><!-- equipe -->

    <div id="footer" class="container-fluid">
        <div class="footer-content">
            <div class="row">
                <div class="col-md-12 text-center title">
                    <img width="70px;" src="images/logo-preto.png" alt="">
                    <h3>CODEBACK</h3>
                </div>       
            </div>
            <div class="row">
                <div class="col-md-12 text-center col-list">
                    <ul class="footer-list">
                        <li><a href="#services-panel">A Codeback</a></li>
                        <li><a href="#cases">Cases</a></li>
                        <li><a href="#clientes">Clientes</a></li>
                        <li><a href="#contact">Contato</a></li>
                        <li><a href="#map">Mapa</a></li>
                        <li><a href="#equipe">Equipe</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center col-redes-sociais">
                    <ul class="redes-sociais">
                        <li><a href="https://www.facebook.com/codeback/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 text-center">
                <p>CODEBACK <i class="fa fa-registered" aria-hidden="true"></i> 2017. All rights reserved</p>
            </div>
        </div>
    </div><!-- rodape -->

    <div id="menu-lateral" class="">
        <div id="title-menu">
            <i class="fa fa-times" aria-hidden="true" onclick="toggleMenu()"></i>
        </div>      
        <ul class="lista">
            <li><a href="#services-panel">A Codeback</a></li>
            <li><a href="#cases">Cases</a></li>
            <li><a href="#clientes">Clientes</a></li>
            <li><a href="#contact">Contato</a></li>
            <li><a href="#map">Mapa</a></li>
            <li><a href="#equipe">Equipe</a></li>
            <li><a href="#equipe"><span></span></a></li>
            <div class="redes-sociais">
                <li><a href="https://www.facebook.com/codeback/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
            </div>
        </ul>
    </div><!-- menu lateral -->

    <?php bootstrap(); ?>
    <script src="<?php echo asset( 'assets/build/global.js' ); ?>"></script>
</body>
</html>