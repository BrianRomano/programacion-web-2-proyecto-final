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
    <div class = "contenido">
        <!-- Inicio - Barra lateral -->
        <aside id="aside">
            <div class="filtro">
                <h4 class="">Categorias</h4>
                <?php 
                    $datosCat = file_get_contents('datos/categoria.json');
                    $categoria = json_decode($datosCat, true);
                    foreach($categoria as $cat):
                ?>
                <li>
                    <a href="productos.php?cat=<?php echo $cat['id_categoria']?>&marc=<?php echo isset($_GET['marc']) ? $_GET['marc'] : ''?>">
                        <?php echo $cat['nombre']?>
                    </a>
                </li>
                <?php 
                    endforeach; 
                ?> 
            </div>
            <div class="filtro">
                <h4 class="">Marcas</h4>
                <?php 
                    $datosMarc = file_get_contents('datos/marca.json');
                    $marca = json_decode($datosMarc, true);
                    foreach($marca as $marc):
                ?>
                <li>
                    <a href="productos.php?marc=<?php echo $marc['id_marca']?>&cat=<?php echo isset($_GET['cat']) ? $_GET['cat'] : ''?>">
                        <?php echo $marc['nombre']?>
                    </a>
                </li>
                <?php 
                    endforeach;
                ?>
            </div>
            <a href="productos.php">
                <input class="botonAside borrar" type="submit" value = "Borrar filtros">
            </a>
        </aside>
        <!-- Fin - Barra lateral -->

        <!-- Inicio - Sección -->
        <section id="seccion">
            <h1 class = "titProductos">Productos</h1>
            <?php 
                $datosProd = file_get_contents('datos/producto.json');
                $producto = json_decode($datosProd, true);
                foreach($producto as $prod):
                    if($prod['activo'] == true):
                        $imprimir = true;
                        if(!empty($_GET['cat'])){
                            if($prod['id_categoria'] != $_GET['cat']){
                                $imprimir = false;
                            }
                        }
                        if($imprimir && !empty($_GET['marc'])){
                            if($prod['id_marca'] != $_GET['marc']){
                                $imprimir = false;
                            }
                        }
                        if($imprimir):
            ?>
            <a href="detalle-producto.php?id=<?php echo $prod['id_producto']?>">
                <article class="articulo">
                    <img class="imagenProducto" src="imagenes/fundas/<?php echo $prod['imagen'] ?>" width="850" height="850">
                    <p>
                        <span id="tituloArticulo"><?php echo $prod['nombre'] ?></span><br>
                        <span id="precioArticulo">$<?php echo $prod['precio'] ?></span><br>
                        <span id="descripcionArticulo"><?php echo $prod['descripcion'] ?></span>
                    </p>
                </article>
            </a>    
            <?php       
                        endif;
                    endif;
                endforeach;
            ?>
        </section>
        <!-- Fin - Sección -->
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