<div class="container-fluid px-5">
    <h1 class="text-center my-4 title">Listado de Clientes</h1>
    <div class="table-responsive">
        <table id="mytable" class="table table-bordered table-hover table-light text-center">
            <thead class=" ">
                <th>ID Cliente</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cuil</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </thead> 
            <tbody class="text-wrap" style="max-width: 100px; word-break: break-word;">
                <?php foreach ($clientes as $row){?>
                    <tr>
                        <td><?php echo $row['id_persona']; ?></td>
                        <td><?php echo $row['nombre_persona']; ?></td>
                        <td><?php echo $row['apellido_persona']; ?></td>
                        <td><?php echo $row['cuil_persona']; ?></td>
                        <td><?php echo $row['email_persona']; ?></td>
                        <td><?php echo $row['telefono_persona']; ?></td>
                        <td><?php echo $row['domicilio_persona']; ?></td>
                        <?php if ($row['estado_persona'] == 1) { ?>

                        <td><a href="<?php echo base_url('eliminar_cliente/' . $row['id_persona']); ?>" class="btn">Eliminar</a>
                        </td>
                    
                        <?php } else { ?>
                        <td><a href="<?php echo base_url('activar_cliente/' . $row['id_persona']); ?>" class="btn btn-light">Activar</a>
                        </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>