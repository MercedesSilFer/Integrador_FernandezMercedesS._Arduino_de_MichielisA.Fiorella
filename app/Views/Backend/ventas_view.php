<div class="container-fluid">
    <div class="row my-5 py-5">
        <h1 class="title text-center">Panel de Ventas</h1>
        <h5 class="title text-center">Bienvenido al panel de ventas. Aquí puedes consultar las ventas realizadas</h5>
    </div>
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
    <div class="row px-5">
        <table class="table table-responsive table-striped table-bordered ">
            <thead>
                <tr>
                    <th>ID Venta</th>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ventas as $venta): ?>
                <tr>
                    <td><?= $venta['id_venta']; ?></td>
                    <td><?= $venta['venta_fecha']; ?></td>
                    <td>$<?= number_format($venta['total_venta'], 2, ',', '.'); ?></td>
                    <td>
                        <button type="button" class="btn standard-button" data-bs-toggle="modal" data-bs-target="#modalDetalles<?= $venta['id_venta']; ?>">
                            Ver Detalles
                        </button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php } ?>
    </div>
    <?php foreach ($ventas as $venta): ?>
    <div class="modal fade" id="modalDetalles<?= $venta['id_venta']; ?>" tabindex="-1" aria-labelledby="modalDetallesLabel<?= $venta['id_venta']; ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDetallesLabel<?= $venta['id_venta']; ?>">Detalles de la Venta #<?= $venta['id_venta']; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Datos del cliente y venta -->
                    <div class="mb-3">
                        <strong>Cliente:</strong>
                        <?= esc($venta['nombre_cliente'] ?? ($venta['nombre'] ?? '')) ?>
                    </div>
                    <div class="mb-3">
                        <strong>CUIL:</strong>
                        <?= esc($venta['cuil_cliente'] ?? ($venta['cuil'] ?? '')) ?>
                    </div>
                    <div class="mb-3">
                        <strong>Método de Pago:</strong>
                        <?= esc($venta['forma_de_pago']) ?>
                        <?php if (
                            isset($venta['forma_de_pago']) &&
                            $venta['forma_de_pago'] === 'Tarjeta de Débito' &&
                            !empty($venta['cuotas'])
                        ): ?>
                            <span>(<?= esc($venta['cuotas']) ?> cuotas)</span>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <strong>Dirección:</strong>
                        <?= esc($venta['direccion'] ?? 'No especificada') ?>
                    </div>
                    <!-- Detalles de productos -->
                    <table class="table table-responsive table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precio Unitario</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($detalles[$venta['id_venta']])): ?>
                                <?php foreach ($detalles[$venta['id_venta']] as $detalle): ?>
                                    <tr>
                                        <td><?= esc($detalle['descripcion_producto']['nombre_producto'] ?? ''); ?></td>
                                        <td><?= esc($detalle['cantidad']); ?></td>
                                        <td>$<?= number_format($detalle['detalle_precio'], 2, ',', '.'); ?></td>
                                        <td>$<?= number_format($detalle['detalle_precio'] * $detalle['cantidad'], 2, ',', '.'); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr><td colspan="4">Sin detalles</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
