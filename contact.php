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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
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

    <!--Inicio formulario de contacto-->

    <div class="form-rest"></div>

    <body class="contactBody">
        <div class="content">
            <h1 class="logo">Contáctanos</h1>
            <div class="contact-wrapper">
                <div class="contact-form">
                    <form action="php/mensajes_contacto.php" class="FormAjax" method="post" autocomplete="off">
                        <p>
                            <label for="nombre">Nombre Completo</label>
                            <input type="text" name="nombre" placeholder="Rosita Rosas" id="nombres" required>
                        </p>
                        <p>
                            <label for="correo">Correo Electrónico</label>
                            <input type="email" name="correo" id="email" placeholder="correo@dominio.com" required>
                        </p>
                        <p>
                            <label for="telefono">Telefono</label>
                            <input type="number" name="telefono" pattern="[0-9]{10}" placeholder="0912547893" maxlength="10" required>
                        </p>
                        <p>
                            <label for="mensaje">Mensaje o sugerencia</label>
                            <textarea name="mensaje" id="mensaje" rows="10" required></textarea>
                        </p>
                        <p>
                            <button type="submit">Enviar</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <!--Fin formulario de contacto-->

    <!-- Footer Start -->
    <?php
    include("./inc/footer_standard.php");
    ?>
    <!-- Footer End -->
    <script src="./js/ajax.js"></script>
</body>

</html>