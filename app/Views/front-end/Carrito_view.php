<?php $cart = \Config\Services::cart(); ?>
<h1 class="text-center">Carrito de compra</h1>
<a href="<?= base_url('productos') ?>" class="btn btn-success" role="button">Continuar comprando</a>

<?php if (empty($cart->contents())): ?>
    <h2 class="text-center alert alert-danger">Carrito vacío</h2>
<?php else: ?>
    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Nº Item</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $total = 0;
                $i = 1;
                foreach ($cart->contents() as $item): 
                    $total += $item['subtotal'];
                ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= esc($item['name']) ?></td>
                    <td>$<?= esc($item['price']) ?></td>
                    <td><?= esc($item['qty']) ?></td>
                    <td>$<?= esc($item['subtotal']) ?></td>
                    <td>
                        <a href="<?= base_url('eliminar_item/'.$item['rowid']) ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="4" class="text-end fw-bold">Total Compra:</td>
                    <td colspan="2" class="fw-bold">$<?= $total ?></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="<?= base_url('vaciar_carrito/all'); ?>" class="btn btn-warning btn-sm">Vaciar carrito</a>
                    </td>
                    <td colspan="4" class="text-end">
                        <a href="<?= base_url('ventas'); ?>" class="btn btn-success">Ordenar compra</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
<?php endif; ?>