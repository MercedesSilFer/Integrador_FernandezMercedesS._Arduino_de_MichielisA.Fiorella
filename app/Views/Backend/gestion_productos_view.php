<div class="container">
    <h1 class="text-center my-4">Listado de Productos</h1>
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
  <div class="table-responsive">
     <table id="mytable" class="table table-bordered table-hover table-light text-center">
        <thead class=" ">
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Categoría</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Imagen</th>
            <th>Editar</th>
            <th>Activar/Eliminar</th>
        </thead> 
        <tbody>
            <?php foreach ($productos as $row){?>
                <tr>
                    <td><?php echo $row['nombre_producto']; ?></td>
                    <td><?php echo $row['descripcion_producto']; ?></td>
                    <td><?php echo $row['nombre_categoria']; ?></td>
                    <td><?php echo $row['precio_producto']; ?></td>
                    <td><?php echo $row['stock_producto']; ?></td>
                    <td><img src="<?php echo base_url('assets/uploads/' . $row['imagen_producto']); ?>" alt="Imagen del producto" class="img-thumbnail" style="max-width: 100px;"></td>
                    <td><a href="<?php echo base_url('editarProducto/' . $row['id_producto']); ?>" class="btn standard-button">Editar</a></td> 

                    <?php if ($row['estado_producto'] == 1) { ?>

                    <td><a href="<?php echo base_url('eliminarProducto/' . $row['id_producto']); ?>" class="btn">Eliminar</a>
                    </td>
                    
                    <?php } else { ?>
                    <td><a href="<?php echo base_url('activarProducto/' . $row['id_producto']); ?>" class="btn btn-light">Activar</a>
                    </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>                 

    </table>
  </div>
</div>