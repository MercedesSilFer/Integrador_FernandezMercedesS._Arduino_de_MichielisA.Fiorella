<section class= "container-fluid acceso" id="registrarse"> 
  <div class="row justify-content-center align-items-center">
    <div class="col-md-4 container-mensaje">
      <form class="section-form w-md-50" method="post">
        <h3 class="section-title">Registrarse</h3>
        <label for="nombreApellido"class="">
          Nombre y apellido*
          <input type="text" id="nombreApellido" name="nombre" class="input-styles" placeholder="Juan Perez" required>
        </label>
        <br>
        <label for="cuilUsuario"class="">
          CUIL*
          <input type="text" id="cuilUsuario" name="cuil" class="input-styles" placeholder="XXXXXXXXXXX" pattern="\d{11}" title="El CUIL debe tener 11 dígitos" required>
        </label>
          <br>
        <label for="domicilioUsuario"class="">
          Domicilio*
          <input type="text" id="domicilioUsuario" name="domicilio" class="input-styles" placeholder="Calle Falsa 123" required>
        </label>
        <br>
        <label for="mail"class="">
          Correo electrónico*
          <input type="email" id="mail" name="email" class="input-styles" placeholder="juanperez432@example.com" required>
        </label>
        <br>
        <label for="passwordUsuario">
            Contraseña*
            <input type="password" id="passwordUsuario"name="password" class="input-styles" placeholder=" " required>
        </label>
        <br>
        <label for="validarPassword"class="">
              Repetir contraseña*
              <input type="password" id="validarPassword" name="password" class="input-styles" placeholder=" " required>
          </label>
          <br>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="checkTerminos">
            <label class="form-check-label" for="checkTerminos" required>
              Acepto los <a class="a-parrafos" href="<?php echo base_url('terminos-y-condiciones'); ?>"> términos y condiciones de uso</a>
            </label>
          </div>
          <div class="button-container">
            <button id="btnRegistrarse"class="btn mt-3" type="submit">Registrarse</button>
          </div>
      </form>
    </div>
  </div>
</section>