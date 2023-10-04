<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <title>CTT-FISEI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="js/main.js" rel="js">
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
    <?php
    include("./inc/topbar.php");
    //Topbar End
    //Navbar START
    include("./inc/navbar.php");
    //Navbar END
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
                            <h5 class="text-white text-uppercase mb-md-3">CURSOS VIRTUALES Y PRESENCIALES</h5>
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
                            <h5 class="text-white text-uppercase mb-md-3">CURSOS VIRTUALES Y PRESENCIALES</h5>
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
                            <h5 class="text-white text-uppercase mb-md-3">CURSOS VIRTUALES Y PRESENCIALES</h5>
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
                            <h5 class="text-white text-uppercase mb-md-3">CURSOS VIRTUALES Y PRESENCIALES</h5>
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
                    <div class="clear"></div>
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
                        <img class="img-fluid" src="img/ojs_img.jpg" alt="" style="width: 1743px; height: 200px;">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>ABIERTO</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>32 HORAS</small>
                            </div>
                            <h5 class="h5">INTRODUCCIÓN A OPEN JOURNAL SYSTEM (OJS) DESDE LA EDICIÓN DE REVISTA</h5>
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
                        <img class="img-fluid" src="img/curso2_img.jpg" alt="" style="width: 1743px; height: 200px;">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>ABIERTO</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>40 HORAS</small>
                            </div>
                            <h5 class="h5">DEFENSA DIGITAL: SEGURIDAD TECNOLÓGICA Y PROTECCIÓN DE DATOS PERSONALES E INFORMÁTICOS.</h5>
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
                        <img class="img-fluid" src="img/ethical_img.jpg" alt="" style="width: 1743px; height: 200px;">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>ABIERTO</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>70 HORAS</small>
                            </div>
                            <h5 class="h5">ETHICAL HACKER</h5>
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
                        <img class="img-fluid" src="img/english_forit.jpg" alt="" style="width: 1743px; height: 200px;">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>ABIERTO</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>50 HORAS</small>
                            </div>
                            <h5 class="h5">ENGLISH FOR 'IT' 1</h5>
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
                        <img class="img-fluid" src="img/ANALITICA-DE-DATOS.jpg" alt="" style="width: 1743px; height: 200px;">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>ABIERTO</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>36 HORAS</small>
                            </div>
                            <h5 class="h5">FUNDAMENTOS DE CIENCIA Y ANALÍTICA DE DATOS</h5>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <a href="curso5.php" class="btn btn-primary py-md-2 px-md-5 font-weight-semi-bold" style="margin: 0 auto;">VER MÁS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---Quinto curso END-->
                <!---Sexto curso START
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
                Sexto curso END-->
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

                <!---div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2 width-a shadow-a">
                        <div class="position-relative">
                            <div class="image-container image-a">
                                <img class="img-fluid" src="img/decana.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Ing. Elsa Pilar Urrutia Urrutia, Mg.</h5>
                            <p class="m-0">DECANA FISEI</p>
                        </div>
                        
                    </div>
                    
                </div--->
                    <div class="container-a">
                        <!--TEAM DECANA/START-->
                        <div class="col-md-6 col-lg-3 text-center team mb-4">
                            <div class="team-item rounded overflow-hidden mb-2 width-a shadow-a">
                                <div class="position-relative">
                                    <div class="image-container image-a">
                                        <img class="img-fluid" src="img/decana.jpg" alt="">
                                    </div>
                                </div>
                                <div class="bg-secondary p-4">
                                    <h5> Ing. Elsa Pilar Urrutia Urrutia, Mg.</h5>
                                    <p class="m-0">DECANA FISEI</p>
                                </div>
                            </div>
                        </div>
                        <!--TEAM DECANA/END-->
                        <!--TEAM SUBDECANO/START-->
                        <div class="col-md-6 col-lg-3 text-center team mb-4">
                            <div class="team-item rounded overflow-hidden mb-2 width-a shadow-a">
                                <div class="position-relative">
                                    <div class="image-container image-a">
                                        <img class="img-fluid" src="img/carlos_sanchez.jpg" alt="">
                                    </div>
                                </div>
                                <div class="bg-secondary p-4">
                                    <h5> Ing. Carlos Humberto Sánchez Rosero, Mg.</h5>
                                    <p class="m-0">SUBDECANO FISEI</p>
                                </div>
                            </div>
                        </div>
                        <!--TEAM SUBDECANO/END-->
                    </div>

                    <div class="container-a">
                        <!---TEAM/ANDREA START-->
                        <div class="col-md-6 col-lg-3 text-center team mb-4">
                            <div class="team-item rounded overflow-hidden mb-2 width-a shadow-a">
                                <div class="position-relative">
                                    <div class="image-container image-a">
                                        <img class="img-fluid" src="img/andrea_sanchez.jpg" alt="">
                                    </div>
                                </div>
                                <div class="bg-secondary p-4">
                                    <h5>Ing. Andrea Patricia Sánchez Zumba, Mg.</h5>
                                    <p class="m-0">RESPONSABLE CTT-FISEI</p>
                                </div>
                            </div>
                        </div>
                        <!---TEAM/ANDREA END-->
                        <!---TEAM/ENCARGADO START-->
                        <div class="col-md-6 col-lg-3 text-center team mb-4">
                            <div class="team-item rounded overflow-hidden mb-2 width-a shadow-a">
                                <div class="position-relative">
                                    <div class="image-container image-a">
                                        <img class="img-fluid" src="img/franklin_salazar.jpg" alt="">
                                    </div>
                                </div>
                                <div class="bg-secondary p-4">
                                    <h5>Ing. Franklin Wilfrido Salazar Logroño, Mg.</h5>
                                    <p class="m-0">ENCARGADO TALLERES TECNOLÓGICOS</p>
                                </div>
                            </div>
                        </div>
                        <!---TEAM/ENCARGADO END-->
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
                                <img class="img-fluid mx-auto mb-3" src="img/r1.jpg" alt="">
                                <h5 class="m-0">Emilio</h5>
                                <span>Estudiante</span>
                            </div>
                            <div class="text-center">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <h4 class="font-weight-normal mb-4">La plataforma en donde se puede acceder a
                                    los cursos es muy intuitiva y agradable para el usuario, sin duda, incita a
                                    ir por más cursos.</h4>
                                <img class="img-fluid mx-auto mb-3" src="img/r2.jpg" alt="">
                                <h5 class="m-0">Esteban</h5>
                                <span>Ex-Alumno UTA</span>
                            </div>
                            <div class="text-center">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <h4 class="font-weight-normal mb-4">La calidad de los cursos es buena, y permite
                                    expandir el conocimiento de maneras no convencionales.</h4>
                                <img class="img-fluid mx-auto mb-3" src="img/r3.jpg" alt="">
                                <h5 class="m-0">Edison</h5>
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
    <?php
    include("./inc/footer_standard.php");
    ?>
    <!-- Footer End -->
</body>

</html>