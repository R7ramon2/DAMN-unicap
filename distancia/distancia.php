<!DOCTYPE html>
<html lang="pt-br"> 

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

<html class="no-js"> <!--<![endif]-->
    <head>

            <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123155195-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-123155195-1');
        </script>


        <title>Faculdade Anasps</title>

        <!-- meta -->
        <meta charset="utf-8">
        <meta name="author" content="Filipi Machado">
        <meta name="author" content="Bruno Rodrigues Santos">
        <meta name="author" content="Marcos Dorneles">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Educação Presencial e a Distância - Faculdade Anasps">

        <!-- Banner Slide--> 
        <link rel="stylesheet" href="../assets/css/css_galery/normalize.css">
        <link rel="stylesheet" href="../assets/css/css_galery/gallery.prefixed.css">
        <link rel="stylesheet" href="../assets/css/css_galery/gallery.theme.css">

        
        <!-- stylesheets -->
        <link rel="shortcut icon" href="../assets/imagens/favicon.png">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/animate.css">
        <link rel="stylesheet" href="../assets/css/owl.carousel.css">
        <link rel="stylesheet" href="../assets/css/owl.theme.css">
        <link rel="stylesheet" href="../assets/css/style.css">

        <link rel="stylesheet" href="css/main.css">


        <!-- scripts -->
        <script type="text/javascript" src="../assets/js/modernizr.custom.97074.js"></script>

    </head>

    <body id="distancia">

        <div id="home-page">

            <?php
                include 'menu.html';
            ?>

           <!-- begin our designation section -->

            <section class="video-area section-gap relative">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <div class="video-wrap" style="background: url();">
                                <br>
                                    <img src="img/cursosdecapacitacao.jpg" class="img-responsive center-block" alt="portfolio 1">
                                <br>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="video-content">
                                <h3 class="text-white">Cursos de capacitação</h3>
                                <p class="text-white">A oportunidade certa para se tornar um profissional mais completo e preparado. Enriqueça seu currículo com cursos 100% online e gratuitos.</p>
                                <br>
                                <a href="livres.php" class="primary-btn">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <hr>
                    <br>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="video-content">
                                <h3 class="text-white">Cursos Técnicos</h3>
                                <p class="text-white">O profissional Técnico executa atividades administrativas da organização relacionadas aos processos de gestão de pessoas, de operações 
                                logísticas, gestão de materiais e patrimônio, de marketing, de vendas e de finanças.</p>
                                <br>
                                <a href="curso_tecnico.php" class="primary-btn">Saiba Mais</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5">
                            <div class="video-wrap" style="background: url();">
                                <br>
                                <img src="img/cursostecnicos.jpg" class="img-responsive center-block" alt="portfolio 1">
                                <br>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <hr>
                    <br>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <div class="video-wrap" style="background: url();">
                                <br>
                                    <img src="img/grad.png" class="img-responsive center-block" alt="portfolio 1">
                                <br>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="video-content">
                                <h3 class="text-white">Graduação</h3>
                                <p class="text-white">Estamos sempre em constante crescimento e atualização para oferecer aos nossos alunos a melhor estrutura, os melhores cursos e métodos de ensino. Por isso, fique ligado!</p>
                                <br>
                                <a href="grad_distancia.php" class="primary-btn">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
                <!-- header begin -->
                <header class="page-head">
                    <div class="header-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">

                                    <ol class="breadcrumb">
                                        <li class="active">Notícias e Eventos</li>
                                    </ol> <!-- end of /.breadcrumb -->

                                </div>
                            </div>
                        </div> <!-- /.container -->
                    </div> <!-- /.header-wrapper -->
                </header> <!-- /.page-head (header end) -->

                <br>
                <?php
                    include 'noticia_include.php';
                ?>
            </div> 
            <!-- end of /#multiple-blog-page -->
            <?php
                include 'footer.html';
            ?>
            
        </div> <!-- end of /#home-page -->

        <!--  Necessary scripts  -->

        <script type="text/javascript" src="../assets/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../assets/js/owl.carousel.js"></script>
        <script type="text/javascript" src="../assets/js/jquery.hoverdir.js"></script>

        <script type="text/javascript">
            $(function(){
              $('a').each(function() {
                if ($(this).prop('href') == window.location.href) {
                  $(this).addClass('current');
                }
              });
            });
        </script>


        <!-- script for portfolio section using hoverdirection -->
        <script type="text/javascript">
            $(function() {

                $('.portfolio-item > .item-image').each( function() { $(this).hoverdir({
                    hoverDelay : 75
                }); } );

            });
        </script>


        <!-- script for twitter-feed using owl carousel-->
        <script type="text/javascript">
            $(document).ready(function() {
 
                $("#twit").owlCarousel({
                 
                    navigation : true, // Show next and prev buttons
                    slideSpeed : 100,
                    paginationSpeed : 400,
                    navigationText : false,
                    singleItem: true,
                    autoPlay: true,
                    pagination: false
                });
 
            });
        </script>


        <!-- script for testimonial section using owl carousel -->
        <script type="text/javascript">
            $(document).ready(function() {
 
                $("#client-speech").owlCarousel({
                 
                    autoPlay: 5000, //Set AutoPlay to 3 seconds
                    stopOnHover: true,
                    singleItem:true
                });
 
            });
        </script>


    </body>
</html>