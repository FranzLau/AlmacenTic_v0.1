<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-gradient-primary topbar mb-4 static-top shadow">

  <div class="container">

  <!-- Sidebar - Brand -->
  <a class="navbar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon">
      <i class="fas fa-bolt"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Electrosur</div>
  </a>

    <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>

  <div class="d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <p class="mb-0">
      <i class="fas fa-desktop mr-2"></i>
      <span class="d-none d-lg-inline-block">SICCED 2022</span>
    </p>
  </div>

  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <li class="nav-item dropdown no-arrow d-sm-none">
      <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-code fa-fw"></i>
      </a>
      <!-- Dropdown - Messages -->
      <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
        <form class="form-inline mr-auto w-100 navbar-search">
          <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-primary" type="button">
                <i class="fas fa-search fa-sm"></i>
              </button>
            </div>
          </div>
        </form>
        <h6 class="mb-0">Welcome back!</h6>
      </div>
    </li>

    <?php if($_SESSION['loginUser']['id_rol'] == 1) { ?>
    <!-- Nav Item - PDF manual -->
    <li class="nav-item mx-1">
      <a href="empleados.php" class="nav-link small">
        <i class="fas fa-users mr-2"></i>
        <span class="d-none d-lg-inline-block text-gray-600">Empleados</span>
      </a>
    </li>

    <!-- Nav Item - PDF manual -->
    <li class="nav-item mx-1">
      <a href="contratos.php" class="nav-link small">
        <i class="fas fa-book mr-2"></i>
        <span class="d-none d-lg-inline-block">Contratos</span>
      </a>
    </li>


    <!-- Nav Item - PDF manual -->
    <li class="nav-item mx-1">
      <a href="#" class="nav-link small">
        <i class="fas fa-user-cog mr-2"></i>
        <span class="d-none d-lg-inline-block">Usuarios</span>
      </a>
    </li>

    <?php }?>


    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle text-gray-600" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        
        <span class="mr-2 d-none d-lg-inline "><?php echo $_SESSION['loginUser']['nom_usuario'] ?></span>
        <img src="../../assets/img/registermen.png" class="img-profile rounded-circle mr-2">
        <i class="fas fa-angle-down fa-fw text-gray-400"></i>
      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

        <a class="dropdown-item" href="perfil.php">
          <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
          Configuración
        </a>
        <a class="dropdown-item" href="basic.php">
          <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
          Acerca de
        </a>
        <a class="dropdown-item" href="#">
          <i class="fas fa-file-pdf fa-sm fa-fw mr-2 text-gray-400"></i>
          Manual
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" onclick="salir()" href="#">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Cerrar Sesión
        </a>
      </div>
    </li>

  </ul>

  </div>

  

</nav>
<!-- End of Topbar -->
