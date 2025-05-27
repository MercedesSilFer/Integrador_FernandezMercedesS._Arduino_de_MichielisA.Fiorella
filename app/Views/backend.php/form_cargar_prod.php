<section class="container-fluid acceso" id=" ">
  <div class="row justify-content-center align-items-center">
    <div class="col-md-4 container-mensaje">
      <?php echo form_open('cargar', ['class' => 'section-form w-md-50', 'method' => 'post', 'enctype' => 'multipart/form-data']); ?>
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

        <label for="categoria">
          Selecciona una categoría*
          <select id="numeroCategoria" name="categoria">
            <option value="1">1_</option>
            <option value="2">2_</option>
            <option value="3">3_</option>
            <option value="4">4_</option>
            <option value="5">5_</option>
          </select>
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
          <input type="file" class="form-control" id="imagenProducto" name="imagenProducto" accept="image/*" required>
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