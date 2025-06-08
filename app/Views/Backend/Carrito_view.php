<?php $cart1 = \Config\Services::cart(); ?>
<section class="container-fluid py-3">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center my-4">Carrito de Compras</h1>
            <a href="<?= base_url('catalogo'); ?>" class="estilo-a mb-3" role="button">
                <i class="bi bi-arrow-left-circle">Volver al Catálogo</i></a>
            
            <?php if ($cart1->contents() == NULL) { ?> 
                <h2 class="text-center alert">El carrito está vacío</h2>
            <?php } ?>

            <?php if ($cart1->contents()) { ?>
                <table id="carrito" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td>N° item</td>
                            <td>Nombre</td>
                            <td>Precio</td>
                            <td>Cantidad</td>
                            <td>SubTotal</td>
                            <td>Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        $i = 1; 
                        foreach ($cart1->contents() as $item) { ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $item['name']; ?></td>
                                <td>$ <?php echo $item['price']; ?></td>
                                <td>
                                    <form method="POST" action="<?= base_url('actualizarCantidad') ?>" class="d-flex">
                                        <input type="hidden" name="rowid" value="<?= $item['rowid'] ?>">
                                        <div class="input-group" style="width: 150px;">
                                            <input type="number" 
                                                name="qty" 
                                                value="<?= $item['qty'] ?>" 
                                                min="1" 
                                                class="form-control" 
                                                style="border-top-right-radius: 0; border-bottom-right-radius: 0;">
                                            <button type="submit" 
                                                    class="btn standard-button" 
                                                    style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
                                                <i class="bi bi-check2-circle"></i>
                                            </button>
                                        </div>
                                    </form>
                                </td>
                                <td>$  <?php echo $item['subtotal']; $total = $total + $item['subtotal'] ?></td>
                                <td><?php echo anchor('eliminar_item/'.$item['rowid'], 'Eliminar', array('class' => 'btn')); ?>
                                </td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td>Total Compra: $ <?php echo $total; ?></td>
                        </tr>
                    </tbody>
            </table>
            <div class="container">
                <a href="<?php echo base_url('vaciar_carrito/all'); ?>" class="btn standard-button" role="button">Vaciar Carrito</a>
                <a href="<?php echo base_url('finalizar_compra'); ?>" class="btn standard-button" role="button">Finalizar Compra</a>         
            </div>           
            <?php } ?>
        </div>
    </div>
</section>