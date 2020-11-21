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
  $datos = file_get_contents('../datos/producto.json');
  $datosJson = json_decode($datos,true);

  if(isset($_POST['add'])){

    if(isset($_FILES['imagen'])){
      $archivo = $_FILES["imagen"];
      $nombre = $archivo['name'];
      $tipo = $archivo["type"];

      //Condición de tipo de archivo
      if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif"){
        move_uploaded_file($archivo['tmp_name'], '../imagenes/fundas/'.$nombre);
      }
    }

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
    }else{
        $id = date('Ymdhis');
    }

  $datosJson[$id] = array('id_producto'=>$id, 'nombre'=>$_POST['nombre'], 'precio'=>$_POST['precio'], 'imagen'=>$_FILES['imagen']['name'], 'descripcion'=>$_POST['descripcion'], 'activo'=>$_POST['activo'], 'destacado'=>$_POST['destacado'], 'id_categoria'=>$_POST['material'], 'id_marca'=>$_POST['marca']);
  $fp = fopen('../datos/producto.json','w');
  $datosString = json_encode($datosJson);
  fwrite($fp,$datosString);
  fclose($fp);
  redirect('productos.php');
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
    <div id="login" class = "agregar agregarProducto">
    <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleDropdownFormEmail1" name="nombreMaterial" class ="titulo">Nuevo producto</label>
            <input type="text" placeholder="Nombre" name="nombre" class="form-control" value="<?php echo isset($dato)?$dato['nombre']:''?>">
            <input type="text" placeholder="Precio" name="precio" class="form-control" value="<?php echo isset($dato)?$dato['precio']:''?>">
            <input type="text" placeholder="Descripción" name="descripcion" class="form-control" value="<?php echo isset($dato)?$dato['descripcion']:''?>">
            <select class="form-control" name="material">
              <option selected="true" disabled="disabled">Material</option>
            <?php 
              $datos = file_get_contents("../datos/categoria.json");
              $datosJson = json_decode($datos, true);
              foreach($datosJson as $cat):
            ?>
              <option class="opciones" value="<?php echo $cat['id_categoria']?>"><?php echo $cat['nombre']?></option>
            <?php 
              endforeach;
            ?>
            </select>
            <select class="form-control" name="marca">
              <option selected="true" disabled="disabled">Marca</option>
            <?php 
              $datos = file_get_contents("../datos/marca.json");
              $datosJson = json_decode($datos, true);
              foreach($datosJson as $marc):
            ?>
              <option class="opciones" value="<?php echo $marc['id_marca']?>"><?php echo $marc['nombre']?></option>
            <?php 
              endforeach;
            ?>
            </select>
            <div id="check">
              <input type="checkbox" class="form-check-input" name="activo">
              <label class="form-check-label">Disponible</label><br>
              <input type="checkbox" class="form-check-input" name="destacado">
              <label class="form-check-label">Destacado</label>
            </div>
          <div class="form-group">
            <input type="file" name="imagen" class="form-control-file" id="exampleFormControlFile1">
          </div>
      <input type="submit" class="btn btn-primary loginBtn" name="add" value="Agregar">
    </form>
    </div>
</body>
</html>