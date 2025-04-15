
<div class="container"> 
    <h1 class="text-center"><?php echo "Bienvenido" ; ?></h1>
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicadores -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="2"></button>
    </div>
    
    <!-- Slides -->
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url('https://via.placeholder.com/1920x1080?text=Producto+1')">
            <img src="<?php echo base_url("assets/img/Imagen1carousel.jpg");?>" class="d-block w-100" alt="...">    
                <a href="#" class="btn btn-primary">Ver más</a>
        </div>
        
        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url('https://via.placeholder.com/1920x1080?text=Producto+2')">
        <img src="<?php echo base_url("assets/img/Imagen2carousel.jpg");?>" class="d-block w-100" alt="...">
            <a href="#" class="btn btn-primary">Ver más</a>
        </div>
        
        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url('https://via.placeholder.com/1920x1080?text=Producto+3')">
            <img src="<?php echo base_url("assets/img/Imagen3Carousel.jpg");?>" class="d-block w-100" alt="...">
            <a href="#" class="btn btn-primary">Ver más</a>
        </div>
    </div>
    
    <!-- Controles -->
    <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>
</div>