<div class="container-fluid acceso" id="buscarVtasPto"> 
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
      <?php echo form_open('buscarVtaProd', ['class' => 'section-form w-md-50', 'method' => 'post']); ?>
        <h3 class="section-title">Ingresar Producto</h3>
        
        <label for="codigo">
            Código del Producto*
            <input type="text" id="codigo" name="codigo" class="input-styles" placeholder="Código del producto">
        </label>
        <br>

        <div class="button-container">
          <button id="btnBuscarProdVendido" class="btn standard-button mt-3" type="submit">Buscar Producto</button>
        </div>
        <?php echo form_close(); ?>
        
      
    </div>
  </div>
</section>