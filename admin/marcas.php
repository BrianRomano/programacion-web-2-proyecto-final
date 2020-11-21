<!DOCTYPE html>
<html lang="es">
<?php 
  //Login
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

  //Eliminar
  if(isset($_GET['del'])){
    $datos = file_get_contents('../datos/marca.json');
    $datosJson = json_decode($datos,true);
    unset($datosJson[$_GET['del']]);
    $fp = fopen('../datos/marca.json','w');
    $datosString = json_encode($datosJson);
    fwrite($fp,$datosString);
    fclose($fp);
    redirect('marcas.php');
  }
?>
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Panel de administración
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="assets/img/sidebar-2.jpg">
      <div class="logo"><a href="index.php" class="simple-text logo-normal">
         Administrador
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p>Inicio</p>
            </a>
          </li>
          <li class="nav-item ">
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
          <li class="nav-item active">
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
          <li class="nav-item ">
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
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand">Marcas</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0">Marcas</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>
                          ID
                        </th>
                        <th>
                          Nombre
                        </th>
                        <th>
                          Acción
                        </th>
                      </thead>
                      <tbody>
                        <?php 
                          $datos = file_get_contents("../datos/marca.json");
                          $datosJson = json_decode($datos, true);
                          foreach($datosJson as $marc):
                        ?>
                        <tr>
                          <td>
                            <?php echo $marc['id_marca'] ?>
                          </td>
                          <td>
                            <?php echo $marc['nombre'] ?>   
                          </td>
                          <td>
                            <a href="agregar-marcas.php?edit=<?php echo $marc['id_marca']?>"><img class="icons" src="icon/lapiz.png" alt="Editar"></a>
                            <a href="marcas.php?del=<?php echo $marc['id_marca']?>"><img class="icons" src="icon/eliminar.png" alt="Eliminar"></a>
                          </td>
                        </tr>
                        <?php
                          endforeach;
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <a href="agregar-marcas.php"><button type="button" class="btn btn-primary col-md-2" style="margin-top:-60px; float:right">Agregar</button></a> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>