@include('layouts.header')
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="home">Home</a></li>
                    <li>/</li>
                    <li><span>About</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
                <h2>About Us</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->


        <section class="about-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-three__image">
                            <img src="assets/images/resources/about-3-2.jpg" alt="">
                        </div><!-- /.about-three__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-three__content">
                            <div class="block-title">
                                <div class="block-title__image"></div><!-- /.block-title__image -->
                                <p>Get to know us</p>
                                <h3>30 Years Agriculture
                                    Experience</h3>
                            </div><!-- /.block-title -->
                            <ul class="about-three__list list-unstyled">
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Suspe ndisse suscipit sagittis
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    If you are going to a passage
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Entum estibulum dignissim
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Entum estibulum dignissim
                                </li>
                            </ul><!-- /.about-three__list list-unstyled -->
                            <div class="about-three__summery">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed deiusmod tempor incididunt ut
                                    labosre et dolore magna aliqua. Donec scelerisque dolor id nunc dictum, interdum. </p>
                            </div><!-- /.about-three__summery -->
                            <div class="about-three__signs">
                                <img src="assets/images/resources/about-3-1.png" alt="">
                                <img src="assets/images/resources/sign-1-1.png" alt="">
                            </div><!-- /.about-three__signs -->
                        </div><!-- /.about-three__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-three -->




        <section class="service-one service-one__about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="service-one__box">
                            <img src="assets/images/services/service-1-1.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="service-details.html">Agriculture Leader</a></h3>
                            </div><!-- /.service-one__box-content -->
                        </div><!-- /.service-one__box -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                    <div class="col-md-12 col-lg-4">
                        <div class="service-one__box">
                            <img src="assets/images/services/service-1-2.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="service-details.html">Quality Standards</a></h3>
                            </div><!-- /.service-one__box-content -->
                        </div><!-- /.service-one__box -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                    <div class="col-md-12 col-lg-4">
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

      

  

     


        <section class="call-to-action jarallax" data-jarallax data-speed="0.3" data-imgPosition="-80% 50%">
            <img class="call-to-action__bg jarallax-img" src="assets/images/backgrounds/cta-1-bg-1.jpg" alt="parallax-image" />
            <!-- /.call-to-action__bg -->
            <div class="container">
                <div class="call-to-action__content">
                    <i class="call-to-action__icon agrikon-icon-agriculture-2"></i>
                    <h3>We’re popular leader in agriculture
                        market globally</h3>
                </div><!-- /.call-to-action__content -->
                <div class="call-to-action__button">
                    <a href="services.html" class="thm-btn">Discover More</a><!-- /.thm-btn -->
                </div><!-- /.call-to-action__button -->
            </div><!-- /.container -->
        </section><!-- /.call-to-action -->


        @include('layouts.footer')
