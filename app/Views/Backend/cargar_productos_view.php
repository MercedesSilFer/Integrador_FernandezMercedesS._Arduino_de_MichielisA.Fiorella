<section class="container-fluid py-5 bg-cuero">
  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8 col-12">
      <!-- Alertas de validación y mensajes -->
      <?php if (!empty($validation)) : ?>
        <div class="alert alert-warning alert-dismissible fade show mb-4 bg-light border-danger text-dark">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <h5 class="alert-heading text-danger">¡Error en el formulario!</h5>
          <ul class="mb-0 text-dark">
            <?php foreach ($validation as $error) : ?>
              <li><?= esc($error) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif ?>

      <?php if (session('contenido_mensaje')) : ?>
        <div class="alert alert-success alert-dismissible fade show mb-4 bg-light border-success text-dark">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <i class="bi bi-check-circle-fill me-2 text-success"></i>
          <?= session('contenido_mensaje') ?>
        </div>
      <?php endif ?>

      <!-- Tarjeta del formulario -->
      <div class="section-form w-100 h-auto">
        <?= form_open('cargar2', ['class' => 'needs-validation', 'method' => 'post', 'enctype' => 'multipart/form-data', 'novalidate' => '']) ?>
          <h2 class="card-title text-center mb-4 text-brown">Agregar un producto</h2>
            <hr class="border-brown opacity-50 mb-4">
            
            <div class="row g-3">
              <!-- Nombre del producto -->
              <div class="col-md-12">
                <label for="nombreProducto" class="form-label fw-medium text-brown">Nombre del producto*</label>
                <input type="text" class="form-control border-secondary bg-light" id="nombreProducto" name="nombreProducto" required>
                <div class="invalid-feedback text-danger">
                  Por favor ingresa el nombre del producto.
                </div>
              </div>
              
              <!-- Descripción -->
              <div class="col-md-12">
                <label for="descripcionProducto" class="form-label fw-medium text-brown">Descripción*</label>
                <textarea class="form-control border-secondary bg-light" id="descripcionProducto" name="descripcion" rows="4" placeholder="Describa las características del producto" required></textarea>
                <div class="invalid-feedback text-danger">
                  Por favor ingresa una descripción del producto.
                </div>
              </div>
              
              <!-- Categoría -->
              <div class="col-md-6">
                <label for="categorias" class="form-label fw-medium text-brown">Categoría*</label>
                <?php
                  $lista['0'] = 'Seleccione una categoría';
                  foreach ($categorias as $row) {
                    $lista[$row['id_categoria']] = $row['nombre_categoria'];
                  }
                  echo form_dropdown('categorias', $lista, '0', [
                    'class' => 'form-select border-secondary bg-light', 
                    'id' => 'categorias', 
                    'required' => 'required'
                  ]);
                ?>
                <div class="invalid-feedback text-danger">
                  Por favor selecciona una categoría.
                </div>
              </div>
              
              <!-- Precio -->
              <div class="col-md-6">
                <label for="precioProducto" class="form-label fw-medium text-brown">Precio de lista*</label>
                <div class="input-group">
                  <span class="input-group-text bg-light border-secondary text-brown">$</span>
                  <input type="number" class="form-control border-secondary bg-light" id="precioProducto" name="precioProducto" 
                         placeholder="0.00" step="0.01" min="0" required>
                </div>
                <div class="invalid-feedback text-danger">
                  Por favor ingresa un precio válido.
                </div>
              </div>
              
              <!-- Cantidad -->
              <div class="col-md-6">
                <label for="cantidadProducto" class="form-label fw-medium text-brown">Cantidad*</label>
                <input type="number" class="form-control border-secondary bg-light" id="cantidadProducto" name="cantidad" 
                       placeholder="Ej: 10" min="1" required>
                <div class="invalid-feedback text-danger">
                  Por favor ingresa una cantidad válida.
                </div>
              </div>
              
              <!-- Imagen -->
              <div class="col-md-6">
                <label for="imagenProducto" class="form-label fw-medium text-brown">Imagen del producto*</label>
                <input type="file" class="form-control border-secondary bg-light" id="imagenProducto" name="imagenProducto" 
                       accept="image/*" required>
                <small class="text-muted text-brown">Formatos aceptados: JPG, PNG, GIF</small>
                <div class="invalid-feedback text-danger">
                  Por favor selecciona una imagen para el producto.
                </div>
              </div>
              
              <!-- Checkbox de confirmación -->
              <div class="col-12 mt-3">
                <div class="form-check">
                  <input class="form-check-input border-secondary" type="checkbox" value="" id="checkConfirmar" required>
                  <label class="form-check-label text-brown" for="checkConfirmar">
                    Confirmo que deseo cargar este producto
                  </label>
                  <div class="invalid-feedback text-danger">
                    Debes confirmar para continuar.
                  </div>
                </div>
              </div>
              
              <!-- Botón de enviar -->
              <div class="col-12 text-center mt-4">
                <button class="btn btn-success px-5 py-2 bg-orange border-orange" type="submit" id="btnCargarProducto">
                  <i class="bi bi-upload me-2"></i> Cargar producto
                </button>
              </div>
            </div>  
          <?= form_close() ?>
      </div>
    </div>
  </div>
</section>