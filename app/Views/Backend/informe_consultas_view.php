<section>
    <div class="container">
        <h1 class="text-center my-4 title">Listado de Consultas</h1>
        <div class="table-responsive">
            <table id="mytable" class="table table-bordered table-hover table-light">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Mensaje</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($consultas)): ?>
                        <?php foreach ($consultas as $row): ?>
                            <tr>
                                <td><?= esc($row['nombre_remitente']) ?></td>
                                <td><?= esc($row['apellido_remitente']) ?></td>
                                <td><?= esc($row['email_mensaje']) ?></td>
                                <td class="text-wrap" style="max-width: 250px; word-break: break-word;"><?= esc($row['contenido_mensaje']) ?></td>
                                <td class="text-center"><button class="btn standard-button">Por leer</button></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-center">No hay consultas registradas.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>