<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores</title>
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
</head>

<body>
    <!--TOPBAR START--->
    <?php
    include("./inc/topbar.php");
    ?>
    <!--TOPBAR END--->

    <!-- Navbar Start -->
    <?php
    include("./inc/navbar.php");
    ?>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">AUTORES</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Autores</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Team Start -->
    <div class="container-fluid py-5 ">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">AUTORES DE LA PÁGINA WEB</h5>
                <h1>EQUIPO DE DESARROLLO</h1>
            </div>

            <!---TEAM START-->
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="position-relative">
                            <div class="image-container">
                                <img class="img-fluid" src="img/resenia_1.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Mateo Díaz</h5>
                            <p class="m-0">Estudiante de Software FISEI - UTA</p>
                            <a class="text-primary mb-4" href="https://github.com/carlomagnowhite" target="_blank">GitHub</a>
                        </div>
                    </div>
                </div>
                <!--TEAM START-->
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="position-relative">
                            <div class="image-container">
                                <img class="img-fluid" src="img/gab.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Gabriel Medina</h5>
                            <p class="m-0">Estudiante de Software FISEI - UTA</p>
                            <a class="text-primary mb-4" href="https://github.com/GaboMedina" target="_blank">GitHub</a>
                        </div>
                    </div>
                </div>
                <!--TEAM END-->
                <!--TEAM START-->
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="position-relative">
                            <div class="image-container">
                                <img class="img-fluid" src="img/carl.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Carlos Alvarado</h5>
                            <p class="m-0">Estudiante de Software FISEI - UTA</p>
                            <a class="text-primary mb-4" href="https://github.com/CarlosAl21" target="_blank">GitHub</a>
                        </div>
                    </div>
                </div>
                <!--TEAM END-->
                <!--TEAM START-->
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="position-relative">
                            <div class="image-container">
                                <img class="img-fluid" src="img/" alt="">
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Ariel Tonato</h5>
                            <p class="m-0">Estudiante de Software FISEI - UTA</p>
                            <a class="text-primary mb-4" href="https://github.com/ArielTonato" target="_blank">GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
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

</body>

</html>