<nav class="navbar navbar-expand-lg navbar-dark bg-gradient-primary mb-3 shadow">
  <div class="container">
    <a class="navbar-brand" href="index.php"><i class="fas fa-bolt mr-2"></i>Electrosur</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Almacén
                </a>
                <div class="dropdown-menu shadow animated--grow-in" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="equipos.php">
                    <i class="fas fa-desktop fa-sm fa-fw mr-2 text-gray-400"></i>
                    Equipos
                </a>
                <a class="dropdown-item" href="categorias.php">
                    <i class="fas fa-list-ol fa-sm fa-fw mr-2 text-gray-400"></i>
                    Categorias
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-chart-area fa-sm fa-fw mr-2 text-gray-400"></i>
                    Reportes
                </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Movimientos
                </a>
                <div class="dropdown-menu shadow animated--grow-in" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="asignacion.php">
                        <i class="fas fa-people-carry fa-sm fa-fw mr-2 text-gray-400"></i>
                        Asignación
                    </a>
                    <a class="dropdown-item" href="devolucion.php">
                        <i class="fas fa-truck-loading fa-sm fa-fw mr-2 text-gray-400"></i>
                        Devolución
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-chart-area fa-sm fa-fw mr-2 text-gray-400"></i>
                        Reportes
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contratos.php">Contratos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="empleados.php">Empleados</a>
            </li>
        </ul>
        
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-1"></i>
                    <?php echo $_SESSION['loginUser']['nom_usuario'] ?>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="salir()" href="#">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw"></i>
                </a>
            </li>
        </ul>
        
    </div>
  </div>
</nav>