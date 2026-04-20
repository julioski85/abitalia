<!-- Main header -->
<header class="main-header">
    <!--Header-Upper-->
    <div class="header-upper black-120-bg">
        <div class="container clearfix">
            <div class="header-inner rel d-flex align-items-center">
                <div class="logo-outer">
                    <?php $lightLogo = isset($customLightLogo) ? $customLightLogo : "assets/images/abatilia/logo (3) negro.png"; ?>
                   <div class="logo"><a href="index-light.php#inicio"><img src="<?php echo $lightLogo; ?>" alt="Logo" title="Logo"></a></div>
                </div>

                <div class="nav-outer ms-auto clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header py-10">
                            <div class="mobile-logo">
                                <a href="index-light.php#inicio">
                                    <img src="<?php echo $lightLogo; ?>" alt="Logo" title="Logo">
                                </a>
                            </div>

                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <?php $isIndexLight = basename($_SERVER['PHP_SELF']) === 'index-light.php'; ?>
                            <?php if ($isIndexLight): ?>
                            <ul class="navigation clearfix onepage-menu">
                                <li><a href="#inicio">Inicio</a></li>
                                <li><a href="#por-que-abitalia">Por qué Abitalia</a></li>
                                <li><a href="#servicios">Servicios</a></li>
                                <li><a href="#trabajos-recientes">Trabajos Recientes</a></li>
                                <li><a href="#confianza">Confianza</a></li>
                                <li><a href="#faq">FAQ</a></li>
                                <li><a href="#contacto">Contacto</a></li>
                            </ul>
                            <?php else: ?>
                            <ul class="navigation clearfix">
                                <li><a href="index-light.php#inicio">Inicio</a></li>
                                <li><a href="about-light.php">About</a></li>
                                <li><a href="projects-light.php">Projects</a></li>
                                <li><a href="contact-light.php">Contact</a></li>
                            </ul>
                            <?php endif; ?>
                        </div>

                    </nav>
                    <!-- Main Menu End-->
                </div>
                <!-- Search Button -->
                <div class="search-btns">
                    <span class="search-icon"><i class="far fa-search"></i></span>
                </div>
            </div>
            <form class="search-project search-form mt-96" id="project-search" action="#">
                <input type="search" required placeholder="Type to search...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <!--End Header Upper-->
</header>
<!-- End main header -->
