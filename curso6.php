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
    <link href="css/Cursos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lightbox.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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


    <!-- Header Start -->
    <?php
    include("./inc/header_cursos.php");
    ?>
    <!-- Header End -->

    <!-- Imagen -->
    <div allign="center"><img src="img/Curso6.jpg"></div>
    <!-- Imagen End -->

    <!-- Footer Start -->
    <?php
    include("./inc/footer_without_courses.php");
    ?>
    <!-- Footer End -->
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>