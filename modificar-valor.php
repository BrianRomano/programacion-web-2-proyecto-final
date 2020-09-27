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

    <!-- Inicio- Seccion -->
    <section>
        <article id="completarAside">
            <h2 class="opcionAside">Modificar Categoria</h1>
            <form action="" method= "">
                <input type="text" placeholder="Ingrese la nueva categoria"><br>
                <input class="botonAside modificar agregarModelo" type="submit" value = "Modificar categoria">
            </form>
        </article>
        <article id="completarAside">
            <h2 class="opcionAside">Modificar Marca</h1>
            <form action="" method= "">
                <input type="text" placeholder="Ingrese la nueva marca"><br>
                <input class="botonAside modificar agregarModelo" type="submit" value = "Modificar marca">
            </form>
        </article>
    </section>
    <!-- Fin - Seccion -->

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
