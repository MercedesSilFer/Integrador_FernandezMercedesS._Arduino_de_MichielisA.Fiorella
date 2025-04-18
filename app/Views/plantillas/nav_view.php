<nav class="navbar sticky-top navbar-expand-lg"> 
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
      <div class="row w-100 align-items-center">
        <div class="col-1 text-start px-1">
          <img class="brand-logo" src="<?php echo base_url('assets/img/kurundu-logo-nav.png'); ?>" alt="Kurundu Logo">
        </div>
        <div class="col-6">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="<?php echo base_url();?>">Inicio</a>
            </li>
            <li class="nav-item dropdown dropdown-hover">
              <a class="nav-link dropdown-toggle" href="#" role="button" id="catalogDropdown" data-bs-toggle="dropdown" aria-expanded="true">
                Catalogo</a>
              <ul class="dropdown-menu catalogo-menu" aria-labelledby="catalogDropdown">
                <li><a class="dropdown-item catalogo-item" href="#">Bandoleras</a></li>
                <li><a class="dropdown-item catalogo-item" href="#">Mochilas</a></li>
                <li><a class="dropdown-item catalogo-item" href="#">Cintos</a></li>
                <li><a class="dropdown-item catalogo-item" href="#">Cápsula Kurundu Color</a></li>
                <li><a class="dropdown-item catalogo-item" href="#">Otros</a></li>
              </ul>
              <ul class="dropdown-menu catalogo-menu" aria-labelledby="catalogDropdown">
                <li><a class="dropdown-item catalogo-item" href="#">Bandoleras</a></li>
                <li><a class="dropdown-item catalogo-item" href="#">Mochilas</a></li>
                <li><a class="dropdown-item catalogo-item" href="#">Cintos</a></li>
                <li><a class="dropdown-item catalogo-item" href="#">Cápsula Kurundu Color</a></li>
                <li><a class="dropdown-item catalogo-item" href="#">Otros</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=<?php echo base_url('nosotros');?> >Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('comercializacion');?>">Comercializacion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('contacto');?>">Contacto</a>
            </li>
          </ul>
        </div>
        <div class="col-3 d-flex justify-content-start">
          <form class="d-flex" role="search">
            <input class="form-control me-1" type="search" placeholder="Búsqueda" aria-label="Search">
            <button class="btn" type="submit">Buscar</button>
          </form>
        </div>
        <div class="col-2 d-flex justiify-text-end align-items-end">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-start" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Acceder</a>
            <ul class="dropdown-menu acceso-menu text-center">
              <li><a class="dropdown-item nav-link" href="#">Mi cuenta </a></li>
              <li><a class="dropdown-item nav-link" href="#">Registrarse</a></li>
            </ul>
          </li>
        </div>
      </div>
    </div>
  </div>
</nav>