<div class="container-fluid px-0">
    <!-- Carousel principal-->
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicadores -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        
        <!-- Slides -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="position-relative h-100">
                    <!-- Solo una imagen por slide -->
                    <img src="<?php echo base_url('assets/img/Imagen1carousel.jpg'); ?>" 
                         class="d-block w-100 img-fluid carousel-image" 
                         alt="Descripción detallada del producto 1">
                </div>
            </div>
            
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="position-relative h-100">
                    <img src="<?php echo base_url('assets/img/Imagen2carousel.jpg'); ?>" 
                         class="d-block w-100 img-fluid carousel-image" 
                         alt="Descripción detallada del producto 2">
                </div>
            </div>
            
            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="position-relative h-100">
                    <img src="<?php echo base_url('assets/img/Imagen3Carousel.jpg'); ?>" 
                         class="d-block w-100 img-fluid carousel-image" 
                         alt="Descripción detallada del producto 3">
                </div>
            </div>
        </div>
        
        <!-- Controles de navegación con etiquetas ARIA -->
        <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div>