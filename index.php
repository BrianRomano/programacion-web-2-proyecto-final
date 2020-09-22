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
            <h1 id="titProductos">Destacados</h1>
            <div class="row">
                <div class="col-6 col-md-6 col-sm-6 col-lg-3">
                    <article id="producto" class="mx-auto">
                        <img class="imgProducto img-fluid" src="imagenes/fundas/cuero/iphone-8-plus.jpg" width="850" height="850" alt="iPhone 8 Plus">
                        <p class="precio">$899</p>
                        <p class="descProducto">iPhone 8 Plus</p>
                    </article>
                </div>
                <div class="col-6 col-md-6 col-sm-6 col-lg-3">
                    <article id="producto" class="mx-auto">
                        <img class="imgProducto img-fluid" src="imagenes/fundas/madera/iphone-x.jpg" width="850" height="850" alt="iPhone X">
                        <p class="precio">$949</p>
                        <p class="descProducto">iPhone X</p>
                    </article>
                </div>
                <div class="col-6 col-md-6 col-sm-6 col-lg-3">
                    <article id="producto" class="mx-auto">
                        <img class="imgProducto img-fluid" src="imagenes/fundas/silicona/samsung-s10.jpg" width="850" height="850" alt="Samsung S10">
                        <p class="precio">$599</p>
                        <p class="descProducto">Samsung S10</p>
                    </article>
                </div>
                <div class="col-6 col-md-6 col-sm-6 col-lg-3">
                    <article id="producto" class="mx-auto">
                        <img class="imgProducto img-fluid" src="imagenes/fundas/dibujos/iphone-11-pro.jpg" width="850" height="850" alt="iPhone 11 Pro">
                        <p class="precio">$1199</p>
                        <p class="descProducto">iPhone 11 Pro</p>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-6 col-sm-6 col-lg-3">
                    <article id="producto" class="mx-auto">
                        <img class="imgProducto img-fluid" src="imagenes/fundas/dibujos/samsung-note-10.jpg" width="850" height="850" alt="Samsung Note 10">
                        <p class="precio">$849</p>
                        <p class="descProducto">Samsung Note 10</p>
                    </article>
                </div>
                <div class="col-6 col-md-6 col-sm-6 col-lg-3">
                    <article id="producto" class="mx-auto">
                        <img class="imgProducto img-fluid" src="imagenes/fundas/silicona/xiaomi-mi-9.jpg" width="850" height="850" alt="Xiaomi Mi 9">
                        <p class="precio">$499</p>
                        <p class="descProducto">Xiaomi Mi 9</p>
                    </article>
                </div>
                <div class="col-6 col-md-6 col-sm-6 col-lg-3">
                    <article id="producto" class="mx-auto">
                        <img class="imgProducto img-fluid" src="imagenes/fundas/madera/huawei-p30.jpg" width="850" height="850" alt="Huawei P30">
                        <p class="precio">$699</p>
                        <p class="descProducto">Huawei P30</p>
                    </article>
                </div>
                <div class="col-6 col-md-6 col-sm-6 col-lg-3">
                    <article id="producto" class="mx-auto">
                        <img class="imgProducto img-fluid" src="imagenes/fundas/cuero/samsung-s10e.jpg" width="850" height="850" alt="Samsung S10e">
                        <p class="precio">$799</p>
                        <p class="descProducto">iPhone 8 Plus</p>
                    </article>
                </div>
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
