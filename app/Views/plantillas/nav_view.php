<nav class="navbar navbar-expand-lg"> 
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
      <div class="row w-100 align-items-center">
      <div class="col-2 text-center">
          <img class="brand-logo" src="<?php echo base_url('assets/img/kurundu-logo.png'); ?>" alt="Kurundu Logo">
        </div>
        <div class="col-4">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo base_url();?>">Inicio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo "Catalogo"; ?>
              </a>
              <ul class="dropdown-menu catalogo-menu">
                <li><a class="dropdown-item catalogo-item" href="#"><?php echo "Femenino"; ?></a></li>
                <li><a class="dropdown-item catalogo-item" href="#"><?php echo "Masculino"; ?></a></li>
                <li><a class="dropdown-item catalogo-item" href="#"><?php echo "Otros"; ?></a></li>
                <li><a class="dropdown-item catalogo-item" href="#"><?php echo "Ofertas"; ?></a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=<?php echo base_url('nosotros');?> >Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('contacto');?>"><?php echo "Contacto"; ?></a>
            </li>
          </ul>
        </div>
        <div class="col-3 d-flex justify-content-center">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Búsqueda" aria-label="Search">
            <button class="btn" type="submit"><?php echo "Buscar"; ?></button>
          </form>
        </div>
        <div class="col-3 justify-content-center">
        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo "Acceder"; ?>
              </a>
              <ul class="dropdown-menu acceso-menu">
                <li><a class="dropdown-item acceso-item" href="#">Iniciar sesión</a></li>
                <li><a class="dropdown-item acceso-item" href="#"><?php echo "Registrarse"; ?></a></li>
              </ul>
            </li>
        </div>

      </div>
    </div>
  </div>
</nav>