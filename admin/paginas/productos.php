<!--
=========================================================
* Material Dashboard Dark Edition - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-dark
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
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
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="../index.php" class="simple-text logo-normal">
         Administrador
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="../index.php">
              <i class="material-icons">dashboard</i>
              <p>Inicio</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./usuarios.php">
              <i class="material-icons">person</i>
              <p>Usuarios</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./materiales.php">
              <i class="material-icons">content_paste</i>
              <p>Materiales</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./marcas.php">
              <i class="material-icons">content_paste</i>
              <p>Marcas</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./productos.php">
              <i class="material-icons">content_paste</i>
              <p>Productos</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./comentarios.php">
              <i class="material-icons">library_books</i>
              <p>Comentarios</p>
            </a>
          </li>
          <a href="#"><button type="submit" class="btn btn-primary loginBtn">Cerrar sesión</button></a>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.php">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand">Productos</a>
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
                  <h4 class="card-title mt-0">Productos</h4>
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
                          Precio
                        </th>
                        <th>
                          Imagen
                        </th>
                        <th>
                          Descripción
                        </th>
                        <th>
                          Activo
                        </th>
                        <th>
                          Destacado
                        </th>
                        <th>
                          ID Categoria
                        </th>
                        <th>
                          ID Marca
                        </th>
                        <th>
                          Acción
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <!--  ID -->
                          </td>
                          <td>
                            <!-- Nombre -->
                          </td>
                          <td>
                            <!-- Precio -->
                          </td>
                          <td>
                            <!-- Imagen -->
                          </td>
                          <td>
                            <!-- Descripcion -->
                          </td>
                          <td>
                            <!-- Activo -->
                          </td>
                          <td>
                            <!-- Destacado -->
                          </td>
                          <td>
                            <!-- ID Categoria -->
                          </td>
                          <td>
                            <!-- ID Marca -->
                          </td>
                          <td>
                            <a href="#"><img class="icons" src="../icon/lapiz.png" alt="Editar"></a>
                            <a href="#"><img class="icons" src="../icon/eliminar.png" alt="Eliminar"></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-primary col-md-2" style="margin-top:-60px; float:right">Agregar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>