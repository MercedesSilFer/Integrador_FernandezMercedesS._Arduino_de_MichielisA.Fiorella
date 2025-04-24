<nav class="navbar sticky-top py-2 navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <!-- Logo y botón toggler -->
       <!-- FALTA MODIFICAR TAMAÑO DEL LOGO, SI LO VES NECESARIO. F.-->
    <div class="d-flex align-items-center">
      <a class="navbar-brand px-2" href="<?php echo base_url(); ?>">
        <img class="brand-logo img-fluid mx-auto d-block" src="<?php echo base_url('assets/img/kurundu-logo-nav.png'); ?>" alt="Kurundu Logo" style="max-height: 40px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
              aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <!-- Contenido colapsable -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="d-flex flex-column flex-lg-row w-100 align-items-lg-center">
        <!-- Menú principal -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 flex-grow-1 justify-content-lg-center">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>">Inicio</a>
          </li>
          
          <!-- Dropdown de Catálogo optimizado -->
          <li class="nav-item dropdown dropdown-hover">
          <div class="d-flex align-items-center">
            <a class="nav-link" href="<?php echo base_url('catalogo'); ?>">
              Catálogo
            </a>
            <a class="dropdown-toggle dropdown-toggle-split " 
              role="button" 
              id="catalogDropdown"
              data-bs-toggle="dropdown" 
              aria-expanded="false">
              <span class="visually-hidden">catalogoDropdown</span>
            </a>
          </div>
          <ul class="dropdown-menu catalogo-menu" aria-labelledby="catalogDropdown">
            <li><a class="dropdown-item catalogo-item" href="<?php echo base_url('totebags'); ?>">Tote bags</a></li>
            <li><a class="dropdown-item catalogo-item" href="<?php echo base_url('carteras'); ?>">Carteras</a></li>
            <li><a class="dropdown-item catalogo-item" href="<?php echo base_url('mochilas'); ?>">Mochilas</a></li>
            <li><a class="dropdown-item catalogo-item" href="<?php echo base_url('rinoneras'); ?>">Riñoneras</a></li>
            <li><a class="dropdown-item catalogo-item" href="<?php echo base_url('coleccion'); ?>">Colección Cápsula Color</a></li>
          </ul>
        </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('nosotros'); ?>">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('comercializacion'); ?>">Comercialización</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('contacto'); ?>">Contacto</a>
          </li>
        </ul>

        <!-- Buscador y acceso -->
<div class="d-flex flex-column flex-lg-row align-items-center gap-4">
  <!-- Buscador -->
  <form class="d-flex my-2 my-lg-0 flex-grow-1" role="search">
    <div class="input-group flex-grow-1">
      <input class="form-control focus-ring focus-ring-secondary w-lg-50" type="search" 
             placeholder="Búsqueda" aria-label="Search">
      <button class="btn btn-outline-secondary" type="submit">Buscar</button>
    </div>
  </form>

  <!-- Ícono de carrito y dropdown de acceso -->
  <div class="d-flex align-items-center gap-5">
    <!-- Carrito de compras -->
    <a href="#carrito-de-compras" class="text-decoration-none position-relative">
    <img src="<?php echo base_url('assets/img/cart.svg'); ?>" 
      class=" img-fluid rounded w-100" 
        alt="Carrito de compras" 
       loading="lazy"> <!-- Icono de carrito -->
      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
        0 <!-- número de items en el carrito -->
      </span>
    </a>

    <!-- Dropdown de Acceso -->
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" 
           data-bs-toggle="dropdown" aria-expanded="false">
          Acceder
        </a>
        <ul class="dropdown-menu dropdown-menu-lg-end acceso-menu">
          <li><a class="dropdown-item nav-link" href="<?php echo base_url('ingresar'); ?>">Iniciar sesión</a></li>
          <li><a class="dropdown-item nav-link" href="<?php echo base_url('registrarse'); ?>">Registrarse</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
      </div>
    </div>
  </div>
</nav>