<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

<html class="no-js"> <!--<![endif]-->
    <head>

        <title>Faculdade Anasps Notícias</title>

        <!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        
        <!-- stylesheets -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/style.css">

    </head>

    <body>

    <?php 

    $id = $_GET['id'];

    ?>

        <div id="single-blog-left-sidebar">


            <?php
                include 'menu.html';
            ?>

            <!-- header begin -->
            <header class="page-head">
                <div class="header-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <ol class="breadcrumb">
                                    <li class="active">Notícias</li>
                                </ol> <!-- end of /.breadcrumb -->

                            </div>
                        </div>
                    </div> <!-- /.container -->
                </div> <!-- /.header-wrapper -->
            </header> <!-- /.page-head (header end) -->


            <section class="blog-content">
                <div class="container">
                    <div class="row">
                        <?php

                            include 'conexao.php';

                            if (isset($_GET["p"])) {
                                $p = $_GET["p"];
                            }
                            else{
                                $p = 1;
                            }

                            // Defina aqui a quantidade máxima de registros por página.
                            $qnt = 2;
                            // O sistema calcula o início da seleção calculando: // (página atual * quantidade por página) - quantidade por página
                            $inicio = ($p*$qnt) - $qnt;
                            // Seleciona no banco de dados com o LIMIT indicado pelos números acima
                            $sql_select = "SELECT * FROM noticias WHERE id = $id";
                            $sql_select_event = "SELECT * FROM eventos ORDER BY id DESC LIMIT $inicio, $qnt";

                            $busca = "SELECT * FROM noticias";
                            // Executa o Query
                            $sql_query = mysqli_query($conexao,$sql_select);
                            $sql_query_eventos = mysqli_query($conexao,$sql_select_event);

                            $todos = mysqli_query($conexao,$busca);
                     
                            $tr = mysqli_num_rows($todos); // verifica o número total de registros
                            $tp = $tr / $qnt; // verifica o número total de páginas
                            
                            ?>

                        <main class="col-md-9 col-md-push-3" style="display: block;">
                            <?php

                                $tr2 = mysqli_num_rows($sql_query);

                                while($array = mysqli_fetch_assoc($sql_query)) {

                                    $titulo_materia = $array['titulo'];
                                    $resumo = $array['resumo'];
                                    $id = $array['id'];
                                    $imagem = $array['imagem_nome'];
                                    $data = $array['data'];
                                    $autor = $array['autor'];
                                    $conteudo = $array['conteudo'];

                                ?>
                            <article class="blog-item">
                                
                                <div class="blog-heading">
                                    <h3 class="text-capitalize"><?php echo $titulo_materia; ?></h3>
                                    <span class="date"><?php echo $data; ?></span>
                                    <span><?php echo $autor; ?></span>
                                </div>
                                <p>
                                    <?php
                                        echo $conteudo;
                                    ?>

                                </p>

                                <?php echo '<img class="img-responsive center-block" src="assets/img/news/'.$imagem.'">';

                                ?>

                            </article>

                            <?php
                            }
                            ?>
                        </main>


                        <!-- begin sidebar -->
                        <aside class="col-md-3 col-md-pull-9">

                            <!-- begin tab-widget -->
                            <div class="tab-widget">
                                <div  class="nav-tabs-default">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#popular" data-toggle="tab">
                                                <div class="tab-widget-title">Eventos</div>
                                            </a>
                                        </li>
                                    </ul> <!-- end of nav-tabs -->

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="popular">

                                                <?php

                                                while($array = mysqli_fetch_assoc($sql_query_eventos)) {

                                                    $titulo_materia = $array['titulo'];
                                                    if ($array['nome_imagem'] == null) {
                                                        $imagem = "generic.png";
                                                    }
                                                    else{
                                                        $imagem = $array['nome_imagem'];
                                                    }
                                                    $data = $array['data'];
                                                    $resumo = $array['resumo'];

                                                ?>
                                                <div class="popular-post">
                                                    <?php echo '<img class="img-responsive center-block" src="../assets/img/news/events/'.$imagem.'">'; ?>
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
                            <br>
                            </div> <!-- /.tab-widget -->
                        </aside>
                        <!-- end sidebar -->
                    </div>
                </div>
            </section>

            <?php
                include 'footer.html';
            ?>

        </div> 
        <!-- end of /#multiple-blog-page -->


        <script type="text/javascript" src="assets/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>


        <!-- script for FAQ using jquery -->

        <script>
            $(".faq-q").click( function () {
              var container = $(this).parents(".faq-c");
              var answer = container.find(".faq-a");
              var trigger = container.find(".faq-t");
              
              answer.slideToggle(200);
              
              if (trigger.hasClass("faq-o")) {
                trigger.removeClass("faq-o");
              }
              else {
                trigger.addClass("faq-o");
              }
            });
        </script>
    </body>
</html>
