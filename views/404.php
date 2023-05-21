<?php
define( "BASE_URL", "/Proyectodanna/views/");
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
        <div class="content-wrapper">
          <section class="content-header">
            <h1>Página no encontrada</h1>
          </section>
          <section class="content">
            <div class="error-page">
              <h2 class="headline text-primary">404</h2> 
              <div class="error-content">
                <h3>
                  <i class="fa fa-warning text-primary"></i> 
                  Ooops! La Página no fue encontrada.
                </h3>
                <p>
                  Ingresa al menú lateral y allí podrás encontrar las páginas disponibles. También puedes regresar haciendo <a href="<?php echo BASE_URL; ?>inicio.php">click aquí.</a>
                </p>
              </div>
            </div>  
          </section>
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
</body>
</html>





