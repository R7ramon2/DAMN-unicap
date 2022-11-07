<?php

?>
<html>
<div claas="main-content">
                <div class="container">

                    <!-- contact-form -->
                    <section class="contact-form">

                        <!-- call for contact -->
                        <div class="headline text-center">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <h2 class="section-title"><br>Informe os dados para ser alterado</h2>
                                </div>
                            </div>
                        </div> <!-- /.contact-speech -->

                        <form method="post" action="enviar_contato.php?tipo=contato">

                            <div class="row">
                                <div class="">

                                    <div class="form-group">
                                        <input  name="name" type="text" class="form-control" id="name" required placeholder="Nome">
                                    </div>

                                    <div class="form-group">
                                        <input name="email" type="password" class="form-control" id="email" required placeholder="Senha">
                                    </div>

                                    <div class="form-group">
                                        <input name="subject" type="text" class="form-control" id="subject" required placeholder="Imagem">
                                    </div>

                                </div>
                            </div>

                                <button type="submit" id="submit" name="submit" class="btn btn-white">Enviar</button>
                            
                        </form> <!-- form end -->
                    </section> <!-- /.contact-form -->

                </div> <!-- container -->
            </div>
            </html>