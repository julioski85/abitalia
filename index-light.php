<?php
$lightMode = true;
$customLightLogo = 'assets/images/abatilia/logo (3) negro.png';
$minimalFooter = true;
include './layout/layoutTop.php'
?>

<style>
    :root {
        --abt-primary: #315f4b;
        --abt-accent: #a34a52;
        --abt-overlay: rgba(0, 0, 0, 0.28);
    }

    .hero-area h1, .hero-area-2 h1, .about-area h2, .about-area-2 h1, .service-area h2, .service-area-2 h2, .homeproject-area h2, .interior-area h2, .timeline-area h2, .reviews-area h2, .cta-area h2, .faq-area h2,
    .service-area h6, .service-area-2 h5, .homeproject-area h4, .interior-area h4, .timeline-area .title, .faq-area h5 {
        font-family: "IvyOraDisplay-Bold", "Times New Roman", serif;
        font-weight: 600;
    }

    body, p, span, a, li, input, button, textarea, label, .category-line, .sub-title {
        font-family: "HelveticaNeueLTStdRoman", "Helvetica", Arial, sans-serif;
    }

    .primary-bg, .theme-btn, .primary-readmore, .carousel-buttons button:hover, .carousel-buttons button:focus {
        background-color: var(--abt-primary) !important;
        border-color: var(--abt-primary) !important;
    }

    .theme-btn, .theme-btn:hover, .theme-btn:focus,
    .primary-readmore, .primary-readmore:hover, .primary-readmore:focus {
        color: #fff !important;
    }

    .category-line, .sub-title, .tab-style-one .nav-link.active { color: var(--abt-accent); }
    .reviews-area .fa-star, .timeline-area .icon::before, .right-arrow i { color: var(--abt-accent) !important; }
    .timeline-area .icon, .faq-area .accordion-button:not(.collapsed)::after { border-color: var(--abt-primary) !important; }

    .main-header .header-upper .container { max-width: 1240px; }
    .main-header .header-inner { min-height: 86px; padding: 8px 0; }
    .main-header .logo img { max-height: 50px; width: auto; }

    .hero-area-2 .hero-2-item {
        min-height: 760px;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }

    .about-area-2 .about-media img {
        width: 100%;
        height: 420px;
        object-fit: cover;
        object-position: center;
    }

    .service-area-2 .item > a,
    .service-area-2 .item > a img {
        display: block;
        width: 100%;
    }

    .service-area-2 .item > a img {
        height: 340px;
        object-fit: cover;
        object-position: center;
    }

    .reviews-area {
        position: relative;
        background-size: cover;
        background-position: center;
    }

    .reviews-area::before {
        content: "";
        position: absolute;
        inset: 0;
        background: var(--abt-overlay);
    }

    .reviews-area > .container {
        position: relative;
        z-index: 1;
    }

    .cta-area .right img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        object-position: center;
    }

    .cta-area .right .pt-96 img {
        height: 360px;
        object-position: center 30%;
    }

    .cta-form .field-group {
        margin-bottom: 20px;
    }

    .cta-form label {
        display: block;
        margin-bottom: 8px;
        color: #ffffff;
        font-size: 14px;
        letter-spacing: 0.04em;
    }

    .cta-form input,
    .cta-form textarea {
        width: 100%;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.24);
        color: #fff;
        padding: 14px 16px;
    }

    .cta-form textarea {
        min-height: 132px;
        resize: vertical;
    }

    .faq-area .image img {
        width: 100%;
        height: 580px;
        object-fit: cover;
        object-position: center;
    }

    @media (max-width: 991px) {
        .main-header .header-inner { min-height: 74px; }
        .hero-area-2 .hero-2-item { min-height: 620px; }
        .about-area-2 .about-media img,
        .service-area-2 .item > a img,
        .faq-area .image img,
        .cta-area .right .pt-96 img,
        .cta-area .right img {
            height: auto;
            min-height: 260px;
        }
    }
</style>

