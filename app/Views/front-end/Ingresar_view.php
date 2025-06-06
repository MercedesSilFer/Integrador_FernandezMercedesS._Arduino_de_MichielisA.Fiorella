<section class= "container-fluid acceso h-100 py-5" id="ingresar"> 
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
         
    </div>
    <div class="col-md-4 container-mensaje my-5 py-4 w-md-50">
        <?php if (session('contenido_mensaje')) { ?>
            <div class="alert alert-light m-2" role="alert">
              <?php echo session('contenido_mensaje'); ?>
            </div>
          <?php } ?>
     <?php echo form_open('ingresar', ['class' => 'section-form', 'method' => 'post']); ?> 
        <h3 class="section-title mt-3">Iniciar sesión</h3>
        <br>
        <label for="mail"class="">
          Correo electrónico
          <input type="email" id="mail" name="email" class="input-styles" placeholder="juanperez432@example.com" required>
        </label>
        <br>
        <label for="passwordUsuario">
            Contraseña
            <input type="password" id="passwordUsuario"name="password" class="input-styles" placeholder=" " required>
        </label>
          <br>
          <div class="button-container mb-4">
            <button id="btnRegistrarse"class="btn standard-button mt-3" type="submit">Ingresar</button>
            <?php echo form_close(); ?>
          </div>
      
    </div>
   
  </div>
</section>