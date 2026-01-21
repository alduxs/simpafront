<?php
include_once('config/constantes.inc.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Iluminación</title>

    <meta name="title" content="Simpa Iberoamericana" />
    <meta name="description" content="" />
    <meta name="author" content="Aldo Iñiguez" />
    <meta name="revisit-after" content="15 days" />
    <meta name="robots" content="index follow" />

    <link rel="icon" type="image/png" href="<?php echo _CONST_DOMINIO_ ?>favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?php echo _CONST_DOMINIO_ ?>favicon.svg" />
    <link rel="shortcut icon" href="<?php echo _CONST_DOMINIO_ ?>favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo _CONST_DOMINIO_ ?>apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="MyWebSite" />
    <link rel="manifest" href="<?php echo _CONST_DOMINIO_ ?>site.webmanifest" />

    <!-- BOOTSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/carousel/carousel.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo _CONST_DOMINIO_ ?>assets/css/styles.css" />
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="<?php echo _CONST_DOMINIO_ ?>assets/fontawsome/css/all.css" />
    <style>
        #myCarousel {
            --f-carousel-slide-height: 100%;
            --f-carousel-spacing: 10px;
            height: 100%;
        }
    </style>
</head>

<body>

    <div class="velo" id="velo"></div>

    <header class="header-home">

        <?php include_once('includes/top-navigation.php'); ?>

        <div class="contenedor-slide" id="contenedor-slide" style="background-image: url('assets/slides/slide04.jpg');background-repeat: no-repeat;background-position: center;">

            <div class="isotipo">
                <img src="assets/img/isotipo.png" alt="">
            </div>
            <h1>Somos la evolución en la historia del pan</h1>
            <p>Con más de 50 años de prestigio en el mercado</p>
            <p><a href="#" class="link-buton">Nuestra Empresa</a></p>

        </div>


    </header>

    <main>

        <section class="home-obras">
            <div class="container">
                <!-- Titulo -->
                <div class="row">
                    <div class="col-12">
                        <h1>Obras.</h1>
                    </div>
                </div>

                <!-- Obras -->

                <div class="row">





                </div>
                <!-- Fin Obras -->
                <!-- Mas Obras -->
                <div class="row">
                    <div class="col-12 text-end">
                        <div class="bt-mas-obras"><a href="<?php echo _CONST_DOMINIO_ ?>/obras">Mas obras <i class="fa-solid fa-angle-right"></i></a></div>
                    </div>
                </div>
                <!-- Fin Mas Obras -->

            </div>

        </section>

        <section class="home-empresa" id="empresaservicio">

            <div class="container">
                <!-- Servicios -->
                <div class="row">
                    <div class="col-12">
                        <div class="servicios-contenedor">
                            <h3 class="titulo-servicio">Servicios.</h3>
                            <div class="servicios-texto">
                                <div class="bloque-servicio">
                                    <h4>Proyecto y planificación <!--<i class="fa-solid fa-angle-down"></i>--></h4>
                                    <p>Contamos con una estructura técnica con capacidad de desarrollo integral de proyectos de iluminación y planificación, diseñando soluciones lumínicas personalizadas que transforman espacios, maximizando la eficiencia energética y creando ambientes únicos y funcionales. Desde la concepción inicial hasta la implementación final, nos encargamos de cada etapa (análisis de necesidades, selección de luminarias adecuadas para cada área, cálculos fotométricos) sin dejar de lados los desarrollos arquitectónicos y urbanísticos</p>
                                </div>

                                <div class="bloque-servicio">
                                    <h4>Comercialización y Fabricación</h4>
                                    <p>Comercializamos una amplia gama de luminarias de marcas reconocidas, tanto nacionales como importadas, ofreciendo soluciones lumínicas para todo tipo de espacios y estilos. Además, diseñamos y fabricamos luminarias especiales y a medida, creando piezas únicas que se adaptan perfectamente a las necesidades y visión de cada proyecto.</p>
                                </div>

                                <div class="bloque-servicio">
                                    <h4>Pruebas en Obra</h4>
                                    <p>Contamos con una sólida experiencia en prueba de luminarias en obras, para asegurar que cada solución de iluminación sea optima, verificando la intensidad lumínica, la temperatura de color y la uniformidad de la luz en el entorno del proyecto. Esta etapa es crucial para garantizar que el resultado final cumpla con las expectativas estéticas y funcionales, optimizando el rendimiento de cada luminaria</p>
                                </div>
                                <div class="bloque-servicio">
                                    <h4>Distribución</h4>
                                    <p>Contamos con una logística de distribución que nos permite realizar envíos a cualquier punto del país</p>
                                </div>
                            </div>
                            <!--<div class="servicios-imagen"></div>-->
                        </div>

                    </div>
                </div>
                <!-- Fin Servicios -->


                <!-- Empresa -->
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="empresa-contenedor">
                            <h3 class="titulo-empresa">Empresa.</h3>
                            <div class="empresa-texto">
                                <p>Desde nuestros inicios en el año 2001, nos hemos consolidado como referentes en la comercialización de luminarias, atendiendo una amplia variedad de sectores que abarcan desde espacios residenciales y comerciales hasta proyectos industriales y urbanos.</p>
                                <p>Nuestra identidad se construye sobre una atención personalizada para comprender en profundidad las necesidades específicas de cada cliente y cada obra, brindando soluciones de iluminación que se ajustan con precisión a sus objetivos y visión.</p>
                                <p>La innovación es un pilar fundamental en todo lo que hacemos. Estamos en permanente búsqueda de las últimas tecnologías, tendencias y diseños del mercado para asegurar que nuestras propuestas no solo sean funcionales, sino también eficientes desde el punto de vista energético.</p>
                                <p>Este compromiso nos permite ofrecer auténticas soluciones lumínicas que transforman ambientes y mejoran la calidad de vida.</p>
                                <!--<p style="display: flex;justify-content: center;cursor:pointer;" id="masinfo"><i class="fa-solid fa-angle-down"></i></p>-->
                            </div>
                            <h3 class="titulo-empresa2">Empresa.</h3>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Fin Empresa -->

        </section>

    </main>

    <?php include_once('includes/footer.php'); ?>

    <!-- BOOTSTRAP JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Google maps -->
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8_03r9LkKX7DqnHDYfv8lbyvWH7gadwM&callback=initMap"></script>


    <!-- Main -->
    <script src="<?php echo _CONST_DOMINIO_ ?>assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/carousel/carousel.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/carousel/carousel.autoplay.umd.js"></script>
    <script src="<?php echo _CONST_DOMINIO_ ?>assets/js/slide.js"></script>



</body>

</html>