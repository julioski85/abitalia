<?php include './layout/layoutTop.php' ?>

<!-- Banner Section Start -->
<section class="banner-area py-256" style="background-image: url(assets/images/projects/page-banner.png);">
    <div class="container text-center">
        <div class="row align-items-center justify-content-between">
            <div class="banner-content wow fadeInUp delay-0-2s">
                <h1 class="text-white">Latest Projects</h1>
                <div class="mt-32">
                    <ul class="breadcrumb wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item">projects</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Projects Area start -->
<section class="projects-area py-128 black-100-bg">
    <div class="container">
        <ul class="project-filter tab-style-one justify-content-center nav nav-pills nav-fill mb-96 wow fadeInUp delay-0-4s">
            <li data-filter="*" class="nav-item current">
                <a class="nav-link">ALL</a>
            </li>
            <li class="nav-item" data-filter=".ARCHITECTURE">
                <a class="nav-link">ARCHITECTURE</a>
            </li>
            <li class="nav-item" data-filter=".INTERIOR">
                <a class="nav-link">INTERIOR</a>
            </li>
            <li class="nav-item" data-filter=".LANDSCAPE">
                <a class="nav-link">LANDSCAPE</a>
            </li>
            <li class="nav-item" data-filter=".REMODELING">
                <a class="nav-link">REMODELING</a>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="row project-active">
            <div class="col-md-12 item ARCHITECTURE">
                <div class="row wow fadeInRight delay-0-1s rp-0">
                    <div class="pros-title text-center">
                        <a href="project-details.php">
                            <h4>Black And Orange Modern House Interior Design</h4>
                        </a>
                        <span class="category">ARCHITECTURE</span>
                    </div>
                </div>
                <div class="row detail-images align-items-center mb-64 wow fadeInLeft delay-0-1s">
                    <div class="carousel slide" id="detailCarousel" data-bs-ride="carousel">
                        <div class="carousel-buttons">
                            <button class="prev" type="button" data-bs-target="#detailCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                            </button>
                            <button class="" type="button" data-bs-target="#detailCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                            </button>
                        </div>
                        <div class="row carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img src="assets/images/projects/img-1.png" alt="project">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/projects/img-2.jpg" alt="project">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/projects/img-3.jpg" alt="project">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/projects/img-4.jpg" alt="project">
                            </div>
                        </div>
                        <div class="col-xs-12 carousel-indicators">
                            <div class="row carousel-list-images gap-30">
                                <div class="col-md-3 col-lg-3 button-img">
                                    <button type="button" data-bs-target="#detailCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                                        <img src="assets/images/projects/img-1.png" alt="project">
                                    </button>
                                </div>
                                <div class="col-md-3 col-lg-3 button-img">
                                    <button type="button" data-bs-target="#detailCarousel" data-bs-slide-to="1" aria-label="Slide 2">
                                        <img src="assets/images/projects/img-2.jpg" alt="project">
                                    </button>
                                </div>
                                <div class="col-md-3 col-lg-3 button-img">
                                    <button type="button" data-bs-target="#detailCarousel" data-bs-slide-to="2" aria-label="Slide 3">
                                        <img src="assets/images/projects/img-3.jpg" alt="project">
                                    </button>
                                </div>
                                <div class="col-md-3 col-lg-3 button-img">
                                    <button type="button" data-bs-target="#detailCarousel" data-bs-slide-to="3" aria-label="Slide 4">
                                        <img src="assets/images/projects/img-4.jpg" alt="project">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row apartment-content wow fadeInRight delay-0-1s">
                    <p class="mt-32">“ Thank you for all of the beautiful ideas! We love it! Your interior design ideas are beautiful. We can't wait to complete the rest of the home.” - Olivia</p>
                </div>
            </div>
            <div class="col-md-12 item INTERIOR">
                <div class="row wow fadeInRight delay-0-1s rp-0">
                    <div class="pros-title text-center">
                        <a href="project-details.php">
                            <h4>Mountain House Architecture Design</h4>
                        </a>
                        <span class="category">INTERIOR</span>
                    </div>
                </div>
                <div class="row detail-images video align-items-center wow fadeInLeft delay-0-1s">
                    <img src="assets/images/projects/img-5.png" alt="project">
                    <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-md-12 item LANDSCAPE">
                <div class="row wow fadeInRight delay-0-1s rp-0">
                    <div class="pros-title text-center">
                        <a href="project-details.php">
                            <h4>Modern House And Landscape Design</h4>
                        </a>
                        <span class="category">LANDSCAPE</span>
                    </div>
                </div>
                <div class="row detail-images align-items-center wow fadeInLeft delay-0-1s">
                    <a href="project-details.php"><img src="assets/images/projects/img-6.png" alt="project"></a>
                </div>
            </div>
            <div class="col-md-12 item INTERIOR">
                <div class="row wow fadeInRight delay-0-1s rp-0">
                    <div class="pros-title text-center">
                        <a href="project-details.php">
                            <h4>Black Elegant Kitchen Design</h4>
                        </a>
                        <span class="category">INTERIOR</span>
                    </div>
                </div>
                <div class="row detail-images gap-30 align-items-center wow fadeInLeft delay-0-1s">
                    <div class="col-md-6">
                        <a href="project-details.php"><img src="assets/images/projects/img-7.png" alt="project"></a>
                    </div>
                    <div class="col-md-6">
                        <a href="project-details.php"><img src="assets/images/projects/img-8.png" alt="project"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <ul class="pagination flex-wrap justify-content-center wow fadeInUp delay-0-2s">
                <li class="page-item"> <span class="page-link"> Prev </span></li>
                <li class="page-item active">
                    <span class="page-link">
                        1
                        <span class="sr-only">(current)</span>
                    </span>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"> <span class="page-link"> Next </span></li>
            </ul>
        </div>
    </div>
</section>
<!-- Projects Area end -->

<?php include './layout/layoutBottom.php' ?>