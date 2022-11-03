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
                        <a href="#" class="btn blog-btn">
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

              <div class="meet-doctors">

				<?php 
				
				require '../conexao.php';

				$p = $_GET["p"];
				// Verifica se a variável tá declarada, senão deixa na primeira página como padrão
				if(isset($p)){ 
					$p = $p;
				}
				else{
					$p = 1;
				}

				// Defina aqui a quantidade máxima de registros por página.
				$qnt = 6;
				
				// O sistema calcula o início da seleção calculando: // (página atual * quantidade por página) - quantidade por página
				$inicio = ($p*$qnt) - $qnt;
				
				// Seleciona no banco de dados com o LIMIT indicado pelos números acima
				$sql_select = "SELECT * FROM artigos ORDER BY id DESC LIMIT $inicio, $qnt";
				$busca = "SELECT * FROM artigos";
				
				// Executa o Query
				$sql_query = mysqli_query($conexao,$sql_select);

				$todos = mysqli_query($conexao,$busca);
		 
				$tr = mysqli_num_rows($todos); // verifica o número total de registros
				$tp = $tr / $qnt; // verifica o número total de páginas
				
				while($array = mysqli_fetch_assoc($sql_query)) {

					$link = $array['link_externo'];
					$resumo = strip_tags(substr($array['conteudo'], 0, 60) . '[...]');
					$id = $array['ID'];
					$titulo = mb_strtoupper($array['titulo']);
					$data = $array['data'];
					$autor = 'Autor';
					
					if(empty($link)) {
						$link = 'https://' . $_SERVER['HTTP_HOST'] . '/nupress/lerartigo.php?artigo=' . $array['nome'];
					}
					else {
						$link =  $array['link_externo'];
					}

                    ?>

					<div class="col-sm-6 col-md-4 noticia artigo">
						<div class="service-block service-block-noticia bg-white">                  
							<div class="content text-left flip p-25 pt-0">
								<h4 class="line-bottom mb-10"><?php echo $titulo; ?></h4>
								<p><?php echo $resumo; ?></p>
								
								<a class="btn blog-btn" href="<?php echo $link; ?>">Ler artigo</a>
							</div>
						</div>
					</div>

				<?php
								
				}
				?>
                
              <!--<div class="col-sm-6 col-md-4 noticia artigo">
                <div class="service-block service-block-noticia bg-white">                  
                  <div class="content text-left flip p-25 pt-0">
                    <h4 class="line-bottom mb-10">NOVOS NOMES, OS MESMOS PARTIDOS</h4>
                    <p><p>
Publicado em Artigo por Marcos Queiroz



Em menos de um ano e meio de governo, o presidente Mic[...]</p></p>
                   <a class="btn blog-btn" href="https://www.institutoanasps.com.br/artigo/novos-nomes-os-mesmos-partidos/">Ler artigo</a>
                  </div>
                </div>
              </div>
                

              
                
              <div class="col-sm-6 col-md-4 noticia artigo">
                <div class="service-block service-block-noticia bg-white">                  
                  <div class="content text-left flip p-25 pt-0">
                    <h4 class="line-bottom mb-10">MEDIDAS PROVISÓRIAS E O PODER DE LEGISLAR DO PRESIDENTE</h4>
                    <p><p>Publicado em Artigo por Marcos Queiroz
Em menos de um ano e meio de governo, o presidente Michel [...]</p></p>
                   <a class="btn blog-btn" href="https://www.institutoanasps.com.br/artigo/medidas-provisorias-e-o-poder-de-legislar-do-presidente/">Ler artigo</a>
                  </div>
                </div>
              </div>
                

              
                
              <div class="col-sm-6 col-md-4 noticia artigo">
                <div class="service-block service-block-noticia bg-white">                  
                  <div class="content text-left flip p-25 pt-0">
                    <h4 class="line-bottom mb-10">CONTRIBUIÇÕES SOCIAIS PREVIDENCIÁRIAS: FONTE ÚNICA OU SUBSIDIÁRIA DE FINANCIAMENTO DA PREVIDÊNCIA SOCIAL?</h4>
                    <p><p>Dissertação apresentado à Banca examinadora do Programa de Pós-Graduação Stricto Sensu em Dire[...]</p></p>
                   <a class="btn blog-btn" href="https://bdtd.ucb.br:8443/jspui/bitstream/123456789/357/1/Sebastiao%20Faustino%20de%20Paula.pdf" target="_blank">Ler artigo</a>
                  </div>
                </div>
              </div>-->
                
              </div>
			  
				<div class="row">
					<div class= "col-md-6 col-md-offset-3 text-center">
						<ul class="pagination">
							<?php

								$anterior = $p -1;
								$proximo = $p +1;
								if ($p>1) {
									echo '<li><a href="artigos.php?p=' . $anterior . '"> < Página anterior </a></li>';
								}
								
								

								if ($p<$tp) {
								  echo '<li><a href="artigos.php?p=' . $proximo . '"> Próxima página > </a></li>';
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