<!-- Hero Section Start -->
<section class="hero-area-2 black-120-bg">
    <div class="hero-2-slider wow fadeInUp delay-0-4s">
        <div class="hero-2-item justify-content-center py-96" style="background-image: url(assets/images/abatilia/hero.jpeg);">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center pb-96">
                    <div class="col-md-1 rotate phone">
                        <div class="d-flex">
                            <i class="fa fa-phone"></i>
                            <div>
                                <p class="phone-title">Atención comercial</p>
                                <a class="number" href="tel:+528118188113">(+52) 81 1818 8113</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 text-center">
                        <h1 class="text-white">Diseño y fabricación de mobiliario<br> para proyectos en todo México</h1>
                        <div class="buttons mt-96">
                            <a class="theme-btn" href="projects.php">Ver Proyectos</a>
                            <a class="light-btn" href="contact-light.php">Cotizar ahora</a>
                        </div>
                    </div>
                    <div class="col-md-1 rotate follow">
                        <a href="https://www.instagram.com/">Síguenos</a>
                        <span class="follow-line"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-2-item justify-content-center py-96" style="background-image: url(assets/images/abatilia/ima4.jpg);">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center pb-96">
                    <div class="col-md-1 rotate phone">
                        <div class="d-flex">
                            <i class="fa fa-phone"></i>
                            <div>
                                <p class="phone-title">Atención comercial</p>
                                <a class="number" href="tel:+528118188113">(+52) 81 1818 8113</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 text-center">
                        <h1 class="text-white">Manufactura moderna para cocinas,<br> closets y baños de alto nivel</h1>
                        <div class="buttons mt-96">
                            <a class="theme-btn" href="projects.php">Ver Proyectos</a>
                            <a class="light-btn" href="contact-light.php">Cotizar ahora</a>
                        </div>
                    </div>
                    <div class="col-md-1 rotate follow">
                        <a href="https://www.instagram.com/">Síguenos</a>
                        <span class="follow-line"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-2-item justify-content-center py-96" style="background-image: url(assets/images/abatilia/gallery-closet.jpg);">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center pb-96">
                    <div class="col-md-1 rotate phone">
                        <div class="d-flex">
                            <i class="fa fa-phone"></i>
                            <div>
                                <p class="phone-title">Atención comercial</p>
                                <a class="number" href="tel:+528118188113">(+52) 81 1818 8113</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 text-center">
                        <h1 class="text-white">Escalabilidad, control de calidad<br> y entregas por fases</h1>
                        <div class="buttons mt-96">
                            <a class="theme-btn" href="projects.php">Ver Proyectos</a>
                            <a class="light-btn" href="contact-light.php">Cotizar ahora</a>
                        </div>
                    </div>
                    <div class="col-md-1 rotate follow">
                        <a href="https://www.instagram.com/">Síguenos</a>
                        <span class="follow-line"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- About Area start -->
<section class="about-area-2 py-128 black-100-bg">
    <div class="container">
        <div class="d-flex section-heading mb-64">
            <div class="section-title">
                <p class="category-line">¿POR QUÉ ABITALIA?</p>
                <h1 class="wow fadeInUp delay-0-2s">Un proveedor B2B que cumple tiempos, calidad y escala</h1>
            </div>
        </div>
        <div class="row mb-64 about-media">
            <img src="assets/images/abatilia/gallery-bano.jpeg" alt="about image">
        </div>
        <div class="row gap-64">
            <div class="col-md-12 col-lg-6">
                <div class="counter-wrap">
                    <div class="row gap-64">
                        <div class="mobile-mr col-sm-4">
                            <div class="counter-text-wrap wow fadeInUp delay-0-2s">
                                <div class="d-flex">
                                    <h3 class="count-text mb-32" data-speed="3000" data-stop="250">0</h3><span class="h3">+</span>
                                </div>
                                <h6 class="counter-title">Proyectos Atendidos</h6>
                            </div>
                        </div>
                        <div class="mobile-mr col-sm-4">
                            <div class="counter-text-wrap wow fadeInUp delay-0-2s">
                                <div class="d-flex">
                                    <h3 class="count-text mb-32" data-speed="3000" data-stop="80">0</h3><span class="h3">%</span>
                                </div>
                                <h6 class="counter-title">Clientes Recurrentes</h6>
                            </div>
                        </div>
                        <div class="mobile-mr col-sm-4">
                            <div class="counter-text-wrap wow fadeInUp delay-0-2s">
                                <div class="d-flex">
                                    <h3 class="count-text mb-32" data-speed="3000" data-stop="32">0</h3><span class="h3">+</span>
                                </div>
                                <h6 class="counter-title">Ciudades Cubiertas</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 about2-content">
                <div class="wow fadeInUp delay-0-4s mb-32">
                    <ul class="tab-style-one nav nav-pills nav-fill mb-32 wow fadeInUp delay-0-4s">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#apart-tap1">Quiénes Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#apart-tap2">Cómo Trabajamos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#apart-tap3">Compromiso</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="apart-tap1">
                            <p>Diseñamos y fabricamos mobiliario integral con foco en ejecución real de obra: menos fricción, mejor control y una experiencia premium para desarrolladoras, constructoras e interioristas en todo México.</p>
                        </div>
                        <div class="tab-pane fade" id="apart-tap2">
                            <p>Operamos con procesos estandarizados, documentación por proyecto e implementación por etapas para mantener continuidad entre diseño, producción, logística e instalación.</p>
                        </div>
                        <div class="tab-pane fade" id="apart-tap3">
                            <p>Garantizamos consistencia de acabados y cumplimiento de tiempos con trazabilidad de avances, comunicación comercial cercana y soporte técnico durante todo el proyecto.</p>
                        </div>
                    </div>
                </div>
                <div class="button">
                    <a class="theme-btn" href="contact-light.php">Cotiza tu proyecto</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Area end -->

