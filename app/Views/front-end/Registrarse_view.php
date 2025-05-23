<section class="container-fluid acceso" id="registrarse"> 
  <div class="row justify-content-center align-items-center">
    <div class="col-md-4 container-mensaje">
      <?php echo form_open('registrarse', ['class' => 'section-form w-md-50', 'method' => 'post']); ?>
        <h3 class="section-title">Registrarse</h3>
        <label for="nombre">
          Nombre*
          <input type="text" id="nombre" name="nombre" class="input-styles" placeholder="Juan" required>
        </label>
        <br>
        <label for="apellido">
          Apellido*
          <input type="text" id="apellido" name="apellido" class="input-styles" placeholder="Perez" required>
        </label>
        <br>
        <label for="cuilUsuario">
          CUIL*
          <input type="text" id="cuilUsuario" name="cuil" class="input-styles" placeholder="XXXXXXXXXXX" pattern="\d{11}" title="El CUIL debe tener 11 dígitos" required>
        </label>
        <br>
        <label for="domicilioUsuario">
          Domicilio*
          <input type="text" id="domicilioUsuario" name="domicilio" class="input-styles" placeholder="Calle Falsa 123" required>
        </label>
        <br>
        <label for="mail">
          Correo electrónico*
          <input type="email" id="mail" name="correo" class="input-styles" placeholder="juanperez432@example.com" required>
        </label>
        <br>
        <label for="passwordUsuario">
          Contraseña*
          <input type="password" id="passwordUsuario" name="contrasena" class="input-styles" required>
        </label>
        <br>
        <label for="validarPassword">
          Repetir contraseña*
          <input type="password" id="validarPassword" name="contrasena_confirm" class="input-styles" required>
        </label>
        <br>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="checkTerminos" required>
          <label class="form-check-label" for="checkTerminos">
            Acepto los <a class="a-parrafos" href="<?php echo base_url('terminos-y-condiciones'); ?>">términos y condiciones de uso</a>
          </label>
        </div>
        <div class="button-container">
          <button id="btnRegistrarse" class="btn mt-3" type="submit">Registrarse</button>
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

        <?php if (session('mensaje_mensaje')) {
          echo session ('mensaje_mensaje');
        }?>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</section>