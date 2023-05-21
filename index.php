
<?php
  require_once("config/conexion.php");
  if(isset ($_POST["enviar"]) and ($_POST["enviar"]== "si" )){
    require_once("models/Usuario.php");
    $usuario =  new Usuario();
    $usuario->login();

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Proyecto | Práctica</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="html/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="html/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="html/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index.php" class="h1"><b>Proyecto</b>Práctica</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Ingrese sus datos correspondientes</p>

      <form method="post">
      <?php
        if(isset($_GET["m"])){
          switch($_GET["m"]){
            case "1";
            ?>
            <div class="alert-danger" role="alert">
              LOS DATOS SON INCORRECTOS!
            </div>
            <?php
            break;
            case "2";
            ?>
            <div class="alert-warning" role="alert">
              estan vacios!
            </div>
            <?php
            break;          
          }
        }
      ?>
        <div class="input-group mb-3">
          <input type="email" name="correo" id="correo" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="passwd" id="passwd" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <input type="hidden" name="enviar" class="form-control" value="si">
            <button type="submit" class="btn btn-primary btn-block">Acceder</button>
          </div>
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="html/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="html/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="html/dist/js/adminlte.min.js"></script>
</body>
</html>
