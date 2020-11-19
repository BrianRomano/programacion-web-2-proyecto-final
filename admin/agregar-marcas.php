<!DOCTYPE html>
<html lang="es">
<?php 
  //Login
  session_start(); 

  include('funciones.php');

  if(isset($_POST['login'])){
    if($_POST['pass'] == '123456' && $_POST['user'] == 'admin'){
      $_SESSION['usuario_logueado'] = true;
    }
  }

  if(isset($_GET['logout'])){
    unset($_SESSION['usuario_logueado']);
  }

  if(!isset($_SESSION['usuario_logueado'])){
    redirect('login.php');
  }

  //Agregar - Editar
  $datos = file_get_contents('../datos/marca.json');
  $datosJson = json_decode($datos,true);

  if(isset($_POST['add'])){
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
    }else{
        $id = date('Ymdhis');
    }
  $datosJson[$id] = array('id_marca'=>$id, 'nombre'=>$_POST['nombre']);
  $fp = fopen('../datos/marca.json','w');
  $datosString = json_encode($datosJson);
  fwrite($fp,$datosString);
  fclose($fp);
  redirect('marcas.php');
  }

  if(isset($_GET['edit'])){
      $dato = $datosJson[$_GET['edit']];
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
  <link href="assets/css/material-dashboard.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="dark-edition">
    <div id="login" class = "agregar">
    <form action="" method="post">
          <div class="form-group">
            <label for="exampleDropdownFormEmail1" class ="titulo">Nueva marca</label>
            <input type="text" placeholder="Nombre" name="nombre" class="form-control" value="<?php echo isset($dato)?$dato['nombre']:''?>">
            <input type="submit" class="btn btn-primary loginBtn" name="add" value="Agregar">
          </div>
      </form>
    </div>
</body>
</html>