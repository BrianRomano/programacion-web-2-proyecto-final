<!DOCTYPE html>
<html lang="es">
<?php 
    //Agregar comentario
    $datosCom = file_get_contents('datos/comentario.json');
    $Comentario = json_decode($datosCom,true);

    if(isset($_POST['comentar'])){
        $id = date('Ymdhis');
        $Comentario[$id] = array('id_comentario'=>$id, 'email'=>$_POST['email'], 'comentario'=>$_POST['comentario'], 'calificacion'=>$_POST['calificacion'], 'id_producto'=>$_GET['id']);
        $fp = fopen('datos/comentario.json','w');
        $datosString = json_encode($Comentario);
        fwrite($fp,$datosString);
        fclose($fp);
    }
?>
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
        <form class="comentarios" method="post">
            <h4>Califique el producto</h4>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Ingrese su email">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Comentario</label>
                <textarea class="form-control" name="comentario" id="exampleFormControlTextarea1" rows="3" placeholder="Ingrese su comentario"></textarea>
            </div>
            <p class="clasificacion">
                <input id="radio1" type="radio" name="calificacion" value="5">
                <label for="radio1">★</label>
                <input id="radio2" type="radio" name="calificacion" value="4">
                <label for="radio2">★</label>
                <input id="radio3" type="radio" name="calificacion" value="3">
                <label for="radio3">★</label>
                <input id="radio4" type="radio" name="calificacion" value="2">
                <label for="radio4">★</label>
                <input id="radio5" type="radio" name="calificacion" value="1">
                <label for="radio5">★</label>
            </p>
            <input class="botonAside crear comentar" name="comentar" type="submit" value="Comentar">
        </form>
        <div class="comentarioRealizado">
            <?php     
                $datosCom = file_get_contents('datos/comentario.json');
                $comentario = json_decode($datosCom,true);
                if(!empty($comentario)):
                    echo "<h4>Comentarios del producto</h4>";
                    //Mostrar últimos 10 comentarios
                    arsort($comentario);
                    $ultimosCom = array_slice($comentario, 0, 10);
                    //Mostrar solo si existen comentarios
                    foreach($ultimosCom as $com):
                        //Mostrar comentarios correspondiente al producto
                        if($com['id_producto'] == $_GET['id']):
            ?>
            <article>
                <p class = "nombreUsuario">
                    Email: <?php echo $com['email'] ?>
                </p>
                <p class = "comentarioUsuario">
                    <?php echo $com['comentario'] ?>
                </p>
                <p class="calificacionUsuario">
                    Calificación: <?php echo $com['calificacion'] ?>
                </p>
            </article>
            <?php 
                        endif;
                    endforeach;
                endif;
            ?>
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
