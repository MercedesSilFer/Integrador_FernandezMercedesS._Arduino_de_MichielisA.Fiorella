<div class="container-fluid px-5">
    <h1 class="text-center my-4 title">Listado de Productos</h1>
    <div class="table-responsive">
        <table id="mytable" class="table table-bordered table-hover table-light text-center">
            <thead class=" ">
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Imagen</th>
            </thead> 
            <tbody class="text-wrap" style="max-width: 100px; word-break: break-word;">
                <?php foreach ($productos as $row){?>
                    <tr>
                        <td><?php echo $row['nombre_producto']; ?></td>
                        <td><?php echo $row['descripcion_producto']; ?></td>
                        <td><?php echo $row['nombre_categoria']; ?></td>
                        <td><?php echo '$' . number_format($row['precio_producto'], 2, ',', '.'); ?></td>
                        <td><?php echo $row['stock_producto']; ?></td>
                        <td><img src="<?php echo base_url('assets/uploads/' . $row['imagen_producto']); ?>" alt="Imagen del producto" class="img-thumbnail" style="max-width: 100px;"></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>