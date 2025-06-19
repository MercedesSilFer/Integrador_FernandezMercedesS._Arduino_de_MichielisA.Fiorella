<div class="container-fluid py-4 bg-cuero">
    <div class="row justify-content-center mx-0">
        <div class="col-12 col-lg-8 col-xl-6 px-0">
            <div class="section-form w-100 h-auto p-4 p-md-5 shadow-lg rounded-3 mx-auto" style="max-width: 800px;">
                <!-- Header -->
                <div class="text-center mb-4">
                    <h2 class="title mb-3">Perfil de Usuario</h2>
                    <h4 class="title mb-2"><?= session('nombre_sesion'); ?>, aquí puedes ver y editar tu perfil.</h4>
                    <hr class="estilo-linea my-3">
                </div>
                
                <!-- Alerts -->
                <div class="w-100 mb-4">
                    <?php if (!empty($validation)) : ?>
                        <div class="alert alert-danger alert-dismissible fade show rounded-3" role="alert">
                            <ul class="mb-0 ps-3">
                                <?php foreach ($validation as $error) : ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <?php if (session('contenido_mensaje')) { ?>
                        <div class="alert alert-light alert-dismissible fade show rounded-3" role="alert">
                            <?= session('contenido_mensaje'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
                </div>
                
                <!-- Form -->
                <div class="w-100">
                    <?= form_open('actualizarPerfil', ['method' => 'post', 'class' => 'needs-validation', 'novalidate' => '']); ?>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" id="nombreUsuario" name="nombreUsuario" 
                                           class="form-control input-styles" 
                                           value="<?= esc($usuario['nombre_persona']) ?>" required>
                                    <label for="nombreUsuario">Nombre</label>
                                    <div class="invalid-feedback">
                                        Por favor ingresa tu nombre.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" id="apellidoUsuario" name="apellidoUsuario" 
                                           class="form-control input-styles" 
                                           value="<?= esc($usuario['apellido_persona']) ?>" required>
                                    <label for="apellidoUsuario">Apellido</label>
                                    <div class="invalid-feedback">
                                        Por favor ingresa tu apellido.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" id="emailUsuario" name="emailUsuario" 
                                           class="form-control input-styles" 
                                           value="<?= esc($usuario['email_persona']) ?>" required>
                                    <label for="emailUsuario">Email</label>
                                    <div class="invalid-feedback">
                                        Por favor ingresa un email válido.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" id="telefono" name="telefono" class="form-control input-styles" 
                                    value="<?= esc($usuario['telefono_persona']) ?>" required>
                                    <label for="telefono">Teléfono</label>
                                    <div class="invalid-feedback">
                                        Por favor ingresa tu teléfono.
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-5 pt-2 gap-3">
                            <button type="button" class="btn btn-outline-secondary rounded-3 flex-grow-1 w-100 py-2" 
                                    data-bs-toggle="modal" data-bs-target="#passwordModal">
                                <i class="bi bi-key me-2"></i> Cambiar contraseña
                            </button>
                            
                            <button type="submit" class="btn btn-success rounded-3 flex-grow-1 w-100 py-2">
                                <i class="bi bi-save me-2"></i> Actualizar Perfil
                            </button>
                        </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Password Modal -->
<div class="modal fade" id="passwordModal" tabindex="-1" aria-labelledby="passwordModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header bg-light">
                <h5 class="modal-title title" id="passwordModalLabel">
                    <i class="bi bi-shield-lock me-2"></i> Cambiar contraseña
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <?= form_open('actualizarPerfil', ['id' => 'passwordForm']); ?>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control input-styles" name="currentPassword" id="currentPassword" required>
                        <label for="currentPassword">Contraseña actual</label>
                        <?php if (isset($validation) && $validation->hasError('currentPassword')): ?>
                            <div class="text-danger small mt-1"><?= $validation->getError('currentPassword') ?></div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control input-styles" name="newPassword" id="newPassword" required>
                        <label for="newPassword">Nueva contraseña</label>
                        <?php if (isset($validation) && $validation->hasError('newPassword')): ?>
                            <div class="text-danger small mt-1"><?= $validation->getError('newPassword') ?></div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control input-styles" name="confirmPassword" id="confirmPassword" required>
                        <label for="confirmPassword">Confirmar nueva contraseña</label>
                        <?php if (isset($validation) && $validation->hasError('confirmPassword')): ?>
                            <div class="text-danger small mt-1"><?= $validation->getError('confirmPassword') ?></div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="d-flex justify-content-end gap-3 pt-2">
                        <button type="button" class="btn btn-outline-danger rounded-3 px-4" data-bs-dismiss="modal">
                            Cancelar
                        </button>
                        <button type="submit" class="btn btn-success rounded-3 px-4">
                            <i class="bi bi-check-lg me-1"></i> Guardar
                        </button>
                    </div>
                <?= form_close(); ?>
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