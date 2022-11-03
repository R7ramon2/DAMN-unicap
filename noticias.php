<!DOCTYPE html>
<html lang="pt-br"> 

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

<html class="no-js"> <!--<![endif]-->
    <head>

        <title>Faculdade Anasps</title>

        <!-- meta -->
        <meta charset="utf-8">
        <meta name="author" content="Filipi Machado">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Educação Presencial e a Distância - Faculdade Anasps">

        <!-- Banner Slide--> 
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/gallery.prefixed.css">
        <link rel="stylesheet" href="css/gallery.theme.css">

        
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

    <?php

        include 'conexao.php';

        if (isset($_GET["p"])) {
            $p = $_GET["p"];
        }
        else{
            $p = 1;
        }

        // Defina aqui a quantidade máxima de registros por página.
        $qnt = 10;
        // O sistema calcula o início da seleção calculando: // (página atual * quantidade por página) - quantidade por página
        $inicio = ($p*$qnt) - $qnt;
        // Seleciona no banco de dados com o LIMIT indicado pelos números acima
        $sql_select = "SELECT * FROM noticias ORDER BY id DESC LIMIT $inicio, $qnt";
        $sql_select_event = "SELECT * FROM eventos ORDER BY id DESC";

        $busca = "SELECT * FROM noticias";
        // Executa o Query
        $sql_query = mysqli_query($conexao,$sql_select);
        $sql_query_eventos = mysqli_query($conexao,$sql_select_event);

        $todos = mysqli_query($conexao,$busca);
 
        $tr = mysqli_num_rows($todos); // verifica o número total de registros
        $tp = $tr / $qnt; // verifica o número total de páginas
        
        ?>

        <div id="home-page">

            <?php
                include 'menu.html';
            ?>

            <div id="multiple-blog-page">
            <!-- header begin -->
            <header class="page-head">
                <div class="header-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <ol class="breadcrumb">
                                    <li class="active">notícias e eventos</li>
                                </ol> <!-- end of /.breadcrumb -->

                            </div>
                        </div>
                    </div> <!-- /.container -->
                </div> <!-- /.header-wrapper -->
            </header> <!-- /.page-head (header end) -->


            <section class="blog-content">
                <div class="container">
                    <div class="row">
                        <main class="col-md-9" style="display: block;">

                            <?php

                            $tr2 = mysqli_num_rows($sql_query);

                            while($array = mysqli_fetch_assoc($sql_query)) {

                                $titulo_materia = $array['titulo'];
                                $resumo = $array['resumo'];
                                $id = $array['id'];
                                if ($array['imagem_nome'] == null) {
                                    $imagem = "generic.png";
                                }
                                else{
                                    $imagem = $array['imagem_nome'];
                                }
                                $data = $array['data'];
                                $autor = $array['autor'];

                            ?>

                            <article class="blog-item">
                                <?php echo '<img class="img-responsive center-block" src="assets/img/news/'.$imagem.'">'; ?>
                                <div class="blog-heading">
                                    <h3 class="text-capitalize"><?php echo $titulo_materia; ?></h3>
                                    <span class="date"><?php echo $data; ?></span>
                                    <span><?php echo $autor; ?></span>
                                </div>
                                <p>
                                    <?php echo $resumo; ?>
                                </p>

                                <?php 
                                    echo '<a class="text-capitalize" href="noticia_full.php?id='.$id.'">Saiba mais<span><i class="fa fa-angle-double-right"></i> </span></a>';
                                ?>
                            </article> <!-- /.blog-item -->

                            <?php
                                            
                            }

                            ?>

                            <div class="row">
                                <div class= "col-md-6 col-md-offset-3 text-center">
                                    <ul class="pagination">
                                        <?php

                                            $anterior = $p -1;
                                            $proximo = $p +1;
                                            if ($p>1) {
                                                echo '<li><a href="noticias.php?p=' . $anterior . '"> < </a></li>';
                                            }

                                            if ($p<$tp) {
                                              echo '<li><a href="noticias.php?p=' . $proximo . '"> > </a></li>';
                                            }

                                        ?>
                                        <!--<li><a href="#"> < </a></li>
                                        <li class="active">
                                            <a href="#">1 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#"> > </a></li>-->
                                    </ul> <!-- /.pagination -->
                                </div>
                            </div>
                        </main>


                        <!-- begin sidebar -->
                                                    <!-- begin sidebar -->
                        <aside class="col-md-3">
                                <!-- begin tab-widget -->
                            <div class="tab-widget">

                                <h4>Eventos</h4>
                                <div  class="nav-tabs-default">
                                    <ul class="nav nav-tabs">
                                    </ul> <!-- end of nav-tabs -->

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="popular">

                                            <?php

                                            while($array = mysqli_fetch_assoc($sql_query_eventos)) {

                                                $titulo_materia = $array['titulo'];
                                                $imagem = $array['nome_imagem'];
                                                $data = $array['data'];
                                                $resumo = $array['resumo'];

                                            ?>
                                            <div class="popular-post">
                                                <?php echo '<img class="img-responsive center-block" src="assets/img/news/events/'.$imagem.'">'; ?>
                                                <h5 class="post-widget-heading"><?php echo $titulo_materia; ?></h5>
                                                <span class="date"><?php echo $data; ?></span>
                                                <p>
                                                    <?php echo $resumo; ?>
                                                </p>
                                            </div>
                                            <?php
                                                } 
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- /.tab-widget -->
                        </aside>
                        <!-- end sidebar -->

                    </div>
                </div>
            </section>

            <?php
                include 'footer.html';
            ?>
            
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
 
            });
        </script>


    </body>
</html>