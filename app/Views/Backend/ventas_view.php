<div>
<div class="container-fluid">
    <div class="row my-5 py-5">
        <h1 class="title">Panel de Ventas</h1>
        <h3 class="title text-center">Bienvenido al panel de ventas. Aquí puedes gestionar las ventas, productos y más.</h3>
    </div>
    <table class="table table-responsive table-striped table-bordered">
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
                <td><a href="<?= base_url('ver_comprasCliente/' . $venta['id_venta']); ?>" class="btn standard-button">Ver Detalles</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>