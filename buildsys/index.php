<!DOCTYPE html>
<html lang="es">

<head>
    <title>BUILD</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/ico.ico" />

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.min.css" rel="stylesheet">

</head>

<body cz-shortcut-listen="true">
    <header>
        <div class=" superhead">
            <div class="callmovil">
                <a href="tel:5500000000"><i class="fa fa-phone" aria-hidden="true"></i>  Llamanos</label></a>
            </div>
            <div class="super-hdie">
                <div class="container">
                    <a href="tel:5500000000"><i class="fa fa-phone" aria-hidden="true"></i>  CDMX   <strong>(55) 0000 0000</strong></a><label>|</label>
                    <a href="tel:5500000000"><i class="fa fa-phone" aria-hidden="true"></i>  GDL   <strong>(33) 0000 0000</strong></a><label>|</label>
                    <a href="https://www.facebook.com/#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

                </div>
            </div>
        </div>
        <div class="navheigh">
            <nav>
                <div class="container">
                    <a href="" class="logo">BUILD</a>
                    <ul class="navs">
                        <li class=""><a href="#PROYECTOS">PROYECTOS</a></li>
                        <li><a href="#NOSOTROS">NOSOTROS</a></li>
                        <li><a href="#SERVICIOS">SERVICIOS</a></li>
                        <li><a href="#CONTACTANOS">CONTÁCTANOS</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="menu_movil">
            <a class="logo">BUILD</a>
            <a id="menu_show" class="collapser"><i class="fa fa-align-justify" aria-hidden="true"></i></a>
        </div>
        <div class="descollaspes">
            <a href="#" class="logo_mov">BUILD</a>
            <a id="menu_hide" class="collapser"><i class="fa fa-times" aria-hidden="true"></i></a>
            <ul class="nav_mov">
                <li class=""><a href="#PROYECTOS" class="goto">PROYECTOS</a></li>
                <li><a href="#NOSOTROS" class="goto">NOSOTROS</a></li>
                <li><a href="#SERVICIOS" class="goto">SERVICIOS</a></li>
                <li><a href="#CONTACTANOS" class="goto">CONTÁCTANOS</a></li>
                <li>
                    <a href="facebook"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                </li>
                <li>
                    <a href="twitter"> <i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a>
                </li>
            </ul>
        </div>

    </header>
    <section id="PROYECTOS">
        <div class="fluid-container">
            <div class="owl-carousel owl-theme" id="carrousel1">
                <?php
                    for ($i=1; $i < 5; $i++) { 
                    
                ?>
                    <div class="item slides" style='background-image:url(images/slide/hero0<?php echo $i;?>.jpg)'>
                        <div class="centertitles">
                            <h2>SOLUCIONES CONSTRUCTIVAS </h2>
                            <h3>SUSTENTABLES</h3>
                            <h4>
                                Nuestro objetivo es la calidad de vida de la gente a traves de construcciones sustentables, calidad y seguridad Lider en Proyectos LEED
                            </h4>
                        </div>
                    </div>

                    <?php
                }    
                ?>
            </div>
        </div>
    </section>
    <section id="NOSOTROS">
        <div class="proyectos">
            <div class="proyectcenter">
                <h2>BUILD Building Systems</h2>
                <p>Construimos mas de 700,000 m2 por año en edificios verticales.</p>
            </div>
        </div>
        <div class="tabuladores">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#industrial" aria-controls="industrial" role="tab" data-toggle="tab"><i class="fa fa-industry" aria-hidden="true"></i> <label> INDUSTRIALES</label></a>
                </li>
                <li role="presentation"><a href="#edificio" aria-controls="edificio" role="tab" data-toggle="tab"><i class="fa fa-building" aria-hidden="true"></i> <label> EDIFICIOS</label></a></li>
                <li role="presentation"><a href="#comercial" aria-controls="comercial" role="tab" data-toggle="tab"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <label> P. COMERCIALES</label></a></li>
                <li role="presentation">
                    <a href="#infraestructura" aria-controls="infraestructura" role="tab" data-toggle="tab"> <i class="fa fa-road" aria-hidden="true"></i> <label> INFRAESTRUCTURA</label>
                    </a>
                </li>
                <li role="presentation"><a href="#retail" aria-controls="retail" role="tab" data-toggle="tab"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <label>RETAIL</label></a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="industrial">
                    <div class="owl-carousel carrousel2">
                        <?php
                            for ($i=1; $i < 8; $i++) { 
                            
                        ?>
                            <div class="item">
                                <div class="indust">
                                    <img src="images/obras_01_0<?php echo $i?>.jpg" class="img-responsive main">
                                    <h2>NAVE INDUSTRIAL PPIZ4 </h2>
                                    <h3>· Cuautitlan, Izcalli ·</h3>
                                    <h3>
                                        Estructura metálica y cubierta.<br> Área 68,000 m2
                                    </h3>
                                    <hr>
                                    <img src="images/prologis.png" alt="" class="marks">
                                </div>
                            </div>

                            <?php
                        }    
                        ?>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="edificio">
                    <div class="owl-carousel carrousel2">
                        <?php
                            for ($i=1; $i < 6; $i++) { 
                            
                        ?>
                            <div class="item">
                                <div class="indust">
                                    <img src="images/obras_02_0<?php echo $i?>.jpg" class="img-responsive main">
                                    <h2>NAVE INDUSTRIAL PPIZ4 </h2>
                                    <h3>· Cuautitlan, Izcalli ·</h3>
                                    <h3>
                                        Estructura metálica y cubierta.<br> Área 68,000 m2
                                    </h3>
                                    <hr>
                                    <img src="images/prologis.png" alt="" class="marks">
                                </div>
                            </div>

                            <?php
                        }    
                        ?>
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="comercial">
                    <div class="owl-carousel carrousel2">
                        <?php
                            for ($i=1; $i < 5; $i++) { 
                            
                        ?>
                            <div class="item">
                                <div class="indust">
                                    <img src="images/obras_03_0<?php echo $i?>.jpg" class="img-responsive main">
                                    <h2>NAVE INDUSTRIAL PPIZ4 </h2>
                                    <h3>· Cuautitlan, Izcalli ·</h3>
                                    <h3>
                                        Estructura metálica y cubierta.<br> Área 68,000 m2
                                    </h3>
                                    <hr>
                                    <img src="images/prologis.png" alt="" class="marks">
                                </div>
                            </div>

                            <?php
                        }    
                        ?>
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="infraestructura">
                    <div class="owl-carousel carrousel2">
                        <?php
                            for ($i=1; $i < 4; $i++) { 
                            
                        ?>
                            <div class="item">
                                <div class="indust">
                                    <img src="images/obras_04_0<?php echo $i?>.jpg" class="img-responsive main">
                                    <h2>NAVE INDUSTRIAL PPIZ4 </h2>
                                    <h3>· Cuautitlan, Izcalli ·</h3>
                                    <h3>
                                        Estructura metálica y cubierta.<br> Área 68,000 m2
                                    </h3>
                                    <hr>
                                    <img src="images/prologis.png" alt="" class="marks">
                                </div>
                            </div>

                            <?php
                        }    
                        ?>
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="retail">
                    <div class="owl-carousel carrousel2">
                        <?php
                            for ($i=1; $i < 3; $i++) { 
                            
                        ?>
                            <div class="item">
                                <div class="indust">
                                    <img src="images/obras_05_0<?php echo $i?>.jpg" class="img-responsive main">
                                    <h2>NAVE INDUSTRIAL PPIZ4 </h2>
                                    <h3>· Cuautitlan, Izcalli ·</h3>
                                    <h3>
                                        Estructura metálica y cubierta.<br> Área 68,000 m2
                                    </h3>
                                    <hr>
                                    <img src="images/prologis.png" alt="" class="marks">
                                </div>
                            </div>

                            <?php
                        }    
                        ?>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <section id="SERVICIOS">
        <div class="fluid-container">
            <div class="valores">
                <div class="row">
                    <div class="col-md-6 stylevalor chezz">
                        <div class="col-md-2 col-xs-2">
                            <img src="images/diseno.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-10 col-xs-10">
                            <h2>DISEÑO <br>& CONSTRUCCIÓN</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 stylevalor">
                        <div class="col-md-2 col-xs-2">
                            <img src="images/tiempo.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-10 col-xs-10">
                            <h2>Entrega a tiempo</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 stylevalor">
                        <div class="col-md-2 col-xs-2">
                            <img src="images/seguridad.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-10 col-xs-10">
                            <h2>SEGURIDAD</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 stylevalor chezz">
                        <div class="col-md-2 col-xs-2">
                            <img src="images/bim.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-10 col-xs-10">
                            <h2>BIM <span> (Building Information System)</span></h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="CONTACTANOS">
        <div class="forms">
            <div class="container">

                <h2>¡CUÉNTANOS TU PROYECTO!</h2>
                <h3>Estamos listos para ayudarte a construir tus sueños</h3>
                <form data-toggle="validator" role="form" id="myform">

                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Nombre" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="puesto" placeholder="Puesto">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="empresa" placeholder="Empresa">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Correo electrónico" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="telephone" placeholder="Teléfono" required>
                        </div>

                        <select name="proyect" class="form-control">
                            <option value="0">Tipo de proyecto</option>
                            <option value="1">option</option>
                            <option value="2">option</option>
                        </select>

                        <textarea rows="3" name="proyect" class="form-control" placeholder="Cuéntanos, dejanos un mensaje"></textarea>

                        <button type="submit">Enviar</button>
                    </div>


                </form>

            </div>
        </div>
    </section>

    <footer>
        <div class="col-md-8 blue">
            <div class="col-md-4">
                <a href="" class="logo">BUILD</a>
            </div>

            <div class="col-md-4 texts">
                <a href="tel:5500000000">  CDMX <br>   <i class="fa fa-phone" aria-hidden="true"></i>(55) 0000 0000</a><span> Av. Siembre Viva #334, Oficina 407. Ciudad Satlélite</span><br>
                <a href="" class="mapa"><i class="fa fa-map-marker" aria-hidden="true"></i> Ver en mapa</a>

            </div>

            <div class="col-md-4 texts">
                <a href="tel:5500000000">  GDL<br>   <i class="fa fa-phone" aria-hidden="true"></i>(33) 0000 0000</a> <br><span> Av. Siembre Viva #334, Oficina 407. Ciudad Satlélite.</span><br>
                <a href="" class="mapa"><i class="fa fa-map-marker" aria-hidden="true"></i> Ver en mapa</a>

            </div>


        </div>

        <div class="col-md-4">


            <div id="map"></div>

        </div>
        <div class="col-md-12 aviso">
            Copyright © 2016 | BUILD Building Systems | <a href="#"> Aviso de privacidad</a>
        </div>
    </footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/nav.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
    <script src="js/main.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5v7p7C7Trwh9XnFHUdRi6FWc0Uk10PNo&callback=initMap">
    </script>






</body>

</html>