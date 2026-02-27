<?php
include_once('config/constantes.inc.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simpa Iberoamericana</title>

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
    <!-- Animacion -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
            <div class="contenido">
                <div class="isotipo trasicion opacity-0" id="isotipo">
                    <img src="assets/img/isotipo.png" alt="">
                </div>
                <h1 class="trasicion move-opacity-0" id="hunoslide">Somos la <span class="color-orange">evolución </span><br>en la historia del pan</h1>
                <p id="parrafoslide" class="trasicion move-opacity-0">Con más de 50 años de prestigio en el mercado</p>
                <p id="btnempresa" class="trasicion opacity-0"><a href="#" class="link-buton">Nuestra Empresa</a></p>
            </div>


        </div>


    </header>

    <main>

        <!--Seccion 1-->
        <section class="model1" style="background-image: url('assets/img/logo-fondo-linea.png');background-repeat: no-repeat;background-position: left center;">
            <div class="container">

                <div class="row">

                    <div class="col-12 col-lg-10 offset-lg-1">

                        <div class="contenido shadow-box logo-gris">
                            <div class="contenido-imagen" style="background-image: url('assets/img/batidora.jpg');" data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000">
                                <!--<img src="assets/img/batidora.jpg" alt="" class="img-fluid">-->
                            </div>
                            <div class="contenido-texto" data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000">
                                <h2>Garantizamos productos de alta calidad, gran robustez y productividad</h2>
                                <p>Disponemos de un espacio exclusivo para que nuestros representantes puedan probar equipos industriales SIMPA en condiciones reales de trabajo y garantizar un óptimo rendimiento y la calidad buscada en el producto fina</p>
                            </div>
                        </div>


                    </div>



                </div>

            </div>

        </section>
        <!-- Fin Seccion 1-->

        <!--Seccion 2-->
        <section class="model2 " style="background-image: url('assets/img/bgrd01.jpg');background-repeat: no-repeat;background-position: left center;">
            <div class="container logo-color">

                <div class="row">

                    <div class="col-12 col-md-6 col-lg-5 offset-lg-1">

                        <div class="contenido-texto" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000">
                            <h2>Panificación</h2>
                            <p>Ofrecemos una amplia gama de equipos diseñados y fabricados para satisfacer tanto la demanda del consumidor final como la de nuestros clientes fabricantes.</p>
                            <p><a href="#" class="link-buton">Nuestros Equipos</a></p>
                        </div>


                    </div>

                    <div class="col-12 col-md-6 col-lg-5">
                        <img src="assets/img/maquina-contorno01.png" alt="" class="img-fluid">
                    </div>

                </div>

            </div>

        </section>
        <!-- Fin Seccion 2-->

        <!--Seccion 3-->
        <section class="model2 " style="background-image: url('assets/img/bgrd02.jpg');background-repeat: no-repeat;background-position: left center;">
            <div class="container logo-color">

                <div class="row">

                    <div class="col-12 col-md-6 col-lg-5 offset-lg-1">

                        <div class="contenido-texto" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000">
                            <h2>LAMINADOS</h2>
                            <p>Nuestros equipos de última generación aseguran calidad en cantidad para medianas y grandes producciones.</p>
                            <p><a href="#" class="link-buton">Nuestros Equipos</a></p>
                        </div>

                    </div>

                    <div class="col-12 col-md-6 col-lg-5">
                        <img src="assets/img/maquina-contorno02.png" alt="" class="img-fluid">
                    </div>

                </div>

            </div>

        </section>
        <!-- Fin Seccion 3-->

        <!--Seccion 4-->
        <section class="model2 " style="background-image: url('assets/img/bgrd03.jpg');background-repeat: no-repeat;background-position: left center;">
            <div class="container logo-color">

                <div class="row">

                    <div class="col-12 col-md-6 col-lg-5 offset-lg-1">

                        <div class="contenido-texto" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000">
                            <h2>PASTELERÍA</h2>
                            <p>Contamos con gran variedad de modelos y accesorios profesionales a la altura de los estándares exigentes de la pastelería.</p>
                            <p><a href="#" class="link-buton">Nuestros Equipos</a></p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-5">
                        <img src="assets/img/maquina-contorno03.png" alt="" class="img-fluid">
                    </div>

                </div>

            </div>

        </section>
        <!-- Fin Seccion 4-->

        <!--Seccion 5-->
        <section class="model2 " style="background-image: url('assets/img/bgrd04.jpg');background-repeat: no-repeat;background-position: left center;">
            <div class="container logo-color">

                <div class="row">

                    <div class="col-12 col-md-6 col-lg-5 offset-lg-1">

                        <div class="contenido-texto" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000">
                            <h2>MASAS Y PRECOCIDOS</h2>
                            <p>Brindamos calidad y durabilidad en equipos para optimizar grandes producciones.</p>
                            <p><a href="#" class="link-buton">Nuestros Equipos</a></p>
                        </div>

                    </div>

                    <div class="col-12 col-md-6 col-lg-5">
                        <img src="assets/img/maquina-contorno04.png" alt="" class="img-fluid">
                    </div>

                </div>

            </div>

        </section>
        <!-- Fin Seccion 5-->

        <!--Seccion 6-->
        <section class="model1b" style="background-image: url('assets/img/logo-fondo-linea.png');background-repeat: no-repeat;background-position: left center;">
            <div class="container">

                <div class="row">

                    <div class="col-12 col-md-6 col-lg-5 offset-lg-1">

                        <div class="card shadow-box separacion-2-columnas border-color-secondary" style="border-radius: 0;" data-aos="fade-right" data-aos-delay="0" data-aos-duration="1000">
                            <img src="assets/img/preventa.jpg" class="card-img-top" style="border-radius: 0;">
                            <div class="card-body">
                                <h5 class="card-title">PREVENTA</h5>
                                <p class="card-text">Nuestros técnicos lo ayudarán a evaluar su necesidad real presente y futura.Así, en forma conjunta, es posible desarrollar el layout que más se adapte a cada necesidad.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-5">

                        <div class="card shadow-box border-color-secondary" style="border-radius: 0;" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                            <img src="assets/img/postventa.jpg" class="card-img-top" style="border-radius: 0;">
                            <div class="card-body">
                                <h5 class="card-title">POSVENTA</h5>
                                <p class="card-text">La puesta a punto del equipamiento como así también servicios técnicos y un amplio stock de repuestos están de forma permaneten a disposición de nuestros clientes.</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- Fin Seccion 6-->

        <!--Seccion 7-->
        <section class="model3">
            <div class="contenedor-a" style="background-image: url('assets/img/pan.jpg');background-repeat: no-repeat; background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-10 offset-lg-1" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000">
                            <h2>LABORATORIO</h2>
                            <p>Disponemos de un <strong>espacio</strong> exclusivo para que nuestros representantes puedan probar equipos industriales <strong>SIMPA</strong> en condiciones reales de trabajo y garantizar un óptimo rendimiento y la calidad buscada en el producto fina</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contenedor-b">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-10 offset-lg-1" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                            <p>Aquí podrás:</p>
                            <ul class="ultilde">
                                <li><img src="assets/img/tilde.png" alt="Icono">Testear amasadoras, batidoras, hornos y más, con tus propias recetas o con las que te sugerimos.</li>
                                <li><img src="assets/img/tilde.png" alt="Icono">Evaluar rendimiento, calidad y eficiencia de cada máquina.</li>
                                <li><img src="assets/img/tilde.png" alt="Icono">Recibir asesoramiento técnico y recomendaciones de nuestro equipo especializado.</li>
                            </ul>
                            <p><strong>Nuestro objetivo es que tomes la decisión de compra con total seguridad, asegurándote de que el equipo elegido se adapta a las necesidades de tu negocio.</strong></p>
                            <p><strong>Probá, compará y elegí con confianza.</strong></p>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!-- Fin Seccion 7-->

        <!--Seccion 8-->
        <section class="model22 " style="background-image: url('assets/img/bgrd-envio.jpg');background-repeat: no-repeat;background-position: center center;background-size: cover;">
            <div class="container logo-color">

                <div class="row">

                    <div class="col-12 col-lg-8 offset-lg-1">

                        <div class="contenido-texto" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000">
                            <h2>¿Querés ampliar tu negocio con una línea de equipos industriales de alta calidad y gran demanda?</h2>
                            <p>En SIMPA te ofrecemos la oportunidad de convertirte en distribuidor oficial y sumar a tu cartera productos que combinan innovación, rentabilidad y respaldo técnico garantizado.</p>
                            <p>Al ser parte de nuestra red vas a acceder a:</p>
                            <ul class="ultilde">
                                <li><img src="assets/img/tilde.png" alt="Icono">Testear amasadoras, batidoras, hornos y más, con tus propias recetas o con las que te sugerimos.</li>
                                <li><img src="assets/img/tilde.png" alt="Icono">Evaluar rendimiento, calidad y eficiencia de cada máquina.</li>
                                <li><img src="assets/img/tilde.png" alt="Icono">Recibir asesoramiento técnico y recomendaciones de nuestro equipo especializado.</li>
                            </ul>
                            <p>Buscamos aliados estratégicos con visión de crecimiento y compromiso para expandir nuestra presencia en todo el país.</p>
                            <p><strong>Completá el formulario y comenzá hoy mismo a distribuir con nosotros</strong></p>
                            <p data-aos="fade" data-aos-delay="500" data-aos-duration="500"><a href="#" class="link-buton">Formulario</a></p>
                        </div>

                    </div>




                </div>

            </div>

        </section>
        <!-- Fin Seccion 8-->

        <!--Seccion 9-->
        <section class="model1b" style="background-image: url('assets/img/fondo-logo-gris.-big.png');background-repeat: no-repeat;background-position: right center;">
            <div class="container">

                <div class="row">

                    <div class="col-12 col-md-6 col-lg-7 offset-lg-1 separacion-2-columnas" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000">

                        <h2>SERVICIO DE IMPORTACIÓN</h2>
                        <p>Ofrecemos a nuestros distribuidores un <strong>servicio especializado de logística</strong>, pensado para aquellas empresas que necesitan <strong>equipos específicos</strong> que no se encuentran fácilmente en el mercado local.</p>
                        <p>Nuestro equipo se encarga de:</p>
                        <ul class="ultilde">
                            <li><img src="assets/img/tilde.png" alt="Icono">Identificar y seleccionar <strong>proveedores confiables</strong> en el exterior.</li>
                            <li><img src="assets/img/tilde.png" alt="Icono">Gestionar toda la <strong>logística de importación</strong>, desde el origen hasta la entrega.</li>
                            <li><img src="assets/img/tilde.png" alt="Icono">Asegurar <strong>compatibilidad, instalación y soporte técnico</strong> para que el equipo funcione sin inconvenientes.</li>
                        </ul>
                        <p>De esta forma, <strong>acompañamos a cada cliente</strong> en el proceso completo, brindando soluciones a medida y la tranquilidad de contar con un respaldo profesional en cada etapa.</p>

                    </div>

                    <div class="col-12 col-md-6 col-lg-3" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                        <img src="assets/img/que-es-mercancia-aduana.jpg" alt="" class="img-fluid shadow-box border-color-secondary rounded30">

                    </div>


                </div>
            </div>
        </section>
        <!-- Fin Seccion 9-->

        <!--Seccion 10-->
        <section class="model1b" style="background-image: url('assets/img/degradado-gris.png');background-repeat: no-repeat;background-position: right center;">
            <div class="container">

                <div class="row">

                    <div class="col-12 col-lg-10 offset-lg-1" data-aos="fade-right" data-aos-delay="10" data-aos-duration="500">

                        <h2>NUESTROS PRODUCTOS</h2>
                        <p style="margin-bottom: 30px;">Amplia gama de equipo diseñados para ajustarse a las necesidades de cada negocio y optimizar al máximo la producción.</p>


                    </div>

                    <div class="col-12 col-lg-10 offset-lg-1">
                        <div class="row">

                            <div class="col-12 col-md-6 col-lg-3" data-aos="fade-right" data-aos-delay="100" data-aos-duration="500">
                                <h3>AMASADORAS</h3>
                                <div class="card shadow-box separacion-2-columnas" style="border-radius: 0;">
                                    <img src="assets/productos/small/maquina-muestra1.png" class="card-img-top" style="border-radius: 0;">
                                    <div class="card-body">
                                        <p><a href="#" class="link-buton-block">Ver más</a></p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 col-md-6 col-lg-3" data-aos="fade-right" data-aos-delay="600" data-aos-duration="500">
                                <h3>BATIDORAS</h3>
                                <div class="card shadow-box separacion-2-columnas" style="border-radius: 0;">
                                    <img src="assets/productos/small/maquina-muestra2.png" class="card-img-top" style="border-radius: 0;">
                                    <div class="card-body">
                                        <p><a href="#" class="link-buton-block">Ver más</a></p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 col-md-6 col-lg-3" data-aos="fade-right" data-aos-delay="1100" data-aos-duration="500">
                                <h3>MÁQUINAS</h3>
                                <div class="card shadow-box separacion-2-columnas" style="border-radius: 0;">
                                    <img src="assets/productos/small/maquina-muestra3.png" class="card-img-top" style="border-radius: 0;">
                                    <div class="card-body">
                                        <p><a href="#" class="link-buton-block">Ver más</a></p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 col-md-6 col-lg-3" data-aos="fade-right" data-aos-delay="1700" data-aos-duration="500">
                                <h3>HORNOS</h3>
                                <div class="card shadow-box separacion-2-columnas" style="border-radius: 0;">
                                    <img src="assets/productos/small/maquina-muestra4.png" class="card-img-top" style="border-radius: 0;">
                                    <div class="card-body">
                                        <p><a href="#" class="link-buton-block">Ver más</a></p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>




                </div>
            </div>
        </section>
        <!-- Fin Seccion 10-->

        <!--Seccion 11-->
        <section class="model22 " style="background-image: url('assets/img/bgrd-empresa.jpg');background-repeat: no-repeat;background-position: center center;">
            <div class="container">

                <div class="row">

                    <div class="col-12 col-md-8 col-lg-6 offset-lg-1" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000">

                        <div class="contenido-texto">
                            <h2>LA EMPRESA</h2>
                            <p>Con <strong>50</strong> años de permanencia en el mercado Simpa es sinónimo de robustez, sencillez operativa y productividad. </p>
                            <p>Estas características han sido premiadas con el sostenido reconocimiento del exigente mercado de la industria del pan y los equipos SIMPA han ganado un sólido prestigio.</p>
                            <p>El contacto permanente con el usuario, ha permitido una evolución sostenida de cada equipo. Respetando diseños básicos, se han desarrollado equipos de alta producción que logran productos finales perfectamente terminados de excelente calidad.</p>
                            <p>El pan y otros productos de la industria panadera, han evolucionado en componentes, formas y gustos y <strong>SIMPA</strong> ha sabido interpretar y volcar estas demandas en sus equipos.Tanto en funciones como productividad, todos nuestros equipos han aumentado su rendimiento y versatilidad.</p>
                            <p><strong>SIMPA IBEROAMERICANA</strong> pone a disposición del mercado latinoamericano una amplia gama de productos para la industria del pan. En este sitio encontrará un equipamiento apropiado a cada requerimiento. </p>
                            <p>Contamos además con un soporte técnico y asesoramiento de pre y post venta a fin de lograr la total satisfacción de nuestros usuario</p>

                        </div>

                    </div>

                    <civ class="col-12 col-md-4 col-lg-4" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                        <div id="map"></div>
                    </civ>


                </div>

            </div>

        </section>
        <!-- Fin Seccion 11-->

        <!--Seccion 12-->
        <section class="model4 " style="background-image: url('assets/img/bgrd-contacto.jpg');background-repeat: no-repeat;background-position: center center;">
            <div class="container">

                <div class="row">

                    <div class="col-12 col-md-8 col-lg-6 offset-lg-1" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000">
                        <div class="contenido-texto">
                            <h2>CONTACTO</h2>
                            <form action="">

                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre y Apellido</label>
                                    <input type="text" name="nombre" class="form-control" id="nombre"">
                                </div>

                                <div class=" mb-3">
                                    <label for="localidad" class="form-label">Localidad</label>
                                    <input type="text" name="localidad" class="form-control" id="localidad">
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="email">
                                </div>

                                <div class="mb-3">
                                    <label for="telefono" class="form-label">Teléfono</label>
                                    <input type="text" name="telefono" class="form-control" id="telefono">
                                </div>

                                <div class="mb-3">
                                    <label for="asunto" class="form-label">Asunto</label>
                                    <input type="text" name="asunto" class="form-control" id="asunto">
                                </div>

                                <div class="mb-3">
                                    <label for="consulta" class="form-label">Consulta</label>
                                    <textarea class="form-control" id="consulta" rows="3" name="consulta"></textarea>
                                </div>

                                <p class="text-end"><button type="submit" class="link-buton">Enviar</button></p>


                            </form>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 col-lg-4" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                        <div id="map2"></div>
                    </div>


                </div>

            </div>

        </section>
        <!-- Fin Seccion 12-->

    </main>

    <?php include_once('includes/footer.php'); ?>

    <!-- Whatsapp -->
    <?php include("includes/what.php"); ?>

    <!-- BOOTSTRAP JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Google maps -->
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8_03r9LkKX7DqnHDYfv8lbyvWH7gadwM&callback=initMap"></script>


    <!-- Main -->
    <script src="<?php echo _CONST_DOMINIO_ ?>assets/js/main.js"></script>

    <!-- Main -->
    <script src="<?php echo _CONST_DOMINIO_ ?>assets/js/animacion.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>