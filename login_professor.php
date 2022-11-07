<?php
    $file = $_GET[ 'page' ]; 
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

<html class="no-js"> <!--<![endif]-->
    <head>

        <style>
            body {font-family: Arial, Helvetica, sans-serif;}
            form {border: 3px solid #f1f1f1;}

            input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            }

            button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            }

            button:hover {
            opacity: 0.8;
            }

            .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
            }

            .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            }

            img.avatar {
            width: 40%;
            border-radius: 50%;
            }

            .container {
            padding: 16px;
            }

            span.psw {
            float: right;
            padding-top: 16px;
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
            }
    </style>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123155195-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-123155195-1');
        </script>


        <title>Unicap Portal - Login Professor</title>

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
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>ESPAÇO DO ALUNO</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="moodle.html">Moodle</a>
                                    </li>
                                    <li>
                                        <a href="bibliotecas.html">Bibliotecas</a>
                                    </li>
                                    <li>
                                        <a href="#">Secretaria</a>
                                    </li>
                                </ul>  <!-- end of /.dropdown-menu -->
                            </li> <!-- end of /.dropdown -->
                        </ul>
                        <ul class="nav navbar-nav navbar-right text-uppercase">

                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span onclick="window.location.href='./index.php?page=login_professor.php'">ESPAÇO DO PROFESSOR</span></a>
                                <!-- <ul class="dropdown-menu">
                                    <li>
                                        <a href="moodle.html">Moodle</a>
                                    </li>
                                    <li>
                                        <a href="bibliotecas.html">Bibliotecas</a>
                                    </li>
                                    <li>
                                    </li>
                                </ul>  --> <!-- end of /.dropdown-menu -->
                            </li> <!-- end of /.dropdown -->
                        </ul>
                    </div><!-- nav links -->
                    
                </div><!-- /.container -->
            </nav>
            <!-- site-navigation end -->


            <!-- header start -->
            <header id="header" class="header-wrapper home-parallax home-fade">
                <div class="header-overlay"></div>
                <div class="header-wrapper-inner">
                    <div class="container">
                        <div class="welcome-speech">
                            <div style="
                                width: 50%;
                                height: 50%;
                                margin:0 auto;
                                margin-bottom: 40px;
                                position: relative;
                            ">
                                <img src="assets/imagens/logop.png" class="img-responsive center-block" alt="logo" style="width: 100%; height: 100%;">
                             </div>
                             <div claas="main-content">
                <div class="container">

                    <!-- contact-form -->
                    <section class="contact-form">

                        <!-- call for contact -->
                        <div class="headline text-center">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <h2 class="section-title">Login - Professor
                                    <p class="section-sub-title">
                                        
                                    </p> <!-- /section-sub-title -->
                                </div>
                            </div>
                        </div> <!-- /.contact-speech -->

                        <form action="login.php" method="POST">
                            <div class="container">
                                <label for="uname"><b>Usuário</b></label>
                                <input type="text" id="username" placeholder="Usuário" name="username" required>
                                </html>
                                <?php
                                    if(isset($_GET['erro'])){
                                        if ($_GET['erro'] == "1"){
                                            echo '<span id="msg_erro" style="color: red;display:block;">Usuário '.$user.' não existe</span> <br>';
                                        }
                                        else if($_GET['erro'] == "2"){
                                            echo '<span id="msg_erro" style="color: red;display:block;">Senha incorreta</span> <br>';
                                        }

                                    }
                                ?>
                                <html>
                                <label for="psw"><b>Senha</b></label>
                                <input type="password" id="password" placeholder="Senha" name="password" required>
                                    
                                <button id="btn_login">Login</button>
                            </div>
                        </form>
                    </section> <!-- /.contact-form -->

                </div> <!-- container -->
            </div>
                            
                        </div><!-- /.intro -->
                        
                    </div><!-- /.container -->

                </div><!-- /.header-wrapper-inner -->
            </header>
            <!-- /#header -->

            
                        <!-- navbar logo -->

                    </div><!-- /.navbar-header -->

                    <!-- nav links -->
                    <div class="collapse navbar-collapse" id="main-nav-collapse">
                        <ul class="nav navbar-nav navbar-right text-capitalize">
                            <li><a class = "rodapeIndex" href="#about">
                                <span>Home</span>
                            </a></li>
                            <li><a class = "rodapeIndex" href="institucional.html">
                                <span>Institucional</span>
                            </a></li>
                            <li><a class = "rodapeIndex" href="forms/contact/contato.html">
                                <span>Contato</span>
                            </a></li>
                        </ul>
                    </div><!-- nav links -->
                    
                </div><!-- /.container -->
            </nav>
            <!-- footer-navigation end -->
            
        </div> <!-- end of /#home-page -->

        <!--  Necessary scripts  -->

        <script type="text/javascript" src="assets/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/owl.carousel.js"></script>
        <script type="text/javascript" src="assets/js/jquery.hoverdir.js"></script>


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


                $("#btn_login").click(function(){
                    var username = $("#username").val();
                    var password = $("#password").val();
                    if(username == ""){
                        alert("É preciso informar o usuário");
                    }
                    else if(password == ""){
                        alert("É preciso informar a senha");
                    }
                    else{
                        // $.ajax({
                        //     type: "POST",
                        //     url: "login.php",
                        //     data: "username="+username + "&password=" + password,
                        //     success: function(data){
                        //         alert(data);
                        //     }
                        // });
                    }
                });
            });
        </script>


    </body>
</html>