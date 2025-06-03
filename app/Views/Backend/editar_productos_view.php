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
      <?php echo form_open('actualizarProducto', ['class' => 'section-form w-md-50', 'method' => 'post', 'enctype' => 'multipart/form-data']); ?>
        <h3 class="section-title">Edición de Productos</h3>

        <label for="nombreProducto">
          Nombre*
          <?php echo form_input(['name'=>'nombreProducto', 'id'=>'nombre', 'class'=>'input-styles', 'autofocus' => 'autofocus', 'value'=>$producto['nombre_producto']]); ?>          
        </label>
        <br>

        <label for="descripcionProducto">
          Descripción*
          <?php echo form_textarea(['name'=>'descripcion', 'id'=>'descripcionProducto', 'class'=>'input-styles', 'required' => 'required', 'rows' => '4', 'value'=>$producto['descripcion_producto']]); ?>
          
        </label>
        <br>

        <label for="categorias">
          Categoría*
        <?php
          $lista['0'] = 'Seleccione una categoría';
          foreach ($categorias as $row){
            $lista[$row['id_categoria']] = $row['nombre_categoria'];
          }
          $sel = $producto['id_categoria'];
          echo form_dropdown('categorias', $lista, $sel, ['class' => 'form-select input-styles', 'id' => 'categorias', 'required' => 'required']);
        ?>
        </label>
        <br>

        <label for="precioProducto">
          Precio de lista*
          <?php echo form_input(['name'=>'precioProducto', 'id'=>'precioProducto', 'class'=>'input-styles', 'value'=>number_format($producto['precio_producto'], 2, ',', '.'), 'required' => 'required', 'step' => '0.01', 'min' => '0']); ?>
        
        </label>
        <br>

        <label for="cantidadProducto">
          Cantidad*
          <?php echo form_input(['name'=>'cantidad', 'id'=>'cantidadProducto', 'class'=>'input-styles', 'value'=>$producto['stock_producto'], 'required' => 'required']); ?>
        </label>
        <br>

        <label for="imagenProducto" class="form-label">
          Imagen del producto*
          <img src="<?php echo base_url('assets/uploads/' . $producto['imagen_producto']); ?>" alt="Imagen del producto" class="img-thumbnail mb-2" style="max-width: 100px;">
          <?php echo form_input(['name'=>'imagenProducto', 'id'=>'imagenProducto', 'class'=>'form-control', 'type'=>'file', 'accept'=>'image/*']); ?>
        </label>
        <br>
        <?php echo form_hidden('idProducto', $producto['id_producto']); ?>

        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="checkConfirmar" required>
          <label class="form-check-label" for="checkConfirmar">
            Confirma que deseas modificar el producto
          </label>
        </div>
        <div class="button-container">
            <?php echo form_submit('Modificar producto', 'Modificar producto', 'id="btnCargarProducto" class="btn mt-3" type="submit" '); ?>
          
        </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</section>