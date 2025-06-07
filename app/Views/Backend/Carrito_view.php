<?php $cart= \Config\Services::cart(); ?>
<section class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center my-4">Carrito de Compras</h1><a href="<?= base_url('catalogo'); ?>" class="btn mb-3" role="button">Volver al Catálogo</a>
            <?php if ($cart->contents()==NULL) {?> 
                <h2 class="text-center alert ">El carrito está vacío</h2>
            <?php }?>
            <table id="carrito" class="table table-striped table-bordered">
                <?php if ($cart1->contents()) { ?>
                    <thead>
                        <td>N° item</td>
                        <td>Nombre</td>
                        <td>Precio</td>
                        <td>Cantidad</td>
                        <td>SubTotal</td>
                        <td>Acciones</td>
                    </thead>
                    <tbody>
                    <?php
                        $total = 0;
                        $i = 1; 
                        foreach ($cart1 as $item) { ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo $item['price'];?></td>
                            <td><?php echo $item['qty']; ?></td>
                            <td><?php echo $item['subtotal']; $total=$total+$item['subtotal']?></td>
                            <td><?php echo anchor('eliminar_item/'.$item['rowid'], 'Eliminar', array('class' => 'btn')); ?></td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td>Total Compra: $ <?php echo $total; ?></td>
                            <td><a href="<?php echo base_url('vaciar_carrito/all'); ?>" class="btn" role="button">Vaciar Carrito</a></td>
                            <td><a href="<?php echo base_url('finalizar_compra'); ?>" class="btn" role="button">Finalizar Compra</a></td>
                        </tr>
                    <?php }?>
                    </tbody>
            </table>
        </div>