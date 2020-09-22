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
        <?php include("includes/nav.php"); ?>
    </header>
    <!-- Fin - Header -->

    <!-- Inicio - Sección -->
    <section>
        <div class="container">
            <div class="row">
                <!-- Formulario de Contacto -->
                <div class="col-12 col-md-12 col-sm-12 col-lg-6">
                    <form action="#" method="POST">
                        <h1 id="titContacto">Formulario de Contacto</h1>
                        <div class="formCont">
                            <img class="imgForm img-fluid" src="imagenes/iconos/formulario-de-contacto/nombre-apellido.png" width="512" height="512" alt="Nombre y Apellido">
                            <input type="text" name="nombre-apellido" placeholder="Ingrese su nombre y apellido" required>
                        </div>
                        <div class="formCont">
                            <img class="imgForm img-fluid" src="imagenes/iconos/formulario-de-contacto/telefono.png" width="512" height="512" alt="Teléfono">
                            <input type="tel" name="telefono" placeholder="Ingrese su teléfono">
                        </div>
                        <div class="formCont">
                            <img class="imgForm img-fluid" src="imagenes/iconos/formulario-de-contacto/email.png" width="512" height="512" alt="Email">
                            <input type="email" name="email" placeholder="Ingrese su email" required>
                        </div>
                        <div class="mensaje">
                            <textarea name="mensaje" placeholder="Escriba su mensaje"></textarea>
                        </div>
                        <input class="enviar" type="submit" value="Enviar">
                    </form>
                </div>

                <!-- Información de Contacto -->
                <div class="col-12 col-md-12 col-sm-12 col-lg-6">
                    <h1 id="titInfo">Información de Contacto</h1>
                    <div class="infoCont">
                        <img class="imgCont img-fluid" src="imagenes/iconos/informacion-de-contacto/contacto.png" width="512" height="512" alt="Teléfono">
                        <p>Venta Telefonica<br>(+5411)12345678</p>
                    </div>
                    <div class="infoCont">
                        <img class="imgCont img-fluid" src="imagenes/iconos/informacion-de-contacto/email.png" width="512" height="512" alt="Email">
                        <p>Venta Online<br>cases@cases.com</p>
                    </div>
                    <div class="infoCont">
                        <img class="imgCont img-fluid" src="imagenes/iconos/informacion-de-contacto/compra-online.png" width="512" height="512" alt="Compras Online">
                        <p>Comprá Online<br>y recíbelo en tu domicilio</p>
                    </div>
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
</body></html>
