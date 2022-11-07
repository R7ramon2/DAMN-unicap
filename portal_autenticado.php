<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require "conexao.php";

    

    if (isset($_COOKIE['portalSession'])){
        //TODO recuperar dados autenticado
    }
    else{
        header("Location: index.php");
    }

?>

<!DOCTYPE html>
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


        <title>Unicap Portal - Professor</title>

        <!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">        

        
        <!-- stylesheets -->
        <link rel="shortcut icon" href="imagens/favicon.png">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/style.css">


        <!-- scripts -->
        <script type="text/javascript" src="assets/js/modernizr.custom.97074.js"></script>

    </head>

    <body>

        <div id="home-page">

            <!-- site-navigation start -->  
            <nav id="mainNavigation" class="navbar navbar-dafault main-navigation" role="navigation">
                <div class="container">
                    
                    <div class="navbar-header">
                        <!-- navbar logo -->
                        <div class="navbar-brand">
                            <a href="index.php">
                                <img src="assets/imagens/UNICAP.jpg" class="img-responsive center-block" style="width: 58px;" alt="logo">
                            </a>
                        </div>
                        <!-- navbar logo -->
                    </div><!-- /.navbar-header -->

                    <!-- nav links -->
                    <div class="collapse navbar-collapse" id="main-nav-collapse">
                        <ul class="nav navbar-nav navbar-right text-uppercase">

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>ESPAÇO DO PROFESSOR</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#"></a>
                                    </li>
                                    <li>
                                        <a href="portal_autenticado.php?page=professor&funcao=alterar_dados.php">Alterar dados</a>
                                    </li>
                                    <li>
                                        <a href="portal_autenticado.php?page=professor&funcao=lista_chamada.php">Lista de chamada</a>
                                    </li>
                                    <li>
                                        <a href="portal_autenticado.php?page=professor&funcao=alterar_notas.php">Alterar notas</a>
                                    </li>
                                    <li>
                                        <a href="logout.php">Sair</a>
                                    </li>
                                </ul>  <!-- end of /.dropdown-menu -->
                            </li> <!-- end of /.dropdown -->
                        </ul>
                        <ul class="nav navbar-nav navbar-right text-uppercase">
                    </div>
            </div>
            <?php
                include ($_GET['funcao']);
            ?>
            </html>
            
    </body>
    
</html>