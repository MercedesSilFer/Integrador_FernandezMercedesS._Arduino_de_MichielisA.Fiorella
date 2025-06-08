<section class="catalogo container-fluid">
    <?php 
    $ruta = service('uri')->getSegment(1);
    $isLoggedIn = session('login');
    ?>

    <!-- Versión Mobile -->
    <div class="catalogo-mobile d-md-none">
        <button class="btn standard-button-outline w-100 py-2 mb-3" type="button" data-bs-toggle="offcanvas" 
            data-bs-target="#offcanvasCatalogo" aria-controls="offcanvasCatalogo">
            <i class="bi bi-filter-left me-2"></i> Ver Categorías
        </button>
        
        <!-- Offcanvas -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasCatalogo" aria-labelledby="offcanvasCatalogoLabel">
            <div class="offcanvas-header bg-light">
                <h5 class="offcanvas-title" id="offcanvasCatalogoLabel">Categorías</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="nav-item">
                            <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" href="<?= base_url('catalogo') ?>">Todos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $ruta == '3' ? 'active' : '' ?>" href="<?= base_url('catalogo/3') ?>">Tote bags</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $ruta == '4' ? 'active' : '' ?>" href="<?= base_url('catalogo/4') ?>">Carteras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $ruta == '5' ? 'active' : '' ?>" href="<?= base_url('catalogo/5') ?>">Mochilas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $ruta == '6' ? 'active' : '' ?>" href="<?= base_url('catalogo/6') ?>">Riñoneras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $ruta == '7' ? 'active' : '' ?>" href="<?= base_url('catalogo/7') ?>">Cápsula Color</a>
                        </li>
                </ul>
            </div>
        </div>

        <!-- Productos en móvil -->
        <div class="row row-cols-2 g-3 py-3 my-2">
            <?php foreach ($productos as $row){ ?>
            <div class="col">
                <div class="card h-100">
                    <img src="<?= base_url('assets/uploads/'.$row['imagen_producto']) ?>" 
                         class="card-img-top" 
                         alt="<?= $row['descripcion_producto'] ?>">
                    <div class="card-body">
                        <h6 class="card-title"><?= $row['nombre_producto'] ?></h6>
                        <p class="card-text text-muted small"><?= $row['nombre_categoria'] ?></p>
                        <p class="price fw-bold mb-1"><?= '$'.$row['precio_producto'] ?></p>
                    </div>
                    <div class="card-footer bg-white">
                                <?php if ($isLoggedIn) { ?>
                                    <?= form_open('agregar_carrito'); ?>
                                    <?= form_hidden('id', $row['id_producto']); ?>
                                    <?= form_hidden('nombre', $row['nombre_producto']); ?>
                                    <?= form_hidden('precio', $row['precio_producto']); ?>
                                    <!-- No se puede utilizar form_submit si quiero que tenga un icono al lado -->
                                    <button type="submit" class="btn card-button w-100">  
                                        <i class="bi bi-cart-plus me-2"></i>Agregar al carrito
                                    </button>
                                    <?= form_close(); ?>
                                <?php } else { ?>
                                    <button class="btn card-button w-100" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#authModal">
                                        <i class="bi bi-cart-plus me-2"></i>Agregar al carrito
                                    </button>
                                <?php } ?>
                            </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <!-- Versión Desktop -->
    <div class="catalogo-desktop d-none d-md-block">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs justify-content-center gap-2 mb-4" id="catalogTab">
                        <li class="nav-item">
                            <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" href="<?= base_url('catalogo') ?>">Todos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $ruta == '3' ? 'active' : '' ?>" href="<?= base_url('catalogo/3') ?>">Tote bags</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $ruta == '4' ? 'active' : '' ?>" href="<?= base_url('catalogo/4') ?>">Carteras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $ruta == '5' ? 'active' : '' ?>" href="<?= base_url('catalogo/5') ?>">Mochilas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $ruta == '6' ? 'active' : '' ?>" href="<?= base_url('catalogo/6') ?>">Riñoneras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $ruta == '7' ? 'active' : '' ?>" href="<?= base_url('catalogo/7') ?>">Cápsula Color</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="row row-cols-2 row-cols-md-3 row-cols-xl-4 my-4 g-4">
                <?php foreach ($productos as $row) { ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?php echo base_url('assets/uploads/' . $row['imagen_producto']); ?>" 
                                class="card-img-top" 
                                alt="<?php echo $row['descripcion_producto']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['nombre_producto']; ?></h5>
                                <p class="card-text text-muted"><?php echo $row['nombre_categoria']; ?></p>
                                <p class="price fw-bold"><?php echo '$' . $row['precio_producto']; ?></p>
                                <p class="small text-muted"><?php echo $row['stock_producto']; ?> disponibles</p>
                            </div>
                            <div class="card-footer bg-white">
                                <?php if ($isLoggedIn) { ?>
                                    <?= form_open('agregar_carrito'); ?>
                                    <?= form_hidden('id', $row['id_producto']); ?>
                                    <?= form_hidden('nombre', $row['nombre_producto']); ?>
                                    <?= form_hidden('precio', $row['precio_producto']); ?>
                                    <button type="submit" class="btn card-button w-100">
                                        <i class="bi bi-cart-plus me-2"></i>Agregar al carrito
                                    </button>
                                    <?= form_close(); ?>
                                <?php } else { ?>
                                    <button class="btn card-button w-100" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#authModal">
                                        <i class="bi bi-cart-plus me-2"></i>Agregar al carrito
                                    </button>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<!-- Modal de Autenticación -->
<div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="authModalLabel">Acceso requerido</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <i class="bi bi-cart-plus fs-1 text-dark mb-3"></i>
                <p>Para agregar productos al carrito, necesitas iniciar sesión o registrarte.</p>
                <div class="d-grid gap-3">
                    <a href="<?= base_url('ingresar') ?>" class="btn standard-button">
                        Iniciar sesión
                    </a>
                    <a href="<?= base_url('registrarse') ?>" class="btn standard-button-outline">
                        Crear cuenta nueva
                    </a>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn text-muted" data-bs-dismiss="modal">Continuar sin iniciar sesión</button>
            </div>
        </div>
    </div>
</div>