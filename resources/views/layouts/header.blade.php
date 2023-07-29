<?php

$company_name = "Star Lead Wifarms";
$comapny_email = "support@starleadwifarms";
$company_phones = "08153732788";
$company_address = "115 upper chime avenu by ugbo okonkwo, New Heaven Enugu";

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ninetheme.com/themes/html-templates/agrikon/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 08:27:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $company_name }}</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="{{ $company_name }} Agriculture Farm & Farmers">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&amp;family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/agrikon-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nouislider.pips.css') }}">

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="55" src="assets/images/loader.png" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">

        <header class="main-header">
            <div class="topbar">
                <div class="container">
                    <div class="topbar__left">
                        <div class="topbar__social">
                            <a href="#" class="fab fa-facebook-square"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-pinterest-p"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div><!-- /.topbar__social -->
                        <p>Welcome to {{ $company_name }}</p>
                    </div><!-- /.topbar__left -->
                    <div class="topbar__right">
                        <a href="#"><i class="agrikon-icon-email"></i>{{ $comapny_email }}</a>
                        <a href="#"><i class="agrikon-icon-clock"></i>Mon - Sat 8:00 - 6:30, Sunday - CLOSED</a>
                    </div><!-- /.topbar__right -->
                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <nav class="main-menu">
                <div class="container">
                    <div class="logo-box">
                        <a href="index-2.html" aria-label="logo image"><img src="assets/images/logo-dark.png" width="153" alt=""></a>
                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div><!-- /.logo-box -->
                    <ul class="main-menu__list">
                        <li class="">
                            <a href="home">Home</a>
                            
                        </li>
                        <li>
                            <a href="about">About</a>
                        </li>
                        <li>
                            <a href="services">Services</a>
                        </li>
                        <li>
                            <a href="contact">Contact</a>
                        </li>
                        <li>
                            <a href="register">Register</a>
                        </li>
                        <!-- <li class="dropdown"><a href="#">Pages</a>
                            <ul>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="service-details.html">Service Details</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="dropdown">
                            <a href="projects.html">Projects</a>
                            <ul>
                                <li><a href="projects.html">Projects</a></li>
                                <li><a href="project-details.html">Projects Details</a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="dropdown"><a href="blog.html">News</a>
                            <ul>
                                <li><a href="blog.html">News</a></li>
                                <li><a href="blog-details.html">News Details</a></li>
                            </ul>
                        </li> -->
                    </ul>
                    <!-- /.main-menu__list -->

                    <div class="main-header__info">
                        <!-- <a href="#" class="search-toggler main-header__search-btn"> -->
                            <!-- <i class="agrikon-icon-magnifying-glass"></i></a> -->
                        <!-- <a class="main-header__cart-btn" href="#"><i class="agrikon-icon-shopping-cart"></i></a> -->
                        <a href="login" class="main-header__info-phone">
                            <!-- <i class="agrikon-icon-phone-call"></i> -->
                            <span class="main-header__info-phone-content">
                                <!-- <span class="main-header__info-phone-text">Call Anytime</span> -->
                                <span class="main-header__info-phone-title">Login</span>
                            </span><!-- /.main-header__info-phone-content -->
                        </a><!-- /.main-header__info-phone -->
                    </div><!-- /.main-header__info -->
                </div><!-- /.container -->
            </nav>
            <!-- /.main-menu -->
        </header><!-- /.main-header -->