<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Panel de administración
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <link href="../assets/css/material-dashboard.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="dark-edition">
    <div id="login" class = "agregar">
        <form action="" enctype="multipart/form-data" method="post">
            <div class="form-group">
                <label for="exampleDropdownFormEmail1" class ="titulo">Nuevo producto</label>
                <input type="text" class="form-control" name="nombreProducto" placeholder="Nombre">
                <input type="text" class="form-control" name="precioProducto" placeholder="Precio">
                <input type="text" class="form-control" name="descripcionProducto" placeholder="Descripción">
                <label for="disponible">Disponible</label>
                <input type="checkbox" name="diponible">
                <label for="destacado">Destacado</label>
                <input type="checkbox" name="destacado">
                <select name class="form-control">
                    <option class="form-control" value="Disponible">Categoria</option>
                </select>
                <select name class="form-control">
                    <option class="form-control" value="Disponible">Marca</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary loginBtn">Agregar</button>
        </form>
    </div>
</body>
</html>