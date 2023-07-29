@include('layouts.header')

@php
$company_name = "Star Lead Wifarms";
$comapny_email = "support@starleadwifarms";
$company_phones = "08153732788";
$company_address = "115 upper chime avenu by ugbo okonkwo, New Heaven Enugu"; 

@endphp

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{
        "slidesPerView": 1,
        "loop": true,
        "effect": "fade",
        "autoplay": {
            "delay": 5000
        },
        "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
        }
    }'>
                <div class="swiper-wrapper">
                <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/main-slider/main-slider-2-3.jpeg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7">
                                    <span class="tagline">Welcome to Agriculture {{$company_name}} Farm</span>
                                    <h2><span>Harvest the </span><br>
                                    Future Today!</h2>
                                    <p>
                                    Agriculture is the primary source of food production for the world's population.</p>
                                    <a href="register" class=" thm-btn">Discover More</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/main-slider/main-slider-3-2.jpeg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7">
                                    <span class="tagline">Welcome to Agriculture {{$company_name}} Farm</span>
                                    <h2><span>Agriculture</span><br>
                                        2.0 Advanced</h2>
                                    <p>Agriculture is often the backbone of rural communities. It contributes to the development of rural areas by creating jobs.</p>
                                    <a href="register" class=" thm-btn">Discover More</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/main-slider/main-slider-1-2.jpeg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7">
                                    <span class="tagline">Welcome to {{ $company_name }} Agriculture Farm</span>
                                    <h2><span>Discover Fresh </span><br>
                                    products!</h2>
                                    <p>Feeding the World, One Crop at a Time: Experience our Agricultural Excellence.</p>
                                    <a href="register" class=" thm-btn">Discover More</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/main-slider/main-slider-1-1.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7">
                                <span class="tagline">Welcome to {{ $company_name }} Agriculture Farm</span>
                                    <h2><span>Fertile Fields, </span> <br>
                                    Abundant Yields</h2>
                                    <p>Agriculture plays a significant role in the economy of many countries.</p>
                                    <a href="register" class=" thm-btn">Discover More</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                   

                   
                </div><!-- /.swiper-wrapper -->

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="agrikon-icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="agrikon-icon-right-arrow"></i></div>
                </div><!-- /.main-slider__nav -->

            </div><!-- /.swiper-container thm-swiper__slider -->
        </section><!-- /.main-slider -->
        <section class="service-two">
            <div class="service-two__bottom-curv"></div><!-- /.service-two__bottom-curv -->
            <div class="container">
                <div class="block-title text-center">
                    <div class="block-title__image"></div><!-- /.block-title__image -->
                    <p>Our Services list</p>
                    <h3>What We’re Offering</h3>
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="assets/images/services/service-2-1.jpg" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                <i class="agrikon-icon-vegetable"></i>
                                   
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="service-details.html">Livestock Management</a></h3>
                               
                                <p>Professionals assist livestock farmers with animal health management</p>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="assets/images/services/service-2-2.jpg" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <i class="agrikon-icon-organic-food"></i>
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="service-details.html">Fresh/Organic Vegetables</a></h3>
                                <p>We grow and sale organic fruits , vegetables and other products.</p>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="assets/images/services/service-2-3.jpg" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                <i class="agrikon-icon-tractor"></i>
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="service-details.html">Equipment and Machinery</a></h3>
                                <p>We offer sales, maintenance, and repair services.</p>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                   
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="assets/images/services/service-2-4.jpg" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <i class="agrikon-icon-dairy"></i>
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="service-details.html">Agricultural Research </a></h3>
                                <p>We conduct studies to develop new crop varieties.</p>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-two -->


        <section class="service-one d-none">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-one__box">
                            <img src="assets/images/services/service-1-1.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="service-details.html">Agriculture Leader</a></h3>
                            </div><!-- /.service-one__box-content -->
                        </div><!-- /.service-one__box -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                    <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-one__box">
                            <img src="assets/images/services/service-1-2.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="service-details.html">Quality Standards</a></h3>
                            </div><!-- /.service-one__box-content -->
                        </div><!-- /.service-one__box -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                    <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-one__box">
                            <img src="assets/images/services/service-1-3.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="service-details.html">Organic Services</a></h3>
                            </div><!-- /.service-one__box-content -->
                        </div><!-- /.service-one__box -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-one -->

        <section class="about-one">
            <img src="assets/images/icons/about-bg-icon-1-1.png" class="about-one__bg-shape-1" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="about-one__images">
                            <img src="assets/images/projects/project-2-1.jpg" alt="">
                            <img src="assets/images/resources/m-1.jpeg" alt="">
                            <div class="about-one__count wow fadeInLeft" data-wow-duration="1500ms">
                                <span>Trusted by</span>
                                <h4>8900</h4>
                            </div><!-- /.about-one__count -->
                        </div><!-- /.about-one__images -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-7">
                        <div class="about-one__content">
                            <div class="block-title text-left">
                                <div class="block-title__image"></div><!-- /.block-title__image -->
                                <p>Welcome to {{ $company_name }}</p>
                                <h3>Better Agriculture for
                                    Better Future</h3>
                            </div><!-- /.block-title -->
                            <div class="about-one__tagline">
                                <p>We have 5 years of agriculture & eco farming experience globaly</p>
                            </div><!-- /.about-one__tagline -->
                            <div class="about-one__summery">
                                <p>At {{ $company_name }}, we believe in the power of agriculture to 
                                    shape a sustainable and prosperous world.🌿🌽 </p>
                            </div><!-- /.about-one__summery -->
                            <div class="about-one__icon-row">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="about-one__box">
                                            <i class="agrikon-icon-farmer"></i>
                                            <h4><a href="">Professional
                                                    Farmers</a></h4>
                                        </div><!-- /.about-one__box -->
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="about-one__box">
                                            <i class="agrikon-icon-agriculture"></i>
                                            <h4><a href="">Organic & Eco
                                                    Solutions</a></h4>
                                        </div><!-- /.about-one__box -->
                                    </div><!-- /.col-lg-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.about-one__icon-row -->
                            <a href="register" class="thm-btn">Register</a><!-- /.thm-btn -->
                        </div><!-- /.about-one__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-one -->

       

        <div class="projects-one project-one__home-one">
            <div class="container">
                <div class="block-title text-center">
                    <div class="block-title__image"></div><!-- /.block-title__image -->
                    <p>Closed projects</p>
                    <h3>Latest Projects List</h3>
                </div><!-- /.block-title -->
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "loop": true, "slidesPerGroup": 1, "pagination": {
            "el": "#projects-one__swiper-pagination",
            "type": "bullets",
            "clickable": true
        },
        "breakpoints": {
            "0": {
                "spaceBetween": 0,
                "slidesPerView": 1,
                "slidesPerGroup": 1
            },
            "640": {
                "spaceBetween": 30,
                "slidesPerView": 2,
                "slidesPerGroup": 2
            },
            "992": {
                "spaceBetween": 30,
                "slidesPerView": 2,
                "slidesPerGroup": 2
            }
        }}'>
                    <div class="swiper-wrapper">
                    <div class="swiper-slide" >
                            <div class="projects-one__single">
                                <img src="assets/images/resources/m-2.jpeg" alt="">
                              
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="assets/images/projects/project-2-1.jpg" alt="">
                               
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                        
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="assets/images/projects/project-2-2.jpg" alt="">
                               
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="assets/images/projects/project-2-3.jpg" alt="">
                               
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                       
                       
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="assets/images/projects/project-2-4.jpg" alt="">
                               
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                    <div class="swiper-pagination" id="projects-one__swiper-pagination"></div>
                </div><!-- /.swiper-container -->
            </div><!-- /.container -->
        </div><!-- /.projects-one -->

        <section class="call-to-action__three jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 50%">
            <img class="call-to-action__three__bg jarallax-img" src="assets/images/backgrounds/cta-1-bg-1.jpg" alt="parallax-image" />
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="call-to-action__three-image">
                            <img src="assets/images/resources/cta-3-1.jpg" alt="">
                            <img src="assets/images/resources/cta-3-2.jpg" alt="">
                        </div><!-- /.call-to-action__three-image -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7">
                        <div class="call-to-action__three-content">
                            <h3>Providing High Quality
                                Products</h3>
                            <a href="register" class="thm-btn">Discover More</a><!-- /.thm-btn -->
                        </div><!-- /.call-to-action__three-content -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.call-to-action__three -->

        <section class="testimonials-one">
            <img src="assets/images/icons/testimonials-bg-1-1.png" class="testimonials-one__bg" alt="">
            <div class="container">
                <h2 class="testimonials-one__title">Testimonials</h2>
                <div id="testimonials-one__carousel" class="testimonials-one__carousel swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonials-one__icons">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div><!-- /.testimonials-one__icons -->
                            <p>Absolutely thrilled with the results! Thanks to their crop consulting, our yields have never been better. Highly recommend!.</p>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__icons">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div><!-- /.testimonials-one__icons -->
                            <p>Outstanding livestock management services! Our herd's health and productivity have improved significantly. Thank you, {{ $company_name }}!.</p>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__icons">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div><!-- /.testimonials-one__icons -->
                            <p>Game-changers in precision agriculture! Thanks to their tech-savvy solutions, we're maximizing our resources and profits like never before!".</p>
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /#testimonials-one__carousel -->

                <div id="testimonials-one__thumb" class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonials-one__image">
                                <img src="assets/images/resources/testimonials-1-1.jpg" alt="">
                            </div><!-- /.testimonials-one__image -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__image">
                                <img src="assets/images/resources/testimonials-1-2.jpg" alt="">
                            </div><!-- /.testimonials-one__image -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__image">
                                <img src="assets/images/resources/testimonials-1-3.jpg" alt="">
                            </div><!-- /.testimonials-one__image -->
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /#testimonials-one__thumb.swiper-container -->

                <div id="testimonials-one__meta" class="testimonials-one__carousel swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonials-one__meta">
                                <h4>Jessica Ugwu</h4>
                                <span>Customer</span>
                            </div><!-- /.testimonials-one__meta -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__meta">
                                <h4>Caleb Eze</h4>
                                <span>Customer</span>
                            </div><!-- /.testimonials-one__meta -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__meta">
                                <h4>John Chijioke</h4>
                                <span>Customer</span>
                            </div><!-- /.testimonials-one__meta -->
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /#testimonials-one__meta.swiper-container -->
                <div class="swiper-pagination" id="testimonials-one__swiper-pagination"></div>
            </div><!-- /.container -->
        </section><!-- /.testimonials-one -->

       

        

        <section class="contact-two">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                        <div class="contact-two__image">
                            <div class="contact-two__image-bubble-1"></div><!-- /.contact-two__image-bubble-1 -->
                            <div class="contact-two__image-bubble-2"></div><!-- /.contact-two__image-bubble-2 -->
                            <div class="contact-two__image-bubble-3"></div><!-- /.contact-two__image-bubble-3 -->
                            <img src="assets/images/resources/about-one-img-1.jpeg" class="img-fluid" alt="">
                        </div><!-- /.contact-two__image -->
                    </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-5 -->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                        <div class="contact-two__content">
                            <div class="block-title">
                                <div class="block-title__image"></div><!-- /.block-title__image -->
                                <p>Contact now</p>
                                <h3>Leave Us A
                                    Message</h3>
                            </div><!-- /.block-title -->
                            <div class="contact-two__summery">
                                <p>Don't miss out on this incredible opportunity! Reach out to us now, and let's cultivate success together! 🌾🤝.</p>
                            </div><!-- /.contact-two__summery -->
                        </div><!-- /.contact-two__content -->
                    </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-4 -->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                        <form action="" class="contact-one__form contact-form-validated">
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" name="name" placeholder="Full Name">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <input type="text" name="email" placeholder="Email Address">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <input type="text" name="phone" placeholder="Phone Number">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="Write Message"></textarea>
                                </div><!-- /.col-lg-12 -->
                                <div class="col-lg-12">
                                    <button type="submit" class="thm-btn">Send Message</button><!-- /.thm-btn -->
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-two -->
 @include('layouts.footer')


