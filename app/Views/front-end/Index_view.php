<div class="container-fluid mt-3 justify-content-evenly"> 
    <div class="row align-items-center pb-5 justify-content-center degradado-invertido">
        <div class="col-12 col-md-10 col-lg-5 justify-content-center">            
            <h1 class="bienvenida">¡Explorá nuestro mundo!</h1>
            <br>
            <div class="sm-mx-5 sm-px-5 lg-mx-4 lg-px-4 pb-3">
                <p>Descubrí la artesanía sostenible, atemporal y única que tenemos para ofrecerte en Kurundú Cueros 
                y sumergite en la belleza del cuero genuino.
                </p>
                <p>Te invitamos a conocer más sobre nuestra filosofía y proceso creativo en la sección
                    <a class="a-parrafos" href="<?php echo base_url('nosotros'); ?>">Nosotros</a>,
                    donde te contamos sobre la pasión que hay detrás de cada creación. 
                </p>
                <hr>
                <br>
            </div>
        </div>
        
        <div class="col-12 col-md-10 col-lg-6 text-center pb-5">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner rounded-2">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="<?php echo base_url('assets/img/fotocarousel4.jpg'); ?>" class="d-block w-100 img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-2 p-4 m-4">
                            <h5>Accesorios Atemporales</h5>
                            <p class="text-white-100">La mejor calidad en carteras y mochilas de cuero</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="<?php echo base_url('assets/img/fotocarousel5.jpg'); ?>" class="d-block w-100 img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-2 p-4">
                            <h5>Diseños exclusivos</h5>
                            <p class="text-white-100">Descubre la autenticidad del cuero artesanal en cada detalle.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('assets/img/fotocarousel1.jpg'); ?>" class="d-block w-100 img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-2 p-4">
                            <h5>Cápsula Kurundú color</h5>
                            <p class="text-white-100">Exploramos el color en accesorios de tonos intensos!</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Título de lo mas comprado-->
    <div class="row justify-content-center text-center pb-5 degradado-naranja">
        <hr class="w-75 text-white pb-2">
        <div class="col-12 text-center">
            <h2 class="title-light fw-bold position-relative display-6">
                <span class="px-4 pt-1">Lo mas comprado</span>
            </h2>
            <p class="lead title-light mt-1 py-1">Descubrí los productos más populares y elegidos por nuestros clientes</p>
        </div>
         <hr class="w-75 text-white pb-5">
    </div>
    <!-- Seccion de lo mas comprado -->
    <div class="row pb-5 justify-content-center text-center degradado-invertido">
        <!-- Totebags -->
        <div class="card tarjeta-index col-12 col-md-6 col-xl-3">  
            <div class="carousel slide car" data-bs-ride="carousel">
                <div class="carousel-inner rounded-3">
                    <div class="carousel-item active">
                        <img src="<?php echo base_url('assets/img/Cartera azulXL.jpg'); ?>" class="d-block w-100 img-fluid" alt="Totebag azul" loading="lazy">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('assets/img/Cartera negra XL.jpg'); ?>" class="d-block w-100 img-fluid" alt="Totebag negra" loading="lazy">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('assets/img/Cartera marrón claro XL.jpg'); ?>" class="d-block w-100 img-fluid" alt="Totebag marrón" loading="lazy">
                    </div>
                </div>
            </div>
            <h5 class="title py-2">Tote bags</h5>
            <button class="btn btn-sm standard-button mb-1" onclick="window.location.href='<?php echo base_url('catalogo/3'); ?>'">Ver Más</button>
        </div>
        <!-- Carteras -->
        <div class="card tarjeta-index col-12 col-md-6 col-xl-3">
            <div class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner rounded-3">
                    <div class="carousel-item active">
                        <img src="<?php echo base_url('assets/img/carteraeusabiamarron.jpg'); ?>" class="d-block w-100 img-fluid" alt="Cartera marrón" loading="lazy">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('assets/img/carteraeusebiaverde.jpg'); ?>" class="d-block w-100 img-fluid" alt="Cartera verde" loading="lazy">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('assets/img/eusebiaclasica.jpg'); ?>" class="d-block w-100 img-fluid" alt="Cartera clásica" loading="lazy">
                    </div>
                </div>
            </div>
            <h5 class="title py-2">Carteras</h5>
            <button class="btn btn-sm standard-button mb-1" onclick="window.location.href='<?php echo base_url('catalogo/4'); ?>'">Ver Más</button>
        </div>
        <!-- Colección -->
        <div class="card tarjeta-index col-12 col-md-6 col-xl-3">
            <div class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner rounded-3">
                    <div class="carousel-item active">
                        <img src="<?php echo base_url('assets/img/capsula3.jpg'); ?>" class="d-block w-100 img-fluid" alt="Colección 1" loading="lazy">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('assets/img/capsula2.jpg'); ?>" class="d-block w-100 img-fluid" alt="Colección 2" loading="lazy">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('assets/img/capsula1.jpg'); ?>" class="d-block w-100 img-fluid" alt="Colección 3" loading="lazy">
                    </div>
                </div>
            </div>
            <h5 class="title py-2">Colección Kurundú</h5>
            <button class="btn btn-sm standard-button mb-1" onclick="window.location.href='<?php echo base_url('catalogo/7'); ?>'">Ver Más</button>
        </div>
        <!-- Riñoneras -->
        <div class="card tarjeta-index col-12 col-md-6 col-xl-3">
            <div class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner rounded-3">
                    <div class="carousel-item active">
                        <img src="<?php echo base_url('assets/img/bandolera4.jpg'); ?>" class="d-block w-100 img-fluid" alt="Riñonera 1" loading="lazy">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('assets/img/bandolera2.jpg'); ?>" class="d-block w-100 img-fluid" alt="Riñonera 2" loading="lazy">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('assets/img/bandolera3.jpg'); ?>" class="d-block w-100 img-fluid" alt="Riñonera 3" loading="lazy">
                    </div>
                </div>
            </div>
            <h5 class="title py-2">Riñoneras</h5>
            <button class="btn btn-sm standard-button mb-1" onclick="window.location.href='<?php echo base_url('catalogo/6'); ?>'">Ver Más</button>
        </div> 
    </div>
    <!-- Título con efecto especial -->
    <div class="row justify-content-center mb-3 pb-2 degradado-naranja">
        <hr class="w-75 text-white pt-2">
        <div class="col-12 text-center">
            <h2 class="title-light fw-bold position-relative display-5">
                <span class="px-4 py-2">Galería Kurundú</span>
            </h2>
            <p class="lead title-light mt-1">Descubrí la artesanía detrás de cada pieza</p>
        </div>
        <hr class="w-75 text-white pb-2">
            <!-- Grid de imágenes interactivo -->
        <div class="row gx-4 justify-content-center">
            <!-- Item 1 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 w-auto">
                <div class="gallery-card">
                    <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm">
                        <img src="<?php echo base_url('assets/img/galeria2.jpg'); ?>" 
                                class="img-fluid w-auto h-100 gallery-img" 
                                alt="Producto artesanal Kurundú"
                                loading="lazy">
                            <div class="gallery-overlay d-flex flex-column align-items-center justify-content-center p-3">
                                <h5 class="text-white text-center mb-3">Tote Bag Clásica</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 w-auto">
                    <div class="gallery-card">
                        <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm">
                            <img src="<?php echo base_url('assets/img/galeria5.jpg'); ?>" 
                                class="img-fluid w-100 gallery-img" 
                                alt="Cartera Kurundú"
                                loading="lazy">
                            <div class="gallery-overlay d-flex flex-column align-items-center justify-content-center p-3">
                                <h5 class="text-white text-center mb-3">Cartera Clásica</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 w-auto">
                    <div class="gallery-card">
                        <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm">
                            <img src="<?php echo base_url('assets/img/galeria6.jpg'); ?>" 
                                class="img-fluid w-100 gallery-img" 
                                alt="Riñonera artesanal"
                                loading="lazy">
                            <div class="gallery-overlay d-flex flex-column align-items-center justify-content-center p-3">
                                <h5 class="text-white text-center mb-3">Mochila Negra Clásica</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 w-auto">
                    <div class="gallery-card">
                        <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm">
                            <img src="<?php echo base_url('assets/img/galeria7.jpg'); ?>" 
                                class="img-fluid w-100 gallery-img" 
                                alt="Mochila Kurundú"
                                loading="lazy">
                            <div class="gallery-overlay d-flex flex-column align-items-center justify-content-center p-3">
                                <h5 class="text-white text-center mb-3">Mochila Viajera</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 w-auto">
                    <div class="gallery-card">
                        <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm">
                            <img src="<?php echo base_url('assets/img/galeria8.jpg'); ?>" 
                                class="img-fluid w-100 gallery-img" 
                                alt="Accesorios de cuero"
                                loading="lazy">
                            <div class="gallery-overlay d-flex flex-column align-items-center justify-content-center p-3">
                                <h5 class="text-white text-center mb-3">Cartera Azul</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 w-auto">
                    <div class="gallery-card">
                        <div class="gallery-item position-relative overflow-hidden rounded-3 shadow-sm">
                            <img src="<?php echo base_url('assets/img/galeria4.jpg'); ?>" 
                                class="img-fluid w-100 gallery-img" 
                                alt="Detalle artesanal"
                                loading="lazy">
                            <div class="gallery-overlay d-flex flex-column align-items-center justify-content-center p-3">
                                <h5 class="text-white text-center mb-3">Mochila Negra</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="text-center mt-5 py-4">
            <button class="btn standard-button btn-lg px-5 py-2 rounded-pill shadow-sm hover-effect" 
                    onclick="window.location.href='<?php echo base_url('catalogo'); ?>'">
                Ver todos nuestros productos <i class="bi bi-arrow-right ms-2"></i>
            </button>
        </div>
    </div>

    <div class="row text-center mt-3 mb-3 pt-3 pb-3 align-items-center">
        <hr> 
        <div class="col-sm-12 col-md-6 col-xxl-6 mt-2">
            <img src="<?php echo base_url('assets/img/feriapurodiseño1.jpg'); ?>" class="d-block w-100 img-fluid" alt="...">  
        </div>     
        <div class="col-sm-12 col-md-6 col-xxl-5 mt-2 text-center">
            <h2 class="title fw-bold position-relative display-5">
                <span class="px-4 pb-3">Tendencias & Noticias</span>
            </h2>
            <p class="lead title mt-1">Participamos en diversos desfiles y ferias artesanales, exponiendo nuestro espíritu 
                emprendedor en eventos locales, provinciales y nacionales.</p>
            <p class="lead title mt-1">Te invitamos a conocer más sobre nuestras últimas participaciones y eventos en la sección
                <a class="a-parrafos" href="<?php echo base_url('eventos'); ?>">Eventos</a>.</p>
            <p class="lead title mt-1">¡Sumate a nuestra comunidad y sé parte de la experiencia Kurundú!</p>
            <br>
            <button class="btn standard-button btn-lg px-5 py-2 rounded-pill shadow-sm hover-effect" 
                    onclick="window.location.href='<?php echo base_url('eventos'); ?>'">
                Ver Eventos <i class="bi bi-arrow-right ms-2"></i>
            </button>
        </div>
    </div>
</div>
