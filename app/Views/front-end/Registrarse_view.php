<section class= "container-fluid registrarse"> 
    <!-- FALTA MODIFICAR FONDO Y RESPONSIVIDAD DE LA SECCION. F.-->
     <div class="container-fluid ">
        <div class="row justify-content-center container-registrarse align-items-center">
            <div class="col-md-4 container-mensaje2">
                <form class="section-form" method="post">
                  
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
                      <div class="button-container">
                        <button id="btnRegistrarse"class="btn mt-4" type="submit">Registrarse</button>
                      </div>
                  </form>
            </div>
        </div>
    </div>
</section>