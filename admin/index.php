<!doctype html>
<html lang="es">
<?php 
  session_start(); 

  include('funciones.php');

  //Iniciar sesion 
  if(isset($_POST['login'])){
    if($_POST['pass'] == '123456' && $_POST['user'] == 'admin'){
      $_SESSION['usuario_logueado'] = true;
    }
  }

  //Cerrar sesion
  if(isset($_GET['logout'])){
    unset($_SESSION['usuario_logueado']);
  }

  if(!isset($_SESSION['usuario_logueado'])){
    redirect('login.php');
  }
?>
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
            <a class="nav-link" href="usuarios.php">
              <i class="material-icons">person</i>
              <p>Usuarios</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="materiales.php">
              <i class="material-icons">content_paste</i>
              <p>Materiales</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="marcas.php">
              <i class="material-icons">content_paste</i>
              <p>Marcas</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="productos.php">
              <i class="material-icons">content_paste</i>
              <p>Productos</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="comentarios.php">
              <i class="material-icons">library_books</i>
              <p>Comentarios</p>
            </a>
          </li>
          <a href="index.php?logout"><button type="submit" class="btn btn-primary loginBtn">Cerrar sesión</button></a>
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
          <a href="usuarios.php" class="btn btn-primary">Ver usuarios</a>
        </div>
      </div>
      <div class="card text-center" style="width: 18rem; display: inline-block; margin-left: 50px; ">
        <div class="card-body">
          <h5 class="card-title">Materiales</h5>
          <a href="materiales.php" class="btn btn-primary">Ver materiales</a>
        </div>
      </div>
      <div class="card text-center" style="width: 18rem; display: inline-block; margin-left: 50px; ">
        <div class="card-body">
          <h5 class="card-title">Marcas</h5>
          <a href="marcas.php" class="btn btn-primary">Ver marcas</a>
        </div>
      </div>
      <div class="card text-center" style="width: 18rem; display: inline-block; margin-left: 70px; ">
        <div class="card-body">
          <h5 class="card-title">Productos</h5>
          <a href="productos.php" class="btn btn-primary">Ver productos</a>
        </div>
      </div>
      <div class="card text-center" style="width: 18rem; display: inline-block; margin-left: 50px; ">
        <div class="card-body">
          <h5 class="card-title">Comentarios</h5>
          <a href="comentarios.php" class="btn btn-primary">Ver comentarios</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>