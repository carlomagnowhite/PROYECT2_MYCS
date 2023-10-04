<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <title>CTT-FISEI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="js/main.js" rel="js">
    <script src="js/correos.js"></script>
    <!-- Favicon -->
    <link rel="icon" href="img/ctt.png">

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


<body>
    <!--TOPBAR START-->
    <?php
    include("./inc/topbar.php");
    ?>
    <!--TOPBAR END--->
    <!---NAVBAR START-->
    <?php
    include("./inc/navbar.php");
    ?>
    <!---NAVBAR END-->
    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Sobre Nosotros</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Sobre Nosotros</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5"><br><br><br>
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/FISEI_ADMIN.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Sobre Nosotros</h5>
                        <h1>Objetivos</h1><br>
                    </div>
                    <li class="text-uppercase" style="text-justify: distribute-all-lines;">Formular alternativa tecnológicas aplicables a la solución de problemas inherentes a sus áreas de trabajo, que satisfagan las necesidades básicas de la población en general con el fin de propender a su desarrollo.</li><br>
                    <li class="text-uppercase" style="text-justify: distribute-all-lines;">Proporcionar capacitación, asesoramiento técnico y consultorías a los sectores públicos y privados.</li><br>
                    <li class="text-uppercase" style="text-justify: distribute-all-lines;">Brindar soporte académico y técnico a las carreras profesionales relacionadas con sus áreas de trabajo.</li><br>
                    <li class="text-uppercase" style="text-justify: distribute-all-lines;">Difundir el conocimiento técnico - científico existente, en foros nacionales e internacionales a través de concursos, congresos, seminarios, conferencias y publicaciones de artículos.</li><br>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
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