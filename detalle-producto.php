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
    </header>
    <!-- Fin - Header -->

    <!-- Inicio - Contenido -->
    <div id="contenedor"> 
        <section id="seccionDetalle">
            <article class="articuloDetalle">
                <img class="imagenProductoDetalle" src="imagenes/fundas/cuero/iphone-8-plus.jpg" width="850" height="850" alt="iPhone 8 Plus">
                <p>
                    <span id="tituloArticuloDetalle">Iphone 8 plus</span><br>
                    <span id="precioArticuloDetalle">$500</span><br>
                    <span id="descripcionArticuloDetalle">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima praesentium laborum nulla nemo. </span>
                </p>
                <input class="botonDetalle comprar" type="submit" value = "Comprar">
                <input class="botonDetalle agregarCarrito" type="submit" value = "Agregar al carrito">
            </article>
            <form action="" method = "">
                <h4>Opiniones sobre el producto</h4>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su email">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Comentario</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ingrese su comentario"></textarea>
                </div>
                <p class="clasificacion">
                    <input id="radio1" type="radio" name="estrellas" value="5">
                    <label class="estrella" for="radio1">★</label>
                    <input id="radio2" type="radio" name="estrellas" value="4">
                    <label for="radio2">★</label>
                    <input id="radio3" type="radio" name="estrellas" value="3">
                    <label for="radio3">★</label>
                    <input id="radio4" type="radio" name="estrellas" value="2">
                    <label for="radio4">★</label>
                    <input id="radio5" type="radio" name="estrellas" value="1">
                    <label for="radio5">★</label>
                </p>
                <input class="botonAside crear" type="submit" value="Comentar">
            </form>
        </section>
    </div>
    <!-- Fin - Contenido -->

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
