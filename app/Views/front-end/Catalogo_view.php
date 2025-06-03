
<section class="catalogo">
    <?php $ruta = service('uri')->getSegment(1); ?>
    <!-- versión mobile -->
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
                        <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" href="<?= base_url('catalogo'); ?>">Todos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" href="<?= base_url('totebags'); ?>">Tote bags</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" href="<?= base_url('carteras'); ?>">Carteras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" href="<?= base_url('mochilas'); ?>">Mochilas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" href="<?= base_url('rinoneras'); ?>">Riñoneras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" href="<?= base_url('coleccion'); ?>">Cápsula Kurundú color</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- versión desktop -->
    <div class="catalogo-desktop d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs justify-content-center mt-2 mb-4" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link <?= $ruta == '' ? 'active' : '' ?>" href="<?= base_url('catalogo'); ?>">Todos</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link <?= $ruta == '3' ? 'active' : '' ?>" href="<?= base_url('catalogo/3'); ?>">Tote bags</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link <?= $ruta == '4' ? 'active' : '' ?>" href="<?= base_url('catalogo/4'); ?>">Carteras</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link <?= $ruta == '5' ? 'active' : '' ?>" href="<?= base_url('catalogo/5'); ?>">Mochilas</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link <?= $ruta == '6' ? 'active' : '' ?>" href="<?= base_url('catalogo/6'); ?>">Riñoneras</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link <?= $ruta == '7' ? 'active' : '' ?>" href="<?= base_url('catalogo/7'); ?>">Cápsula Kurundú color</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mt-2"> 
                <?php foreach ($productos as $row){ ?>  
                    <div class="col-6 col-xl-3 mt-2"> 
                        <div class="card w-75 h-auto mx-auto my-4">
                            <img src="<?php echo base_url('assets/uploads/'.$row['imagen_producto']); ?>" alt="<?php echo $row['descripcion_producto']?>" style="width:100%">
                            <h4><?php echo $row ['nombre_producto']?></h4>
                            <div class="card-footer border-none align-items-bottom">
                                <p><?php echo 'Categoria: '; echo $row ['nombre_categoria']?></p>
                                <p class="price"><?php echo '$'; echo $row ['precio_producto']?></p>
                                <p><?php echo 'Cantidad: '; echo $row ['stock_producto']?></p>
                                <button class="rounded-2">Agregar al carrito</button>
                            </div>   
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>