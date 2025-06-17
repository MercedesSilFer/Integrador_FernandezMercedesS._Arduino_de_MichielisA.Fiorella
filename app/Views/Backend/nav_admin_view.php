<div class="container-fluid gx-0">
  <?php $ruta = service('uri')->getSegment(1); ?>

  <!-- ========== VERSIÓN MOBILE========== -->
  <div class="d-lg-none">
    <nav class="navbar sticky-top py-2 bg-body-tertiary">
      <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand px-1 me-auto" href="<?= base_url('admin'); ?>">
          <img class="img-fluid" src="<?= base_url('assets/img/kurundu-logo-nav.png'); ?>" alt="Kurundu Logo" style="max-height: 50px;">
        </a>
        
        <!-- Carrito y toggler -->
        <div class="d-flex align-items-center gap-3">
         
          
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
      <li class="nav-item">
          <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" href="<?= base_url('listar_clientes'); ?>">Clientes</a>
        </li>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" href="<?= base_url('listar_ventas'); ?>">Ventas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $ruta == 'ver_catalogo' ? 'active' : '' ?>" href="<?= base_url('ver_catalogo'); ?>">
           Ver Catálogo
          </a>
        <li class="nav-item">
          <a class="nav-link <?= $ruta == 'ver_consultas' ? 'active' : '' ?>" href="<?= base_url('consultas'); ?>">Consultas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $ruta == 'cargar1' ? 'active' : '' ?>" href="<?= base_url('cargar1'); ?>">Alta Producto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $ruta == 'gestionarProductos' ? 'active' : '' ?>" href="<?= base_url('gestionarProductos'); ?>">Gestionar Productos</a>
        </li>     
      <!-- Acceso mobile -->
       
        <li class="nav-link"><?php echo session('nombre'); ?></li>
        <li class="">
          <a class="nav-link" href="<?= base_url('logout'); ?>">Cerrar sesión</a>
        </li>
     
      </ul>
      </div>
    </div>
  </div>


  <!-- ========== VERSIÓN DESKTOP (mayor o igual a md) ========== -->
<div class="container-fluid gx-0 d-none d-lg-block">
  <nav class="navbar navbar-expand-lg sticky-top py-2 bg-body-tertiary">
    <div class="container-fluid">
      <!-- Logo -->
      <a class="navbar-brand px-1 me-auto" href="<?= base_url('admin'); ?>">
        <img class="img-fluid" src="<?= base_url('assets/img/kurundu-logo-nav.png'); ?>" alt="Kurundu Logo" style="max-height:50px;">
      </a>
      
      <!-- Toggler (oculto en desktop pero necesario para estructura) -->
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menú colapsable -->
      <div class="collapse navbar-collapse mt-3 mt-lg-0" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" href="<?= base_url('listar_clientes'); ?>">Clientes</a>
          </li>
          <li class="nav-item dropdown-hover">
            <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" href="<?= base_url('listar_ventas'); ?>" id="ventasDropdown">Ventas</a>
            <ul class="dropdown-menu" aria-labelledby="ventasDropdown">
              <li><a class="dropdown-item catalogo-item" href="<?= base_url('buscarVtaCliente'); ?>">Por Cliente</a></li>
              <li><a class="dropdown-item catalogo-item" href="<?= base_url('buscarVtaProducto'); ?>">Por Producto</a></li>
              <li><a class="dropdown-item catalogo-item" href="<?php echo base_url('buscarPorFecha'); ?>">Por Fecha</a></li>

            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" 
              href="<?= base_url('ver_catalogo'); ?>">
                Ver Catálogo
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $ruta == 'ver_consultas' ? 'active' : '' ?>" href="<?= base_url('consultas'); ?>">Consultas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $ruta == 'cargar1' ? 'active' : '' ?>" href="<?= base_url('cargar1'); ?>">Agregar Producto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $ruta == 'gestionarProductos' ? 'active' : '' ?>" href="<?= base_url('gestionarProductos'); ?>">Gestionar Productos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?= session('nombre_sesion') ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="<?= base_url('logout'); ?>">Cerrar sesión</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