<!-- Service Section Start -->
<section class="service-area-2 black-120-bg py-128">
    <div class="container">
        <div class="d-flex section-heading mb-96">
            <div class="section-title">
                <h2 class="wow fadeInUp delay-0-2s">Services</h2>
            </div>
            <div class="carousel-buttons">
                <button class="prev" type="button" data-bs-target="#service2Carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                </button>
                <button class="" type="button" data-bs-target="#service2Carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                </button>
            </div>
        </div>
        <div class="carousel slide" id="service2Carousel" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="col-12 col-md-4 item">
                        <div class="row align-items-center mb-64">
                            <div class="text">
                                <a href="project-details-light.php">
                                    <h5>PROJECT INCEPTION</h5>
                                </a>
                                <p class="mt-16">Levantamiento técnico, definición de alcances y propuesta integral para proyectos B2B.</p>
                            </div>
                            <div class="giant-text one">01</div>
                        </div>
                        <a href="project-details-light.php"><img src="assets/images/abatilia/ima1.png" alt="service image"></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-12 col-md-4 item">
                        <div class="row align-items-center mb-64">
                            <div class="text">
                                <a href="project-details-light.php">
                                    <h5>DEVELOPMENT</h5>
                                </a>
                                <p class="mt-16">Documentación de especificaciones, planos y coordinación de producción por fases.</p>
                            </div>
                            <div class="giant-text">02</div>
                        </div>
                        <a href="project-details-light.php"><img src="assets/images/abatilia/ima2.png" alt="service image"></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-12 col-md-4 item">
                        <div class="row align-items-center mb-64">
                            <div class="text">
                                <a href="project-details-light.php">
                                    <h5>IMPLEMENTATION</h5>
                                </a>
                                <p class="mt-16">Fabricación, logística e instalación con control de calidad y seguimiento post-entrega.</p>
                            </div>
                            <div class="giant-text">03</div>
                        </div>
                        <a href="project-details-light.php"><img src="assets/images/abatilia/ima4.jpg" alt="service image"></a>
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
                    <div class="field-group">
                        <label for="cta-name">Nombre</label>
                        <input id="cta-name" type="text" required placeholder="Tu nombre">
                    </div>
                    <div class="field-group">
                        <label for="cta-email">Email</label>
                        <input id="cta-email" type="email" required placeholder="correo@empresa.com">
                    </div>
                    <div class="field-group">
                        <label for="cta-phone">Teléfono</label>
                        <input id="cta-phone" type="tel" required placeholder="+52 ...">
                    </div>
                    <div class="field-group">
                        <label for="cta-project">Sobre el proyecto</label>
                        <textarea id="cta-project" placeholder="Comparte volumen, ubicación y tiempos estimados"></textarea>
                    </div>
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

<!-- FAQ Area start -->
<section class="faq-area py-128 black-100-bg">
    <div class="container">
        <div class="section-title mb-96">
            <p class="category-line">FAQ</p>
            <h2 class="wow fadeInUp delay-0-2s">Frequently Asked Questions</h2>
        </div>
        <div class="row align-items-center">
            <div class=" col-lg-6 faq">
                <div class="accordion" id="accordionFaq">
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="heading1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                ¿Qué debo preparar antes de cotizar un proyecto con Abitalia?
                            </button>
                        </h5>
                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                Comparte tipología, volumen estimado, ubicación y calendario objetivo. Con esta base podemos proponer alcances, acabados y una ruta de ejecución por etapas.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="heading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                ¿En qué momento conviene integrar a Abitalia al proyecto?
                            </button>
                        </h5>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                Desde la etapa de planeación. Involucrarnos temprano mejora la coordinación con arquitectura y obra, reduce ajustes tardíos y brinda mayor control sobre tiempos y costos.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="heading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                ¿Cuánto tiempo tarda la fabricación e instalación?
                            </button>
                        </h5>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                Depende del volumen y del nivel de personalización. Definimos tiempos por frente de trabajo y entregas parciales para mantener el avance de obra sin detener otras partidas.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 image">
                <img src="assets/images/abatilia/gallery-closet.jpg" alt="faq">
            </div>
        </div>
    </div>
</section>
<!-- FAQ Area end -->

<?php include './layout/layoutBottom.php' ?>
