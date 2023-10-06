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
    <?php
    include("./inc/topbar.php");
    ?>
    <!-- Topbar End -->


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
    <?php
    include("./inc/footer_without_courses.php");
    ?>
<!-- Footer End -->

</html>