<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="section-form w-100 align-items-center h-auto p-3 shadow-none rounded">
                <!-- Encabezado -->
                <div class="text-center mb-4">
                    <h2 class="title mb-3">Perfil de Usuario</h2>
                    <h4 class="title mb-4"><?= session('nombre_sesion'); ?>, aquí puedes ver y editar tu perfil.</h3>
                    <hr class="estilo-linea">
                </div>
                
                <!-- Alertas -->
                <div class="w-100">
                    <?php if (!empty($validation)) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul class="mb-0">
                                <?php foreach ($validation as $error) : ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <?php if (session('contenido_mensaje')) { ?>
                        <div class="alert alert-light alert-dismissible fade show" role="alert">
                            <?= session('contenido_mensaje'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
                </div>
                
                <!-- Formulario -->
                <div class="w-100">
                    <?= form_open('actualizarPerfil', ['method' => 'post', 'class' => 'needs-validation', 'novalidate' => '']); ?>
                        <div class="mb-4">
                            <label for="nombreUsuario" class="mb-2">Nombre</label>
                            <input type="text" id="nombreUsuario" name="nombreUsuario" 
                                   class="input-styles" 
                                   value="<?= esc($usuario['nombre_persona']) ?>" required>
                            <div class="invalid-feedback">
                                Por favor ingresa tu nombre.
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="emailUsuario" class="mb-2">Email</label>
                            <input type="email" id="emailUsuario" name="emailUsuario" 
                                   class="input-styles" 
                                   value="<?= esc($usuario['email_persona']) ?>" required>
                            <div class="invalid-feedback">
                                Por favor ingresa un email válido.
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="telefono" class="mb-2">Teléfono</label>
                            <input type="tel" id="telefono" name="telefono" 
                                   class="input-styles" 
                                   value="<?= esc($usuario['telefono_persona']) ?>" required>
                            <div class="invalid-feedback">
                                Por favor ingresa tu teléfono.
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center mt-4 pt-3">
                            <button type="button" class="standard-button-outline" data-bs-toggle="modal" data-bs-target="#passwordModal">
                                Cambiar contraseña
                            </button>
                            
                            <button type="submit" class="standard-button px-4 py-2">
                                Actualizar Perfil
                            </button>
                        </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal para cambiar contraseña -->
<div class="modal fade" id="passwordModal" tabindex="-1" aria-labelledby="passwordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="title" id="passwordModalLabel">Cambiar contraseña</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="passwordForm">
                    <div class="mb-3">
                        <label for="currentPassword" class="mb-2">Contraseña actual</label>
                        <input type="password" class="input-styles" id="currentPassword" required>
                    </div>
                    <div class="mb-3">
                        <label for="newPassword" class="mb-2">Nueva contraseña</label>
                        <input type="password" class="input-styles" id="newPassword" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="mb-2">Confirmar nueva contraseña</label>
                        <input type="password" class="input-styles" id="confirmPassword" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="standard-button-outline" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="standard-button">Guardar cambios</button>
            </div>
        </div>
    </div>
</div>
<script>
    // Validación de formulario
    (function() {
        'use strict'
        
        const forms = document.querySelectorAll('.needs-validation')
        
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>