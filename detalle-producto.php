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
    <?php 
        $datosProdu = file_get_contents('datos/producto.json');
        $producto = json_decode($datosProdu, true);
        foreach($producto as $prod){
            if($prod['id_producto'] == $_GET['id']){
                break;
            }
        }
    ?>
    <div id="contenedor"> 
        <article class="articuloDetalle">
            <img class="imagenProductoDetalle" src="imagenes/fundas/<?php echo $prod['imagen'] ?>" width="850" height="850">
            <p>
                <span id="tituloArticuloDetalle"><?php echo $prod['nombre']?></span><br>
                <span id="precioArticuloDetalle">$<?php echo $prod['precio'] ?></span><br>
                <span id="descripcionArticuloDetalle"><?php echo $prod['descripcion']?></span>
                <br><input class="botonDetalle comprar" type="submit" value = "Comprar">
                <br><input class="botonDetalle agregarCarrito" type="submit" value = "Agregar al carrito">
            </p>
        </article>
        <div class="comentarios">
            <h4>Califique el producto</h4>
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
            <input class="botonAside crear comentar" type="submit" value="Comentar">
        </div>
        <div class="comentarioRealizado">
            <h4>Comentarios del producto</h4>
            <?php include_once("datos/comentario.php"); ?>
            <article>
                <p class = "nombreUsuario">
                    Usuario:
                </p>
                <p class = "comentarioUsuario">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro ratione quos animi nobis facere excepturi totam repudiandae. Molestias ducimus doloribus tenetur doloremque? Id ducimus repudiandae officiis obcaecati neque aliquid deleniti!
                </p>
                <p class="calificacionUsuario">
                    Calificación:
                </p>
            </article>
        </div>
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
