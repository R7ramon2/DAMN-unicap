<!DOCTYPE html>
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
        <meta name="author" content="Bruno Rodrigues Santos">
        <meta name="author" content="Marcos Dorneles">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Educação Presencial e a Distância - Faculdade Anasps">

        <!-- Banner Slide--> 
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/gallery.prefixed.css">
        <link rel="stylesheet" href="css/gallery.theme.css">

        
        <!-- stylesheets -->
        <link rel="shortcut icon" href="../imagens/favicon.png">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/animate.css">
        <link rel="stylesheet" href="../assets/css/owl.carousel.css">
        <link rel="stylesheet" href="../assets/css/owl.theme.css">
        <link rel="stylesheet" href="../assets/css/style.css">


        <!-- scripts -->
        <script type="text/javascript" src="../assets/js/modernizr.custom.97074.js"></script>

    </head>

    <body>
        <div id="single-blog-left-sidebar">

            <?php
                include 'menu.html';
            ?>

            <header class="page-head">
                <div class="header-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <ol class="breadcrumb">
                                    <li class="active">NUPRESS</li>
                                </ol> <!-- end of /.breadcrumb -->

                            </div>
                        </div>
                    </div> <!-- /.container -->
                </div> <!-- /.header-wrapper -->
            </header> <!-- /.page-head (header end) -->


            <div class="main-content">
  
    <section>

      <div class="container pb-60">
        <img class="image-responsive" src="imgs/logo-nupress.png">

        <div class="section-content">

          <div class="row">

            <div class="col-md-3">
                <div class="topics">
                    <div class="faq-c">
                        <a href="artigos.php" class="btn blog-btn">
                            Artigos
                        </a>
                    </div>
                    <h5></h5>
                    <div class="faq-c">
                        <a href="videos.html" class="btn blog-btn">
                            Vídeos
                        </a>
                    </div>
                    <h5></h5>
                    <div class="faq-c">
                        <a href="#" class="btn blog-btn">
                            Revista
                        </a>
                    </div>
                    <h5></h5>
                    <div class="faq-c">
                        <a href="contato.html" class="btn blog-btn">
                            Contato
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
			<!-- ARTIGO -->
			<?php 
			
			require '../conexao.php';

			
			
			if (isset($_GET['artigo'])) {
				$sql_artigo = 'SELECT titulo, data, conteudo, autor FROM artigos WHERE nome = ?';
				$prep = mysqli_prepare($conexao, $sql_artigo);
				
				mysqli_stmt_bind_param($prep, 's', $_GET['artigo']);
				
				mysqli_stmt_execute($prep);
				mysqli_stmt_store_result($prep);
				
				if (mysqli_stmt_num_rows($prep) != 1) { 
					echo '<h4>Erro ao carregar o artigo.</h4>';
				}
				else {
					mysqli_stmt_bind_result($prep, $titulo, $data, $conteudo, $autor);
					mysqli_stmt_fetch($prep);
					
					$data_temp = explode('-', substr($data, 0, 10));
					$data = $data_temp[2] . '/' . $data_temp[1] . '/' . $data_temp[0];
				
					
					
					?>
					<h4><?php echo $titulo; ?></h4>
					<p>escrito por <?php echo $autor; ?> em <?php echo $data; ?></p>
					<p><?php echo $conteudo; ?></p>
					
					
					
					<?php
					
				}
				
				
				
				
				
			}
			else {
				echo '<h4>404</h4>';
			}
			?>
			
			</div>
            
          </div>

        </div>

      </div>

    </section>

  </div>

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
