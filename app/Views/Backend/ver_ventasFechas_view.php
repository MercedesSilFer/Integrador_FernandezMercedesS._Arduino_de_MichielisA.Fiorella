<section class="container-fluid acceso" id="buscarFechas"> 
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
      <?php echo form_open('buscarVentasFecha', ['class' => 'section-form w-md-50', 'method' => 'post']); ?>
        <h3 class="section-title">Seleccionar Fechas</h3>
      
        <label for="fechaInicio">
          Fecha de Inicio*
          <input type="date" id="fechaInicio" name="fecha_inicio" class="input-styles" required>
        </label>
        <br>
        <label for="fechaFin">
            Fecha de Fin*
            <input type="date" id="fechaFin" name="fecha_fin" class="input-styles" required>
        </label>
        <br>
        <div class="button-container">
          <button id="btnBuscarFecha" class="btn standard-button mt-3" type="submit">Buscar Ventas</button>
        </div>
        <?php echo form_close(); ?>
        
      
    </div>
  </div>
</section>