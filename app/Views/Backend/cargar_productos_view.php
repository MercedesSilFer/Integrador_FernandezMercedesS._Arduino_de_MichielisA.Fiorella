<section class="container-fluid acceso" id=" ">
  <div class="row justify-content-center align-items-center">
    <div class="col-12 mt-2">
          <?php if (!empty ($validation)) : ?>
            <div class="alert alert-danger m-3" role="alert">
              <ul>
                <?php foreach ($validation as $error) : ?>
                 <li><?= esc($error) ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif ?>

         <?php if (session('contenido_mensaje')) { ?>
            <div class="alert alert-light m-2" role="alert">
              <?php echo session('contenido_mensaje'); ?>
            </div>
          <?php } ?>
        </div>
    <div class="col-md-4 container-mensaje">
      <?php echo form_open('cargar2', ['class' => 'section-form w-md-50', 'method' => 'post', 'enctype' => 'multipart/form-data']); ?>
        <h3 class="section-title">Alta Producto</h3>

        <label for="nombreProducto">
          Nombre*
          <input type="text" id="nombre" name="nombreProducto" class="input-styles" placeholder="Nombre del producto" required>
        </label>
        <br>

        <label for="descripcionProducto">
          Descripción*
          <textarea id="descripcionProducto" name="descripcion" class="input-styles" placeholder="Describa el producto aquí" required rows="4"></textarea>
        </label>
        <br>

        <label for="categorias">
          Categoría*
        <?php
          $lista['0'] = 'Seleccione una categoría';
          foreach ($categorias as $row){
            $categoria_id=$row['id_categoria'];
            $categoria_desc=$row['nombre_categoria'];
            $lista[$categoria_id] = $categoria_desc;
          }
          echo form_dropdown('categorias', $lista, '0', ['class' => 'form-select input-styles', 'id' => 'categorias', 'required' => 'required']);
        ?>
        </label>
        <br>

        <label for="precioProducto">
          Precio de lista*
          <input type="number" id="precioProducto" name="precioProducto" class="input-styles" placeholder="Ej: 1999.99" step="0.01" min="0" required>
        </label>
        <br>

        <label for="cantidadProducto">
          Cantidad*
          <input type="number" id="cantidadProducto" name="cantidad" class="input-styles" placeholder="Ej: 10" min="1" required>
        </label>
        <br>

        <label for="imagenProducto" class="form-label">
          Imagen del producto*
          <input type="file" class="form-control" id="imagenProducto" name="imagenProducto" value='imagen' accept="image/*" required>
        </label>
        <br>

        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="checkConfirmar" required>
          <label class="form-check-label" for="checkConfirmar">
            Confirma que deseas cargar el producto
          </label>
        </div>
        <div class="button-container">
          <button id="btnCargarProducto" class="btn mt-3" type="submit">Cargar producto</button>
        </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</section>