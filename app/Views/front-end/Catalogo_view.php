<section class="catalogo">
    <?php $ruta = service('uri')->getSegment(1); ?><!--busca en que parte de la página estamos -->
    <!--version mobile -->
    <div class="catalogo-mobile d-md-none">
        <button class="btn-offcanvas py-2" type="button" data-bs-toggle="offcanvas" 
            data-bs-target="#offcanvasCatalogo" aria-controls="offcanvasCatalogo">Categorías
        </button>
        <hr class="my-1">
        <div class="offcanvas-sm offcanvas-start" tabindex="-1"
         id="offcanvasCatalogo" aria-labelledby="offcanvasCatalogoLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasCatalogoLabel">Categorías</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" 
                data-bs-target="#offcanvasCatalogo" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body px-2">
                <ul class="ps-1">
                    <li class="nav-item">
                        <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" href="<?= base_url('catalogo'); ?>" href="<?php echo base_url('catalogo'); ?>">Todos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" href="<?= base_url('totebags'); ?>"  href="<?php echo base_url('totebags'); ?>">Tote bags</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" href="<?= base_url('carteras'); ?>" href="<?php echo base_url('carteras'); ?>">Carteras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" href="<?= base_url('mochilas'); ?>" href="<?php echo base_url('mochilas'); ?>">Mochilas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" href="<?= base_url('rinoneras'); ?>" href="<?php echo base_url('rinoneras'); ?>">Riñoneras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" href="<?= base_url('coleccion'); ?>" href="<?php echo base_url('coleccion'); ?>">Cápsula Kurundú color</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--version desktop (escritorio)   -->
    <div class="catalogo-desktop d-none d-md-block">
        <?php $ruta = service('uri')->getSegment(1); ?>
        <ul class="nav nav-tabs border-bottom-0">
            <li class="nav-item">
                <a class="nav-link <?= $ruta == 'catalogo' ? 'active' : '' ?>" 
                href="<?= base_url('catalogo'); ?>">Todos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $ruta == 'totebags' ? 'active' : '' ?>" 
                href="<?= base_url('totebags'); ?>">Tote bags</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $ruta == 'carteras' ? 'active' : '' ?>" 
                href="<?= base_url('carteras'); ?>">Carteras</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $ruta == 'mochilas' ? 'active' : '' ?>" 
                href="<?= base_url('mochilas'); ?>">Mochilas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $ruta == 'rinoneras' ? 'active' : '' ?>" 
                href="<?= base_url('rinoneras'); ?>">Riñoneras</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $ruta == 'coleccion' ? 'active' : '' ?>" 
                href="<?= base_url('coleccion'); ?>">Cápsula Kurundú color</a>
            </li>
        </ul>
    </div>
    

</section>