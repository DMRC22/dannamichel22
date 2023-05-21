<?php
define( "BASE_URL", "/Proyectodanna/views/");
require_once("../config/conexion.php");
if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    include("modulos/head.php");
  ?>
  <title>AdminLTE 3 | Blank Page</title>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Header -->
  <?php
    include("modulos/header.php");
  ?>
  <!-- /.Header -->

  <!-- Menú -->
  <?php
    include("modulos/menu.php");
  ?>
  <!-- /.Menú -->

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2"></div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Mis cursos</h3>
          </div>
          <div class="card-body">
            <button type="button" class="btn btn-outline-primary mb-2">Crear curso</button>
            <table id="cursos_data" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Curso</th>
                  <th class="wd-15p">Fecha Inicial</th>
                  <th class="wd-20p">Fecha Final</th>
                  <th class="wd-15p">Profesor</th>
                  <th class="wd-10p"></th>
                </tr>
              </thead>
              <tbody>
              
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <?php
    include("modulos/footer.php");
  ?>
</div>
<!-- /.Site warapper -->
<?php
  include("modulos/js.php");
?>
<script type="text/javascript" src="js/curso.js"></script>
</body>
</html>
<?php
}else{
  header("Location:".Conectar::ruta()."views/404.php");
}
?>