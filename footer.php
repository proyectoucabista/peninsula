    <?php 

    if(isset($_POST['submit'])){

        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];
    }elseif (isset($_POST['submit2'])) {

        $correo = $_POST['correo'];
    }

   
    


    ?>

    <div class="flat-row pad-top65px pad-bottom80px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 col-md-offset-1">
                    <h2 class="flat-title-section title-center" id="contacto">Contacto.</h2>
                    <div class="flat-divider d20px"></div>


                    <form method="post" action="enviar/enviar.php">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <p><input name="nombre" type="text" value="" placeholder="Nombre Completo" required="required"></p>

                                <p><input id="email" name="correo" type="email" value="" placeholder="Correo Electronico" required="required"></p>
                            </div>
                            <!-- /.col-md-6 -->

                            <div class="col-md-10 col-md-offset-1">
                                <p>
                                    <textarea name="mensaje" placeholder="Escribe tu Mensaje" required="required"></textarea>
                                </p>
                                <span class="form-submit">
                                    <input name="submit" type="submit" id="submit" class="submit" value="Enviar Correo">
                                    </span>
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                        <!-- /.row -->
                    </form>
                </div>
                <!-- /.col-md-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>


<footer class="footer">
        <div class="content-bottom-widgets">
            <div class="container">
                <div class="row">
                    <div class="flat-wrapper">
                        <div class="ft-wrapper clearfix">
                            <div class="footer-50">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="counter">
                                            <div class="counter-image"><i class="fa fa-building-o"></i></div>
                                            <div class="numb-count" data-to="2008" data-speed="3000" data-waypoint-active="yes">2008</div>
                                            <div class="counter-title">
                                                Fundación
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-4 -->

                                    <div class="col-md-4">
                                        <div class="counter ft-style1">
                                            <div class="counter-image"><i class="fa fa-group"></i></div>
                                            <div class="numb-count" data-to="100" data-speed="3000" data-waypoint-active="yes">100</div>
                                            <div class="counter-title">
                                                Empleados
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-4 -->

                                    <div class="col-md-4">
                                        <div class="counter ft-style2">
                                            <div class="counter-image"><i class="fa fa-globe"></i></div>
                                            <div class="numb-count" data-to="25" data-speed="3000" data-waypoint-active="yes">25</div>
                                            <div class="counter-title">
                                                Clientes
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-4 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.footer-50 -->

                            <div class="footer-50">
                                <div class="subscribe-form">
                                    <form method="post" action="enviar/enviar2.php">
                                    <div class="row">
                                        
                                        <div class="col-md-8">
                                            <input type="email" name="correo" placeholder="Ingrese su Gmail" required="">
                                        </div>
                                        <!-- /.col-md-8 -->

                                        <div class="col-md-4">
                                            <input type="submit" value="Enviar" name="submit2">
                                        </div>
                                       
                                        <!-- /.col-md-4 -->
                                    </div>
                                     </form>
                                    <!-- /.row -->
                                </div>
                                <!-- /.subscribe-form -->
                            </div>
                            <!-- /.footer-50 -->
                        </div>
                        <!-- /.ft-wrapper -->
                    </div>
                    <!-- /.flat-wrapper -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.footer-widgets -->

        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="widge widget_text">
                            <div class="textwidget">
                                <h2>SEDES</h2>
                            </div>
                        </div>
                        <!-- /.widget_text -->
                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3">
                        <div class="widget widget_text information">
                            <h3 class="widget-title">MIAMI - USA</h3>
                            <div class="textwidget">
                                <p><strong>Contáctenos y gentilmente te enviaremos el presupuesto del servicio que requiere.</strong></p>
                                <p>
                                <div class="">
                                        <a href="tel:+1 954 2969148"></i>+1 954 2969148</a>
                                    </div>
                                    <div class=""><a href="mailto:aelortegui@peninsulacorporations.com">aelortegui@peninsulacorporations.com</i></a></div>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3">
                        <div class="widget widget_text information">
                            <h3 class="widget-title">ORLANDO - USA</h3>
                            <div class="textwidget">
                                <p>
                                <div class="">
                                        <a href="tel:+58 414 3057475"></i>+58 414 3057475</a>
                                    </div>
                                    <div class=""><a href="mailto:fgilly@peninsulacorporations.com">fgilly@peninsulacorporations.com</i></a></div>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3">
                        <div class="widget widget_text information">
                            <h3 class="widget-title">CARACAS - VENEZUELA</h3>
                            <div class="textwidget">
                                <p>
                                <div class="">
                                        <a href="tel:+58 414 2775545"></i>+58 414 2775545</a>
                                    </div>
                                    <div class=""><a href="mailto:arada@peninsulacorporations.com">arada@peninsulacorporations.com</i></a></div>
                                </p>
                                <p>
                                <div class="">
                                        <a href="tel:+58 414 3057475"></i>+58 414 3057475</a>
                                    </div>
                                    <div class=""><a href="mailto:rhernandez@peninsulacorporations.com">rhernandez@peninsulacorporations.com</i></a></div>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-3 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.footer-content -->

        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="flat-wrapper">
                        <div class="ft-wrap clearfix">
                            <div class="copyright">
                                <div class="copyright-content">
                                    Copyright © 2021 | <a href="#">Peninsula Associates Corporation.</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.ft-wrap -->
                    </div>
                    <!-- /.flat-wrapper -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.footer-content -->
    </footer>