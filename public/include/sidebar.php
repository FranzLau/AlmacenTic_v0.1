<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <!-- <i class="fas fa-cogs"></i>--><i class="fas fa-bolt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Electrosur</div>
      </a>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <?php if($_SESSION['loginUser']['id_rol'] == 1) { ?>
      <div class="sidebar-heading">
        Movimientos
      </div>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="movimientos.php">
          <i class="fas fa-people-carry"></i>
          <span>Entrega del Equipo</span>
        </a>
      </li>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="asignacion.php">
          <i class="fas fa-truck-loading"></i>
          <span>Retorno del Equipo</span>
        </a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        Almacén
      </div>
      <!-- vista de equipos -->
      <li class="nav-item">
        <a class="nav-link" href="equipos.php">
          <i class="fas fa-desktop"></i>
          <span>Equipos</span>
        </a>
      </li>

      <!-- vista de categorias -->
      <li class="nav-item">
        <a class="nav-link" href="categorias.php">
          <i class="fas fa-list-ol"></i>
          <span>Categorias</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        Reportes
      </div>
      <!-- Nav Item - Empleados -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-chart-area"></i>
          <span>Reportes</span>
        </a>
      </li>

      <?php } else if($_SESSION['loginUser']['id_rol'] == 2){?>
        <!-- Heading -->
      <div class="sidebar-heading">
        Reportes
      </div>
      <!-- Nav Item - Empleados -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-chart-area"></i>
          <span>Mis Reportes</span>
        </a>
      </li>
      <?php }?>
      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->
