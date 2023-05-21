<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo BASE_URL; ?>principal.php" class="brand-link">
      <img src="../html/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PROYECTO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../html/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        
        <div class="info">
        <input type="hidden" id="usu_idx" value="<?php echo $_SESSION["usu_id"] ?>">
        <a href="#" class="d-block"><?php echo $_SESSION["nombre"]; ?></a>
        </div>
     </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo BASE_URL; ?>inicio.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Inicio</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo BASE_URL; ?>perfil.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Perfil</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Básicas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo BASE_URL; ?>usuarios.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo BASE_URL; ?>categorias.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>categorias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo BASE_URL; ?>cursos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cursos</p>
                </a>
              </li>
            </ul>
          </li>
          
         
          <li class="nav-header">REPORTES</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Reporte
              </p>
            </a>
          </li>
         
          <li class="nav-header">LOGOUT</li>
          <li class="nav-item">
            <a href="<?php echo BASE_URL; ?>Logout.php" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Salir</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>