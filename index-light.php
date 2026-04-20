<?php $lightMode = true;
include './layout/layoutTop.php' ?>

<style>
    .hero-area h1, .about-area h2, .service-area h2, .homeproject-area h2, .interior-area h2, .timeline-area h2, .reviews-area h2, .cta-area h2, .blog-area h2,
    .service-area h6, .homeproject-area h4, .interior-area h4, .timeline-area .title, .blog-area h6 {
        font-family: "IvyOraDisplay-Bold", "Times New Roman", serif;
    }
    body, p, span, a, li, input, button, .category-line, .sub-title {
        font-family: "HelveticaNeueLTStdRoman", "Helvetica", Arial, sans-serif;
    }
    .primary-bg, .theme-btn, .primary-readmore, .carousel-buttons button:hover, .carousel-buttons button:focus {
        background-color: #9f111b !important;
        border-color: #9f111b !important;
    }
    .theme-btn, .primary-readmore, .category-line, .sub-title { color: #9f111b; }
    .reviews-area .fa-star, .timeline-area .icon::before, .right-arrow i { color: #9f111b !important; }
    .timeline-area .icon { border-color: #1d5b3a !important; }
    .main-header .logo img { max-height: 58px; width: auto; }
</style>

<!-- Hero Section Start -->
<section class="hero-area black-120-bg">
    <div class="carousel slide" id="recipeCarousel" data-bs-ride="carousel">
        <div class=" carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url(assets/images/abatilia/hero.jpeg);">
                <div class="container pt-64 pb-64">
                    <p class="text-white category-line category-hero">TODO MÉXICO</p>
                    <h1 class="col-lg-10 text-white">Diseño y fabricación de mobiliario para tus proyectos</h1>
                    <div class="row pt-32">
                        <div class="carousel-buttons col-6">
                            <button class="prev" type="button" data-bs-target="#recipeCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                            </button>
                            <button class="" type="button" data-bs-target="#recipeCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                            </button>
                        </div>
                        <div class="small-img col-6">
                            <a href="project-details-light.php">
                                <img class="hero-img wow zoomIn" src="assets/images/abatilia/ima1.png" alt="hero image" title="hero image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url(assets/images/abatilia/ima4.jpg);">
                <div class="container pt-64 pb-64">
                    <p class="text-white category-line category-hero">PROYECTOS B2B</p>
                    <h1 class="col-lg-10 text-white">Manufactura moderna para cocinas, closets y baños</h1>
                    <div class="row pt-32">
                        <div class="carousel-buttons col-6">
                            <button class="prev" type="button" data-bs-target="#recipeCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                            </button>
                            <button class="" type="button" data-bs-target="#recipeCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                            </button>
                        </div>
                        <div class="small-img col-6">
                            <a href="project-details-light.php">
                                <img class="hero-img wow zoomIn" src="assets/images/abatilia/ima2.png" alt="hero image" title="hero image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- About Area start -->
<section class="about-area py-128 black-100-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 content pt-40">
                <div class="big-text category-line">¿POR QUÉ ABITALIA?</div>
                <div class="row pt-32">
                    <h2 class="col-md-6">Un proveedor B2B que cumple tiempos, calidad y escala</h2>
                </div>
                <div class="row pt-96 pb-64">
                    <p class="col-md-6 col-lg-3 text">Diseñamos y fabricamos mobiliario integral con foco en ejecución real de obra: menos fricción, mejor control y una experiencia premium para desarrolladoras, constructoras e interioristas en todo México.</p>
                    <img class="small-image col-md-6 col-lg-5 wow zoomIn" src="assets/images/abatilia/gallery-closet.jpg" alt="about image" title="about image">
                </div>
            </div>
            <img class="col-sm-12 col-md-6 right-image wow zoomIn" src="assets/images/abatilia/gallery-bano.jpeg" alt="about image" title="about image">
        </div>
    </div>
</section>
<!-- About Area end -->

<!-- Service Section Start -->
<section class="service-area black-120-bg py-128 justify-content-center">
    <div class="container">
        <div class="d-flex section-heading mb-96">
            <div class="section-title">
                <h2 class="wow fadeInUp delay-0-2s">Fabricación pensada para proyectos <br>con precisión y consistencia </h2>
            </div>
            <div class="carousel-buttons buttons-vertical">
                <button class="prev" type="button" data-bs-target="#servicerecipeCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                </button>
                <button class="" type="button" data-bs-target="#servicerecipeCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                </button>
            </div>
        </div>
        <div class="carousel slide" id="servicerecipeCarousel" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 item service-act">
                        <h5>01</h5>
                        <a href="project-details-light.php"><img src="assets/images/abatilia/ima1.png" alt="service image"></a>
                        <div class="carousel-caption">
                            <a href="project-details-light.php">
                                <h6 class="text-black">PROCESOS ESTANDARIZADOS</h6>
                            </a>
                            <p class="mb-16">Producción estandarizada para mantener calidad constante y entregables claros en cada etapa del proyecto.</p>
                            <a href="project-details-light.php"><span class="right-arrow text-black"><i class="fa fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 item service-act">
                        <h5>02</h5>
                        <a href="project-details-light.php"><img src="assets/images/abatilia/ima2.png" alt="service image"></a>
                        <div class="carousel-caption">
                            <a href="project-details-light.php">
                                <h6 class="text-black">DOCUMENTACIÓN POR PROYECTO</h6>
                            </a>
                            <p class="mb-16">Producción estandarizada para mantener calidad constante y entregables claros en cada etapa del proyecto.</p>
                            <a href="project-details-light.php"><span class="text-black right-arrow"><i class="fa fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 item service-act">
                        <h5>03</h5>
                        <a href="project-details-light.php"><img src="assets/images/abatilia/ima3.webp" alt="service image"></a>
                        <div class="carousel-caption">
                            <a href="project-details-light.php">
                                <h6 class="text-black">ESCALABILIDAD NACIONAL</h6>
                            </a>
                            <p class="mb-16">Producción estandarizada para mantener calidad constante y entregables claros en cada etapa del proyecto.</p>
                            <a href="project-details-light.php"><span class="text-black right-arrow"><i class="fa fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 item service-act">
                        <h5>04</h5>
                        <a href="project-details-light.php"><img src="assets/images/abatilia/ima4.jpg" alt="service image"></a>
                        <div class="carousel-caption">
                            <a href="project-details-light.php">
                                <h6 class="text-black">IMPLEMENTACIÓN POR ETAPAS</h6>
                            </a>
                            <p class="mb-16">Producción estandarizada para mantener calidad constante y entregables claros en cada etapa del proyecto.</p>
                            <a href="project-details-light.php"><span class="text-black right-arrow"><i class="fa fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Home Projects Area start -->
<section class="homeproject-area py-128">
    <div class="container">
        <div class="row rel z-1 justify-content-center">
            <div class="section-title text-center mb-96 wow fadeInUp delay-0-2s">
                <span class="sub-title mb-16">GALERÍA</span>
                <h2>Trabajos Recientes</h2>
            </div>
        </div>
        <ul class="project-filter tab-style-one justify-content-center nav nav-pills nav-fill mb-96 wow fadeInUp delay-0-4s">
            <li data-filter="*" class="nav-item current">
                <a class="nav-link">TODO</a>
            </li>
            <li class="nav-item" data-filter=".COCINAS">
                <a class="nav-link">COCINAS</a>
            </li>
            <li class="nav-item" data-filter=".CLOSETS">
                <a class="nav-link">CLOSETS</a>
            </li>
            <li class="nav-item" data-filter=".BAÑOS">
                <a class="nav-link">BAÑOS</a>
            </li>
            <li class="nav-item" data-filter=".PROYECTOS">
                <a class="nav-link">PROYECTOS</a>
            </li>
        </ul>
        <div class="row gap-128 project-active">
            <div class="col-xl-6 col-md-6 item COCINAS">
                <div class="row apartment-image wow fadeInLeft delay-0-1s">
                    <a href="project-details-light.php"><img src="assets/images/abatilia/gallery-closet.jpg" alt="Apartment"></a>
                </div>
                <div class="row apartment-content wow fadeInRight delay-0-1s rp-0">
                    <div class="pro-title text-center">
                        <a href="project-details-light.php">
                            <h4 class="text-black">COCINA CONTEMPORÁNEA</h4>
                        </a>
                        <span class="category">COCINAS</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 item CLOSETS">
                <div class="row apartment-image wow fadeInLeft delay-0-1s">
                    <a href="project-details-light.php"><img src="assets/images/abatilia/gallery-bano.jpeg" alt="Apartment"></a>
                </div>
                <div class="row apartment-content wow fadeInRight delay-0-1s rp-0">
                    <div class="pro-title text-center">
                        <a href="project-details-light.php">
                            <h4 class="text-black">CLOSETS PREMIUM</h4>
                        </a>
                        <span class="category">CLOSETS</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 item BAÑOS">
                <div class="row apartment-image wow fadeInLeft delay-0-1s">
                    <a href="project-details-light.php"><img src="assets/images/abatilia/ima1.png" alt="Apartment"></a>
                </div>
                <div class="row apartment-content wow fadeInRight delay-0-1s rp-0">
                    <div class="pro-title text-center">
                        <a href="project-details-light.php">
                            <h4 class="text-black">BAÑOS INTEGRALES</h4>
                        </a>
                        <span class="category">BAÑOS</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 item PROYECTOS">
                <div class="row apartment-image wow fadeInLeft delay-0-1s">
                    <a href="project-details-light.php"><img src="assets/images/abatilia/ima2.png" alt="Apartment"></a>
                </div>
                <div class="row apartment-content wow fadeInRight delay-0-1s rp-0">
                    <div class="pro-title text-center">
                        <a href="project-details-light.php">
                            <h4 class="text-black">IMPLEMENTACIÓN POR ETAPAS</h4>
                        </a>
                        <span class="category">PROYECTOS</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 item CLOSETS">
                <div class="row apartment-image wow fadeInLeft delay-0-1s">
                    <a href="project-details-light.php"><img src="assets/images/abatilia/ima3.webp" alt="Apartment"></a>
                </div>
                <div class="row apartment-content wow fadeInRight delay-0-1s rp-0">
                    <div class="pro-title text-center">
                        <a href="project-details-light.php">
                            <h4 class="text-black">DETALLE PREMIUM</h4>
                        </a>
                        <span class="category">CLOSETS</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 item COCINAS">
                <div class="row apartment-image wow fadeInLeft delay-0-1s">
                    <a href="project-details-light.php"><img src="assets/images/abatilia/hero.jpeg" alt="Apartment"></a>
                </div>
                <div class="row apartment-content wow fadeInRight delay-0-1s rp-0">
                    <div class="pro-title text-center">
                        <a href="project-details-light.php">
                            <h4 class="text-black">OPERACIÓN B2B</h4>
                        </a>
                        <span class="category">COCINAS</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 text-center">
            <a class="loadmore primary-readmore" href="projects.php">Ver Trabajos</a>
        </div>
    </div>
</section>
<!-- Home Projects Area end -->

<!-- Interior Projects Section Start -->
<section class="interior-area slider-horizontal black-120-bg py-128 justify-content-center">
    <div class="container-fluid">
        <div class="container rel z-1 justify-content-center text-center">
            <div class="text-center mb-96 wow fadeInUp delay-0-2s">
                <span class="sub-title mb-16">GALERÍA</span>
                <h2>Trabajos Recientes</h2>
            </div>
        </div>
        <div class="container section-heading">
            <div class="nav-fill-left">
                <ul class="tab-style-one nav interior-nav nav-pills nav-fill mb-96 wow fadeInUp delay-0-4s">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#inter-tap1">TODO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#inter-tap2">COCINA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#inter-tap3">CLOSET</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#inter-tap4">BAÑO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#inter-tap5">B2B</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="inter-tap1">
                <button class="prev" type="button" data-bs-target="#interiorrecipeCarousel1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                </button>
                <div class="carousel slide interior-nav" id="interiorrecipeCarousel1" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-lg-6 interior-act">
                                <a href="project-details-light.php"><img class="zoomIn" src="assets/images/abatilia/hero.jpeg" alt="project image"></a>
                                <div class="carousel-caption">
                                    <span class="sub-title mb-16">OPERACIÓN</span>
                                    <a href="project-details-light.php">
                                        <h4 class="text-black">Operación B2B</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=" carousel-item">
                            <div class="col-lg-6 interior-act">
                                <a href="project-details-light.php"><img src="assets/images/abatilia/ima1.png" alt="project image"></a>
                                <div class="carousel-caption">
                                    <span class="sub-title mb-16">COORDINACIÓN</span>
                                    <a href="project-details-light.php">
                                        <h4 class="text-black">Control por fases</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=" carousel-item">
                            <div class="col-lg-6 interior-act">
                                <a href="project-details-light.php"><img src="assets/images/abatilia/ima2.png" alt="project image"></a>
                                <div class="carousel-caption">
                                    <span class="sub-title mb-16">ACABADOS</span>
                                    <a href="project-details-light.php">
                                        <h4 class="text-black">Acabados Premium</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="next" type="button" data-bs-target="#interiorrecipeCarousel1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                </button>
            </div>
            <div class="tab-pane fade show" id="inter-tap2">
                <button class="prev" type="button" data-bs-target="#interiorrecipeCarousel2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                </button>
                <div class="carousel slide interior-nav" id="interiorrecipeCarousel2" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-lg-6 interior-act">
                                <a href="project-details-light.php"><img class="zoomIn" src="assets/images/abatilia/gallery-closet.jpg" alt="project image"></a>
                                <div class="carousel-caption">
                                    <span class="sub-title mb-16">OPERACIÓN</span>
                                    <a href="project-details-light.php">
                                        <h4 class="text-black">Operación B2B</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=" carousel-item">
                            <div class="col-lg-6 interior-act">
                                <a href="project-details-light.php"><img src="assets/images/abatilia/ima1.png" alt="project image"></a>
                                <div class="carousel-caption">
                                    <span class="sub-title mb-16">COORDINACIÓN</span>
                                    <a href="project-details-light.php">
                                        <h4 class="text-black">Control por fases</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=" carousel-item">
                            <div class="col-lg-6 interior-act">
                                <a href="project-details-light.php"><img src="assets/images/abatilia/ima2.png" alt="project image"></a>
                                <div class="carousel-caption">
                                    <span class="sub-title mb-16">ACABADOS</span>
                                    <a href="project-details-light.php">
                                        <h4 class="text-black">Acabados Premium</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="next" type="button" data-bs-target="#interiorrecipeCarousel2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                </button>
            </div>
            <div class="tab-pane fade show" id="inter-tap3">
                <button class="prev" type="button" data-bs-target="#interiorrecipeCarousel3" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                </button>
                <div class="carousel slide interior-nav" id="interiorrecipeCarousel3" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-lg-6 interior-act">
                                <a href="project-details-light.php"><img class="zoomIn" src="assets/images/abatilia/ima3.webp" alt="project image"></a>
                                <div class="carousel-caption">
                                    <span class="sub-title mb-16">OPERACIÓN</span>
                                    <a href="project-details-light.php">
                                        <h4 class="text-black">Operación B2B</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=" carousel-item">
                            <div class="col-lg-6 interior-act">
                                <a href="project-details-light.php"><img src="assets/images/abatilia/ima1.png" alt="project image"></a>
                                <div class="carousel-caption">
                                    <span class="sub-title mb-16">COORDINACIÓN</span>
                                    <a href="project-details-light.php">
                                        <h4 class="text-black">Control por fases</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=" carousel-item">
                            <div class="col-lg-6 interior-act">
                                <a href="project-details-light.php"><img src="assets/images/abatilia/ima2.png" alt="project image"></a>
                                <div class="carousel-caption">
                                    <span class="sub-title mb-16">ACABADOS</span>
                                    <a href="project-details-light.php">
                                        <h4 class="text-black">Acabados Premium</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="next" type="button" data-bs-target="#interiorrecipeCarousel3" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                </button>
            </div>
            <div class="tab-pane fade show" id="inter-tap4">
                <button class="prev" type="button" data-bs-target="#interiorrecipeCarousel4" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                </button>
                <div class="carousel slide interior-nav" id="interiorrecipeCarousel4" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-lg-6 interior-act">
                                <a href="project-details-light.php"><img class="zoomIn" src="assets/images/abatilia/gallery-bano.jpeg" alt="project image"></a>
                                <div class="carousel-caption">
                                    <span class="sub-title mb-16">OPERACIÓN</span>
                                    <a href="project-details-light.php">
                                        <h4 class="text-black">Operación B2B</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=" carousel-item">
                            <div class="col-lg-6 interior-act">
                                <a href="project-details-light.php"><img src="assets/images/abatilia/ima1.png" alt="project image"></a>
                                <div class="carousel-caption">
                                    <span class="sub-title mb-16">COORDINACIÓN</span>
                                    <a href="project-details-light.php">
                                        <h4 class="text-black">Control por fases</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=" carousel-item">
                            <div class="col-lg-6 interior-act">
                                <a href="project-details-light.php"><img src="assets/images/abatilia/ima2.png" alt="project image"></a>
                                <div class="carousel-caption">
                                    <span class="sub-title mb-16">ACABADOS</span>
                                    <a href="project-details-light.php">
                                        <h4 class="text-black">Acabados Premium</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="next" type="button" data-bs-target="#interiorrecipeCarousel4" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                </button>
            </div>
            <div class="tab-pane fade show" id="inter-tap5">
                <button class="prev" type="button" data-bs-target="#interiorrecipeCarousel5" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                </button>
                <div class="carousel slide interior-nav" id="interiorrecipeCarousel5" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-lg-6 interior-act">
                                <a href="project-details-light.php"><img class="zoomIn" src="assets/images/abatilia/ima3.webp" alt="project image"></a>
                                <div class="carousel-caption">
                                    <span class="sub-title mb-16">OPERACIÓN</span>
                                    <a href="project-details-light.php">
                                        <h4 class="text-black">Operación B2B</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=" carousel-item">
                            <div class="col-lg-6 interior-act">
                                <a href="project-details-light.php"><img src="assets/images/abatilia/ima1.png" alt="project image"></a>
                                <div class="carousel-caption">
                                    <span class="sub-title mb-16">COORDINACIÓN</span>
                                    <a href="project-details-light.php">
                                        <h4 class="text-black">Control por fases</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=" carousel-item">
                            <div class="col-lg-6 interior-act">
                                <a href="project-details-light.php"><img src="assets/images/abatilia/gallery-closet.jpg" alt="project image"></a>
                                <div class="carousel-caption">
                                    <span class="sub-title mb-16">ACABADOS</span>
                                    <a href="project-details-light.php">
                                        <h4 class="text-black">Acabados Premium</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="next" type="button" data-bs-target="#interiorrecipeCarousel5" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                </button>
            </div>
        </div>
    </div>
</section>
<!-- Interior Projects Section End -->

<!-- Timeline Area start -->
<section class="timeline-area py-128 black-110">
    <div class="container">
        <div class="row section-heading mb-96">
            <div class="section-title col-sm-7 col-lg-7">
                <h2 class="wow fadeInUp delay-0-2s">Un flujo claro para ejecutar con precisión</h2>
            </div>
            <div class="button col-sm-5 col-lg-5">
                <a class="theme-btn" href="contact-light.php">Cotiza tu proyecto</a>
            </div>
        </div>
        <div class="row gap-64 align-items-center">
            <div class=" col-md-12 col-lg-6">
                <div class="timeline-images wow fadeInLeft delay-0-2s">
                    <img src="assets/images/abatilia/ima1.png" alt="Timeline">
                    <img src="assets/images/abatilia/ima2.png" alt="Timeline">
                    <img src="assets/images/abatilia/ima3.webp" alt="Timeline">
                    <img src="assets/images/abatilia/ima4.jpg" alt="Timeline">
                    <img src="assets/images/abatilia/hero.jpeg" alt="Timeline">
                </div>
            </div>
            <div class=" col-md-12 col-lg-6">
                <div class="timeline-content wow fadeInRight delay-0-2s">
                    <div class="timeline-item">
                        <div class="icon"></div>
                        <div class="content">
                            <div class="wprocess-title">
                                <span class="h4 title">1. SOLICITUD</span>
                                <span class="arrow-icon"></span>
                            </div>
                            <p class="description">Recibimos tu solicitud con datos básicos y alcance. Definimos objetivos de fabricación para cocinas, closets y baños alineados al calendario de obra.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="icon"></div>
                        <div class="content">
                            <div class="wprocess-title">
                                <span class="h4 title">2. VALIDACIÓN</span>
                                <span class="arrow-icon"></span>
                            </div>
                            <p class="description">Validamos requerimientos: acabados, volumen y tiempos estimados. Documentamos cada frente para reducir retrabajos y mejorar coordinación.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="icon"></div>
                        <div class="content">
                            <div class="wprocess-title">
                                <span class="h4 title">3. PROPUESTA</span>
                                <span class="arrow-icon"></span>
                            </div>
                            <p class="description">Enviamos propuesta integral con especificaciones claras. Ajustamos tipologías y detalles para conservar consistencia premium en todo el proyecto.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="icon"></div>
                        <div class="content">
                            <div class="wprocess-title">
                                <span class="h4 title">4. PRODUCCIÓN</span>
                                <span class="arrow-icon"></span>
                            </div>
                            <p class="description">Entramos a producción con manufactura moderna y control de calidad. Aseguramos precisión, ritmo y visibilidad de avance por fase.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="icon"></div>
                        <div class="content">
                            <div class="wprocess-title">
                                <span class="h4 title">5. ENTREGA</span>
                                <span class="arrow-icon"></span>
                            </div>
                            <p class="description">Coordinamos entregas e instalación por etapas. Cerramos con evaluación final para garantizar cumplimiento en tiempo, calidad y escala.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reviews Area start -->
<section class="reviews-area py-128 black-100-bg" style="background-image: url(assets/images/abatilia/ima4.jpg);">
    <div class="container">
        <div class="d-flex section-heading mb-96">
            <div class="section-title">
                <p class="category-line">PRUEBA SOCIAL</p>
                <h2 class="wow fadeInUp delay-0-2s">Confianza construida en entregables</h2>
            </div>
            <div class="carousel-buttons buttons-vertical">
                <button class="prev" type="button" data-bs-target="#testiCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                </button>
                <button class="" type="button" data-bs-target="#testiCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-5 left">
                <div class="mobile-mb black-100-bg">
                    <div class="counter-text-wrap wow fadeInUp delay-0-2s">
                        <div class="d-flex justify-content-center">
                            <h4 class="count-text mb-16" data-speed="3000" data-stop="80">0</h4><span class="h4">%</span>
                        </div>
                        <p class="counter-title">Clientes Recurrentes</p>
                    </div>
                </div>
                <div class="mobile-mb white-bg">
                    <div class="counter-text-wrap wow fadeInUp delay-0-4s">
                        <div class="d-flex justify-content-center">
                            <h4 class="text-black count-text mb-16" data-speed="3000" data-stop="5">0</h4> <span><i class="fa fa-star"></i></span>
                        </div>
                        <p class="text-black counter-title">Calificación Promedio</p>
                    </div>
                </div>
                <div class="mobile-mb primary-bg">
                    <div class="counter-text-wrap wow fadeInUp delay-0-2s">
                        <div class="d-flex justify-content-center">
                            <h4 class="count-text mb-16" data-speed="3000" data-stop="250">0</h4><span class="h4">K+</span>
                        </div>
                        <p class="counter-title">Proyectos Atendidos</p>
                    </div>
                </div>
            </div>
            <div id="testiCarousel" class="col-md-12 col-lg-7 testimonials-slider carousel slide wow fadeInUp delay-0-4s" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="row carousel-item active ">
                        <div class="testimonial-item">
                            <div class="section-title mb-32 wow fadeInUp delay-0-2s">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="h5 author-text mb-32">“Cumplieron el calendario de entrega por torre y la calidad se mantuvo pareja en todas las unidades.”</div>
                            <div class="d-flex">
                                <img class="testi-img" src="assets/images/abatilia/logo.png" alt="review author image">
                                <div class="testi-author">
                                    <h5 class="text-white">Laura Méndez</h5>
                                    <p class="designations">Dirección de Proyecto · Monterrey</p>
                                </div>
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row carousel-item">
                        <div class="testimonial-item">
                            <div class="section-title mb-32 wow fadeInUp delay-0-2s">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="h5 author-text mb-32">“Tuvimos acompañamiento desde ingeniería hasta instalación final. Fue una experiencia ordenada y profesional.”</div>
                            <div class="d-flex">
                                <img class="testi-img" src="assets/images/abatilia/logo.png" alt="review author image">
                                <div class="testi-author">
                                    <h5 class="text-white">Jorge Ramírez</h5>
                                    <p class="designations">Constructora Vertical · Guadalajara</p>
                                </div>
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row carousel-item">
                        <div class="testimonial-item">
                            <div class="section-title mb-32 wow fadeInUp delay-0-2s">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="h5 author-text mb-32">“Escalamos el pedido sin detener obra. La coordinación logística fue clave para cumplir fechas de escrituración.”</div>
                            <div class="d-flex">
                                <img class="testi-img" src="assets/images/abatilia/logo.png" alt="review author image">
                                <div class="testi-author">
                                    <h5 class="text-white">Carla Morales</h5>
                                    <p class="designations">Desarrolladora Residencial · CDMX</p>
                                </div>
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Reviews Area end -->

<!-- CTA Area start -->
<section class="cta-area py-128 black-120-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-lg-6 left wow fadeInUp delay-0-2s">
                <div class="section-title">
                    <p class="category-line">COTIZACIÓN</p>
                    <h2 class="wow fadeInUp delay-0-2s">¿Listo para cotizar tu proyecto?</h2>
                </div>
                <p class="mt-96">Cuéntanos el tipo de proyecto y volumen estimado. Un asesor te contactará para aterrizar requerimientos y logística.</p>
                <form class="cta-form" action="#">
                    <input type="text" required placeholder="correo@empresa.com">
                    <button type="submit" class="theme-btn">Enviar solicitud</button>
                </form>
            </div>
            <div class="col-sm-12 col-lg-6 right wow fadeInUp delay-0-2s">
                <div class="row">
                    <div class="col-sm-6 wow fadeInUp delay-0-2s pt-96">
                        <img src="assets/images/abatilia/gallery-bano.jpeg" alt="Timeline">
                    </div>
                    <div class="col-sm-6 wow fadeInUp delay-0-2s">
                        <img src="assets/images/abatilia/gallery-closet.jpg" alt="Timeline">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Area end -->

<!-- Blog Area start -->
<section class="blog-area blog-home py-128 black-100-bg">
    <div class="container">
        <div class="row section-heading mb-96">
            <div class="section-title col-sm-7 col-lg-7">
                <h2 class="wow fadeInUp delay-0-2s">Preguntas Frecuentes</h2>
            </div>
            <div class="button col-sm-5 col-lg-5">
                <a class="theme-btn" href="projects.php">Ver más</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 item">
                <div class="blog-item wow fadeInUp delay-0-2s black-120-bg ">
                    <div class="content ">
                        <h6><a href="project-details-light.php">¿Abitalia se adapta a mi presupuesto?</a></h6>
                        <div class="image">
                            <img src="assets/images/abatilia/icon-clock.png" alt="Blog">
                            <a class="hover-btn" href="project-details-light.php">Ver más</a>
                        </div>
                        <ul class="blog-meta mb-16">
                            <li>
                                <i class="fal fa-calendar-alt"></i> 20 Abril 2026
                            </li>
                            <li>
                                <i class="fal fa-comment-dots"></i> Respuesta rápida
                            </li>
                        </ul>
                        <p>Sí. Nos adaptamos al alcance con materiales, acabados y planeación por fases para proyectos B2B.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item">
                <div class="blog-item wow fadeInUp delay-0-2s black-120-bg ">
                    <div class="content ">
                        <h6><a href="project-details-light.php">¿Fabrican soluciones además de cocinas?</a></h6>
                        <div class="image">
                            <img src="assets/images/abatilia/icon-axis.png" alt="Blog">
                            <a class="hover-btn" href="project-details-light.php">Ver más</a>
                        </div>
                        <ul class="blog-meta mb-16">
                            <li>
                                <i class="fal fa-calendar-alt"></i> 20 Abril 2026
                            </li>
                            <li>
                                <i class="fal fa-comment-dots"></i> Respuesta rápida
                            </li>
                        </ul>
                        <p>Sí. Nos adaptamos al alcance con materiales, acabados y planeación por fases para proyectos B2B.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item">
                <div class="blog-item wow fadeInUp delay-0-2s black-120-bg ">
                    <div class="content ">
                        <h6><a href="project-details-light.php">¿Puedo llevar un diseño / render?</a></h6>
                        <div class="image">
                            <img src="assets/images/abatilia/icon-kitchen.png" alt="Blog">
                            <a class="hover-btn" href="project-details-light.php">Ver más</a>
                        </div>
                        <ul class="blog-meta mb-16">
                            <li>
                                <i class="fal fa-calendar-alt"></i> 20 Abril 2026
                            </li>
                            <li>
                                <i class="fal fa-comment-dots"></i> Respuesta rápida
                            </li>
                        </ul>
                        <p>Sí. Nos adaptamos al alcance con materiales, acabados y planeación por fases para proyectos B2B.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area end -->

<?php include './layout/layoutBottom.php' ?>