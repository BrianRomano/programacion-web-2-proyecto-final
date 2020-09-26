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
                <h4 class="">Categoria</h4>
                <a href="#">categoria</a>
  
            </div>
            <div class="filtro">
                <h4 class="">Marcas</h4>
                <a href="#">marca</a>
            </div>
            <div class="filtro">
                <h4 class="">Modelo</h4>
                <a href="#">modelo</a>
            </div>

            <a href="crear-categoria.php">
                <input class="botonAside crear" type="submit" value = "Crear categoria">
            </a>
            <a href="agregar-marca.php">
                <input class="botonAside agregarMarca" type="submit" value = "Agregar marca">
            </a>
            <a href="agregar-modelo.php">
                <input class="botonAside agregarModelo" type="submit" value = "Agregar modelo">
            </a>
            <a href="productos.php">
                <input class="botonAside borrar" type="submit" value = "Borrar filtros">
            </a>
        </aside>
        <!-- Fin - Barra lateral -->

        <!-- Inicio - Sección -->
        <section id="seccion">
            <h1 class = "titProductos">Productos</h1>
            <a href="detalle-producto.php">
                <article class="articulo">
                    <img class="imagenProducto" src="imagenes/fundas/cuero/iphone-8-plus.jpg" width="850" height="850" alt="iPhone 8 Plus">
                    <p>
                        <span id="tituloArticulo">Iphone 8 plus</span><br>
                        <span id="precioArticulo">$500</span><br>
                        <span id="descripcionArticulo">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima praesentium laborum nulla nemo. </span>
                    </p>
                </article>
            </a>
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
</body></html>
