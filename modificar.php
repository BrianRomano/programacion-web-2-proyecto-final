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
            <form action="modificar-valor.php" method="get">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Categorias</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Categorias</option>
                        <option value="1">Categoria1</option>
                        <option value="2">Categoria2</option>
                        <option value="3">Categoria3</option>
                    </select>
                </div>
                <input class="botonAside crear modificar agregarModelo" type="submit" value = "Modificar categoria">
            </form>
        </article>
        <article id="completarAside">
            <h2 class="opcionAside">Modificar Marca</h1>
            <form action="modificar-valor" method="get">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Marcas</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Marcas</option>
                        <option value="1">Marca1</option>
                        <option value="2">Marca2</option>
                        <option value="3">Marca3</option>
                    </select>
                </div>
                <input class="botonAside crear modificar agregarModelo" type="submit" value = "Modificar marca">
            </form>
        </article>
        <article id="completarAside">
            <h2 class="opcionAside">Modificar Modelo</h1>
            <form action="modificar-valor.php" method="get">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Modelos</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Modelo</option>
                        <option value="1">Modelo1</option>
                        <option value="2">Modelo2</option>
                        <option value="3">Modelo3</option>
                    </select>
                </div>
                <input class="botonAside crear modificar agregarModelo" type="submit" value = "Modificar modelo">
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
