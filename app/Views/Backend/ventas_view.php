<section class="container-fluid pt-3">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center title my-4">Detalle de Ventas</h1>
            <?php
            if (isset($fecha_inicio) && isset($fecha_fin)): ?>
                <div class="alert alert-info">
                    Ventas desde <strong><?= esc($fecha_inicio) ?></strong> hasta <strong><?= esc($fecha_fin) ?></strong>
                </div>
            <?php endif; ?>
            <?php if (isset($codigo)) { ?>
                <div class="alert alert-info">
                    Ventas del producto con código: <strong><?= esc($codigo) ?></strong>
                </div>
            <?php } ?>
        
            <?php
            if (isset($cliente)&&isset($correo)) { ?>
                <div class="alert alert-info">
                    Ventas del cliente: <strong><?= esc($cliente['nombre_persona']) . ' ' . esc($cliente['apellido_persona']) ?></strong>
                    con correo: <strong><?= esc($correo) ?></strong>
                </div>
            <?php } ?> 
            
            <?php if (empty($ventas)) { ?>
                <div class="container-fluid">
                    <h2 class="text-center alert">Ud no registra ventas realizadas!</h2>
                </div>
            <?php } ?>
            <?php if (!empty($ventas)) { ?>
                <div class="table-responsive px-4">
                    <table id="compras" class="table table-striped table-bordered w-100">
                        <thead class="table-light">
                            <tr>                    
                                <th class="text-center col-1">N° Venta</th>
                                <th class="text-center col-1">ID Cliente</th>
                                <th class="text-center col-2">Nombre Cliente</th>
                                <th class="text-center col-1">N° Cuil Cliente</th>
                                <th class="text-center col-1">Fecha</th>
                                <th class="text-center col-1">Total</th>
                                <th class="text-center col-2">Forma de Pago</th>                               
                                <th class="text-center col-4 col-lg-3">Detalles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1; 
                            foreach ($ventas as $venta) { ?>
                                <tr>
                                    <td class="text-center align-middle"><?php echo $venta['id_venta']; ?></td>
                                    <td class="text-center align-middle"><?php echo $venta['id_persona']; ?></td>
                                    <td class="text-center align-middle"><?php echo $venta['nombre_persona'] . ' ' . $venta['apellido_persona']; ?></td>
                                    <td class="text-center align-middle"><?php echo $venta['cuil_persona']; ?></td>
                                    <td class="align-middle"><?php echo date('Y-m-d', strtotime($venta['venta_fecha'])); ?></td> 
                                    <td class="text-center align-middle">$ <?php echo number_format($venta['total_venta'], 2); ?></td>
                                    <td class="text-center align-middle"><?php echo $venta['forma_de_pago']; ?></td>                
                                    <?php if (!empty($detalles[$venta['id_venta']])): ?>
                                        <td colspan="5">
                                            <ul>
                                                <?php foreach ($detalles[$venta['id_venta']] as $detalle): ?>
                                                    <li>
                                                        Producto: <?= $detalle['descripcion_producto']['nombre_producto'] ?>
                                                    </li>
                                                    <li>
                                                        Cantidad: <?= $detalle['cantidad'] ?>
                                                    </li>
                                                    <li>
                                                        Precio unitario: $<?= number_format($detalle['detalle_precio'], 2) ?>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </td>
                                    <?php endif; ?>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>                   
            <?php } ?>
        </div>