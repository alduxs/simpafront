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

    <header class="header-home-int">

        <?php include_once('includes/top-navigation.php'); ?>

    </header>

    <main>


        <!--Seccion 10-->
        <section class="section-productos">
            <div class="container">

                <div class="row">

                    <div class="col-12 col-lg-10 offset-lg-1">

                        <!-- AMASADORAS -->
                        <div class="row" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000">

                            <div class="col-12">
                                <h2>AMASADORAS</h2>
                            </div>

                            <div class="col-6 col-md-4">
                                <div class="card  separacion-2-columnas" style="border-radius: 0;">
                                    <img src="assets/productos/small/maquina-muestra1.png" class="card-img-top" style="border-radius: 0;">
                                    <div class="card-body">
                                        <p><a href="#" class="link-buton-block">Ver más</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4">
                                <div class="card  separacion-2-columnas" style="border-radius: 0;">
                                    <img src="assets/productos/small/maquina-muestra1.png" class="card-img-top" style="border-radius: 0;">
                                    <div class="card-body">
                                        <p><a href="#" class="link-buton-block">Ver más</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 ">
                                <div class="card  separacion-2-columnas" style="border-radius: 0;">
                                    <img src="assets/productos/small/maquina-muestra1.png" class="card-img-top" style="border-radius: 0;">
                                    <div class="card-body">
                                        <p><a href="#" class="link-buton-block">Ver más</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 ">
                                <div class="card  separacion-2-columnas" style="border-radius: 0;">
                                    <img src="assets/productos/small/maquina-muestra1.png" class="card-img-top" style="border-radius: 0;">
                                    <div class="card-body">
                                        <p><a href="#" class="link-buton-block">Ver más</a></p>
                                    </div>
                                </div>
                            </div>

                        

                        </div>

                        <!-- BATIDORAS -->
                        <div class="row" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000">

                            <div class="col-12">
                                <h2>BATIDORAS</h2>
                            </div>

                            

                            <div class="col-6 col-md-4">
                                <div class="card  separacion-2-columnas" style="border-radius: 0;">
                                    <img src="assets/productos/small/maquina-muestra2.png" class="card-img-top" style="border-radius: 0;">
                                    <div class="card-body">
                                        <p><a href="#" class="link-buton-block">Ver más</a></p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-6 col-md-4">
                                <div class="card  separacion-2-columnas" style="border-radius: 0;">
                                    <img src="assets/productos/small/maquina-muestra2.png" class="card-img-top" style="border-radius: 0;">
                                    <div class="card-body">
                                        <p><a href="#" class="link-buton-block">Ver más</a></p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-6 col-md-4">
                                <div class="card  separacion-2-columnas" style="border-radius: 0;">
                                    <img src="assets/productos/small/maquina-muestra2.png" class="card-img-top" style="border-radius: 0;">
                                    <div class="card-body">
                                        <p><a href="#" class="link-buton-block">Ver más</a></p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-6 col-md-4">
                                <div class="card  separacion-2-columnas" style="border-radius: 0;">
                                    <img src="assets/productos/small/maquina-muestra2.png" class="card-img-top" style="border-radius: 0;">
                                    <div class="card-body">
                                        <p><a href="#" class="link-buton-block">Ver más</a></p>
                                    </div>
                                </div>

                            </div>



                        </div>

                        <!-- MAQUINAS -->
                        <div class="row" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000">

                            <div class="col-12">
                                <h2>MÁQUINAS</h2>
                            </div>

                            

                            <div class="col-6 col-md-4">
                                <div class="card  separacion-2-columnas" style="border-radius: 0;">
                                    <img src="assets/productos/small/maquina-muestra3.png" class="card-img-top" style="border-radius: 0;">
                                    <div class="card-body">
                                        <p><a href="#" class="link-buton-block">Ver más</a></p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-6 col-md-4">
                                <div class="card  separacion-2-columnas" style="border-radius: 0;">
                                    <img src="assets/productos/small/maquina-muestra3.png" class="card-img-top" style="border-radius: 0;">
                                    <div class="card-body">
                                        <p><a href="#" class="link-buton-block">Ver más</a></p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-6 col-md-4">
                                <div class="card  separacion-2-columnas" style="border-radius: 0;">
                                    <img src="assets/productos/small/maquina-muestra3.png" class="card-img-top" style="border-radius: 0;">
                                    <div class="card-body">
                                        <p><a href="#" class="link-buton-block">Ver más</a></p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-6 col-md-4">
                                <div class="card  separacion-2-columnas" style="border-radius: 0;">
                                    <img src="assets/productos/small/maquina-muestra3.png" class="card-img-top" style="border-radius: 0;">
                                    <div class="card-body">
                                        <p><a href="#" class="link-buton-block">Ver más</a></p>
                                    </div>
                                </div>

                            </div>



                        </div>

                        <!-- HORNOS -->
                        <div class="row" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000">

                            <div class="col-12">
                                <h2>HORNOS</h2>
                            </div>

                            


                            <div class="col-6 col-md-4">
                                <div class="card  separacion-2-columnas" style="border-radius: 0;">
                                    <img src="assets/productos/small/maquina-muestra4.png" class="card-img-top" style="border-radius: 0;">
                                    <div class="card-body">
                                        <p><a href="#" class="link-buton-block">Ver más</a></p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-6 col-md-4">
                                <div class="card  separacion-2-columnas" style="border-radius: 0;">
                                    <img src="assets/productos/small/maquina-muestra4.png" class="card-img-top" style="border-radius: 0;">
                                    <div class="card-body">
                                        <p><a href="#" class="link-buton-block">Ver más</a></p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-6 col-md-4">
                                <div class="card  separacion-2-columnas" style="border-radius: 0;">
                                    <img src="assets/productos/small/maquina-muestra4.png" class="card-img-top" style="border-radius: 0;">
                                    <div class="card-body">
                                        <p><a href="#" class="link-buton-block">Ver más</a></p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-6 col-md-4">
                                <div class="card  separacion-2-columnas" style="border-radius: 0;">
                                    <img src="assets/productos/small/maquina-muestra4.png" class="card-img-top" style="border-radius: 0;">
                                    <div class="card-body">
                                        <p><a href="#" class="link-buton-block">Ver más</a></p>
                                    </div>
                                </div>

                            </div>

                            

                        </div>

                    </div>




                </div>
        </section>
        <!-- Fin Seccion 10-->


    </main>

    <?php include_once('includes/footer.php'); ?>

    <!-- Whatsapp -->
    <?php include("includes/what.php"); ?>

    <!-- BOOTSTRAP JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>