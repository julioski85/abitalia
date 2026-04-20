<?php $lightMode = true; include './layout/layoutTop.php' ?>
        
        <!-- Banner Section Start -->
        <section class="about-banner py-128 black-100-bg">
            <div class="container">
                <div class="row top align-items-center">
                    <div class="col-md-4 left">
                        <p class="category-line"></p>
                        <p class="mt-16">Get in touch with us to learn more about interior or architecture design. We'd love to hear from you.</p> 
                    </div>
                    <div class="col-md-8 right">
                        <div class="giant-text">GET IN</div>
                    </div>                         
                </div>
                <div class="row image">                   
                    <div class="giant-text">TOUCH</div>
                    <div class="image-right">
                        <img src="assets/images/contact/banner.png" alt="about image">
                    </div>                   
                </div>
            </div>
        </section>
        <!-- Banner Section End -->

        <!-- Contact Form Area start -->
        <section class="contact-area py-128 black-120-bg">
            <div class="container">
                <div class="row justify-content-between align-items-center contact-content gap-30">
                    <div class="col-lg-6 ct-form wow fadeInRight delay-0-2s">
                        <form id="contactForm" class="contact-form rmt-55 contactForm" action="#" name="contactForm" method="post">
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control" value="" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control" value="" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" rows="9" placeholder="Message" required></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="contact-btn">Send a message</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 right wow fadeInLeft delay-0-2s">                       
                        <div class="text-bg">
                            <div class="giant-text rotate">MESSAGE</div>
                        </div>
                        <img src="assets/images/contact/contact.png" alt="contact image">
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Form Area end -->

        <!-- Studio Area start -->
        <section class="studio-area black-100-bg py-128">
            <div class="container">
                <div class="rel z-1 justify-content-center text-center">
                    <div class="text-center mb-96 wow fadeInUp delay-0-2s">
                        <h2>Our Studio</h2> 
                    </div>         
                </div>  
                <div class="row gap-30 project-active">
                    <div class="col-md-4 item text-center">
                        <div class="item-bg">
                            <h4 class="mb-32">New York</h4>
                            <img src="assets/images/contact/st-1.png" alt="team image">
                            <div class="mt-32">                           
                                <p>Address: 1224 Street, New York, USA</p>                                
                                <p>Email: <a href="mailto:newyork@arinde.com"> newyork@arinde.com</a></p> 
                                <p>Phone: <a href="tel:(+91) 123 456">(+91) 123 456</a></p> 
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-4 item text-center">
                        <div class="item-bg">
                            <h4 class="mb-32">Paris</h4>
                            <img src="assets/images/contact/st-2.png" alt="team image">
                            <div class="mt-32">                           
                                <p>Address: 1224 Street, Paris, French</p>
                                <p>Email: <a href="mailto:pariswe@arinde.com"> pariswe@arinde.com</a></p> 
                                <p>Phone: <a href="tel:(+91) 123 456">(+91) 123 456</a></p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 item text-center">
                        <div class="item-bg">
                            <h4 class="mb-32">London</h4>
                            <img src="assets/images/contact/st-3.png" alt="team image">
                            <div class="mt-32">                           
                                <p>Address: 16662 Street, London, UK</p>
                                <p>Email: <a href="mailto:londone@arinde.com"> londone@arinde.com</a></p> 
                                <p>Phone: <a href="tel:(+91) 123 456">(+91) 123 456</a></p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Studio Area end -->

        <section class="map-area">
            <div class="container-fluid">
                <!-- Location Map Area Start -->
                <div class="contact-page-map wow fadeInUp delay-0-2s">
                    <div class="our-location">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d96776.56071496992!2d-74.02420878160657!3d40.71212692665102!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1676287097391!5m2!1sen!2sbd" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <!-- Location Map Area End -->
            </div>
        </section>
        
        <?php include './layout/layoutBottom.php' ?>