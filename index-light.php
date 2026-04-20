<?php
$lightMode = true;
$customLightLogo = 'assets/images/abatilia/logo (3) negro.png';
$minimalFooter = true;
include './layout/layoutTop.php'
?>

<style>
    :root {
        --abt-primary: #c62828;
        --primary-color: #c62828;
        --abt-primary-dark: #8e1b1b;
        --abt-accent: #e57373;
        --abt-overlay: rgba(0, 0, 0, 0.46);
    }

    .hero-area h1, .hero-area-2 h1, .about-area h2, .about-area-2 h1, .service-area h2, .service-area-2 h2, .homeproject-area h2, .interior-area h2, .timeline-area h2, .reviews-area h2, .cta-area h2, .faq-area h2,
    .service-area h6, .service-area-2 h5, .homeproject-area h4, .interior-area h4, .timeline-area .title, .faq-area h5 {
        font-family: "IvyOraDisplay-Bold", "Times New Roman", serif;
        font-weight: 500;
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
    .main-header .header-inner { min-height: 72px; padding: 5px 0; }
    .main-header .logo img { max-height: 42px; width: auto; }

    .hero-area-2 .hero-2-item {
        min-height: 610px;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        position: relative;
        overflow: hidden;
    }

    .hero-area-2 .hero-2-item::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.42) 0%, rgba(0, 0, 0, 0.30) 100%);
    }

    .hero-area-2 .hero-2-item > .container-fluid {
        position: relative;
        z-index: 1;
    }

    .about-area-2 .about-media img {
        width: 100%;
        height: 330px;
        object-fit: cover;
        object-position: center;
    }

    .service-area-2 .item > a,
    .service-area-2 .item > a img {
        display: block;
        width: 100%;
    }

    .service-area-2 .item > a img {
        height: 280px;
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
        height: 280px;
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
        min-height: 160px;
        resize: vertical;
    }

    .faq-area .image img {
        width: 100%;
        height: 640px;
        object-fit: cover;
        object-position: center;
    }

    

    html {
        scroll-behavior: smooth;
    }

    #inicio, #por-que-abitalia, #servicios, #trabajos-recientes, #confianza, #faq {
        scroll-margin-top: 92px;
    }

    .hero-area-2 .buttons .light-btn,
    .theme-btn,
    .primary-readmore {
        color: #fff !important;
    }

    .theme-btn:hover,
    .theme-btn:focus,
    .primary-readmore:hover,
    .primary-readmore:focus {
        background-color: var(--abt-primary-dark) !important;
        border-color: var(--abt-primary-dark) !important;
        color: #fff !important;
    }

    .hero-area-2 .buttons .light-btn {
        background: rgba(255, 255, 255, 0.12);
        border: 1px solid rgba(255, 255, 255, 0.45);
    }

    .hero-area-2 .buttons .light-btn:hover {
        background: rgba(255, 255, 255, 0.2);
    }

    .homeproject-area .apartment-image img,
    .timeline-area .timeline-images img,
    .interior-area .interior-act img,
    .cta-area .right img {
        width: 100%;
        object-fit: cover;
    }

    .cta-area .left {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 42px;
    }

    .cta-area .left p.mt-96 {
        margin-top: 28px !important;
    }

    .cta-form .field-group {
        margin-bottom: 16px;
    }

    .cta-form input,
    .cta-form textarea {
        border-radius: 8px;
    }

    .cta-form input::placeholder,
    .cta-form textarea::placeholder {
        color: rgba(255, 255, 255, 0.75);
    }

    .cta-area .right .image-stack {
        gap: 20px;
    }

    .cta-area .right .image-stack .stack-item {
        padding: 0;
    }

    .cta-area .right .image-stack .stack-item img {
        border-radius: 14px;
        height: 260px;
    }

    .reviews-area {
        background-image: url(assets/images/abatilia/hero.jpeg) !important;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

    .faq-area .accordion-item {
        margin-bottom: 14px;
    }

    #trabajos-recientes .card {
        overflow: hidden;
        border: 0;
        background: transparent;
    }

    #trabajos-recientes .card .row {
        margin: 0;
    }

    #trabajos-recientes .card a img {
        width: 100%;
        height: 360px;
        object-fit: cover;
        object-position: center;
        display: block;
    }

    .abt-reveal {
        opacity: 0;
        transform: translate3d(0, 30px, 0);
        transition: opacity 0.8s ease, transform 0.8s ease;
        will-change: opacity, transform;
    }

    .abt-reveal.is-visible {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }

    #por-que-abitalia .about-media-video {
        aspect-ratio: 32 / 9;
    }

    @media (prefers-reduced-motion: reduce) {
        .abt-reveal {
            opacity: 1;
            transform: none;
            transition: none;
        }
    }

    .main-header .main-menu .navigation > li > a {
        font-size: 14px;
        padding: 10px 0;
        letter-spacing: 0.02em;
        transition: color 0.25s ease, transform 0.25s ease;
    }

    .main-header .main-menu .navigation > li > a:hover,
    .main-header .main-menu .navigation > li.current > a {
        color: var(--abt-primary);
        transform: translateY(-1px);
    }

    .main-header .header-cta-wrap {
        display: flex;
        align-items: center;
        margin-left: 18px !important;
        padding-left: 18px;
        border-left: 1px solid rgba(0, 0, 0, 0.12);
    }

    .main-header .header-cta-wrap .header-quote-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 42px;
        padding: 10px 20px;
        font-size: 13px;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        border-radius: 0;
        transition: transform 0.25s ease, box-shadow 0.25s ease, background-color 0.25s ease;
    }

    .main-header .header-cta-wrap .header-quote-btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 10px 24px rgba(143, 40, 55, 0.28);
    }

    .quote-modal .modal-content {
        background: #f9f7f5;
        border: 1px solid #ece5e0;
        border-radius: 18px;
        box-shadow: 0 24px 55px rgba(0, 0, 0, 0.2);
        overflow: hidden;
    }

    .quote-modal .modal-header {
        border-bottom: 1px solid #e9e1db;
        padding: 26px 30px 16px;
    }

    .quote-modal .modal-title {
        color: #141414;
        font-size: 33px;
        line-height: 1.2;
    }

    .quote-modal .modal-body {
        padding: 12px 30px 30px;
    }

    .quote-modal .modal-note {
        color: #5b5754;
        margin-bottom: 22px;
    }

    .quote-form {
        display: grid;
        gap: 16px;
    }

    .quote-form .field-group label {
        display: block;
        margin-bottom: 8px;
        color: #2f2d2c;
        font-size: 13px;
        letter-spacing: 0.06em;
        text-transform: uppercase;
    }

    .quote-form input,
    .quote-form textarea {
        width: 100%;
        border: 1px solid #d9cdc4;
        background: #fff;
        border-radius: 10px;
        padding: 14px 16px;
        color: #1d1d1d;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .quote-form input::placeholder,
    .quote-form textarea::placeholder {
        color: #918b87;
    }

    .quote-form input:focus,
    .quote-form textarea:focus {
        border-color: var(--abt-primary);
        box-shadow: 0 0 0 3px rgba(143, 40, 55, 0.12);
        outline: none;
    }

    .quote-form textarea {
        min-height: 130px;
        resize: vertical;
    }

    .quote-form .theme-btn {
        width: 100%;
        border-radius: 0;
        padding: 13px 20px;
        margin-top: 6px;
    }

    .quote-modal .btn-close {
        background-size: 12px;
        opacity: 0.8;
    }

    .quote-modal {
        z-index: 1080;
    }

    .quote-modal .modal-dialog {
        pointer-events: auto;
    }

    .modal-backdrop.show {
        opacity: 0.56;
        z-index: 1070;
    }

    body.modal-open .page-wrapper {
        overflow: visible;
    }

    .faq-area .accordion-button {
        font-size: 22px;
    }

    @media (min-width: 1400px) {
        .faq-area .accordion-button {
            font-size: 26px;
        }
    }

    @media only screen and (max-width: 767px) {
        .faq-area .accordion-button {
            font-size: 20px;
        }
    }

    @media (max-width: 991px) {
        .main-header .header-inner { min-height: 66px; }
        .hero-area-2 .hero-2-item { min-height: 500px; }
        .about-area-2 .about-media img,
        .service-area-2 .item > a img,
        .faq-area .image img,
        .cta-area .right .pt-96 img,
        .cta-area .right img {
            height: auto;
            min-height: 240px;
        }

        .cta-area .left {
            padding: 28px;
        }

        .cta-area .right .image-stack .stack-item img {
            height: 220px;
        }

        .main-header .header-cta-wrap {
            display: none;
        }

        .quote-modal .modal-header,
        .quote-modal .modal-body {
            padding-left: 20px;
            padding-right: 20px;
        }

        .quote-modal .modal-title {
            font-size: 28px;
        }
    }
</style>

<!-- Hero Section Start -->
<section id="inicio" class="hero-area-2 black-120-bg">
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
                            <a class="theme-btn" href="#trabajos-recientes">Ver Proyectos</a>
                            <a class="light-btn js-open-quote-modal" href="#" data-bs-toggle="modal" data-bs-target="#quoteModal">Cotizar ahora</a>
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
                            <a class="theme-btn" href="#trabajos-recientes">Ver Proyectos</a>
                            <a class="light-btn js-open-quote-modal" href="#" data-bs-toggle="modal" data-bs-target="#quoteModal">Cotizar ahora</a>
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
                            <a class="theme-btn" href="#trabajos-recientes">Ver Proyectos</a>
                            <a class="light-btn js-open-quote-modal" href="#" data-bs-toggle="modal" data-bs-target="#quoteModal">Cotizar ahora</a>
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
<section id="por-que-abitalia" class="about-area-2 py-128 black-100-bg">
    <div class="container">
        <div class="d-flex section-heading mb-64">
            <div class="section-title">
                <p class="category-line">¿POR QUÉ ABITALIA?</p>
                <h1 class="wow fadeInUp delay-0-2s">Un proveedor B2B que cumple tiempos, calidad y escala</h1>
            </div>
        </div>
        <div class="row mb-64 about-media">
            <div class="about-media-video">
                <iframe
                    src="https://www.youtube.com/embed/hAwFTqJLbzI?autoplay=1&mute=1&loop=1&playlist=hAwFTqJLbzI&controls=0&modestbranding=1&rel=0&playsinline=1"
                    title="Video sobre Abitalia"
                    allow="autoplay; encrypted-media; picture-in-picture"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen>
                </iframe>
            </div>
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
                    <a class="theme-btn js-open-quote-modal" href="#" data-bs-toggle="modal" data-bs-target="#quoteModal">Cotiza tu proyecto</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Area end -->

<!-- Service Section Start -->
<section id="servicios" class="service-area-2 black-120-bg py-128">
    <div class="container">
        <div class="d-flex section-heading mb-96">
            <div class="section-title">
                <h2>Servicios</h2>
            </div>
        </div>
        <div class="row gy-5">
            <div class="col-12 col-md-4 item">
                <div class="row align-items-center mb-64">
                    <div class="text">
                        <a href="project-details-light.php">
                            <h5>INICIO DEL PROYECTO</h5>
                        </a>
                        <p class="mt-16">Levantamiento técnico y definición de alcance para iniciar sin fricción.</p>
                    </div>
                    <div class="giant-text one">01</div>
                </div>
                <a href="project-details-light.php"><img src="assets/images/abatilia/ima1.png" alt="imagen del servicio"></a>
            </div>
            <div class="col-12 col-md-4 item">
                <div class="row align-items-center mb-64">
                    <div class="text">
                        <a href="project-details-light.php">
                            <h5>DESARROLLO</h5>
                        </a>
                        <p class="mt-16">Planos y especificaciones claras con coordinación por fases.</p>
                    </div>
                    <div class="giant-text">02</div>
                </div>
                <a href="project-details-light.php"><img src="assets/images/abatilia/ima2.png" alt="imagen del servicio"></a>
            </div>
            <div class="col-12 col-md-4 item">
                <div class="row align-items-center mb-64">
                    <div class="text">
                        <a href="project-details-light.php">
                            <h5>IMPLEMENTACIÓN</h5>
                        </a>
                        <p class="mt-16">Fabricación, logística e instalación con control de calidad en sitio.</p>
                    </div>
                    <div class="giant-text">03</div>
                </div>
                <a href="project-details-light.php"><img src="assets/images/abatilia/ima4.jpg" alt="imagen del servicio"></a>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Home 3 Projects Area start -->
<section id="trabajos-recientes" class="home3project py-128 black-120-bg">
    <div class="container">
        <div class="row rel z-1 justify-content-center">
            <div class="section-title text-center mb-96 wow fadeInUp delay-0-2s">
                <span class="sub-title mb-16">PROYECTOS</span>
                <h2>Trabajos recientes</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid pl-96 pr-96">
        <div class="pro-items">
            <div class="card">
                <div class="row">
                    <a href="project-details-light.php"><img src="assets/images/abatilia/gallery-closet.jpg" alt="Proyecto de closets residenciales"></a>
                </div>
                <div class="project-home3-content">
                    <a href="project-details-light.php">
                        <h4>Closets a medida para torre residencial</h4>
                    </a>
                    <p class="category-line">MOBILIARIO RESIDENCIAL</p>
                </div>
            </div>
            <div class="card">
                <div class="row">
                    <a href="project-details-light.php"><img src="assets/images/abatilia/gallery-bano.jpeg" alt="Proyecto de baños en desarrollo vertical"></a>
                </div>
                <div class="project-home3-content">
                    <a href="project-details-light.php">
                        <h4>Paquete integral de baños premium</h4>
                    </a>
                    <p class="category-line">BAÑOS</p>
                </div>
            </div>
            <div class="card">
                <div class="row">
                    <a href="project-details-light.php"><img src="assets/images/abatilia/ima4.jpg" alt="Proyecto de cocinas para complejo habitacional"></a>
                </div>
                <div class="project-home3-content">
                    <a href="project-details-light.php">
                        <h4>Cocinas contemporáneas por etapas</h4>
                    </a>
                    <p class="category-line">COCINAS</p>
                </div>
            </div>
        </div>
        <div class="pro-items mt-96">
            <div class="card">
                <div class="row">
                    <a href="project-details-light.php"><img src="assets/images/abatilia/ima1.png" alt="Proyecto de equipamiento para departamentos"></a>
                </div>
                <div class="project-home3-content">
                    <a href="project-details-light.php">
                        <h4>Equipamiento de departamentos muestra</h4>
                    </a>
                    <p class="category-line">SHOWROOM</p>
                </div>
            </div>
            <div class="card">
                <div class="row">
                    <a href="project-details-light.php"><img src="assets/images/abatilia/ima2.png" alt="Proyecto de fabricación seriada de mobiliario"></a>
                </div>
                <div class="project-home3-content">
                    <a href="project-details-light.php">
                        <h4>Fabricación seriada para master plan</h4>
                    </a>
                    <p class="category-line">PRODUCCIÓN B2B</p>
                </div>
            </div>
            <div class="card">
                <div class="row">
                    <a href="project-details-light.php"><img src="assets/images/abatilia/hero.jpeg" alt="Proyecto de instalación final de mobiliario"></a>
                </div>
                <div class="project-home3-content">
                    <a href="project-details-light.php">
                        <h4>Instalación final con control de calidad</h4>
                    </a>
                    <p class="category-line">ENTREGA Y MONTAJE</p>
                </div>
            </div>
        </div>
        <div class="col-12 text-center mt-128">
            <a class="loadmore primary-readmore" href="projects.php">Ver proyectos</a>
        </div>
    </div>
</section>
<!-- Home 3 Projects Area end -->

<!-- Timeline Area start -->
<section class="timeline-area py-128 black-110">
    <div class="container">
        <div class="row section-heading mb-96">
            <div class="section-title col-sm-7 col-lg-7">
                <h2 class="wow fadeInUp delay-0-2s">Un flujo claro para ejecutar con precisión</h2>
            </div>
            <div class="button col-sm-5 col-lg-5">
                <a class="theme-btn js-open-quote-modal" href="#" data-bs-toggle="modal" data-bs-target="#quoteModal">Cotiza tu proyecto</a>
            </div>
        </div>
        <div class="row gap-64 align-items-center">
            <div class=" col-md-12 col-lg-6">
                <div class="timeline-images wow fadeInLeft delay-0-2s">
                    <img src="assets/images/abatilia/ima1.png" alt="línea de tiempo">
                    <img src="assets/images/abatilia/ima2.png" alt="línea de tiempo">
                    <img src="assets/images/abatilia/ima3.webp" alt="línea de tiempo">
                    <img src="assets/images/abatilia/ima4.jpg" alt="línea de tiempo">
                    <img src="assets/images/abatilia/hero.jpeg" alt="línea de tiempo">
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
                            <p class="description">Recibimos alcance, volumen y fechas clave para alinear el proyecto desde el inicio.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="icon"></div>
                        <div class="content">
                            <div class="wprocess-title">
                                <span class="h4 title">2. VALIDACIÓN</span>
                                <span class="arrow-icon"></span>
                            </div>
                            <p class="description">Validamos requerimientos y acabados; documentamos frentes para evitar retrabajos.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="icon"></div>
                        <div class="content">
                            <div class="wprocess-title">
                                <span class="h4 title">3. PRODUCCIÓN</span>
                                <span class="arrow-icon"></span>
                            </div>
                            <p class="description">Entramos a manufactura con control de calidad y seguimiento de avance por fase.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="icon"></div>
                        <div class="content">
                            <div class="wprocess-title">
                                <span class="h4 title">4. ENTREGA</span>
                                <span class="arrow-icon"></span>
                            </div>
                            <p class="description">Coordinamos entrega e instalación por etapas para cerrar en tiempo y calidad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reviews Area start -->
<section id="confianza" class="reviews-area py-128 black-100-bg">
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
                                <img class="testi-img" src="assets/images/abatilia/logo.png" alt="imagen del autor de la reseña">
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
                                <img class="testi-img" src="assets/images/abatilia/logo.png" alt="imagen del autor de la reseña">
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
                                <img class="testi-img" src="assets/images/abatilia/logo.png" alt="imagen del autor de la reseña">
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


<!-- FAQ Area start -->
<section id="faq" class="faq-area py-128 black-100-bg">
    <div class="container">
        <div class="section-title mb-96">
            <p class="category-line">PREGUNTAS FRECUENTES</p>
            <h2 class="wow fadeInUp delay-0-2s">Preguntas frecuentes</h2>
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
                                ¿Qué capacidad tienen para atender proyectos B2B en diferentes ciudades?
                            </button>
                        </h5>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                Coordinamos fabricación, embarques y montaje por fases para proyectos multiciudad. Definimos un plan logístico y de instalación por frente para mantener continuidad operativa.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                ¿Cómo aseguran calidad y consistencia en pedidos de alto volumen?
                            </button>
                        </h5>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                Trabajamos con especificaciones homologadas, control de proceso y validaciones por lote. Así garantizamos que acabados, herrajes y medidas se mantengan consistentes en todo el desarrollo.
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


<!-- Quote Modal start -->
<div class="modal fade quote-modal" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="quoteModalLabel">Cotiza tu proyecto</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <p class="modal-note">Compártenos la información clave y un asesor comercial te contactará para validar alcances, tiempos y logística.</p>
                <form class="quote-form" action="#">
                    <div class="field-group">
                        <label for="quote-name">Nombre</label>
                        <input id="quote-name" type="text" required placeholder="Tu nombre">
                    </div>
                    <div class="field-group">
                        <label for="quote-email">Correo electrónico</label>
                        <input id="quote-email" type="email" required placeholder="correo@empresa.com">
                    </div>
                    <div class="field-group">
                        <label for="quote-phone">Teléfono</label>
                        <input id="quote-phone" type="tel" required placeholder="+52 ...">
                    </div>
                    <div class="field-group">
                        <label for="quote-project">Sobre el proyecto</label>
                        <textarea id="quote-project" required placeholder="Cuéntanos sobre tu proyecto"></textarea>
                    </div>
                    <button type="submit" class="theme-btn">Enviar solicitud</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Quote Modal end -->

<script>
document.addEventListener('DOMContentLoaded', function () {
    const revealTargets = document.querySelectorAll(
        'section:not(#servicios) h1, section:not(#servicios) h2, section:not(#servicios) h3, section:not(#servicios) h4, section:not(#servicios) h5, section:not(#servicios) p, section:not(#servicios) li, section:not(#servicios) .card, section:not(#servicios) .counter-text-wrap, section:not(#servicios) .accordion-item, section:not(#servicios) .button, section:not(#servicios) .buttons, section:not(#servicios) img, section:not(#servicios) .carousel, section:not(#servicios) .timeline-item'
    );

    revealTargets.forEach(function (element, index) {
        element.classList.add('abt-reveal');
        element.style.transitionDelay = Math.min(index % 8, 7) * 0.08 + 's';
    });

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.16, rootMargin: '0px 0px -60px 0px' });

    revealTargets.forEach(function (element) {
        observer.observe(element);
    });
});
</script>

<?php include './layout/layoutBottom.php' ?>
