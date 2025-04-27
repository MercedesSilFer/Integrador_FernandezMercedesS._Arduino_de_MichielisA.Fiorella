<div class="container-fluid">
  <nav class="navbar navbar-expand-lg sticky-top py-2 bg-body-tertiary">
  <div class="container-fluid">
    <!-- Logo y toggler - ahora en una sola fila -->
    <a class="navbar-brand px-1 me-auto" href="<?= base_url(); ?>">
      <img class="img-fluid" src="<?= base_url('assets/img/kurundu-logo-nav.png'); ?>" alt="Kurundu Logo" style="max-height: 40px;">
    </a>
    
    <!-- Elementos del lado derecho (carrito y acceso) visibles en mobile -->
    <div class="d-flex d-lg-none align-items-center gap-3 order-lg-1">
      <!-- Carrito - visible en mobile -->
      <a href="<?= base_url('carrito'); ?>" class="text-decoration-none position-relative">
        <img src="<?= base_url('assets/img/cart.svg'); ?>" alt="Carrito" class="img-fluid" style="max-height: 30px;" loading="lazy">
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">0</span>
      </a>
      
      <!-- Botón toggler -->
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <!-- Contenido colapsable -->
    <div class="collapse navbar-collapse mt-3 mt-lg-0" id="navbarSupportedContent">
      <?php $ruta = service('uri')->getSegment(1); ?>

      <!-- Menú principal centrado -->
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" href="<?= base_url(); ?>">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle-visually-hidden <?= $ruta == 'catalogo' ? 'active' : '' ?>" href="<?= base_url('catalogo'); ?>"
            id="catalogDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Catálogo
          </a>
          <ul class="dropdown-menu catalogo-menu" aria-labelledby="catalogDropdown">
            <li><a class="dropdown-item catalogo-item" href="<?php echo base_url('totebags'); ?>">Tote bags</a></li>
            <li><a class="dropdown-item catalogo-item" href="<?php echo base_url('carteras'); ?>">Carteras</a></li>
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

      <!-- Elementos del lado derecho (buscador, carrito y acceso) -->
      <div class="d-flex flex-column flex-lg-row align-items-end gap-3">
        <!-- Buscador - oculto en mobile para ahorrar espacio -->
        <form class="busqueda d-none d-lg-flex" role="search" action="<?= base_url('buscar'); ?>" method="get">
          <div class="input-group">
            <input class="form-control" type="search" placeholder="Búsqueda" aria-label="Search" name="q">
            <button class="btn btn-outline-secondary" type="submit">Buscar</button>
          </div>
        </form>

        <!-- Carrito - visible solo en desktop (en mobile ya está arriba) -->
        <a href="<?= base_url('carrito'); ?>" class="text-decoration-none position-relative d-none d-lg-block">
          <img src="<?= base_url('assets/img/cart.svg'); ?>" alt="Carrito" class="img-fluid" style="max-height: 30px;" loading="lazy">
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">0</span>
        </a>

        <!-- Acceso -->
        <div class="dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Acceder
          </a>
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