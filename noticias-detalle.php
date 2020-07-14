<?php
    include "config.php";
    $id = $_GET['id'];
    $sql = "select * from noticias where id = {$id}";// mejorar query falta nombre del que subio la noticia
    $resultado = mysqli_query($conexion,$sql);
    $mostrar = mysqli_fetch_array($resultado);
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Título Noticia</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/et-line-icon.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!-- HEADER -->
        <header class="top">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="header-top-right">
                                <ul>
                                    <li><a href="http://www.moodle.uda.cl/" target="_blank">Moodle</a></li>
                                    <li><a href="http://www.alumnos.uda.cl/" target="_blank">Intranet</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="header-top-right text-right">
                                <ul>
                                    <li><a href="login.php">Inicia sesión</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-area two header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <div class="logo">
                                <a href="http://www.uda.cl/" target="_blank">
                                    <img id="imglogo" src="img/logo/logoudanegro.png"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <div class="content-wrapper text-right">

                                <!-- Main Menu Start -->
                                <div class="main-menu one text-right">
                                    <nav>
                                        <ul>
                                            <li><a href="index.php">Inicio</a></li>
                                            
                                            <li><a href="noticias.php">Noticias</a></li>
                                            <li><a href="Departamento.html">Departamento</a></li>
                                            <li><a>Carrera</a>
                                            <ul>
                                                <li><a>Pregrado</a>
                                                    <ul>
                                                        <li><a href="Carrera-pregrado-ing_ejecucion.html">Ingeniería en Ejecución</a> </li>
                                                        <li><a href="Carrera-pregrado-ing_civil.html">Ingeniería civil en Informática</a> </li>
                                                    </ul>
                                                </li>
                                                <li><a>Postitulo</a>
                                                    <ul>
                                                        <li><a href="Carrera-postitulo-Diplomado-inteligencia-negocios.html">Diplomado en tecnología para inteligencia de negocios</a></li>
                                                        <li><a href="Carrera-postitulo-Diplomado-gestion.html">Diplomado en gestión de tecnologias de la información</a></li>
                                                    </ul>
                                                </li>
                                                <li><a>Postgrado</a>
                                                    <ul>
                                                        <li><a href="postgrado-tecnologia.html">Magister en tecnologias de la informacion e innovación</a></li>
                                                        <li><a href="postgrado-informatica.html">Magister en Informática y Ciencias de la Computación</a></li>
                                                        <li><a href="postgrado-procesos-software.html">Diplomado en procesos integrales de software</a></li>
                                                        <li><a href="postgrado-gestion-innovacion.html">Diplomado en gestión de innovacion y emprendimiento</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                            <li class="hidden-sm"><a href="teacher.html">Equipo</a><ul>
                                                    <li><a href="teacher.html">Profesores</a></li>
                                                    <li><a href="teacher.html">Administrativos</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="publicaciones.html">Investigaciones</a>
                                                <ul>
                                                    <li><a href="publicaciones.html">Publicaciones</a></li>
                                                    <li><a href="proyectos.html">Proyectos</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="index-portal.html">Portal de trabajo</a></li>
                                            <li><a href="malla1.html">Malla</a>
                                            </li>
                                        </ul>

                                            
                                    </nav>
                                </div>
                                <div class="mobile-menu hidden-lg hidden-md one"></div>
                                <!-- MENU PRINCIPAL-->

                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="mobile-menu hidden-lg hidden-md hidden-sm"></div> 
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER -->
		
        <!-- Blog Start -->
        <div class="blog-details-area pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-details">
                            <div class="blog-details-img">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($mostrar["imagen"]); ?>"></a>
                            </div>
                            <div class="blog-details-content">
                                <h2><?php echo $mostrar['titulo']; ?></h2>
                                <h6>Escrito por <?php echo $mostrar['correo']; ?>  / <?php echo $mostrar['fecha']; ?></h6>
                                <p><?php echo $mostrar['descripcion']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-sidebar right">
                            <div class="single-blog-widget mb-47">
                                <h3>Buscar Noticias</h3>
                                <div class="blog-search">
                                    <form id="search" action="#">
                                        <input type="search" placeholder="Buscar..." name="search" />
                                        <button type="submit">
                                            <span><i class="fa fa-search"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="single-blog-widget mb-47">
                                <h3>Noticias por año</h3>
                                <ul>
                                    <li><a href="noticias.html">2019 (10)</a></li>
                                    <li><a href="noticias.html">2018 (12)</a></li>
                                    <li><a href="noticias.html">2017 (08)</a></li>
                                    <li><a href="noticias.html">2016 (15)</a></li>
                                    <li><a href="noticias.html">2015 (20)</a></li>
                                    <li><a href="noticias.html">2014 (23)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->
        
        <!-- FOOTER -->
        <footer class="footer-area">
            <div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-widget pr-60">
                                <div class="footer-logo pb-25">
                                    <a href="http://www.uda.cl/"><img src="img/logo/logouda1.png" target="_blank"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-widget">
                                <h3>información</h3>
                                <ul>
                                <li><a href="teacher.html">Profesores</a></li>
                                    <li><a href="noticias.php">Noticias</a></li>
                                    <li><a href="event.html">Eventos</a></li>
                                    <li><a href="malla1.html">Malla</a></li>
                                    <li><a href="publicaciones.html">Publicaciones</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="single-widget">
                                <h3>Links</h3>
                                <ul>
                                    <li><a href="http://www.alumnos.uda.cl/" target="_blank">Intranet</a></li>
                                    <li><a href="http://www.moodle.uda.cl/" target="_blank">Moodle</a></li>
                                    <li><a href="http://www.cta.uda.cl/index.php?lang=es" target="_blank">CTA</a></li>
                                    <li><a href="http://www.fscu.uda.cl/" target="_blank">FSCU</a></li>
                                    <li><a href="http://www.cmd.uda.cl/" target="_blank">CMD</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-widget">
                                <h3>Contacto</h3>
                                <p>Ubícanos en <br>Copiapó, Av. Copayapu 485</p>
                                <p>(52) 225 5400</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <div class="footer-bottom ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <p class="text-center">© Creado por alumnos de Ingeniería Civil en Computación e Informática 2019-2020. </p>
                            
                        </div> 
                        <div class="col-md-6 col-xs-12">
                            <p class="text-center">Departamento de Ingeniería Informática y Ciencias de la Computación.</p>
                        </div>
                    </div>
                </div>    
            </div>
        </footer>
        <!-- FOOTER -->

        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.meanmenu.js"></script>
        <script src="js/jquery.magnific-popup.js"></script>
        <script src="js/ajax-mail.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.mb.YTPlayer.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
