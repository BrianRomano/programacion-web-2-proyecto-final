<!doctype html>
<html lang="es">

<head>
  <title>Panel de administración</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="index.php" class="simple-text logo-normal">
          Administrador
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p>Inicio</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="paginas/user.php">
              <i class="material-icons">person</i>
              <p>Usuarios</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="paginas/tables.php">
              <i class="material-icons">content_paste</i>
              <p>Tablas</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="paginas/typography.php">
              <i class="material-icons">library_books</i>
              <p>Comentarios</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand">Inicio</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="card text-center" style="width: 18rem; margin-top: 80px; margin-left: 70px; display: inline-block;">
        <div class="card-body">
          <h5 class="card-title">Usuarios</h5>
          <a href="paginas/user.php" class="btn btn-primary">Ver usuarios</a>
        </div>
      </div>
      <div class="card text-center" style="width: 18rem; display: inline-block; margin-left: 50px; ">
        <div class="card-body">
          <h5 class="card-title">Categorias</h5>
          <a href="paginas/tables.php" class="btn btn-primary">Ver categorias</a>
        </div>
      </div>
      <div class="card text-center" style="width: 18rem; display: inline-block; margin-left: 50px; ">
        <div class="card-body">
          <h5 class="card-title">Marcas</h5>
          <a href="paginas/tables.php" class="btn btn-primary">Ver marcas</a>
        </div>
      </div>
      <div class="card text-center" style="width: 18rem; display: inline-block; margin-left: 70px; ">
        <div class="card-body">
          <h5 class="card-title">Productos</h5>
          <a href="paginas/tables.php" class="btn btn-primary">Ver productos</a>
        </div>
      </div>
      <div class="card text-center" style="width: 18rem; display: inline-block; margin-left: 50px; ">
        <div class="card-body">
          <h5 class="card-title">Productos destacados</h5>
          <a href="paginas/tables.php" class="btn btn-primary">Ver destacados</a>
        </div>
      </div>
      <div class="card text-center" style="width: 18rem; display: inline-block; margin-left: 50px; ">
        <div class="card-body">
          <h5 class="card-title">Comentarios</h5>
          <a href="paginas/typography.php" class="btn btn-primary">Ver comentarios</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>