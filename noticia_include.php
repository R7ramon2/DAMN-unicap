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
                $sql_select = "SELECT * FROM noticias ORDER BY id DESC LIMIT $inicio, $qnt";
                $sql_select_event = "SELECT * FROM eventos ORDER BY id DESC LIMIT $inicio, $qnt";
                $busca = "SELECT * FROM noticias";
                // Executa o Query
                $sql_query = mysqli_query($conexao,$sql_select);
                $sql_query_eventos = mysqli_query($conexao,$sql_select_event);

                $todos = mysqli_query($conexao,$busca);
         
                $tr = mysqli_num_rows($todos); // verifica o número total de registros
                $tp = $tr / $qnt; // verifica o número total de páginas
                

                ?>

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
                                    echo '<a class="text-capitalize" href="noticia_full.php?id=' . $id . '">Saiba mais <span><i class="fa fa-angle-double-right"></i> </span></a>';
                                ?>
                            </article> <!-- /.blog-item -->

                            <?php
                                            
                            }

                            ?>

                                <div class="row">
                                    <div class= "col-md-6 col-md-offset-3 text-center">
                                        <div class = "maisNoticias">
                                            <a href="noticias.php"><h4>Mais Notícias</h4></a>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </main>
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