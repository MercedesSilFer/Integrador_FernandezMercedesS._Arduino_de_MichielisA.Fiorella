<section class="container-fluid acceso" id="registrarse"> 
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
      <?php echo form_open('buscarVtaCliente', ['class' => 'section-form w-md-50', 'method' => 'post']); ?>
        <h3 class="section-title">Ingresar Cliente</h3>
        <label for="mail">
          Correo electrónico*
          <input type="email" id="mail" name="correo" class="input-styles" placeholder="juanperez432@example.com" required>
        </label>
        <br>
        <div class="button-container">
          <button id="btnRegistrarse" class="btn standard-button mt-3" type="submit">Buscar Cliente</button>
        </div>
        <?php echo form_close(); ?>
        
      
    </div>
  </div>
</section>