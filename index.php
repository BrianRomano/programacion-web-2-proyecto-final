<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="Keywords" content="Funda, Case, Celular, Smartphone ">
    <meta name="Description" content="Tienda de fundas para Smartphones">
    <meta name="Author" content="Brian Romano">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links a CSS, Bootstrap y Favicon -->
    <link rel="icon" href="imagenes/logos/favicon/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
    <!-- Fuente -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- Titulo -->
    <title>Cases | Fundas para celulares</title>
</head>

<body>
    <!-- Inicio - Header -->
    <header>
        <!-- Barra de navegación -->
        <?php include("includes/nav.php"); ?>
        <!-- Eslogan -->
        <figure>
            <img class="eslogan img-fluid" src="imagenes/eslogan/eslogan.jpg" alt="Eslogan" title="#ElQueBuscaEncuentra" width="2123" height="325">
        </figure>
    </header>
    <!-- Fin - Header -->

    <!-- Inicio - Sección -->
    <section>
        <!-- Formas de pago -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <article class="formaDePago mx-auto">
                            <img class="img-fluid" src="imagenes/iconos/formas-de-pago/tarjeta-de-credito.png" alt="Pago con Tarjeta de Credito" width="512" height="512">
                            <p>Tarjeta de Credito<br><a href="#">Ver más</a></p>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <article class="formaDePago mx-auto">
                            <img class="img-fluid" src="imagenes/iconos/formas-de-pago/tarjeta-de-debito.png" alt="Pago con Tarjeta de Debito" width="512" height="512">
                            <p>Tarjeta de Debito<br><a href="#">Ver más</a></p>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <article class="formaDePago mx-auto">
                            <img class="img-fluid" src="imagenes/iconos/formas-de-pago/efectivo.png" alt="Pago en Efectivo" width="512" height="512">
                            <p>Efectivo<br><a href="#">Ver más</a></p>
                        </article>
                    </div>
                </div>
            </div>

        <!-- Destacados -->
        <div class="container">
            <h1 id="titProductos">Destacados<span><a href="productos.php">Ver más</a></span></h1>
            <div class="row">
                <?php 
                   include("datos/destacado.php"); 
                   foreach($destacado as $dest):
                        if($dest['activo'] == true):
                ?>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3">
                            <article id="producto" class="mx-auto">
                                <a href="detalle-producto.php?id=<?php echo $dest['id_producto']?>">
                                    <img class="imgProducto img-fluid" src="imagenes/fundas/<?php echo $dest['imagen']?>" width="850" height="850">
                                    <p class="precio">$<?php echo $dest['precio']?></p>
                                    <p class="descProducto"><?php echo $dest['nombre'] ?></p>
                                </a>
                            </article>
                        </div>
                <?php 
                        endif;
                    endforeach; 
                ?>
            </div>
        </div>
    </section>
    <!-- Fin - Sección -->

    <!-- Inicio - Footer -->
    <footer>
        <?php include("includes/footer.php"); ?>    
    </footer>
    <!-- Fin - Footer -->

    <!-- Scripts  -->
    <script src="bootstrap/jquery/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/popper/popper.min.js"></script>
    <script src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
