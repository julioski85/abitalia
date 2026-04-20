<?php include './layout/layoutTop.php' ?>

<style>
    @font-face {
        font-family: 'IVY ORA';
        src: url('assets/fonts/IvyOraDisplay-Bold.ttf') format('truetype');
        font-weight: 700;
        font-style: normal;
        font-display: swap;
    }

    @font-face {
        font-family: 'Helvetica Neue LT';
        src: url('assets/fonts/HelveticaNeueLTStdRoman.otf') format('opentype');
        font-weight: 400;
        font-style: normal;
        font-display: swap;
    }

    .abitalia-landing h1,
    .abitalia-landing h2,
    .abitalia-landing h3,
    .abitalia-landing h4,
    .abitalia-landing h5,
    .abitalia-landing h6,
    .abitalia-landing .category-line,
    .abitalia-landing .sub-title,
    .abitalia-landing .hero-kpi strong,
    .abitalia-landing .brand-name {
        font-family: 'IVY ORA', serif;
        letter-spacing: 0.02em;
    }

    .abitalia-landing p,
    .abitalia-landing li,
    .abitalia-landing a,
    .abitalia-landing span,
    .abitalia-landing input,
    .abitalia-landing textarea,
    .abitalia-landing button {
        font-family: 'Helvetica Neue LT', 'Helvetica', sans-serif;
    }

    .abitalia-landing .accent-red { color: #9d1f1f; }
    .abitalia-landing .accent-green { color: #2f6c53; }
    .abitalia-landing .brand-soft-red { background: rgba(157, 31, 31, 0.1); }
    .abitalia-landing .brand-soft-green { background: rgba(47, 108, 83, 0.14); }

    .abitalia-landing .hero-logo {
        max-width: 220px;
        margin-bottom: 24px;
    }

    .abitalia-landing .media-frame {
        border: 1px solid rgba(255, 255, 255, 0.14);
        border-radius: 10px;
        overflow: hidden;
    }

    .abitalia-landing .media-frame iframe {
        width: 100%;
        min-height: 360px;
    }

    .abitalia-landing .stat-chip {
        display: inline-block;
        padding: 10px 16px;
        border-radius: 40px;
        color: #fff;
        margin-top: 18px;
        font-size: 14px;
    }

    .abitalia-landing .icon-card img {
        width: 44px;
        height: 44px;
        object-fit: contain;
        margin-bottom: 16px;
    }

    .abitalia-landing .gallery-grid img,
    .abitalia-landing .mini-gallery img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .abitalia-landing .mini-gallery .item,
    .abitalia-landing .gallery-grid .item {
        margin-bottom: 24px;
    }

    .abitalia-landing .contact-box {
        border: 1px solid rgba(255, 255, 255, 0.16);
        border-radius: 8px;
        padding: 32px;
    }

    .abitalia-landing .btn-brand {
        background: #9d1f1f;
        color: #fff;
        border: 0;
    }

    .abitalia-landing .btn-brand:hover {
        background: #2f6c53;
        color: #fff;
    }
</style>

<div class="abitalia-landing">
    <section class="hero-area black-120-bg" id="top">
        <div class="carousel slide" id="recipeCarousel" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.65)), url('assets/images/abatilia/hero.jpeg'); background-size: cover; background-position: center;">
                    <div class="container pt-64 pb-64">
                        <img class="hero-logo" src="assets/images/abatilia/logo blanco abatilia.png" alt="Abatilia logo">
                        <p class="text-white category-line category-hero">TODO MÉXICO · PROYECTOS B2B</p>
                        <h1 class="col-lg-10 text-white">Diseño y fabricación de mobiliario para proyectos residenciales e inmobiliarios</h1>
                        <p class="col-lg-7 text-white mt-24">La calidad y atención al detalle nos distinguen: cocinas, closets y baños fabricados con procesos modernos, capacidad escalable y entregas coordinadas por etapa.</p>
                        <span class="stat-chip brand-soft-green">400 cocinas / mes · Capacidad de producción</span>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: linear-gradient(rgba(0, 0, 0, 0.42), rgba(0, 0, 0, 0.62)), url('assets/images/abatilia/ima4.jpg'); background-size: cover; background-position: center;">
                    <div class="container pt-64 pb-64">
                        <img class="hero-logo" src="assets/images/abatilia/logo.png" alt="Abatilia">
                        <p class="text-white category-line category-hero">MANUFACTURA PREMIUM</p>
                        <h1 class="col-lg-10 text-white">Un proveedor que cumple tiempos, calidad y escala para constructoras y desarrolladoras</h1>
                        <p class="col-lg-7 text-white mt-24">Documentación clara, trazabilidad de avance y acabados premium para mantener consistencia en cada unidad.</p>
                        <span class="stat-chip brand-soft-red">+15 años · Experiencia en fabricación</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-area py-128 black-100-bg" id="beneficios">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="big-text category-line accent-green">¿POR QUÉ ABATILIA?</div>
                    <h2 class="pt-32">Un flujo de trabajo claro para ejecutar con precisión</h2>
                    <p class="pt-24">Diseñamos y fabricamos mobiliario integral con foco en ejecución real de obra: menos fricción, mejor control operativo y una experiencia premium para constructoras, hotelería, despachos y distribuidores.</p>
                    <div class="row pt-32 mini-gallery">
                        <div class="col-4 item"><img src="assets/images/abatilia/ima1.png" alt="Proceso Abatilia"></div>
                        <div class="col-4 item"><img src="assets/images/abatilia/ima2.png" alt="Acabados Abatilia"></div>
                        <div class="col-4 item"><img src="assets/images/abatilia/ima3.webp" alt="Producción Abatilia"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="media-frame wow zoomIn">
                        <iframe src="https://www.youtube.com/embed/hAwFTqJLbzI?autoplay=1&mute=1&loop=1&playlist=hAwFTqJLbzI&controls=0&rel=0&modestbranding=1&playsinline=1" title="Video Abatilia" loading="lazy" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-area black-120-bg py-128" id="capacidad">
        <div class="container">
            <div class="section-title mb-64 text-center">
                <p class="category-line accent-red">CAPACIDAD Y CONTROL</p>
                <h2>Fabricamos hasta <span class="accent-green">400 cocinas</span> por mes</h2>
                <p class="col-lg-8 mx-auto pt-24">Instalaciones de primer nivel y un sistema de manufactura moderno para atender grandes demandas, cuidando cada detalle en cocinas, closets y baños.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="item service-act icon-card">
                        <img src="assets/images/abatilia/icon-axis.png" alt="Adaptabilidad">
                        <h6 class="text-black">Nos adaptamos a tu proyecto</h6>
                        <p>Configuramos espacios, acabados y detalles para cada tipología.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item service-act icon-card">
                        <img src="assets/images/abatilia/icon-clock.png" alt="Entrega">
                        <h6 class="text-black">Entregas coordinadas</h6>
                        <p>Seguimiento de producción y logística para decisiones rápidas de obra.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item service-act icon-card">
                        <img src="assets/images/abatilia/icon-kitchen.png" alt="Acabados">
                        <h6 class="text-black">Funciones premium</h6>
                        <p>Herrajes especiales y organización interna con consistencia de calidad.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="interior-area black-100-bg py-128" id="galeria">
        <div class="container">
            <div class="text-center mb-96">
                <p class="sub-title mb-16">GALERÍA</p>
                <h2>Diseño elegante, funcionalidad real</h2>
                <p>Algunos trabajos en closets, baños y cocinas para proyectos B2B.</p>
            </div>
            <div class="row gallery-grid">
                <div class="col-md-4 item"><img src="assets/images/abatilia/gallery-closet.jpg" alt="Closet Abatilia"></div>
                <div class="col-md-4 item"><img src="assets/images/abatilia/gallery-bano.jpeg" alt="Baño Abatilia"></div>
                <div class="col-md-4 item"><img src="assets/images/abatilia/hero.jpeg" alt="Cocina Abatilia"></div>
                <div class="col-md-6 item"><img src="assets/images/abatilia/ima4.jpg" alt="Proyecto premium Abatilia"></div>
                <div class="col-md-6 item"><img src="assets/images/abatilia/ima3.webp" alt="Producción y ensamble Abatilia"></div>
            </div>
            <div class="media-frame mt-32">
                <iframe src="https://www.youtube.com/embed/0x_1sJDeGhE?autoplay=1&mute=1&loop=1&playlist=0x_1sJDeGhE&controls=0&rel=0&modestbranding=1&playsinline=1" title="Flujo de trabajo Abatilia" loading="lazy" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section class="timeline-area py-128 black-110" id="faq">
        <div class="container">
            <div class="row section-heading mb-64">
                <div class="section-title col-lg-8">
                    <p class="category-line">PREGUNTAS FRECUENTES</p>
                    <h2>Lo esencial para decisiones B2B</h2>
                </div>
                <div class="button col-lg-4 text-lg-end">
                    <a class="theme-btn btn-brand" href="#contacto">Cotiza tu proyecto</a>
                </div>
            </div>
            <div class="timeline-content">
                <div class="timeline-item">
                    <div class="icon"></div>
                    <div class="content"><div class="wprocess-title"><span class="h4 title">¿Abatilia se adapta a mi presupuesto?</span></div><p class="description">Sí. Contamos con materiales y herrajes de diferentes gamas para ajustar alcance, diseño y desempeño a cada proyecto.</p></div>
                </div>
                <div class="timeline-item">
                    <div class="icon"></div>
                    <div class="content"><div class="wprocess-title"><span class="h4 title">¿Fabrican además de cocinas?</span></div><p class="description">Fabricamos closets, baños y muebles complementarios; también te asesoramos en especificación de acabados.</p></div>
                </div>
                <div class="timeline-item">
                    <div class="icon"></div>
                    <div class="content"><div class="wprocess-title"><span class="h4 title">¿Puedo llevar mi render o diseño?</span></div><p class="description">Claro. Puedes compartir renders, referencias y fotografías; con ciudad, volumen y tiempos estimados cotizamos con mayor precisión.</p></div>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews-area py-128 black-100-bg" style="background-image: url(assets/images/background/testimonials.png);">
        <div class="container">
            <div class="d-flex section-heading mb-96">
                <div class="section-title">
                    <p class="category-line">PRUEBA SOCIAL</p>
                    <h2>Confianza construida en entregables</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mobile-mb black-100-bg">
                    <div class="counter-text-wrap">
                        <div class="d-flex justify-content-center"><h4 class="count-text mb-16" data-speed="3000" data-stop="95">0</h4><span class="h4">%</span></div>
                        <p class="counter-title">Cumplimiento de cronograma</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mobile-mb white-bg">
                    <div class="counter-text-wrap">
                        <div class="d-flex justify-content-center"><h4 class="text-black count-text mb-16" data-speed="3000" data-stop="5">0</h4><span><i class="fa fa-star"></i></span></div>
                        <p class="text-black counter-title">Nivel promedio de satisfacción</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 mobile-mb primary-bg">
                    <div class="counter-text-wrap">
                        <div class="d-flex justify-content-center"><h4 class="count-text mb-16" data-speed="3000" data-stop="400">0</h4><span class="h4">+</span></div>
                        <p class="counter-title">Cocinas por mes en capacidad instalada</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-area py-128 black-120-bg" id="contacto">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 left">
                    <div class="section-title">
                        <p class="category-line">COTIZACIÓN</p>
                        <h2>Cotiza tu proyecto B2B</h2>
                    </div>
                    <p class="mt-40">Cuéntanos ciudad, volumen estimado, tipología y tiempos. Un asesor validará requerimientos y te enviará propuesta con siguientes pasos.</p>
                    <a class="theme-btn btn-brand mt-32" href="https://wa.me/5210000000000" target="_blank" rel="noopener">Cotizar por WhatsApp</a>
                </div>
                <div class="col-lg-6 right">
                    <div class="contact-box">
                        <h4 class="mb-24">Solicita tu cotización</h4>
                        <form class="cta-form" action="#">
                            <input type="text" required placeholder="Nombre completo">
                            <input type="email" required placeholder="correo@empresa.com" class="mt-16">
                            <input type="text" required placeholder="Teléfono" class="mt-16">
                            <textarea rows="4" placeholder="Ciudad, tipo de proyecto, número de unidades, tiempos y acabados..." class="mt-16"></textarea>
                            <button type="submit" class="theme-btn btn-brand mt-16">Enviar solicitud</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include './layout/layoutBottom.php' ?>
