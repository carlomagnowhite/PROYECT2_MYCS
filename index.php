<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <title>CTT-FISEI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="js/main.js" rel="js">
    <script src="js/correos.js"></script>
    <!-- Favicon -->
    <link href="img/ctt.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center py-4 px-xl-5">
            <div class="col-lg-3">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0"><span class="text-primary">CTT</span>-FISEI</h1>
                    <h6 class="font-weight-semi-bold mb-1">Centro de Transferencia y Desarrollo de Tecnología</h6>
                </a>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Dirección</h6>
                        <small>
                            Av. Los Chasquis Y Río Payamino. Facultad de Ingeniería en Sistemas Electrónica e
                            Industrial</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-envelope text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Contáctanos</h6>
                        <small>ctt.fisei@uta.edu.ec </small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-phone text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Llámanos</h6>
                        <small>0962027000</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!--RECOPILADOR DE INCIDENCIAS-->
    <script type="text/javascript" src="https://mattdiaz.atlassian.net/s/d41d8cd98f00b204e9800998ecf8427e-T/-ia3qmx/b/4/c95134bc67d3a521bb3f4331beb9b804/_/download/batch/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector.js?locale=es-ES&collectorId=da30bc4a"></script>
    <!--RECOPILADOR END-->

    <?php
    include("./inc/navbar.php");
    ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
                <li data-target="#header-carousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carrusel_2.png" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">CURSOS ONLINE</h5>
                            <h1 class="display-3 text-white mb-md-4">Incentivar la investigación en los campos
                                afines a sus áreas de trabajo.</h1>
                            <a href="course.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/andre2.jpg" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">CURSOS ONLINE</h5>
                            <h1 class="display-3 text-white mb-md-4">Disponibilidad para todas las personas que
                                deseen expandir sus conocimientos.</h1>
                            <a href="course.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carrusel_andrea_1.jpg" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">CURSOS ONLINE</h5>
                            <h1 class="display-3 text-white mb-md-4">Expande tu conocimiento, a través de nuevas
                                formas de aprendizaje.</h1>
                            <a href="course.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/andre3.jpg" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">CURSOS ONLINE</h5>
                            <h1 class="display-3 text-white mb-md-4">Compromiso con el desarrollo tecnológico.
                            </h1>
                            <a href="course.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/uta_fisei.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Sobre Nosotros
                        </h5>
                        <h1>El inicio de una nueva forma de aprendizaje</h1>
                    </div>
                    <p>
                        El 20 de octubre de 2002 se crea el Centro de Transferencia y Desarrollo de Tecnologías
                        mediante resolución 1452-2002-CU-P en la áreas de Ingenierías en Sistemas, Electrónica e
                        Industrial de la Universidad Técnica de Ambato, para proveer servicios a la comunidad
                        mediante la realización de trabajos y proyectos específicos , asesorías, estudios,
                        investigaciones, cursos de entrenamiento, seminarios y otras actividades de servicios a
                        los sectores sociales y productivos en las áreas de Ingeniería en Sistemas
                        computacionales e Informáticos, Ingeniería Electrónica y Comunicaciones e Ingeniería
                        Industrial en Procesos de Automatización.
                    </p>
                    <a href="about.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Ver más</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Courses Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">CURSOS</h5>
                <h1>Cursos Disponibles</h1>
            </div>
            <!---Primer curso START-->
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/ANALITICA-DE-DATOS.jpg" alt="" style="width: 1743px; height: 200px;">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>FINALIZADO</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>32
                                    HORAS</small>
                            </div>
                            <h5 class="h5">Introducción a la Analítica de Datos</h5>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <a href="curso1.php" class="btn btn-primary py-md-2 px-md-5 font-weight-semi-bold" style="margin: 0 auto;">VER MÁS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---Primer curso END-->
                <!---Segundo curso START-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/manufactura_industria.jpg" alt="" style="width: 1743px; height: 200px;">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>ABIERTO</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>32
                                    HORAS</small>
                            </div>
                            <h5 class="h5">Implementación de buenas prácticas (BPM) en la Industria</h5>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <a href="curso2.php" class="btn btn-primary py-md-2 px-md-5 font-weight-semi-bold" style="margin: 0 auto;">VER MÁS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---Segundo curso END-->
                <!---Tercer curso START-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/curso_phyton_django.jpg" alt="" style="width: 1743px; height: 200px;">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>PRÓXIMAMENTE</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>40
                                    HORAS</small>
                            </div>
                            <h5 class="h5">Desarrollo web con Python y Django</h5>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <a href="curso3.php" class="btn btn-primary py-md-2 px-md-5 font-weight-semi-bold" style="margin: 0 auto;">VER MÁS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---Tercer curso END-->
                <!---Cuarto curso START-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/curso_cuatro_networking_essentials.jpg" alt="" style="width: 1743px; height: 200px;">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>FINALIZADO</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>70
                                    HORAS</small>
                            </div>
                            <h5 class="h5">Nociones básicas: NETWORKING ESSENTIALS</h5>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <a href="curso4.php" class="btn btn-primary py-md-2 px-md-5 font-weight-semi-bold" style="margin: 0 auto;">VER MÁS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---Cuarto curso END-->
                <!---Quinto curso START-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/quinto_curso_IOT.jpg" alt="" style="width: 1743px; height: 200px;">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>ABIERTO</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>32
                                    HORAS</small>
                            </div>
                            <h5 class="h5">Introducción a Internet de las Cosas IoT</h5>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <a href="curso5.php" class="btn btn-primary py-md-2 px-md-5 font-weight-semi-bold" style="margin: 0 auto;">VER MÁS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---Quinto curso END-->
                <!---Sexto curso START-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/curso_seis_ciberseguridad.jpg" alt="" style="width: 1743px; height: 200px;">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>ABIERTO</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>32
                                    HORAS</small>
                            </div>
                            <h5 class="h5">Introducción a la Ciberseguridad</h5>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <a href="curso6.php" class="btn btn-primary py-md-2 px-md-5 font-weight-semi-bold" style="margin: 0 auto;">VER MÁS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---Quinto curso END-->
            </div>
        </div>
    </div>
    <!-- Courses End -->





    <!-- Team Start -->
    <div class="container-fluid py-5 ">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">AUTORIDADES</h5>
                <h1>Facultad de Ingeniería en Sistemas, Electrónica e Industrial</h1>
            </div>


            <div class="row row-a">

                <!--TEAM DECANA/START-->
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2 width-a shadow-a">
                        <div class="position-relative">
                            <div class="image-container image-a">
                                <img class="img-fluid" src="img/FISEI_decana.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Ing. Elsa Pilar Urrutia Urrutia, Mg.</h5>
                            <p class="m-0">DECANA FISEI</p>
                        </div>
                    </div>
                </div>
                <!--TEAM DECANA/END-->
                <div class="container-a">
                    <!--TEAM SUBDECANA/START-->
                    <div class="col-md-6 col-lg-3 text-center team mb-4">
                        <div class="team-item rounded overflow-hidden mb-2 width-a shadow-a">
                            <div class="position-relative">
                                <div class="image-container image-a">
                                    <img class="img-fluid" src="img/subdecano_FISEI.png" alt="">
                                </div>
                            </div>
                            <div class="bg-secondary p-4">
                                <h5> Ing. Carlos Humberto Sánchez Rosero, Mg.</h5>
                                <p class="m-0">SUBDECANO FISEI</p>
                            </div>
                        </div>
                    </div>
                    <!--TEAM SUBDECANA/END-->
                    <!---TEAM/ANDREA START-->
                    <div class="col-md-6 col-lg-3 text-center team mb-4">
                        <div class="team-item rounded overflow-hidden mb-2 width-a shadow-a">
                            <div class="position-relative">
                                <div class="image-container image-a">
                                    <img class="img-fluid" src="img/andre1.jpg" alt="">
                                </div>
                            </div>
                            <div class="bg-secondary p-4">
                                <h5>Ing. Andrea Patricia Sánchez Zumba, Mg.</h5>
                                <p class="m-0">RESPONSABLE CTT-FISEI</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mb-5">
                    <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">RESEÑAS</h5>
                    <h1>OPINIONES</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="owl-carousel testimonial-carousel">
                            <div class="text-center">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <h4 class="font-weight-normal mb-4">Una de las cosas destacables, es sin duda la
                                    calidad de los cursos. Son instruidos por profesionales altamente
                                    preparados.</h4>
                                <img class="img-fluid mx-auto mb-3" src="img/resenia_1.jpg" alt="">
                                <h5 class="m-0">Mateo Díaz</h5>
                                <span>Estudiante</span>
                            </div>
                            <div class="text-center">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <h4 class="font-weight-normal mb-4">La plataforma en donde se puede acceder a
                                    los cursos es muy intuitiva y agradable para el usuario, sin duda, incita a
                                    ir por más cursos.</h4>
                                <img class="img-fluid mx-auto mb-3" src="img/resenia_2.jpg" alt="">
                                <h5 class="m-0">Carlos Alvarado</h5>
                                <span>Estudiante</span>
                            </div>
                            <div class="text-center">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <h4 class="font-weight-normal mb-4">La calidad de los cursos es buena, y permite
                                    expandir el conocimiento de maneras no convencionales.</h4>
                                <img class="img-fluid mx-auto mb-3" src="img/resenia_3.jpg" alt="">
                                <h5 class="m-0">Gabriel Medina</h5>
                                <span>Estudiante</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Contacto</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i> Av. Los Chasquis y Rio Guayllabamba</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>(032) 851894 - 411537</p>
                        <p><i class="fa fa-envelope mr-2"></i>ap.sanchez@uta.edu.ec</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a target="_blank" class="btn btn-outline-light btn-square mr-2" href="https://twitter.com/UTecnicaAmbato?t=jjf85-SBQenXY0NyXbRcqQ&s=09"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" class="btn btn-outline-light btn-square mr-2" href="https://www.facebook.com/UniversidadTecnicadeAmbatoOficial"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" class="btn btn-outline-light btn-square mr-2" href="https://ec.linkedin.com/company/utecnicaambato"><i class="fab fa-linkedin-in"></i></a>
                            <a target="_blank" class="btn btn-outline-light btn-square" href="https://www.instagram.com/utecnicaambato/"><i class="fab fa-instagram"></i></a>



                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Cursos</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="curso1.php"><i class="fa fa-angle-right mr-2"></i>Introducción a la Analítica de Datos</a>
                            <a class="text-white mb-2" href="curso2.php"><i class="fa fa-angle-right mr-2"></i>Implementación de Buenas Prácticas</a>
                            <a class="text-white mb-2" href="curso3.php"><i class="fa fa-angle-right mr-2"></i>Desarrollo Web con Phyton y Django</a>
                            <a class="text-white mb-2" href="curso4.php"><i class="fa fa-angle-right mr-2"></i>Networking Essentials</a>
                            <a class="text-white mb-2" href="curso5.php"><i class="fa fa-angle-right mr-2"></i>Internet de las Cosas IOT</a>
                            <a class="text-white" href="curso6.php"><i class="fa fa-angle-right mr-2"></i>Introducción a la Ciberseguridad</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 mb-5">
                <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Información</h5>
                <div class="w-100">
                    <p>Cuentános tus inquietudes.</p>
                    <div class="w-100">
                        <button class="btn-primary px-md-5" style="position: relative;"><a class="m-0 text-white" href="mailto:ctt.fisei@uta.edu.ec?Subject=Requiero%20información%20sobre%20sus%20cursos%20tecnológicos.">SOLICITAR
                                INFORMACIÓN - CTT</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy;</a> Copyright © Universidad Técnica de Ambato <a></a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="authors.php">Autores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->
</body>

</html>