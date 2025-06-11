<section class="container-fluid py-3">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center title my-4">Detalle de Compras</h1>
            <a href="<?= base_url('catalogo'); ?>" class="btn estilo-a mb-3" role="button">
                <i class="bi bi-arrow-left-circle"> Volver al Catálogo</i></a>
            
            <?php if (empty($ventas)) { ?>
                <div class="container-fluid">
                    <h2 class="text-center alert">Ud no registra compras realizadas!</h2>
                </div>
            <?php } ?>
            <?php if (!empty($ventas)) { ?>
                <div class="table-responsive px-4">
                    <table id="compras" class="table table-striped table-bordered w-100">
                        <thead class="table-light">
                            <tr>
                                <th class="text-center col-1">N°</th>
                                <th class="col-4 col-md-2">Fecha</th>
                                <th class="text-center col-2">Total</th>
                                <th class="text-center col-2 col-lg-1">Forma de Pago</th>
                                <th class="text-center col-3 col-lg-2">Detalles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1; 
                            foreach ($ventas as $venta) { ?>
                                <tr>
                                    <td class="text-center align-middle"><?php echo $venta['id_venta']; ?></td>
                                    <td class="align-middle"><?php echo date('d-m-Y', strtotime($venta['fecha'])); ?></td>
                                    <td class="text-center align-middle">$ <?php echo number_format($venta['total'], 2); ?></td>
                                    <td class="text-center align-middle"><?php echo $venta['forma_pago']; ?></td>                
                                </tr>
                                <?php if (!empty($detalles[$venta['id_venta']])): ?>
                                    <tr>
                                        <td colspan="5">
                                            <strong>Detalles:</strong>
                                            <ul>
                                                <?php foreach ($detalles[$venta['id_venta']] as $detalle): ?>
                                                    <li>
                                                        Producto: <?= $detalle['descripcion_producto'] ?> |
                                                        Cantidad: <?= $detalle['cantidad'] ?> |
                                                        Precio: $<?= number_format($detalle['detalle_precio'], 2) ?>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>           
                               
                <div class="container">
                    <a href="<?php echo base_url('catalogo'); ?>" class="btn standard-button" role="button">Ver productos</a>         
                </div>           
            <?php } ?>
        </div>
    </div>
    