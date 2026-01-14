<?php
include_once('config/constantes.inc.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simpaibero</title>

    <meta name="title" content="" />
    <meta name="description" content="" />
    <meta name="author" content="Aldo Iñiguez" />
    <meta name="revisit-after" content="15 days" />
    <meta name="robots" content="index follow" />

    <!-- BOOTSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/carousel/carousel.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo _CONST_DOMINIO_ ?>assets/css/styles.css" />
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="<?php echo _CONST_DOMINIO_ ?>assets/fontawsome/css/all.css" />

</head>

<body id="body">


    <header class="header-home" style="background-image: url('assets/img/casa.jpg')">

        <?php include_once('includes/top-navigation.php'); ?>


    </header>

    <main class="main">

        <section class="home-obras">
            <div class="container">
                <!-- Titulo -->
                <div class="row">
                    <div class="col-12">
                        <h1>Buscar propiedad</h1>
                    </div>
                    <div class="col-12" id="errorMessage" style="display: none;">
                        <div class="alert alert-danger" role="alert">
                            Al menos 1 campo es obligatorio
                        </div>
                    </div>
                </div>

                <!-- Obras -->

                <div class="row">

                    <form class="row g-3 needs-validation" novalidate>

                        <div class="col-12 col-md-6 col-lg-4">

                            <div class="bloque">
                                <label for="tipopropiedad"><i class="fa-solid fa-house" id="icasa"></i> <i class="fa-solid fa-signs-post" id="iterreno"></i> Tipo de Propiedad</label>
                                <select name="tipopropiedad" class="form-select" id="tipopropiedad" required>
                                    <option value="0">Selecionar tipo de propiedad</option>
                                    <?php
                                    $queryPost = "SELECT * FROM tipo_propiedad ORDER BY id ASC";
                                    $rsPost = $objContenido->getAllContenido($link, $queryPost);
                                    ?>
                                    <?php while ($arrPost = $rsPost->fetch(PDO::FETCH_BOTH)) { ?>
                                        <option value="<?php echo $arrPost["id"] ?>"><?php echo $arrPost["tipo_prop_desc"] ?></option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">
                                    Este campo es obligatorio.
                                </div>
                            </div>




                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="bloque">
                                <label for="zona"><i class="fa-solid fa-map-location"></i> Zona</label>
                                <select name="zona" class="form-select" id="zona">

                                    <option value="0">Selecionar zona</option>
                                    <?php
                                    $queryPost = "SELECT * FROM zonas ORDER BY zona_id ASC";
                                    $rsPost = $objContenido->getAllContenido($link, $queryPost);
                                    ?>
                                    <?php while ($arrPost = $rsPost->fetch(PDO::FETCH_BOTH)) { ?>
                                        <option value="<?php echo $arrPost["zona_id"] ?>"><?php echo $arrPost["zona_desc"] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="bloque">
                                <label for="number"><i class="fa-solid fa-list-ol"></i> Nro. de Lote</label>
                                <select name="number" class="form-select" id="number">

                                    <option value="0">Seleccionar lote</option>
                                    <?php
                                    $queryPost = "SELECT * FROM propiedades ORDER BY prop_id ASC";
                                    $rsPost = $objContenido->getAllContenido($link, $queryPost);
                                    ?>
                                    <?php while ($arrNumber = $rsPost->fetch(PDO::FETCH_BOTH)) { ?>
                                        <option value="<?php echo $arrNumber["prop_id"] ?>"><?php echo $arrNumber["prop_id"] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mt-3">
                            <div class="bloque">
                                <div class="row">

                                    <div class="col-12">
                                        <label for="mt2" class="label-nomargin"><i class="fa-solid fa-up-down-left-right"></i> Metros Cuadrados</label>
                                        <span class="info-label">Ingrese valores sin punto, coma o decimales</span>
                                    </div>
                                    <div class="col-12">
                                        <?php
                                        $queryPost = "SELECT p.prop_mt2 FROM propiedades p WHERE p.prop_mt2 > 0 ORDER BY p.prop_mt2 ASC LIMIT 0,1";
                                        $rsPost = $objContenido->getAllContenido($link, $queryPost);
                                        $minimo = $rsPost->fetchAll(PDO::FETCH_ASSOC);

                                        $queryPost = "SELECT p.prop_mt2 FROM propiedades p WHERE p.prop_mt2 > 0 ORDER BY p.prop_mt2 DESC LIMIT 0,1";
                                        $rsPost = $objContenido->getAllContenido($link, $queryPost);
                                        $maximo = $rsPost->fetchAll(PDO::FETCH_ASSOC);
                                        ?>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Desde" aria-label="Desde" name="mt2d" id="mt2d">
                                            <span class="input-group-text">-</span>
                                            <input type="text" class="form-control" placeholder="Hasta" aria-label="Hasta" name="mt2h" id="mt2h">
                                        </div>
                                        <div class="maxmin">
                                            <div style="display: inline;">Mínimo: <?php echo number_format($minimo[0]["prop_mt2"], 0, '', '.'); ?> mts<sup>2</sup></div>
                                            <div style="display: inline;text-align: end;"> Máximo: <?php echo number_format($maximo[0]["prop_mt2"], 0, '', '.'); ?> mts<sup>2</sup></div>
                                        </div>
                                    </div>


                                </div>

                            </div>


                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mt-3">
                            <div class="bloque">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="vmt2d" class="label-nomargin"><i class="fa-solid fa-circle-dollar-to-slot"></i> Valor del Metro Cuadrado</label>
                                        <span class="info-label">Ingrese valores sin punto, coma o decimales</span>
                                    </div>
                                    <div class="col-12">

                                        <?php
                                        $queryPost = "SELECT p.prop_valor_mt2 FROM propiedades p WHERE p.prop_valor_mt2 > 0 ORDER BY p.prop_valor_mt2 ASC LIMIT 0,1";
                                        $rsPost = $objContenido->getAllContenido($link, $queryPost);
                                        $minimo = $rsPost->fetchAll(PDO::FETCH_ASSOC);

                                        $queryPost = "SELECT p.prop_valor_mt2 FROM propiedades p WHERE p.prop_valor_mt2 > 0 ORDER BY p.prop_valor_mt2 DESC LIMIT 0,1";
                                        $rsPost = $objContenido->getAllContenido($link, $queryPost);
                                        $maximo = $rsPost->fetchAll(PDO::FETCH_ASSOC);
                                        ?>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Desde" aria-label="Desde" name="vmt2d" id="vmt2d">
                                            <span class="input-group-text">-</span>
                                            <input type="text" class="form-control" placeholder="Hasta" aria-label="Hasta" name="vmt2h" id="vmt2h">
                                        </div>
                                        <div class="maxmin">
                                            <div style="display: inline;">Mínimo: U$S <?php echo number_format($minimo[0]["prop_valor_mt2"], 0, '', '.'); ?> por mt<sup>2</sup></div>
                                            <div style="display: inline;text-align: end;"> Máximo: U$S <?php echo number_format($maximo[0]["prop_valor_mt2"], 0, '', '.'); ?> por mt<sup>2</sup></div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>

                        <div class="col-12 col-md-12 col-lg-4 mt-3">
                            <div class="bloque">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="valor" class="label-nomargin"><i class="fa-solid fa-dollar-sign"></i> Valor propiedad</label>
                                        <span class="info-label">Ingrese valores sin punto, coma o decimales</span>
                                    </div>
                                    <div class="col-12">
                                        <?php
                                        $queryPost = "SELECT p.prop_valor FROM propiedades p WHERE p.prop_valor > 0 ORDER BY p.prop_valor ASC LIMIT 0,1";
                                        $rsPost = $objContenido->getAllContenido($link, $queryPost);
                                        $minimo = $rsPost->fetchAll(PDO::FETCH_ASSOC);

                                        $queryPost = "SELECT p.prop_valor FROM propiedades p WHERE p.prop_valor > 0 ORDER BY p.prop_valor DESC LIMIT 0,1";
                                        $rsPost = $objContenido->getAllContenido($link, $queryPost);
                                        $maximo = $rsPost->fetchAll(PDO::FETCH_ASSOC);
                                        ?>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Desde" aria-label="Desde" name="valord" id="valord">
                                            <span class="input-group-text">-</span>
                                            <input type="text" class="form-control" placeholder="Hasta" aria-label="Hasta" name="valorh" id="valorh">
                                        </div>

                                        <div class="maxmin">
                                            <div style="display: inline;">Mínimo: U$S <?php echo number_format($minimo[0]["prop_valor"], 0, '', '.'); ?></div>
                                            <div style="display: inline;text-align: end;">Máximo: U$S <?php echo number_format($maximo[0]["prop_valor"], 0, '', '.'); ?></div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="col-12 text-center mt-4">
                            <button type="button" class="btn btn-primary bt-buscar" id="btnFiltrar">Buscar</button>
                            <!--<button class="btn btn-primary" type="submit">Enviar formulario</button>-->
                        </div>
                    </form>




                </div>


            </div>

        </section>

        <section class="resultados" id="resultadosSection">
            <div class="container">

                <div class="row spinner" id="spinner" style="display: none;">
                    <div class="col-12">
                        <p><i class="fa-solid fa-rotate fa-spin"></i> Cargando resultados...</p>

                    </div>
                </div>

                <div class="row" id="txtresultado" style="display: none;">
                    <div class="col-6">

                        <h2>Resultados</h2>
                        <p><strong><span id="nresultados"></span></strong> resultados para la búsqueda <span id="busqueda"></span></p>
                    </div>

                    <div class="col-6 text-end">
                        <div class="row">
                            <div class="col-6">
                                <label for="orderby"><strong>Ordenar por:</strong></label>
                            </div>
                            <div class="col-6">
                                <select name="ordenarpor" id="ordenarpor" class="form-select">
                                    <option value="0"></option>
                                    <option value="1">Mayor precio</option>
                                    <option value="2">Menor precio</option>
                                    <option value="3">Zona</option>
                                    <option value="4">Número de lote</option>
                                </select>
                            </div>
                        </div>


                    </div>


                </div>

                <div class="row">
                    <div class="col-12">
                        <div id="resultados">

                        </div>

                    </div>
                </div>
                <!-- NUEVA BUSQUEDA -->
                <div class="row" id="divBtnNuevaBusqueda" style="display: none;">
                    <div class="col-12 text-center mt-4">
                        <button type="button" class="btn btn-primary bt-buscar" id="btnNuevaBusqueda">Nueva Bsqueda</button>
                    </div>
                </div>

            </div>
        </section>

    </main>
    <!-- BOOTSTRAP JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Google maps -->


    <!-- Main -->

    <script src="<?php echo _CONST_DOMINIO_ ?>assets/js/main.js"></script>



</body>

</html>