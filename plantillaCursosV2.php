<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <title>CTT UTA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


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
    <div>
        <?php
        include("./inc/navbar.php");
        ?>
    </div>

    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Cursos</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.html">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase"><a class="text-white" href="course.html">Cursos</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase"><a class="text-white" href="curso1AD.html">INTRODUCCIÓN A LA ANALÍTICA DE DATOS</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!--Info Cursos -->
    <h1 class="tituloCurso">PROGRAMACIÓN CON PYTHON APLICADA A LA INGENIERÍA</h1><br>
    <div class="intro">
        <!--Descripcion -->
        <div class="descripcion">
            <h2>DESCRIPCIÓN</h1>
                <p>El curso de Programación con Python Aplicada a la Ingeniería presenta a los
                    estudiantes conceptos fundamentales, estrategias, técnicas usadas en la
                    implementación de algoritmos y funciones en Python, para desarrollar
                    habilidades en la creación de aplicaciones enfocadas a la manipulación,
                    cálculo y análisis de datos para resolver problemas reales en el campo de las
                    ingenierías u otros.</p><br>
                </p>
        </div>
        <div class="gallery">
            <a href="img/curso1_fin.jpg" data-lightbox="models" data-title = "Banner Curso" data-aos="fade-left">
                <img class="imgDes" src="img/curso1_fin.jpg" alt="">
            </a>    
        </div>
    </div><br>
    <!--Objetivos -->
    <div class="objetivos">
        <h2>OBJETIVOS</h2>
        <ul>
            <li>
                Dar una visión básica del uso del lenguaje de programación Python.
            </li>
            <li>
                Dar una visión básica del uso del lenguaje de programación Python.
            </li>
            <li>
                Desarrollar aplicaciones enfocadas a la manipulación, cálculo y análisis de
                datos de manera rápida.
            </li>
        </ul>
    </div><br>
    <div class="ubicacion">
        <h2>LUGAR DE CELEBRACIÓN</h2>
        <p>TALLERES TECNOLÓGICOS – FISEI.<br>
            Avda. Los Chasquis entre Río Payamino y Río Guayllabamba <br>
            Campus Huachi, Ambato-Ecuador.
        </p>
    </div><br>
    <div class="comite">
        <h2>COMITE ORGANIZADOR</h2>
        <ul>
            <li>
                Ing. Mg. Paulo Cesar Torres Abril
            </li>
            <li>
                Ing. Mg. Mauricio Xavier López Flores
            </li>
        </ul>
    </div><br>
    <!--Requisitos,Materuiales y Contedinos -->
    <div class="pc-tab" data-aos="fade-up">
        <input checked="checked" id="tab1" type="radio" name="pct" />
        <input id="tab2" type="radio" name="pct" />
        <input id="tab3" type="radio" name="pct" />
        <nav>
            <ul>
                <li class="tab1">
                    <label for="tab1">REQUISITOS Y DETALLES</label>
                </li>
                <li class="tab2">
                    <label for="tab2">MATERIALES Y EQUIPOS</label>
                </li>
                <li class="tab3">
                    <label for="tab3">CONTENIDOS</label>
                </li>
            </ul>
        </nav>
        <section>
            <!--Requisitos y Detalles-->
            <div class="tab1">
                <ul>
                    <li>
                        <strong>Inscripciones fechas:</strong> 20 al 31 de enero del 2022
                    </li>
                    <li>
                        <strong>El cupo de inscripciones:</strong> 30 participantes
                    </li>
                    <li>
                        <strong>Lugar del evento:</strong> Laboratorio asignado y/o equipamiento
                    </li>
                    <li>
                        <strong>Fecha del curso:</strong> sábados del 04 de febrero al 25 de febrero del 2023
                    </li>
                    <li>
                        <strong>Horario:</strong> 08H00 – 14H00
                    </li>
                    <li>
                        <strong>Precio para los asistentes:</strong>
                    <li>
                        40 USD Estudiantes y egresados UTA
                    </li>
                    <li>
                        50 USD Graduados, Docentes y Administrativos UTA
                    </li>
                    <li>
                        60 USD Público en general
                    </li>
                    </li>
                    <li>
                        <strong>Tipo de capacitación:</strong> Curso de asistencia y aprobación
                    </li>
                    <li>
                        <strong>Horas de capacitación:</strong> 24 horas presencial y 16 horas autónomas
                    </li>
                    <li>
                        <strong>Beneficiarios:</strong> Estudiantes y público en general
                    </li>
                    <li>
                        <strong>Modalidad:</strong> Presencial
                    </li>
                </ul>
            </div>
            <!--Materiales y Equipos-->
            <div class="tab2">
                <ul>
                    <li>
                        • 1 laboratorio (20 computadores)
                    </li>
                    <li>
                        • 1 proyector
                    </li>
                    <li>
                        • 1 pizarrón
                    </li>
                    <li>
                        • Internet
                    </li>
                    <li>
                        • Software especializado (Spyder 5.x.xx)
                    </li>
                </ul>
            </div>
            <!--Contenidos-->
            <div class="tab3">
                <ul>
                    <li>
                        <strong>• Introducción</strong><br>
                        o Preparación del entorno de trabajo <br>
                        o Primeros pasos con Python <br>
                        o Tipos de datos <br>
                    </li>
                    <li>
                        <strong>• Operadores en Python</strong><br>
                        o Relacionales <br>
                        o Lógicos<br>
                        o Aritméticos<br>
                    </li>
                    <li>
                        <strong>• Control de flujo</strong><br>
                        o Condicionales <br>
                        o Bucles <br>
                    </li>
                    <li>
                        <strong>• Estructuras de datos</strong><br>
                        o Listas <br>
                        o Tuplas <br>
                        o Diccionarios <br>

                    </li>
                    <li>
                        <strong>• Manejo de archivos</strong><br>
                        o Interactuar con ficheros <br>
                        o Hacer más intuitivos los programas <br>
                    </li>
                    <li>
                        <strong>• Errores y excepciones</strong><br>
                        o Manejo de errores <br>
                        o Invocación de excepciones <br>
                    </li>
                    <li>
                        <strong>• Modulo y Paquetes</strong><br>
                        o Módulos estándar <br>
                        o Módulo math <br>
                        o Manejo de Paquetes <br>
                    </li>
                    <li>
                        <strong>• Programación Orientada a Objetos</strong><br>
                        o Clases <br>
                        o Métodos <br>
                        o Funciones <br>
                        o Herencia <br>
                    </li>
                    <li>
                        <strong>• Herramientas de aprendizaje y desarrollo con Python</strong><br>
                        o NumPy <br>
                        o SciPy <br>
                        o Matplotlib <br>
                    </li>
                    <li>
                        <strong>• Proyecto Final</strong><br>
                    </li>
                </ul>
            </div>
        </section>
    </div><br>

    <!--Fin Info Cursos -->

    <!--Boton Registro START-->
    <div class="registro">
        <button class="btnregistro" data-aos="fade-up">
            <a href="formularioInscripcion.php" target="_blank" class="textcolor">REGISTRARME</a>
        </button>
    </div>
    <!--Boton Registro END-->

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