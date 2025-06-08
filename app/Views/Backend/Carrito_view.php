<?php $cart1 = \Config\Services::cart(); ?>
<section class="container-fluid py-3">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center title my-4">Carrito de Compras</h1>
            <a href="<?= base_url('catalogo'); ?>" class="btn estilo-a mb-3" role="button">
                <i class="bi bi-arrow-left-circle"> Volver al Catálogo</i></a>
            
            <?php if ($cart1->contents() == NULL) { ?>
                <div class="container-fluid">
                    <h2 class="text-center alert">El carrito está vacío</h2>
                </div>
            <?php } ?>

            <?php if ($cart1->contents()) { ?>
                <div class="table-responsive px-4">
                    <table id="carrito" class="table table-striped table-bordered w-100">
                        <thead class="table-light">
                            <tr>
                                <th class="text-center col-1">N°</th>
                                <th class="col-4 col-md-2">Nombre</th>
                                <th class="text-center col-2">Precio</th>
                                <th class="text-center col-3 col-lg-2">Cantidad</th>
                                <th class="text-center col-1">Subtotal</th>
                                <th class="text-center col-1">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            $i = 1; 
                            foreach ($cart1->contents() as $item) { ?>
                                <tr>
                                    <td class="text-center align-middle"><?php echo $i++; ?></td>
                                    <td class="align-middle"><?php echo $item['name']; ?></td>
                                    <td class="text-center align-middle">$ <?php echo number_format($item['price'], 2); ?></td>
                                    <td class="align-middle">
                                        <form method="POST" action="<?= base_url('actualizarCantidad') ?>" class="d-flex justify-content-center">
                                            <input type="hidden" name="rowid" value="<?= $item['rowid'] ?>">
                                            <div class="input-group input-group-sm" style="min-width: 120px">
                                                <input type="number" 
                                                    name="qty" 
                                                    value="<?= $item['qty'] ?>" 
                                                    min="1" 
                                                    class="form-control form-control-sm text-center">
                                                <button type="submit" class="btn standard-button-outline fs-5">
                                                    <i class="bi bi-check2-circle"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                    <td class="text-center align-middle">$ <?php echo number_format($item['subtotal'], 2); $total = $total + $item['subtotal'] ?></td>
                                    <td class="text-center align-middle">
                                        <a href="<?= base_url('eliminar_item/'.$item['rowid']); ?>" class="btn btn-outline-danger fs-5">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot class="table-active">
                            <tr>
                                <td colspan="4" class="text-end fw-bold">Total Compra:</td>
                                <td class="text-center fw-bold">$ <?php echo number_format($total, 2); ?></td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="container">
                    <button type="button" class="btn standard-button" data-bs-toggle="modal" data-bs-target="#confirmVaciarModal">
                        Vaciar Carrito
                    </button>
                    <a href="<?php echo base_url('finalizar_compra'); ?>" class="btn standard-button" role="button">Finalizar Compra</a>         
                </div>           
            <?php } ?>
        </div>
    </div>
    <!-- Modal Confirmación Vaciar Carrito -->
    <div class="modal fade" id="confirmVaciarModal" tabindex="-1" aria-labelledby="confirmVaciarModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmVaciarModalLabel">Confirmar acción</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    ¿Realmente deseas vaciar el carrito? Esta acción no se puede deshacer.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <a href="<?= base_url('vaciar_carrito/all'); ?>" class="btn standard-button">Vaciar Carrito</a>
                </div>
            </div>
        </div>
    </div>
</section>