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
</head>

<!--RECOPILADOR DE INCIDENCIAS-->
<script type="text/javascript" src="https://mattdiaz.atlassian.net/s/d41d8cd98f00b204e9800998ecf8427e-T/-ia3qmx/b/4/c95134bc67d3a521bb3f4331beb9b804/_/download/batch/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector.js?locale=es-ES&collectorId=da30bc4a"></script>
<!--RECOPILADOR END-->

<body>
    <!-- Topbar Start -->
    <?php
    include("./inc/topbar.php");
    ?>
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <?php
    include("./inc/navbar.php");
    ?>
    <!-- Navbar End -->
    <!-- Header Start -->
    <?php
    include("./inc/header_cursos.php");
    ?>
    <!-- Header End -->
    <!-- Courses Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">CURSOS</h5>
                <h1>Cursos Disponibles</h1>
            </div>
            <div class="row">
                <!---Primer curso START-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/ojs_img.jpg" alt="" style="width: 1743px; height: 200px;">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>ABIERTO</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>32 HORAS</small>
                            </div>
                            <a href="curso1.php" class="h5">INTRODUCCIÓN A OPEN JOURNAL SYSTEM (OJS) DESDE LA EDICIÓN DE REVISTA</a>
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
                            <a href="curso2.php" class="h5">DEFENSA DIGITAL: SEGURIDAD TECNOLÓGICA Y PROTECCIÓN DE DATOS PERSONALES E INFORMÁTICOS.</a>
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
                            <a class="h5" href="curso3.php">ETHICAL HACKER</a>
                        </div>
                    </div>
                </div>
                <!---Tercer curso END-->
                
            </div>
            <div class="row">
                <!---Cuarto curso START-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/english_forit.jpg" alt="" style="width: 1743px; height: 200px;">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>ABIERTO</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>50 HORAS</small>
                            </div>
                            <a class="h5" href="curso4.php">ENGLISH FOR 'IT' 1</a>
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
                            <a class="h5" href="curso5.php">FUNDAMENTOS DE CIENCIA Y ANALÍTICA DE DATOS</a>
                        </div>
                    </div>
                </div>
                <!---Quinto curso END-->
                <!---Sexto curso START
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/" alt="" style="width: 1743px; height: 200px;">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>ABIERTO</small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>32 HORAS</small>
                            </div>
                            <a class="h5" href="curso6.php"></a>
                        </div>
                    </div>
                </div>
                Sexto curso END-->
            </div>

        </div>
    </div>
    <!-- Courses End -->

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
    include("./inc/footer_without_courses.php");
    ?>
    <!-- Footer End -->
</body>

</html>