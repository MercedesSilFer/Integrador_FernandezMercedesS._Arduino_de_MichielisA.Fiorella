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
       <?php if(session('login')){ ?>
        <li class="">
          <a href="<?= base_url('ver_carrito') ?>" class="nav-link">
            <i class="bi bi-cart fs-5"></i>
          </a>
        </li>
        <li class="nav-link"><?php echo session('nombre'); ?></li>
        <li class="">
          <a class="nav-link" href="<?= base_url('ventas'); ?>">Ver mis compras</a>
        </li>
        <li class="">
          <a class="nav-link" href="<?= base_url('logout'); ?>">Cerrar sesión</a>
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
              <li><a class="dropdown-item navbar-item" href="<?= base_url('catalogo/3'); ?>">Tote bags</a></li>
              <li><a class="dropdown-item navbar-item" href="<?= base_url('catalogo/4'); ?>">Carteras</a></li>
              <li><a class="dropdown-item navbar-item" href="<?php echo base_url('catalogo/5'); ?>">Mochilas</a></li>
              <li><a class="dropdown-item navbar-item" href="<?php echo base_url('catalogo/6'); ?>">Riñoneras</a></li>
              <li><a class="dropdown-item navbar-item" href="<?php echo base_url('catalogo/7'); ?>">Colección Cápsula Color</a></li>
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
          <!-- Search Form -->
          <form class="busqueda pb-2 d-none d-lg-flex" role="search" action="<?= base_url('buscar'); ?>" method="get">
              <div class="input-group">
                  <input class="form-control" type="search" placeholder="Búsqueda" aria-label="Search" name="q">
                  <button class="btn standard-button" type="submit">Buscar</button>
              </div>
          </form>

          <ul class="d-flex align-items-center list-unstyled gap-3 mb-0">
              <?php if (session('login')){ ?>
                  <li>
                      <a href="<?= base_url('ver_carrito') ?>" class="btn nav-link">
                          <i class="bi bi-cart fs-5"></i>
                      </a>
                  </li>
                
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <?= session('nombre_sesion') ?>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                          <a class="dropdown-item navbar-item" href="<?= base_url('perfil'); ?>">Mi perfil</a>
                        </li>
                        <li class="">
                          <a class="dropdown-item navbar-item" href="<?= base_url('ver_comprasCliente'); ?>">Ver mis compras</a>
                        </li>
                        <li><a class="dropdown-item navbar-item" href="<?= base_url('logout'); ?>">Cerrar sesión</a></li>
                      </ul>
                  </li>
              <?php } else {?>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Acceder
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item navbar-item" href="<?= base_url('ingresar'); ?>">Iniciar sesión</a></li>
                          <li><a class="dropdown-item navbar-item" href="<?= base_url('registrarse'); ?>">Registrarse</a></li>
                      </ul>
                  </li>
              <?php } ?>
          </ul>
      </div>
      </div>
    </div>
  </nav>
</div>
