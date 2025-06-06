<section class="contacto container-fluid">
  
  <div class= "container container-mensaje">
    <div class="row pt-5 mt-5">
      <div class="col-12">
        <?php if (!empty ($validation)) : ?>
          <div class="alert alert-danger" role="alert">
            <ul>
              <?php foreach ($validation as $error) : ?>
                <li><?= esc($error) ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endif ?>

        <?php if (session('contenido_mensaje')):?>
          <span class="alert alert-success"> <?php echo session ('contenido_mensaje');?></span>
         <?php endif; ?>
      </div>
    </div>
  <?php echo form_open('contacto', ['class' => 'section-form', 'method' => 'post']); ?>
        <h3 class="section-title">¡Contactate con Kurundu!</h3>
        <label for="nombre" class="">
          Nombre*
          <input type="text" id="nombre" name="nombre" class="input-styles" placeholder="Juan" required>
        </label>
        <br>
        <label for="apellido" class="">
          Apellido*
          <input type="text" id="apellido" name="apellido" class="input-styles" placeholder="Perez" required>
        </label>
        <br>
        <label for="emailContacto">
          Correo electrónico*
          <input id="emailContacto" type="email" name="correo" class="input-styles" placeholder="juanperez432@example.com" required>
        </label>
        <br>
        <div class="mb-3">
          <label for="exampleFormControlTextarea" class="form-label">Mensaje*</label>
          <textarea class="input-styles-text form-control" name="mensaje" id="exampleFormControlTextarea" rows="3"></textarea>
          </div>
        <div class="button-container">
          <button id="btnContacto"class="btn standard-button mt-4" type="submit">Enviar</button>
        </div>
    <?php echo form_close(); ?>
</div>
<div class="contacto-container text-center mt-4">
  <div class="row">
    <!-- Redes Sociales -->
    <div class="col-lg-6 mb-4">
      <h5 class="fw-bold text-center mb-3">¡Unite a nuestras redes!</h5>
      <ul class="list-unstyled">
        <li class="mb-2">
          <a class="text-decoration-none d-flex justify-content-center gap-2" 
             href="https://www.instagram.com/kurunducueros/" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
            </svg>
            @kurunducueros
          </a>
        </li>
        <li>
          <a class="text-decoration-none d-flex justify-content-center gap-2" 
             href="https://www.facebook.com/kurunducueros/" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
            </svg>
            Kurundu Cueros
          </a>
        </li>
      </ul>
    </div>

    <!-- Email y whatsapp-->
    <div class="col-lg-6 mb-4">
      <h5 class="fw-bold mb-3">Otras formas de contactarnos</h5>
      <div class="d-flex justify-content-center gap-2">
      
        
        
        <ul class="list-unstyled">
        <li class="mb-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope pt-1" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"></path>
          </svg>
          <a href="mailto:kurundudemismanos@gmail.com"  target="_blank">kurundudemismanos@gmail.com</a>
        </li>
        <li>
        <div class="d-flex align-items-center gap-2 mb-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
          </svg>
          <a href="https://wa.me/5493794676021 " class="text-decoration-none"  target="_blank">+54 9 379 4676021 
          </a>
        </div>
        </li>
      </ul>
      </div>
    </div>
  </div>
  
  <!-- Mapa -->
  <div class="row justify-content-center">
    <div class="col-9 align-items-center">
      <h5 class="fw-bold mb-3">Donde encontrarnos</h5>
      <div class="d-flex justify-content-center gap-2 mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
          <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"></path>
          <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"></path>
        </svg>
        <a href="https://www.google.com/maps/place/Kurund%C3%BA+cueros/@-27.4824933,-58.7744556,17.38z/data=!4m6!3m5!1s0x94456b015176fedd:0x3481552506c84ebf!8m2!3d-27.4821249!4d-58.7754794!16s%2Fg%2F11kl7x59g3?entry=ttu&amp;g_ep=EgoyMDI1MDQwOS4wIKXMDSoASAFQAw%3D%3D" class="text-decoration-none">
          Enrique Jasid 6058, Corrientes, Argentina
        </a>
      </div>
      <div class="ratio ratio-16x9 rounded">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.586869250758!2d-58.77806812486254!3d-27.482118317234907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456b015176fedd%3A0x3481552506c84ebf!2sKurund%C3%BA%20cueros!5e0!3m2!1ses!2sar!4v1744931312518!5m2!1ses!2sar" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </div>
</div>
</section>