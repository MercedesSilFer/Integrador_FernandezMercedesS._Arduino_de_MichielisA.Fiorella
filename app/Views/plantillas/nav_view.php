<div class="container-fluid gx-0">
  <?php $ruta = service('uri')->getSegment(1); ?>

  <!-- ========== VERSIÓN MOBILE========== -->
  <div class="d-lg-none">
    <nav class="navbar sticky-top py-2 bg-body-tertiary">
      <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand px-1 me-auto" href="<?= base_url(); ?>">
          <img class="img-fluid" src="<?= base_url('assets/img/kurundu-logo-nav.png'); ?>" alt="Kurundu Logo" style="max-height: 40px;">
        </a>
        
        <!-- Carrito y toggler -->
        <div class="d-flex align-items-center gap-3">
          <button class="btn-offcanvas border-0 bg-body-tertiary" type="button" data-bs-toggle="offcanvas" 
          data-bs-target="#offcanvasCarrito" aria-controls="offcanvasCarrito">
            <img src="<?= base_url('assets/img/cart.svg'); ?>" alt="Carrito" class="img-fluid" style="max-height: 35px;" loading="lazy">
            <span class="position-relative top-0 start-25 translate-middle badge rounded-pill bg-secondary">0</span>
          </button>
          
          <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#mobileMenu" aria-controls="mobileMenu"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </nav>

    <!-- Menú colapsable mobile -->
    <div class="collapse navbar-collapse bg-body-tertiary px-3" id="mobileMenu">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" href="<?= base_url(); ?>">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $ruta == 'catalogo' ? 'active' : '' ?>" href="<?= base_url('catalogo'); ?>">
            Catálogo
          </a>
        <li class="nav-item">
          <a class="nav-link <?= $ruta == 'nosotros' ? 'active' : '' ?>" href="<?= base_url('nosotros'); ?>">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $ruta == 'comercializacion' ? 'active' : '' ?>" href="<?= base_url('comercializacion'); ?>">Comercialización</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $ruta == 'contacto' ? 'active' : '' ?>" href="<?= base_url('contacto'); ?>">Contacto</a>
        </li>     
      <!-- Acceso mobile -->
       <?php if(session('ingresar')){ ?>
        <li class="">
          <a class="nav-link" href="<?= base_url('ver_carrito'); ?>">Ver carrito</a>
        </li>
        <li class="">
          <a class="nav-link" href=" "><?php echo session('nombre'); ?></a>
        </li>
        <li class="">
          <a class="nav-link" href="<?= base_url('salir'); ?>">Cerrar sesión</a>
        </li>
      <?php } else { ?>
        <li><a class="nav-link" href="<?= base_url('ingresar'); ?>">Iniciar sesión</a></li>
        <li><a class="nav-link" href="<?= base_url('registrarse'); ?>">Registrarse</a></li>
      <?php } ?>
      </ul>
      </div>
    </div>
  </div>


  <!-- ========== VERSIÓN DESKTOP (mayor o igual a md) ========== -->
<div class="container-fluid gx-0 d-none d-lg-block">
  <nav class="navbar navbar-expand-lg sticky-top py-2 bg-body-tertiary">
    <div class="container-fluid">
      <!-- Logo -->
      <a class="navbar-brand px-1 me-auto" href="<?= base_url(); ?>">
        <img class="img-fluid" src="<?= base_url('assets/img/kurundu-logo-nav.png'); ?>" alt="Kurundu Logo" style="max-height: 40px;">
      </a>
      
      <!-- Toggler (oculto en desktop pero necesario para estructura) -->
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menú colapsable -->
      <div class="collapse navbar-collapse mt-3 mt-lg-0" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" href="<?= base_url(); ?>">Inicio</a>
          </li>
          <li class="nav-item dropdown-hover">
            <a class="nav-link <?= $ruta == 'catalogo' ? 'active' : '' ?>" 
              href="<?= base_url('catalogo'); ?>"
              id="catalogDropdown">
                Catálogo
            </a>
            <ul class="dropdown-menu" aria-labelledby="catalogDropdown">
              <li><a class="dropdown-item catalogo-item" href="<?= base_url('totebags'); ?>">Tote bags</a></li>
              <li><a class="dropdown-item catalogo-item" href="<?= base_url('carteras'); ?>">Carteras</a></li>
              <li><a class="dropdown-item catalogo-item" href="<?php echo base_url('mochilas'); ?>">Mochilas</a></li>
              <li><a class="dropdown-item catalogo-item" href="<?php echo base_url('rinoneras'); ?>">Riñoneras</a></li>
              <li><a class="dropdown-item catalogo-item" href="<?php echo base_url('coleccion'); ?>">Colección Cápsula Color</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $ruta == 'nosotros' ? 'active' : '' ?>" href="<?= base_url('nosotros'); ?>">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $ruta == 'comercializacion' ? 'active' : '' ?>" href="<?= base_url('comercializacion'); ?>">Comercialización</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $ruta == 'contacto' ? 'active' : '' ?>" href="<?= base_url('contacto'); ?>">Contacto</a>
          </li>
        </ul>

        <!-- Elementos del lado derecho -->
        <div class="d-flex flex-column flex-lg-row align-items-end gap-3">
          <form class="busqueda d-none d-lg-flex" role="search" action="<?= base_url('buscar'); ?>" method="get">
            <div class="input-group">
              <input class="form-control" type="search" placeholder="Búsqueda" aria-label="Search" name="q">
              <button class="btn btn-outline-secondary" type="submit">Buscar</button>
            </div>
          </form>
          <button class="btn-offcanvas border-0 bg-body-tertiary" type="button" data-bs-toggle="offcanvas" 
          data-bs-target="#offcanvasCarrito" aria-controls="offcanvasCarrito">
            <img src="<?= base_url('assets/img/cart.svg'); ?>" alt="Carrito" class="img-fluid" style="max-height: 35px;" loading="lazy">
            <span class="position-relative top-0 start-25 translate-middle badge rounded-pill bg-secondary">0</span>
          </button>

          <div class="dropdown">
          <button class="nav-link dropdown-toggle-visually-hidden" data-bs-toggle="dropdown" aria-expanded="false">Acceder</button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="<?= base_url('ingresar'); ?>">Iniciar sesión</a></li>
              <li><a class="dropdown-item" href="<?= base_url('registrarse'); ?>">Registrarse</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
</div>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCarrito" aria-labelledby="offcanvasCarritoLabel" style="width: 100%; max-width: 400px;">
  <div class="offcanvas-header bg-body-tertiary">
    <h5 class="offcanvas-title" id="offcanvasCarritoLabel">Carrito de compras</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body bg-body-tertiary px-2">
    <p>Su carrito se encuentra vacío actualmente</p>
  </div>
</div>