<section class= "container-fluid acceso h-100 py-5" id="ingresar"> 
  <div class="row justify-content-center align-items-center">
    <div class="col-md-4 container-mensaje my-5 py-4 w-md-50">
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
            <button id="btnRegistrarse"class="btn mt-3" type="submit">Ingresar</button>
          </div>
      <?php echo form_close(); ?>
    </div>
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

          <?php if (session('contenido_mensaje')) {
            echo session ('contenido_mensaje');
          }?>
    </div>
  </div>
</section>