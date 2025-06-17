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
                    <button type="button" class="btn standard-button" data-bs-toggle="modal" data-bs-target="#pagoModal">
                        Finalizar Compra
                    </button>        
                </div>           
            <?php } ?>
        </div>
    </div>
    <!-- Modal Vaciar Carrito -->
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
    <!-- Modal finalizar compra -->
    <div class="modal fade" id="pagoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php echo form_open('finalizar_compra', ['class' => 'section-form', 'method' => 'post']); ?>
            
                <div class="modal-header">
                    <h5 class="modal-title">Datos de envío y pago</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                    <!-- Forma de Pago -->
                    <div class="mb-3">
                        <label class="form-label">Método de Pago:</label>
                        <select name="forma_de_pago" id="forma_pago" class="form-select" required>
                            <option value="">Seleccionar...</option>
                            <option value="Tarjeta de Crédito">Tarjeta de Crédito</option>
                            <option value="Tarjeta de Débito">Tarjeta de Débito</option>
                            <option value="PayPal">PayPal</option>
                            <option value="Efectivo">Efectivo</option>
                        </select>
                    </div>
                    
                    <!-- Campos para tarjeta-->
                    <div id="campos_tarjeta" class="card-fields" style="display: none;">
                        <div class="border p-3 rounded mb-3 bg-light">
                            <h6 class="mb-3"><i class="bi bi-credit-card"></i> Información de la Tarjeta</h6>
                            
                            <!-- Número de tarjeta -->
                            <div class="mb-3">
                                <label class="form-label">Número de Tarjeta</label>
                                <input type="text" name="numero_tarjeta" class="form-control" 
                                       placeholder="1234 5678 9012 3456" maxlength="19">
                            </div>
                            
                            <div class="row">
                                <!-- Fecha de vencimiento -->
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Fecha de Vencimiento</label>
                                    <input type="text" name="fecha_vencimiento" class="form-control" 
                                           placeholder="MM/AA">
                                </div>
                                
                                <!-- CVV -->
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Código de Seguridad (CVV)</label>
                                    <input type="password" name="cvv" class="form-control" 
                                           placeholder="123" maxlength="4">
                                </div>
                            </div>
                            
                            <!-- titular -->
                            <div class="mb-3">
                                <label class="form-label">Nombre del Titular</label>
                                <input type="text" name="nombre_titular" class="form-control" 
                                       placeholder="Como aparece en la tarjeta">
                            </div>

                            <!-- Cantidad de cuotas (solo para débito) -->
                            <div id="campo_cuotas" class="mb-3" style="display: none;">
                                <label class="form-label">Cantidad de cuotas</label>
                                <select name="cuotas" class="form-select">
                                    <option value="">Seleccionar...</option>
                                    <option value="1">1 cuota</option>
                                    <option value="3">3 cuotas</option>
                                    <option value="6">6 cuotas</option>
                                    <option value="12">12 cuotas</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Forma de Envío -->
                    <div class="mb-3">
                        <label class="form-label">Dirección de Envío:</label>
                        <select name="forma_de_envio" id="forma_envio" class="form-select" required>
                            <option value="">Seleccionar...</option>
                            <option value="Envío a Domicilio">Envío a Domicilio</option>
                            <option value="Retiro en Tienda">Retiro en Tienda</option>
                        </select>
                    </div>
                    
                    <!-- Dirección de envío -->
                    <div id="direccion_envio" style="display: none;">
                        <div class="mb-3">
                            <label class="form-label">Dirección Completa</label>
                            <textarea name="direccion" class="form-control" rows="3" 
                                      placeholder="Calle, número, departamento, ciudad"></textarea>
                        </div>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn standard-button">Confirmar Compra</button>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
</div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    
    const formaPago = document.getElementById('forma_pago');
    const camposTarjeta = document.getElementById('campos_tarjeta');
    const campoCuotas = document.getElementById('campo_cuotas');
    const formaEnvio = document.getElementById('forma_envio');
    const direccionEnvio = document.getElementById('direccion_envio');

    // Mostrar/ocultar campos de tarjeta y cuotas según método de pago
    if (formaPago && camposTarjeta) {
        formaPago.addEventListener('change', function() {
            const esTarjeta = this.value.includes('Tarjeta');
            camposTarjeta.style.display = esTarjeta ? 'block' : 'none';

            // Mostrar cuotas solo si es débito
            if (campoCuotas) {
                campoCuotas.style.display = (this.value === 'Tarjeta de Débito') ? 'block' : 'none';
                const selectCuotas = campoCuotas.querySelector('select');
                if (selectCuotas) selectCuotas.required = (this.value === 'Tarjeta de Débito');
            }

            // Hacer campos de tarjeta requeridos solo si son visibles
            const campos = camposTarjeta.querySelectorAll('input, textarea');
            campos.forEach(campo => campo.required = esTarjeta);
        });
    }

    // Mostrar/ocultar dirección según método de envío
    if (formaEnvio && direccionEnvio) {
        formaEnvio.addEventListener('change', function() {
            const mostrarDireccion = this.value === 'Envío a Domicilio';
            direccionEnvio.style.display = mostrarDireccion ? 'block' : 'none';
            const textarea = direccionEnvio.querySelector('textarea');
            if (textarea) textarea.required = mostrarDireccion;
        });
    }

    // Formatear número de tarjeta (agregar espacios cada 4 dígitos)
    const inputTarjeta = document.querySelector('input[name="numero_tarjeta"]');
    if (inputTarjeta) {
        inputTarjeta.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            let formatted = '';
            for (let i = 0; i < value.length; i++) {
                if (i > 0 && i % 4 === 0) formatted += ' ';
                formatted += value[i];
            }
            e.target.value = formatted;
        });
    }

    // Formatear fecha de vencimiento (MM/AA)
    const inputVencimiento = document.querySelector('input[name="fecha_vencimiento"]');
    if (inputVencimiento) {
        inputVencimiento.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 2) {
                value = value.substring(0, 2) + '/' + value.substring(2, 4);
            }
            e.target.value = value;
        });
    }
});
</script>