<div class="container-fluid mt-3"> 


    <div class="row gx-0 align-items-center justify-content-evenly">
        <div class="col-12 col-md-10 col-lg-5 justify-content-center">            
            <h1 class="bienvenida">¡Explorá nuestro mundo!</h1>
            <br>
            <div class="sm-mx-5 sm-px-5 lg-mx-4 lg-px-4">

                <p>Descubrí la artesanía sostenible, atemporal y única que tenemos para ofrecerte en Kurundú Cueros 
                y sumergite en la belleza del cuero genuino.
                </p>
                <p>Te invitamos a conocer más sobre nuestra filosofía y proceso creativo en la sección
                    <a class="a-parrafos" href="<?php echo base_url('nosotros'); ?>">Nosotros</a>,
                    donde te contamos sobre la pasión que hay detrás de cada creación. 
                </p>
                <br>
                <hr>
            </div>
        </div>
        
        <div class="col-12 col-md-10 col-lg-6 text-center">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner rounded-2">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="<?php echo base_url('assets/img/fotocarousel4.jpg'); ?>" class="d-block w-100 img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-2 p-4 m-4">
                            <h5>Accesorios Atemporales!!</h5>
                            <p class="text-white-100">La mejor calidad en carteras y mochilas de cuero</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="<?php echo base_url('assets/img/fotocarousel5.jpg'); ?>" class="d-block w-100 img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-2 p-4">
                            <h5>Diseños exclusivos!!</h5>
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

    <div class="container-fluid py-5 my-3 text-center">
        <h2 class="mb-4 title">Lo Más Comprado</h2>
        <div class="row g-3 justify-content-center">
            <!-- Totebags -->
            <div class="card col-12 col-md-6 col-xl-3">
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
                <button class="btn btn-sm standard-button mb-3" onclick="window.location.href='<?php echo base_url('catalogo/3'); ?>'">Ver Más</button>
            </div>

            <!-- Carteras -->
            <div class="card col-12 col-md-6 col-xl-3">
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
                <button class="btn btn-sm standard-button mb-3" onclick="window.location.href='<?php echo base_url('catalogo/4'); ?>'">Ver Más</button>
            </div>

            <!-- Colección -->
            <div class="card col-12 col-md-6 col-xl-3">
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
                <button class="btn btn-sm standard-button mb-3" onclick="window.location.href='<?php echo base_url('catalogo/7'); ?>'">Ver Más</button>
            </div>

            <!-- Riñoneras -->
            <div class="card col-12 col-md-6 col-xl-3">
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
                <button class="btn btn-sm standard-button mb-3" onclick="window.location.href='<?php echo base_url('catalogo/6'); ?>'">Ver Más</button>
            </div>
        </div>
    </div>

    <hr class="bg-light opacity-25 my-1">
    <div class="container-fluid text-center mt-3 mb-5 pt-5 pb-5">
        <h2 class="title">Galería</h2>
        <div class="row align-items-center">
            <div class="col-12 col-md-6 col-lg-4 col-xl-4 col-xxl-2 mt-2">
                <img src="<?php echo base_url('assets/img/galeria2.jpg'); ?>" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-4 col-xxl-2 mt-2">
                <img src="<?php echo base_url('assets/img/galeria5.jpg'); ?>" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-4 col-xxl-2 mt-2">
                <img src="<?php echo base_url('assets/img/galeria6.jpg'); ?>" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-4 col-xxl-2 mt-2">
                <img src="<?php echo base_url('assets/img/galeria7.jpg'); ?>" class="d-block w-100 img-fluid" alt="...">  
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-4 col-xxl-2 mt-2">
                <img src="<?php echo base_url('assets/img/galeria8.jpg'); ?>" class="d-block w-100 img-fluid" alt="...">  
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-4 col-xxl-2 mt-2">
                <img src="<?php echo base_url('assets/img/galeria4.jpg'); ?>" class="d-block w-100 img-fluid" alt="...">
            </div>
        </div>
    </div>

    <hr class="bg-light opacity-25 my-1">

    <div class="container-fluid text-center mt-3 mb-3 pt-3 pb-3">
        <h2 class="title">Tendencias & Noticias</h2>
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6 col-xxl-6 mt-2">
                <img src="<?php echo base_url('assets/img/feriapurodiseño1.jpg'); ?>" class="d-block w-100 img-fluid" alt="...">  
            </div>     
            <div class="col-sm-12 col-md-6 col-xxl-5 mt-2">
                <p>Participamos en desfiles y ferias, exponiendo nuestro espíritu emprendedor en eventos locales y nacionales.</p>
                <p><button class="btn standard-button" onclick="window.location.href='<?php echo base_url('eventos'); ?>'">Ver Mas</button></p>
                <p>Enterate de los próximos eventos en nuestras redes sociales.</p> 
            </div>
        </div>
    </div>
</div>