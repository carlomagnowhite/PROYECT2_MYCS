<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <title>INSCRIPCIONES</title>
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
    <link rel="stylesheet" href="css/formulario.css">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center py-4 px-xl-5">
            <div class="col-lg-3">
                <a href="index.html" class="text-decoration-none">
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

    <!-- Navbar Start -->
    <?php
    include("./inc/navbar.php");
    ?>
    <!-- NavBar End -->

    <!--Inicio Formularo-->

    <div class="form-rest"></div>

    <div class="container d-flex flex-row justify-content-center alig-items-center ">
        <div class="row">
            <div class="col -12 align-items-center ">
                <div class="titulo">
                    <h1>UNIVERSIDAD TÉCNICA DE AMBATO</h1>
                </div>
                <div class="logo">
                    <img src="img/UTAloggo.png">
                </div>
                <!---FORM START-->
                <form action="./php/inscripcion_usuario.php" method="post" class="FormAjax" autocomplete="off" enctype="multipart/form-data">
                    <div class="mb-3">
                        <div class="cedula">
                            <label for="cedula" class="form-label">CÉDULA DE IDENTIDAD</label>
                            <input type="number" class="form-control" name="cedula_inscrito" maxlength="10" pattern="[0-9]{10}" required>
                        </div>
                        <div class="apellidos">
                            <label for="apellidos" class="form-label">APELLIDOS COMPLETOS</label>
                            <input type="text" class="form-control" name="apellido_inscrito" maxlength="80" pattern="[a-zA-ZáéíóúÁÉÍÓÚÑñ ]{10,70}" required>
                        </div>
                        <div class="nombres">
                            <label for="nombres" class="form-label">NOMBRES COMPLETOS</label>
                            <input type="text" class="form-control" name="nombre_inscrito" maxlength="80" pattern="[a-zA-ZáéíóúÁÉÍÓÚÑñ ]{10,70}" required>
                        </div>
                        <div class="telefono">
                            <label for="telefono" class="form-label">TELÉFONO/CELULAR</label>
                            <input type="number" class="form-control" name="telefono_inscrito" maxlength="10" pattern="[0-9]" required>
                        </div>
                        <div class="correo">
                            <label for="correo" class="form-label">CORREO ELECTRÓNICO</label>
                            <input type="email" class="form-control" name="email_inscrito" maxlength="80" required>
                        </div>
                        <div class="direccion">
                            <label for="direccion" class="form-label">DIRECCIÓN</label>
                            <input type="text" class="form-control" name="direccion_inscrito" required>
                        </div>
                        <div class="categoria">
                            <h6>CATEGORÍA (deberá enviar un documento que avale la categoría para legalizar
                                inscripción)
                            </h6>
                        </div>
                        <div class="estudiantes">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Estudiantes UTA
                                </label>
                            </div>
                        </div>
                        <div class="graduados">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Graduados, Docentes UTA y Personal Administrativo UTA
                                </label>

                            </div>
                        </div>
                        <div class="particulares">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Particulares
                                </label>
                            </div>
                        </div>
                        <div class="cursos_aseguir">
                            <h6>CURSO A SEGUIR</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    CCNA 1: Introducción a Redes (ITN)
                                </label>
                            </div>
                        </div>
                        <div class="subir_documentos">
                            <h6>Subir Cédula, papeleta de votación, documento aval de la categoría seleccionada
                            </h6>
                        </div>
                        <div class="chooser">
                            <div class="mb-3">
                                <label for="formFile" class="form-label"></label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="enviar d-grid gap-2">
                            <button class="btn btn-primary" type="submit">ENVIAR</button>
                        </div>
                </form>
            </div>
        </div>
    </div>


    <!--Fin Formularo-->
</body>
</div>



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
<script src="./js/ajax.js"></script>

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
                        <a class="text-white mb-2" href="plantillaCursos.html"><i class="fa fa-angle-right mr-2"></i>Introducción a la Analítica de Datos</a>
                        <a class="text-white mb-2" href="curso2BP.html"><i class="fa fa-angle-right mr-2"></i>Implementación de Buenas Prácticas</a>
                        <a class="text-white mb-2" href="curso3PyD.html"><i class="fa fa-angle-right mr-2"></i>Desarrollo Web con Phyton y Django</a>
                        <a class="text-white mb-2" href="curso4NE.html"><i class="fa fa-angle-right mr-2"></i>Networking
                            Essentials</a>
                        <a class="text-white mb-2" href="curso5IOT.html"><i class="fa fa-angle-right mr-2"></i>Internet
                            de las Cosas IOT</a>
                        <a class="text-white" href="curso6IC.html"><i class="fa fa-angle-right mr-2"></i>Introducción a
                            la Ciberseguridad</a>
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
                    <a class="nav-link text-white py-0" href="authors.html">Autores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">FAQs</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Footer End -->

</html>