<!DOCTYPE html>
<html lang="en">

<!-- Mirrored fromvnvcs.com/izeetak/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 11:21:40 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VNVCS | Homepage</title>
    <link rel="canonical" href="https://www.vnvcs.com/">
    <meta name="robots" content="noindex"> <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Izeetak HTML Template For IT Solutions Company" /> <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/izeetak-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/twentytwenty/twentytwenty.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/vegas/vegas.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/timepicker/timePicker.css')}}" /> <!-- template styles -->
    <link rel="stylesheet" href="{{asset('css/izeetak.css')}}" />
    <link rel="stylesheet" href="{{asset('css/izeetak-responsive.css')}}" />
    <style>
        .back-none {
            background-color: transparent !important;
        }

        .share-the-joy__title {
            font-size: 30px;
            color: var(--thm-base);
            font-weight: 800;
            line-height: 35px;
            margin-bottom: 59px;
            text-align: justify;
        }

        .main-slider h2 {
            margin: 0;
            margin-bottom: 32px;
            color: #fff;
            font-weight: 900;
            opacity: 0;
            visibility: hidden;
            transform: translateY(120px);
            transition-delay: 1000ms;
            transition: transform 2000ms ease, opacity 2000ms ease;
            font-size: 64px;
            line-height: 70px;
            letter-spacing: -0.02em;
            z-index: 30;
        }

        .about-one__points li .icon span {
            font-size: 20px;
            color: #e7794f;
        }

        .thm-btn {
            background-color: #004E89;
        }

        .colr {
            color: #F7C59F !important;
        }

        .colr1 {
            color: #EFEFD0 !important;
        }

        .main-menu-wrapper__right {
            position: relative;
            display: flex;
            float: right;
            padding: 15px;
            align-items: center;
        }

        .sticky-header__content .main-menu-wrapper__search-box-cart-box {
            background-image: none !important;
        }

        .main-menu-wrapper__search-box-cart-box {
            padding: 22px;
            margin-top: -36px;
            height: 76px;
            width: 205px;
        }

        .main-header {
            position: relative;
            display: block;
        }

        .brand-one .swiper-slide img {
            width: 70%;
        }

        .about-one__it-solutions-icon span {
            color: #FF6B35;
        }

        .services-one__single:hover .services-one__icon {
            background-color: #FF6B35;
            color: var(--thm-base);
        }

        .services-one__icon:after {
            background-color: #F7C59F;
        }

        .services-one__icon:before {
            background-color: #F7C59F;
        }

        .services-one__single:hover .services-one__arrow a {
            background-color: #FF6B35;
            color: var(--thm-base);
        }

        .about-one__img-box:before {
            background-color: #FF6B35;
        }

        .about-one__img-box:after {
            background-color: #004E89;
        }

        .zoom {
            padding: 10px;
            transition: transform .2s;
            /* Animation */
            margin: 0 auto;
        }

        .zoom:hover {
            transform: scale(1.5);
            /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }

        .services-one__title a:hover {
            color: #FF6B35;
        }

        .improve-one__project-complete {
            background-color: #F7C59F;
        }

        .stricky-header .main-menu__list>li>a {
            font-size: 20px;
            font-weight: 500;
            display: flex;
            align-items: center;
            color: black;
            position: relative;
            transition: all 500ms ease;
        }

        .main-menu .main-menu__list>li:hover>a {
            color: #FF6B35;
            text-shadow: 0 0 1px currentColor;
        }

        .main-menu-wrapper__call-number h5 a {
            color: black;
            -webkit-transition: all 500ms ease;
            transition: all 500ms ease;
        }

        .stricky-header .main-menu-wrapper__call-number h5 a {
            color: black;
            -webkit-transition: all 500ms ease;
            transition: all 500ms ease;
        }

        .stricky-header .main-menu-wrapper__search,
        .stricky-header .main-menu-wrapper__cart {
            font-size: 24px;
            color: black;
            -webkit-transition: all 500ms ease;
            transition: all 500ms ease;
        }

        .main-menu-wrapper__search,
        .main-menu-wrapper__cart {
            font-size: 24px;
            color: black;
            -webkit-transition: all 500ms ease;
            transition: all 500ms ease;
        }

        .stricky-header .main-menu__list>li:hover>a {
            color: #FF6B35;
            text-shadow: 0 0 1px currentColor;
        }

        .main-header .main-menu-wrapper__logo .size {
            height: 60px;
        }

        .stricky-header .main-menu-wrapper__logo .size {
            height: 44px;
        }

        .page-header1 {
            position: relative;
            display: block;
            padding: 400px 600px 400px 454px;
            z-index: 1;
            /* background-color: var(--thm-black); */
        }

        .product {
            background-color: #b6927c;
            color: black;
            padding: 10px;
            border-radius: 37px;
            margin-top: 18px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            /* number of lines to show */
            line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        .pillars_title {
            margin: 0;
            font-weight: 800;
            color: var(--thm-base);
            font-size: 50px;
            line-height: 60px;
            text-align: center;
        }

        .videosize {
            position: absolute;
            z-index: -1;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
        }

        .main-slider .swiper-slide {
            position: relative;
            background-color: transparent;
        }

        h2 span {
            color: #d33c04;
        }

        .single_feature_six {
            background: #e17569;
            padding: 14px 38px 1px;
            position: relative;
            z-index: 1;
            margin-bottom: 30px;
            border-radius: 60px;
            color: black;
        }

        .rsingle_feature_six {
            background: #787878;
            padding: 14px 38px 1px;
            position: relative;
            z-index: 1;
            margin-bottom: 30px;
            border-radius: 60px;
            color: black;
        }

        .csingle_feature_six {
            background: rgb(81 154 172);
            padding: 14px 38px 1px;
            position: relative;
            z-index: 1;
            margin-bottom: 30px;
            margin-top: 208px;
            border-radius: 60px;
            color: white;
        }

        .stricky-header .main-menu__list .ic {
            position: absolute;
            top: 30%;
            left: 174px;
        }

        .stricky-header .main-menu__list .id {
            position: absolute;
            top: 30%;
            left: 90px;
        }

        .stricky-header .main-menu__list .in {
            position: absolute;
            top: 30%;
            left: 80px;
        }

        .ic {
            position: absolute;
            top: 54%;
            left: 174px;
        }

        .id {
            position: absolute;
            top: 54%;
            left: 86px;
        }

        .in {
            position: absolute;
            top: 53%;
            left: 78px;
        }

        .thm-btn1 {
            background-color: #d33c04 !important;
        }

        .hidden {
            display: none;
        }

        .readmore {
            margin: 0 5px;
        }

        /* .testimonial-one__client-img img {            width: 70% !important;        } */
        @media only screen and (min-width: 1200px) and (max-width: 1500px) {
            .main-menu-wrapper__logo {
                margin-right: 41px !important;
            }
        }

        .main-menu .main-menu__list>li+li,
        .stricky-header .main-menu__list>li+li {
            margin-left: 50px;
        }

        .swiper-slide {
            width: 28vw;
            overflow: hidden;
            background-position: top;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            font-weight: bold;
        }

        .swiper-wrapper {
            -webkit-transition-timing-function: linear !important;
            -o-transition-timing-function: linear !important;
            transition-timing-function: linear !important;
        }

        .navbar-line-break3 {
            border-left: 3px solid #FF6B35;
            height: 410px;
            position: absolute;
            left: 47%;
            top: 130PX;
        }

        .video-container {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .md-stepper-horizontal .journetNotify {
            position: relative;
            width: 96%;
            margin: 0 auto;
            padding: 10px;
            border-radius: 80px;
            /* background-color: #004E89; */
            background: linear-gradient(267.69deg, #1A659E -.1%, rgba(49, 38, 67, 0) 99.33%);
            border: 1px solid #1A659E;
            box-sizing: border-box;
            text-align: center;
        }

        .md-step-title p {
            font-size: 18px;
            line-height: 23px;
        }

        .journetNotify1:before {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            right: 0;
            margin: auto;
            height: 20px;
            width: 20px;
            position: absolute;
            background: #004E89;
            border: 1px solid #1A659E;
            border-bottom: #004E89 solid 2px;
            border-right: #004E89 solid 2px;
            transform: rotate(225deg);
        }

        .journetNotify:before {
            content: '';
            position: absolute;
            bottom: 74px;
            left: 0;
            right: 0;
            margin: auto;
            height: 20px;
            width: 20px;
            position: absolute;
            background: #004E89;
            border: 1px solid #1A659E;
            border-bottom: #004E89 solid 2px;
            border-right: #004E89 solid 2px;
            transform: rotate(225deg);
        }

        /*====================================================--<	Techno Flipbox Area Css -->======================================================*/
        .techno_flipbox_font {
            border-radius: 8px;
        }

        .flipbox .section_main_title h1 {
            color: #fff;
        }

        .flipbox .section_sub_title h6 {
            color: #fff;
        }

        .flipbox .section_title {
            margin-bottom: 30px;
        }

        .techno_flipbox {
            perspective: 1000px;
            position: relative;
            transform-style: preserve-3d;
            -webkit-perspective: 1000px;
            -webkit-transform-style: preserve-3d;
            z-index: 1;
        }

        .techno_flipbox .techno_flipbox_font,
        .techno_flipbox .techno_flipbox_back {
            min-height: 250px;
            height: auto;
            box-shadow: 0px 1px 51.3px 5.7px rgba(137, 143, 156, .15);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transform: rotateX(0);
            -webkit-transform: rotateX(0);
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            transition: transform .7s ease, -webkit-transform .7s ease;
            position: relative;
            background-color: white;
            width: 88%;
        }

        .techno_flipbox .techno_flipbox_back::before {
            position: absolute;
            content: "";
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            /* background: linear-gradient(to bottom,transparent -80%,#F7C59F); */
            background-color: #ff6b35;
            border-radius: 8px;
        }

        /* .icon {            font-size: 45px;            line-height: 45px;        } */
        .techno_flipbox .techno_flipbox_inner {
            text-align: center;
            padding: 0 25px;
            border-radius: 2px;
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            perspective: inherit;
            -webkit-perspective: inherit;
            outline: transparent solid 1px;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transform: translateY(-50%) translateZ(60px) scale(0.94);
            transform: translateY(-50%) translateZ(60px) scale(0.94);
            z-index: 2;
        }

        .techno_flipbox_icon {
            font-size: 45px;
            text-align: center;
            display: inline-block;
            color: #fff;
            overflow: hidden;
        }

        .techno_flipbox_font .flipbox_desc p {
            color: #fff;
        }

        .techno_flipbox .flipbox_title h3 {
            font-size: 22px;
            padding-bottom: 13px;
            text-transform: capitalize;
            -webkit-transition: all 0.7s ease 0s;
            transition: all 0.7s ease 0s;
            color: black;
        }

        .techno_flipbox .techno_flipbox_back {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            border-radius: 2px;
            -webkit-transform: rotateX(180deg);
            transform: rotateX(180deg);
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            width: 88%;
            border-radius: 8px;
        }

        .techno_flipbox_font .icon {
            color: #fff;
            font-size: 30px;
            line-height: 80px;
            height: 80px;
            width: 80px;
            background: #fb652f;
            border-radius: 33% 66% 70% 30%/49% 62% 38% 51% !important;
            display: inline-block;
        }

        .techno_flipbox .techno_flipbox_back .flipbox_button a {
            text-transform: capitalize;
            margin-top: 22px;
            background: #fff;
            color: #0c5adb;
            display: inline-block;
            padding: 4px 25px;
            border-radius: 5px;
            border: 2px solid #fff;
            transition: .5s;
        }

        .techno_flipbox_back .flipbox_desc p {
            color: #fff;
        }

        .techno_flipbox .techno_flipbox_back .flipbox_button a i {
            display: none;
        }

        .techno_flipbox .techno_flipbox_back .flipbox_title h3 {
            padding-bottom: 16px;
            padding-top: 0;
            color: #fff;
            margin-bottom: 0;
        }

        .techno_flipbox .techno_flipbox_font .flipbox_desc,
        .techno_flipbox .techno_flipbox_back .flipbox_desc {
            color: #fff;
        }

        /* Flipbox Hover Css */
        .techno_flipbox:hover .techno_flipbox_font {
            -webkit-transform: rotateX(-180deg);
            transform: rotateX(-180deg);
        }

        .techno_flipbox:hover .techno_flipbox_back {
            -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
        }

        .techno_flipbox .techno_flipbox_back .flipbox_button a:hover {
            color: #fff;
            border-color: #0c5adb;
            background: #0c5adb;
        }

        .pages .techno_flipbox .techno_flipbox_font .flipbox_title h3 {
            color: #444;
        }

        .pages .techno_flipbox_font .flipbox_desc p {
            color: #666;
        }

        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 822px;
                margin: 1.75rem auto;
            }
        }

        .main-menu .main-menu__list li ul,
        .stricky-header .main-menu__list li ul {
            position: absolute;
            top: 115%;
            left: -150px;
        }

        a {
            color: white;
        }

        .pb-70 {
            padding-bottom: 200px;
        }

        .pt-70 {
            padding-top: 70px;
        }

        .mb-55 {
            margin-bottom: 55px;
        }

        .social {
            padding-top: 24px;
        }

        .stricky-header.main-menu {
            padding: 0 13px !important;
            background-color: var(--thm-base);
        }

        .stricky-header .main-menu-wrapper__search-box-cart-box {
            width: 164px;
        }

        .md-step .text-center img {
            width: auto;
        }

        a:not([href]):not([class]),
        a:not([href]):not([class]):hover {
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <div class="desktop-view">
            <header class="main-header clearfix sp-header">
                <nav class="main-menu clearfix" style="    margin-right: -55px;">
                    <div class="main-menu-wrapper clearfix">
                        <div class="main-menu-wrapper-inner clearfix">
                            <div class="main-menu-wrapper__left clearfix">
                                <div class="main-menu-wrapper__logo"> <a href="{{url('/')}}"><img src="{{asset('images/vnvcs/logo-1.png')}}" alt="" style="height:55px;"></a>
                                    <!-- <span style="width:100%;margin-left:4px;">ISO 9001:2015</span><br>                                    <span style="width:100%;margin-top:-35px;margin-left: 210px;">ISO/IEC 20000-1:2018</span> -->
                                </div>
                                <div class="main-menu-wrapper__main-menu">
                                    <ul class="main-menu__list" style="margin-left: 135px;">
                                        <li class="dropdown"><a href="{{url('about-us')}}">About us <i class="fa fa-angle-down id"></i></a>
                                            <ul class="dropdown-menu" style="min-width:200px;left:0px;border-radius:20px;">
                                                <li>
                                                    <div class=" row" style="padding:10px;"> <a href="{{url('/about-us')}}" class="subtitle" style="padding-top: 0px;padding-bottom: 0px;">
                                                            <div class="title-name">About us</div>
                                                        </a> <a href="{{url('/careers')}}" class="subtitle" style="padding-top: 0px;padding-bottom: 0px;">
                                                            <div class="title-name">Careers</div>
                                                        </a> <a href="{{url('/our-team')}}" class="subtitle" style="padding-top: 0px;padding-bottom: 0px;">
                                                            <div class="title-name">Our Team</div>
                                                        </a> <a href="{{url('/contact-us')}}" class="subtitle" style="padding-top: 0px;padding-bottom: 0px;">
                                                            <div class="title-name">Contact Us</div>
                                                        </a> </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"> <a href="{{url('products')}}">Products <i class="fa fa-angle-down id"></i></a>
                                            <ul class="dropdown-menu" style="min-width:530px;border-radius:20px;">
                                                <li>
                                                    <div class="row" style="padding: 15px;">
                                                        <div class="col-md-4 ">
                                                            <div class="title"> Ports</div> <a href="products#cts" class="subtitle " style="padding-top: 0px;padding-bottom: 10px;">
                                                                <div id="DivForHoverItem">CTS TOS </div>
                                                            </a> <a href="products#rail" class="subtitle " style="padding-top: 0px;padding-bottom: 10px;">
                                                                <div id="DivForHoverItem">RAIL TOS </div>
                                                            </a> <a href="products#bliq" class="subtitle " style="padding-top: 0px;padding-bottom: 10px;">
                                                                <div id="DivForHoverItem">BLIQ TOS </div>
                                                            </a> <a href="products#roro" class="subtitle " style="padding-top: 0px;padding-bottom: 10px;">
                                                                <div id="DivForHoverItem">RO-RO TOS </div>
                                                            </a> <a href="products#foucs" class="subtitle " style="padding-top: 0px;padding-bottom: 10px;">
                                                                <div id="DivForHoverItem">FOCUS </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4 p-border">
                                                            <div class="title"> Shipping</div> <a href="products#nvocc" class="subtitle " style="padding-top: 0px;padding-bottom: 10px;">
                                                                <div id="DivForHoverItem">NVOCCMag </div>
                                                            </a> <a href="products#wavez" class="subtitle " style="padding-top: 0px;padding-bottom: 10px;">
                                                                <div id="DivForHoverItem">WAVEZ </div>
                                                            </a> <a href="products#satm" class="subtitle " style="padding-top: 0px;padding-bottom: 10px;">
                                                                <div id="DivForHoverItem">SATM </div>
                                                            </a> <a href="products#biz" class="subtitle " style="padding-top: 0px;padding-bottom: 20px;">
                                                                <div id="DivForHoverItem">BIZ ANALYTIX </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4 p-border">
                                                            <div class="title">Logistics</div> <a href="{{url('cfsmag-ee')}}" class="subtitle " style="padding-top: 0px;padding-bottom: 10px;">
                                                                <div id="DivForHoverItem">CFSMag<sup>+</sup>&nbsp;EE
                                                                </div>
                                                            </a> <a href="products#cmr" class="subtitle " style="padding-top: 0px;padding-bottom: 10px;">
                                                                <div id="DivForHoverItem">CMRMag </div>
                                                            </a> <a href="products#fleet" class="subtitle " style="padding-top: 0px;padding-bottom: 10px;">
                                                                <div id="DivForHoverItem">FLEETMag </div>
                                                            </a> <a href="products#wms" class="subtitle " style="padding-top: 0px;padding-bottom: 10px;">
                                                                <div id="DivForHoverItem">WMSMag </div>
                                                            </a> <a href="products#railfreight" class="subtitle " style="padding-top: 0px;padding-bottom: 10px;">
                                                                <div id="DivForHoverItem">RAILFREIGHT </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"> <a href="{{url('services')}}">Services <i class="fa fa-angle-down in"></i> </a>
                                            <ul class="dropdown-menu" style="min-width:714px;border-radius:20px;">
                                                <li>
                                                    <div class=" row" style="padding:10px;">
                                                        <div class="col-md-4"> <a href="#">
                                                                <div class="title">Services</div>
                                                            </a> <a href="services#cloudservices" class="subtitle" style="padding-top: 0px;padding-bottom: 0px;">
                                                                <div class="title-name">Cloud Services</div>
                                                            </a> <a href="services#projectdelivery" class="subtitle" style="padding-top: 0px;padding-bottom: 0px;">
                                                                <div class="title-name">Project delivery</div>
                                                            </a> <a href="services#ondemandit" class="subtitle" style="padding-top: 0px;padding-bottom: 0px;">
                                                                <div class="title-name">On Demand IT</div>
                                                            </a> <a href="services#softwareservices" class="subtitle" style="padding-top: 0px;padding-bottom: 0px;">
                                                                <div class="title-name">Product Implementation Service</div>
                                                            </a> <a href="services#projectmanagement" class="subtitle" style="padding-top: 0px;padding-bottom: 0px;">
                                                                <div class="title-name">Project Management</div>
                                                            </a> <a href="services#trainingservices" class="subtitle" style="padding-top: 0px;padding-bottom: 0px;">
                                                                <div class="title-name">Training services</div>
                                                            </a> </div> <!-- <div class="navbar-line-break"></div> -->
                                                        <div class="col-md-4 navbar-line-break"> <a href="#">
                                                                <div class="title">Support</div>
                                                            </a> <a href="services#productsupport" class="subtitle" style="padding-top: 0px;padding-bottom: 0px;">
                                                                <div class="title-name">Product support</div>
                                                            </a> <a href="services#basedsupport" class="subtitle" style="padding-top: 0px;padding-bottom: 0px;">
                                                                <div class="title-name">SLA based support</div>
                                                            </a> <a href="services#onsiteitmanpower" class="subtitle" style="padding-top: 0px;padding-bottom: 0px;">
                                                                <div class="title-name">Onsite IT Manpower</div>
                                                            </a> <a href="services#postsalesupport" class="subtitle" style="padding-top: 0px;padding-bottom: 0px;">
                                                                <div class="title-name">Post-Sales support</div>
                                                            </a> <a href="services#ticketingsystem" class="subtitle" style="padding-top: 0px;padding-bottom: 0px;">
                                                                <div class="title-name">Ticketing System</div>
                                                            </a> </div>
                                                        <div class="col-md-4 navbar-line-break1"> <a href="#">
                                                                <div class="title">Consultancy</div>
                                                            </a> <a href="services#projectconsultancy" class="subtitle" style="padding-top: 0px;padding-bottom: 0px;">
                                                                <div class="title-name">Project Consultancy</div>
                                                            </a> <a href="services#operationalconsultancy" class="subtitle" style="padding-top: 0px;padding-bottom: 0px;">
                                                                <div class="title-name">Operational Consultancy</div>
                                                            </a> <a href="services#solutionroadmap" class="subtitle" style="padding-top: 0px;padding-bottom: 0px;">
                                                                <div class="title-name">Solution Roadmap</div>
                                                            </a> <a href="services#manageditsolutions" class="subtitle" style="padding-top: 0px;padding-bottom: 0px;">
                                                                <div class="title-name">Managed IT solutions</div>
                                                            </a> </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a>Insights <i class="fa fa-angle-down in"></i></a>
                                            <ul class="dropdown-menu" style="min-width:200px;left:0px;border-radius:20px;">
                                                <li>
                                                    <div class=" row" style="padding:10px;"> <a href="{{url('blogs')}}" class="subtitle" style="padding-top: 0px;padding-bottom: 0px;">
                                                            <div class="title-name">Blog</div>
                                                        </a> <a href="{{url('news-and-event')}}" class="subtitle" style="padding-top: 0px;padding-bottom: 0px;">
                                                            <div class="title-name">News & Event</div>
                                                        </a> <a href="{{url('case-studies')}}" class="subtitle" style="padding-top: 0px;padding-bottom: 0px;">
                                                            <div class="title-name">Case Studies</div>
                                                        </a> </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="main-menu-wrapper__right">
                                <div class="main-menu-wrapper__call"> <a href="#" class="main-menu-wrapper__search search-toggler icon-magnifying-glass" style="    margin-top: -7px;"></a> </div>
                                <div class="main-menu-wrapper__search-box-cart-box" style="padding: 4.5px 0;">
                                    <div class="main-menu-wrapper__call-icon" style="margin-left: 22px;padding-top:24px"> <a href=" tel:9152123651">
                                            <div class="tooltip"> <img src="{{asset('images/shapes/phone-icon.png')}}" alt=""> <span class="tooltiptext">+91-9152123651 / 52</span> </div>
                                        </a> </div>
                                    <div class="social"> <i class="fab fa-linkedin" aria-hidden="true" style="color:#0e76a8"></i> <i class="fab fa-twitter" aria-hidden="true" style="margin-left:22px;color:  #00acee"></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="stricky-header stricked-menu main-menu">
                <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
            </div>
        </div> <!-- /.stricky-header -->
        <div class="mobile-view">
            <header class="nav-top"> <a href="{{url('')}}"> <img src="{{asset('images/vnvcs/logo-1.png')}}" style="width: 140px;"></a> <span class="hamburger material-icons" id="ham"><i class="fa fa-bars" style="color:black;" aria-hidden="true"></i></span> </header>
            <nav class="nav-drill">
                <ul class="nav-items nav-level-1" style="list-style-type: none;padding-left: 0rem;">
                    <li class="nav-item nav-expand"> <a class="nav-link nav-expand-link" href="#"> About us </a>
                        <ul class="nav-items nav-expand-content" style="list-style-type: none;padding-left: 0rem;">
                            <li class="nav-item"> <a class="nav-link" href="{{url('about-us')}}"> About us </a> </li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('careers')}}"> Careers </a> </li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('our-team')}}"> Our Team </a> </li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('contact-us')}}"> Contact </a> </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-expand"> <a class="nav-link nav-expand-link" href="#"> Product </a>
                        <ul class="nav-items nav-expand-content" style="list-style-type: none;padding-left: 0rem;">
                            <li class="nav-item"> <a class="nav-link" href="{{url('products')}}"> All Product </a> </li>
                            <li class="nav-item nav-expand"> <a class="nav-link nav-expand-link" href="#"> Ports </a>
                                <ul class="nav-items nav-expand-content" style="list-style-type: none;padding-left: 0rem;">
                                    <li class="nav-item"> <a class="nav-link" href="#"> CTS TOS </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#"> RAIL TOS </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#"> BLIQ TOS </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#"> RO-RO TOS </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#"> FOCUS </a> </li>
                                </ul>
                            </li>
                            <li class="nav-item nav-expand"> <a class="nav-link nav-expand-link" href="#"> Shipping </a>
                                <ul class="nav-items nav-expand-content" style="list-style-type: none;padding-left: 0rem;">
                                    <li class="nav-item"> <a class="nav-link" href="#"> NVOCCMag </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#"> WAVEZ </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#"> SATM </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#"> BIZ ANALYTIX </a> </li>
                                </ul>
                            </li>
                            <li class="nav-item nav-expand"> <a class="nav-link nav-expand-link" href="#"> Logistics
                                </a>
                                <ul class="nav-items nav-expand-content" style="list-style-type: none;padding-left: 0rem;">
                                    <li class="nav-item"> <a class="nav-link" href="{{'cfsmag-ee'}}"> CFSMag<sup>+</sup>
                                            &nbsp;&nbsp;EE </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#"> CMRMag </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#"> FLEETMag </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#"> WMSMag </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="#"> RAILFREIGHT </a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-expand"> <a class="nav-link nav-expand-link" href="#"> Services & Support
                        </a>
                        <ul class="nav-items nav-expand-content">
                            <li class="nav-item nav-expand"> <a class="nav-link nav-expand-link" href="#"> Services </a>
                                <ul class="nav-items nav-expand-content">
                                    <li class="nav-item"> <a class="nav-link" href="services#cloudservices"> Cloud
                                            Services </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="services#projectdelivery"> Project
                                            delivery </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="services#ondemandit"> On Demand IT
                                        </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="services#softwareservices"> Product Implementation Service </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="services#projectmanagement"> Project
                                            Management </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="services#trainingservices"> Training
                                            services </a> </li>
                                </ul>
                            </li>
                            <li class="nav-item nav-expand"> <a class="nav-link nav-expand-link" href="#"> Support </a>
                                <ul class="nav-items nav-expand-content">
                                    <li class="nav-item"> <a class="nav-link" href="services#productsupport"> Product
                                            support </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="services#basedsupport"> SLA based
                                            support </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="services#onsiteitmanpower"> Onsite
                                            IT Manpower </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="services#postsalesupport">
                                            Post-Sales support </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="services#ticketingsystem"> Ticketing
                                            System </a> </li>
                                </ul>
                            </li>
                            <li class="nav-item nav-expand"> <a class="nav-link nav-expand-link" href="#"> Consultancy
                                </a>
                                <ul class="nav-items nav-expand-content">
                                    <li class="nav-item"> <a class="nav-link" href="services#projectconsultancy">
                                            Project Consultancy </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="services#operationalconsultancy">
                                            Operational Consultancy </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="services#solutionroadmap"> Solution
                                            Roadmap </a> </li>
                                    <li class="nav-item"> <a class="nav-link" href="services#manageditsolutions">
                                            Managed IT solutions </a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-expand"> <a class="nav-link nav-expand-link" href="#"> Insights </a>
                        <ul class="nav-items nav-expand-content" style="list-style-type: none;padding-left: 0rem;">
                            <li class="nav-item"> <a class="nav-link" href="{{url('blogs')}}"> Blogs </a> </li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('news-and-event')}}"> News & Event
                                </a> </li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('case-studies')}}"> Case Studies </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!--Main Slider Start--> <a href="{{url('cfsmag-ee')}}">
            <div class="fixed-bottom">
                <div class="latest"> <img src="{{asset('images/vnvcs/cfsmag-ee.png')}}" class="blink-image"> </div>
                <div class="intro__bg"> <canvas id="intro__canvas" data-colors="[&quot;#FBA500&quot;, &quot;#FF3C00&quot;, &quot;#fff&quot;]" width="1321" height="230"></canvas> </div>
            </div>
        </a>
        <section class="page-header1" style="margin-top:-71px;padding: 300px 600px 256px 454px;">
            <div class="page-header-bg"> <video autoplay muted loop id="myVideo" class="desktop-view" style="position:absolute;top :0;left: 0;  display :block;object-fit :cover;width: 100vw;">
                    <source src=" {{asset('images/video/vnvcs-corporate.mp4')}}" type="video/mp4">
                </video> <img src="{{asset('images/vnvcs/vnvcs.jpeg')}}" class="mobile-view" style="height: 516px;">
            </div>
            <div class="page-header-bg-overly"></div>
            <section class="main-slider" style=""> </section>
        </section>
        <!--Main Slider End-->
        <!--Feature One Start-->
        <div class="flipbox_area top_feature feature-one" style="margin-top: -60px;">
            <div class="container">
                <div class="row nagative_margin">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
                        <div class="techno_flipbox mb-30">
                            <div class="techno_flipbox_font">
                                <div class="techno_flipbox_inner">
                                    <div class="techno_flipbox_icon">
                                        <div class="icon"> <i class=" fa fa-solid fa-anchor"></i> </div>
                                    </div>
                                    <div class="flipbox_title">
                                        <h3>Port</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="techno_flipbox_back">
                                <div class="techno_flipbox_inner">
                                    <div class="flipbox_desc">
                                        <p>Ports are gateways for cargo and people and are made up of terminals that
                                            specialize specific throughput.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
                        <div class="techno_flipbox mb-30">
                            <div class="techno_flipbox_font">
                                <div class="techno_flipbox_inner">
                                    <div class="techno_flipbox_icon">
                                        <div class="icon"> <i class="fa fa-ship" aria-hidden="true"></i> </div>
                                    </div>
                                    <div class="flipbox_title">
                                        <h3>Shipping</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="techno_flipbox_back">
                                <div class="techno_flipbox_inner">
                                    <div class="flipbox_desc">
                                        <p>Shipping is transport of cargo as business, esp. of ships.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
                        <div class="techno_flipbox mb-30">
                            <div class="techno_flipbox_font">
                                <div class="techno_flipbox_inner">
                                    <div class="techno_flipbox_icon">
                                        <div class="icon"> <i class='fa fa-shipping-fast'></i> </div>
                                    </div>
                                    <div class="flipbox_title">
                                        <h3>Logistics</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="techno_flipbox_back">
                                <div class="techno_flipbox_inner">
                                    <div class="flipbox_desc">
                                        <p>Overall process of managing how resources is acquired, stored, and
                                            transported to their destination.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Feature One End-->
        <!--Share The Joy Start-->
        <section class="share-the-joy">
            <div class="share-the-joy__inner">
                <div class="share-the-joy-map" style="background-image: url('images/shapes/share-the-joy-map.png')">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <h2 class="share-the-joy__title">Tracking cargo from first mile to last mile, Monitoring and
                                improving safety, optimizing road and rail network, managing multiple terminals through
                                an integrated centralized solution. </h2> <a href="{{url('services')}}" class="share-the-joy__btn thm-btn">We do it all <span class="icon-right-arrow"></span></a>
                        </div>
                        <div class="col-xl-5">
                            <div class="share-the-joy__right">
                                <div class="share-the-joy__img-box">
                                    <div class="share-the-joy__img wow fadeInRight" data-wow-duration="1500ms"> <img src="{{asset('images/resources/share-the-joy-img-1.png')}}" style="width: 763px;
    margin-top: 82px" alt="share-the-joy-img-1" class="float-bob-2"> </div>
                                    <div class="share-the-joy__trusted wow fadeIn" data-wow-duration="1500ms"> <span class="icon-social-media"></span>
                                        <div class="share-the-joy__trusted__content">
                                            <p>Trusted Since</p>
                                            <h3 class="odometer" data-count="1999">00</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Share The Joy End-->
        <section class="brand-one bg_journey">
            <div class="container">
                <h2 class="colo">A legacy of <span class="Counter">20+ years</span> and continuing...</h2>
                <div class="thm-swiper__slider swiper-container1">
                    <div class=" swiper-wrapper">
                        <div class="swiper-slide" style="overflow: visible!important;">
                            <div class="col-md-12 cau">
                                <div class="year">
                                    <div class="set">
                                        <h4> 1999</h4>
                                    </div>
                                </div>
                                <div class="md-stepper-horizontal ">
                                    <div class="md-step-bar-right"></div>
                                    <div class="md-step done">
                                        <div class="md-step-bar-left"></div>
                                        <div class="text-center"> <img src="{{asset('images/vnvcs/vnv.png')}}"> </div>
                                        <div class="md-step-title journetNotify">
                                            <p style="padding:1.8px;"> Incorporation as a Pvt. Ltd. company</p>
                                        </div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide " style="overflow: visible!important;">
                            <div class="col-md-12 cau">
                                <div class="year">
                                    <h4> 2003</h4>
                                </div>
                                <div class="md-stepper-horizontal ">
                                    <div class="md-step done">
                                        <div class="md-step-bar-left" style="top:110px;"></div>
                                        <div class="text-center"><img src="{{asset('images/vnvcs/vnv.png')}}"> </div>
                                        <div class="md-step-title journetNotify">
                                            <p>Software services for customers across domains</p>
                                        </div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide " style="overflow: visible!important;">
                            <div class="col-md-12 cau">
                                <div class="year">
                                    <h4> 2004</h4>
                                </div>
                                <div class="md-stepper-horizontal ">
                                    <div class="md-step-bar-right"></div>
                                    <div class="md-step done">
                                        <div class="md-step-bar-left"></div>
                                        <div class="text-center"><img src="{{asset('images/vnvcs/vnv.png')}}"> </div>
                                        <div class="md-step-title journetNotify">
                                            <p>Decided to offer services only to ports, shipping & logistics</p>
                                        </div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide " style="overflow: visible!important;">
                            <div class="col-md-12 cau">
                                <div class="year">
                                    <h4> 2005</h4>
                                </div>
                                <div class="md-stepper-horizontal ">
                                    <div class="md-step done">
                                        <div class="md-step-bar-left"></div>
                                        <div class="text-center"><img src="{{asset('images/vnvcs/vnv.png')}}"> </div>
                                        <div class="md-step-title journetNotify">
                                            <p style="padding:12px;"> CFSMag 1.0</p>
                                        </div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide " style="overflow: visible!important;">
                            <div class="col-md-12 cau">
                                <div class="year">
                                    <h4> 2010</h4>
                                </div>
                                <div class="md-stepper-horizontal ">
                                    <div class="md-step-bar-right"></div>
                                    <div class="md-step done">
                                        <div class="md-step-bar-left"></div>
                                        <div class="text-center"><img src="{{asset('images/vnvcs/vnv.png')}}"> </div>
                                        <div class="md-step-title journetNotify">
                                            <p> RAILFREIGHT 1.0 <br> CFSMag 2.0 </p>
                                        </div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide " style="overflow: visible!important;">
                            <div class="col-md-12 cau">
                                <div class="year">
                                    <h4> 2011</h4>
                                </div>
                                <div class="md-stepper-horizontal ">
                                    <div class="md-step done">
                                        <div class="md-step-bar-left" style="top:110px;"></div>
                                        <div class="text-center"><img src="{{asset('images/vnvcs/vnv.png')}}"> </div>
                                        <div class="md-step-title journetNotify">
                                            <p> CTS TOS 1.0 <br> RORO TOS 1.0</p>
                                        </div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide " style="overflow: visible!important;">
                            <div class="col-md-12 cau">
                                <div class="year">
                                    <h4> 2013</h4>
                                </div>
                                <div class="md-stepper-horizontal ">
                                    <div class="md-step-bar-right"></div>
                                    <div class="md-step done">
                                        <div class="md-step-bar-left"></div>
                                        <div class="text-center"><img src="{{asset('images/vnvcs/vnv.png')}}"> </div>
                                        <div class="md-step-title journetNotify">
                                            <p style="padding:12px;"> CMRMag 1.0</p>
                                        </div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide " style="overflow: visible!important;">
                            <div class="col-md-12 cau">
                                <div class="year">
                                    <h4> 2014</h4>
                                </div>
                                <div class="md-stepper-horizontal ">
                                    <div class="md-step done">
                                        <div class="md-step-bar-left"></div>
                                        <div class="text-center"><img src="{{asset('images/vnvcs/vnv.png')}}"> </div>
                                        <div class="md-step-title journetNotify">
                                            <p style="padding:12px;"> FLEETMag 1.0</p>
                                        </div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide " style="overflow: visible!important;">
                            <div class="col-md-12 cau">
                                <div class="year">
                                    <h4> 2015</h4>
                                </div>
                                <div class="md-stepper-horizontal ">
                                    <div class="md-step-bar-right"></div>
                                    <div class="md-step done">
                                        <div class="md-step-bar-left"></div>
                                        <div class="text-center"><img src="{{asset('images/vnvcs/vnv.png')}}"> </div>
                                        <div class="md-step-title journetNotify">
                                            <p style="padding:12px;"> CFSMag 3.0</p>
                                        </div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide " style="overflow: visible!important;">
                            <div class="col-md-12 cau">
                                <div class="year">
                                    <h4> 2016</h4>
                                </div>
                                <div class="md-stepper-horizontal ">
                                    <div class="md-step done">
                                        <div class="md-step-bar-left" style="top:110px;"></div>
                                        <div class="text-center"><img src="{{asset('images/vnvcs/vnv.png')}}"> </div>
                                        <div class="md-step-title journetNotify">
                                            <p> FOCUS 1.0 <br> NVOCCMag 1.0</p>
                                        </div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide " style="overflow: visible!important;">
                            <div class="col-md-12 cau">
                                <div class="year">
                                    <h4> 2017</h4>
                                </div>
                                <div class="md-stepper-horizontal ">
                                    <div class="md-step-bar-right"></div>
                                    <div class="md-step done">
                                        <div class="md-step-bar-left" style="top:110px;"></div>
                                        <div class="text-center"><img src="{{asset('images/vnvcs/vnv.png')}}"> </div>
                                        <div class="md-step-title journetNotify">
                                            <p style="padding: 3px;margin-top: 17px;"> WMSMag 1.0 </p>
                                        </div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide " style="overflow: visible!important;">
                            <div class="col-md-12 cau">
                                <div class="year">
                                    <h4> 2018</h4>
                                </div>
                                <div class="md-stepper-horizontal ">
                                    <div class="md-step done">
                                        <div class="md-step-bar-left" style="top:110px;"></div>
                                        <div class="text-center"><img src="{{asset('images/vnvcs/vnv.png')}}"> </div>
                                        <div class="md-step-title journetNotify">
                                            <p style="padding: 3px;margin-top: -5px;"> CFSMag+ 4.0 <br> BLIQ TOS 1.0
                                            </p>
                                        </div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide " style="overflow: visible!important;">
                            <div class="col-md-12 cau">
                                <div class="year">
                                    <h4> 2019</h4>
                                </div>
                                <div class="md-stepper-horizontal ">
                                    <div class="md-step-bar-right"></div>
                                    <div class="md-step done">
                                        <div class="md-step-bar-left" style="top:110px;"></div>
                                        <div class="text-center"><img src="{{asset('images/vnvcs/vnv.png')}}"> </div>
                                        <div class="md-step-title journetNotify">
                                            <p style="padding:12px;"> CTS TOS 2.0</p>
                                        </div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide " style="overflow: visible!important;">
                            <div class="col-md-12 cau">
                                <div class="year">
                                    <h4> 2022</h4>
                                </div>
                                <div class="md-stepper-horizontal ">
                                    <div class="md-step-bar-right"></div>
                                    <div class="md-step done">
                                        <div class="md-step-bar-left" style="top:110px;"></div>
                                        <div class="text-center"><img src="{{asset('images/vnvcs/vnv.png')}}"> </div>
                                        <div class="md-step-title journetNotify">
                                            <p style="padding:12px;"> CFSMag<sup>+</sup>EE</p>
                                        </div>
                                        <div class="md-step-bar-right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Improve One Start-->
        <section class="about-one" style="padding:40px;background-color: var(--thm-black);">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center">
                        <h2 class="section-title__title" style="color:var(--thm-base)">3 Pillars of VnVCS</h2>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__left wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                            <div class="">
                                <div class="about-one__img"> <img src="{{asset('images/vnvcs/3-pillars.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-line-break3"></div>
                    <div class="col-xl-6">
                        <div class="about-one__right" style="margin-top:70px;">
                            <div class="improve-one__left wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <div class="single_feature_six">
                                    <!-- <div class="single_feature_six_icon mr-3">                                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>                                    </div> -->
                                    <div class="single_feature_six_content white">
                                        <p>Each product is highly customizable, flexible and can address or cater to
                                            every stakeholder in the Logistics, Shipping, Port eco-system.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-one__right" style="margin-top:-190px;">
                            <div class="improve-one__left wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <div class="csingle_feature_six">
                                    <!-- <div class="single_feature_six_icon mr-3">                                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>                                    </div> -->
                                    <div class="csingle_feature_six_content white">
                                        <p>Use of VnVCS products by their clientele is associated with the company
                                            growth, each client has a very special relation with the team.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-one__right" style="margin-top:80px;">
                            <div class="improve-one__left wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <div class="rsingle_feature_six">
                                    <!-- <div class="single_feature_six_icon mr-3">                                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>                                    </div> -->
                                    <div class="rsingle_feature_six_content white">
                                        <p>Key strength of VnVCS resources is high domain and technical expertise.
                                            Teaming by our resources for desired deliverables is highly recognized.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Improve One End-->
        <!--About One Start-->
        <section class="about-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-one__img-box">
                                <div class="about-one__img"> <img src="{{asset('images/resources/about-one-img-1.jpg')}}" alt=""> </div>
                                <div class="about-one__small-img"> <img src="{{asset('images/resources/about-one-small-img.jpg')}}" alt=""> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <!-- <span class="section-title__tagline">Providing</span> -->
                                <h2 style="font-size:34px;" class="section-title__title">Automation and ease of
                                    operation via software application services to the logistic and supply chain
                                    industry</h2>
                            </div> <!-- <p class="about-one__text"></p> -->
                            <div class="about-one__points-box">
                                <ul class="about-one__points list-unstyled">
                                    <li>
                                        <div class="icon"> <span class="icon-check"></span> </div>
                                        <div class="text">
                                            <p>Providing workflow automation as needed in India</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"> <span class="icon-check"></span> </div>
                                        <div class="text">
                                            <p>Handholding through out the successful deployment</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"> <span class="icon-check"></span> </div>
                                        <div class="text">
                                            <p>Conducting training to end users and IT operation staff</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"> <span class="icon-check"></span> </div>
                                        <div class="text">
                                            <p>Enabling customization to tailor the workflow</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"> <span class="icon-check"></span> </div>
                                        <div class="text">
                                            <p>Integrating with existing enterprise products</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"> <span class="icon-check"></span> </div>
                                        <div class="text">
                                            <p>Migrating from current inefficient products including database</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="about-one__it-solutions">
                                <div class="about-one__it-solutions-icon"> <span class="icon-computer"></span> </div>
                                <div class="about-one__it-solutions-text-box">
                                    <p class="about-one__it-solutions-text">Integrated end-to-end IT solutions for
                                        logistics and supply chain sector </p>
                                </div>
                            </div> <a href="{{url('about-us')}}" class="about-one__btn sab thm-btn">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->
        <!--Services One Start-->
        <section class="services-one" style="padding:39px 0 39px;">
            <div class="container">
                <div class="section-title text-center">
                    <!-- <span class="section-title__tagline">Wide Range of Services</span> -->
                    <h2 class="section-title__title">What We’re Offering</h2>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 wow fadeInLeft" data-wow-delay="100ms">
                        <!--Services One Single-->
                        <div class="services-one__single">
                            <div class="services-one__icon"> <span><i class="fa fa-box"></i></span> </div>
                            <h3 class="services-one__title"> <a href="{{url('products')}}">Products</a> </h3>
                            <p class="services-one__text">Software products designed with latest technologies; standard
                                business processes suited for logistics Industry</p>
                            <div class="services-one__arrow"> <a href="{{url('products')}}"><span class="icon-right-arrow"></span></a> </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="200ms">
                        <!--Services One Single-->
                        <div class="services-one__single">
                            <div class="services-one__icon"> <span class="icon-cloud-storage"></span> </div>
                            <h3 class="services-one__title"> <a href="services#services">Services</a> </h3>
                            <p class="services-one__text">- Delivering right functionality at right time, right quality
                                and at the right cost.</p>
                            <div class="services-one__arrow" style="margin-top:45px;"> <a href="services#services"><span class="icon-right-arrow"></span></a> </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 wow fadeInRight" data-wow-delay="100ms">
                        <!--Services One Single-->
                        <div class="services-one__single">
                            <div class="services-one__icon"> <span class="icon-conversation"></span> </div>
                            <h3 class="services-one__title"> <a href="services#support">Support</a> </h3>
                            <p class="services-one__text">Selective SLA based support as desired by customer. Offer
                                dedicated resource for Onsite support based on customer demand.</p>
                            <div class="services-one__arrow" style="margin-top:-24px;"> <a href="services#support"><span class="icon-right-arrow"></span></a> </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 wow fadeInRight" data-wow-delay="100ms">
                        <!--Services One Single-->
                        <div class="services-one__single">
                            <div class="services-one__icon"> <span class="icon-cyber-security"></span> </div>
                            <h3 class="services-one__title"> <a href="services#consultancy">Consultancy</a> </h3>
                            <p class="services-one__text">Auditing and Exploring Inefficient business processes,
                                Irrational IT spending, Performance delays, planning strategies to handle detected
                                Inefficiencies.</p>
                            <div class="services-one__arrow" style="margin-top:-24px;"> <a href="services#consultancy"><span class="icon-right-arrow"></span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services One End-->
        <!--Project One Start-->
        <section class="project-one">
            <div class="container">
                <div class="section-title text-center">
                    <!-- <span class="section-title__tagline">Our Case Studies</span> -->
                    <h2 class="section-title__title">Our Case Studies</h2>
                </div>
                <div class="project-one__carousel owl-theme owl-carousel">
                    <!--Project One Single--> @foreach($cs as $csl) <div class="project-one__single">
                        <div class="project-one__img"> <img src="{{asset('public/'.$csl->img)}}" alt="" style="height:250px;"> </div>
                        <div class="project-one__content"> <a href="<?php echo route('case.single', ['url' => $csl->url]); ?>" style="color:#7b7981">
                                <p class="project-one__tagline">{{$csl->title}}</p>
                            </a>
                            <div class="project-one__arrow"> <a href="<?php echo route('case.single', ['url' => $csl->url]); ?>"><span class="icon-right-arrow"></span></a> </div>
                        </div>
                    </div> @endforeach
                </div>
            </div>
        </section>
        <!--Project One End-->
        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div id="particles-js"></div>
            <div class="container">
                <div class="testimonial-one__left">
                    <div class="section-title text-left">
                        <!-- <span class="section-title__tagline">Customers Feedbacks</span> -->
                        <h2 class="section-title__title tcontent" style="text-align:center;">What our clients are
                            Saying...</h2>
                    </div>
                </div>
                <div class="row"> </div>
                <div class="testimonial-one__right">
                    <div class="owl-demo testimonial-one__carousel owl-theme owl-carousel">
                        <!--Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img"> <img src="{{asset('images/vnvcs/als.jfif')}}" alt="" style="width: 80%;"> </div>
                                <div class="testimonial-one__client-details">
                                    <h5 class="testimonial-one__client-name">Ashok Kumar Bhattacharjee</h5>
                                    <p class="testimonial-one__client-title">Apollo LogiSolutions Ltd</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text tcontent">CFSMag Ver 3.0 application software has been
                                successfully implemented by V&V Comptech Systems Pvt. Ltd. for our CFS at Panvel. We
                                appreciate the support being continuously provided by V&V Comptech Systems in
                                streamlining our operations through...
                            <div id="element" class="btn btn-primary show-modal">Read More</div>
                            </p>
                            <div class="testimonial-one__quote"> </div>
                        </div>
                        <!--Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img"> <img src="{{asset('images/brand/3.png')}}" alt="" style="width:50%;"> </div>
                                <div class="testimonial-one__client-details">
                                    <h5 class="testimonial-one__client-name"> Alejandro Rego Rodriguez</h5>
                                    <p class="testimonial-one__client-title">APM TERMINALS</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text tcontent">On having chosen FOCUS application software for
                                managing our Terminal of more than a Million TEUs per annum throughput, we are satisfied
                                with the solution offered. The key functionalities for our...
                            <div id="element" class="btn btn-primary show-modal-1">Read More</div>
                            </p>
                            <div class=" testimonial-one__quote"> </div>
                        </div>
                        <!--Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img"> <img src="{{asset('images/brand/karanja-terminal.png')}}" alt="" style="width: 65%;">
                                </div>
                                <div class="testimonial-one__client-details" style="margin-left:0px;">
                                    <h5 class="testimonial-one__client-name">Shri KV Natarajan </h5>
                                    <p class="testimonial-one__client-title">Karanja Terminal & Logistics Pvt Ltd </p>
                                </div>
                            </div>
                            <p class="testimonial-one__text tcontent">This is to certify that we have awarded turnkey
                                contract to M/s V & V Comptech Systems Pvt Ltd. Navi Mumbai for the supply,
                                installation, commissioning and implementation of Bulk & Liquid software application
                                based on their credential in the field of software...
                            <div id="element" class="btn btn-primary show-modal-2">Read More</div>
                            </p>
                            <div class="testimonial-one__quote"> </div>
                        </div>
                        <!--Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img"> <img src="{{asset('images/vnvcs/als.jfif')}}" alt="" style="width: 64%;"> </div>
                                <div class="testimonial-one__client-details">
                                    <h5 class="testimonial-one__client-name">Shanmukha Raju </h5>
                                    <p class="testimonial-one__client-title">A. S. Shipping Agencies Pvt Ltd. </p>
                                </div>
                            </div>
                            <p class="testimonial-one__text tcontent">On having chosen CFSMag Ver 3.0 application
                                software on Cloud for managing our CFS operation at Chennai and Tuticorin, we are
                                satisfied with the solution offered. The key functionalities for our CFSs are covered in
                                this application. We appreciate V&V Comptech...
                            <div id="element" class="btn btn-primary show-modal-3">Read More</div>
                            </p>
                            <div class="testimonial-one__quote"> </div>
                        </div>
                        <!--Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img"> <img src="{{asset('images/brand/1.png')}}" alt="" style="width: 44%;"> </div>
                                <div class="testimonial-one__client-details">
                                    <h5 class="testimonial-one__client-name"> Pavan Tsunduru</h5>
                                    <p class="testimonial-one__client-title">Adani Ports And SEZ Limited </p>
                                </div>
                            </div>
                            <p class="testimonial-one__text tcontent">We are happy to use the application software
                                Designed, Developed, Implemented and Supported by V&V Comptech Systems Private Limited
                                for our Terminal Operations related to CFS, ICD, Bulk, RORO,..
                            <div id="element" class="btn btn-primary show-modal-4">Read More</div>
                            </p>
                            <div class="testimonial-one__quote"> </div>
                        </div>
                        <!--Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img"> <img src="{{asset('images/brand/1.png')}}" alt="" style="width: 44%;"> </div>
                                <div class="testimonial-one__client-details">
                                    <h5 class="testimonial-one__client-name">Sandeep Mehta </h5>
                                    <p class="testimonial-one__client-title">Adani Logistics Limited </p>
                                </div>
                            </div>
                            <p class="testimonial-one__text tcontent">We are using CFSMag+ 4.0 Enterprise Application to
                                manage our Logistics business operations. We evaluated other solutions from alternate
                                parties who claimed that they could meet our foreseen...
                            <div id="element" class="btn btn-primary show-modal-5">Read More</div>
                            </p>
                            <div class="testimonial-one__quote"> </div>
                        </div>
                        <!--Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info" style="margin-bottom: 32px;">
                                <div class="testimonial-one__client-img"> <img src="{{asset('images/testimonial/ameya_logo.png')}}" alt="" style="width: 90%;">
                                </div>
                                <div class="testimonial-one__client-details">
                                    <h5 class="testimonial-one__client-name">Anmol Jumde </h5>
                                    <p class="testimonial-one__client-title">Ameya Logistics Pvt. Ptd. </p>
                                </div>
                            </div>
                            <p class="testimonial-one__text tcontent">On having chosen CFSMag Ver 3.0 application
                                software for managing our CFS operation, we are satisfied with the solution offered. The
                                key functionalities for our CFS are covered in this application. We...
                            <div id="element" class="btn btn-primary show-modal-6">Read More</div>
                            </p>
                            <div class="testimonial-one__quote"> </div>
                        </div>
                        <!--Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info" style="margin-bottom: 5px;">
                                <div class="testimonial-one__client-img"> <img src="{{asset('images/brand/3.png')}}" alt="" style="width:50%;"> </div>
                                <div class="testimonial-one__client-details">
                                    <h5 class="testimonial-one__client-name">Derprk Patidar</h5>
                                    <p class="testimonial-one__client-title">Stgr Track Terminnls Fvf. Ltd, </p>
                                </div>
                            </div>
                            <p class="testimonial-one__text tcontent">V&V Comptech S1'stcms Pvt. Ltd. has implemented
                                their ryeb based CFSMag Vcr 3.0 successlully ro nrsnage on centralized environment for
                                all our CFSs / ICDs spread across locations in lnelia. Even...
                            <div id="element" class="btn btn-primary show-modal-7">Read More</div>
                            </p>
                            <div class="testimonial-one__quote"> </div>
                        </div>
                        <!--Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info" style="margin-bottom:30px;">
                                <div class="testimonial-one__client-img"> <img src=" {{asset('images/testimonial/efc.png')}}" alt="" style="width: 70%;">
                                </div>
                                <div class="testimonial-one__client-details">
                                    <h5 class="testimonial-one__client-name">Sudeepta Das </h5>
                                    <p class="testimonial-one__client-title">EFC LOGISTICS INDIA PVT. LTD. </p>
                                </div>
                            </div>
                            <p class="testimonial-one__text tcontent">On having chosen CFSMag Ver 3.0 application
                                software on Cloud for managing our CFS operation at Chennai and Tuticorin, we are
                                satisfied with the solution offered. The key functionalities for our...
                            <div id="element" class="btn btn-primary show-modal-8">Read More</div>
                            </p>
                            <div class="testimonial-one__quote"> </div>
                        </div>
                        <!--Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img"> <img src="{{asset('images/vnvcs/mga.jpg')}}" alt="" style="width:70%"> </div>
                                <div class="testimonial-one__client-details">
                                    <h5 class="testimonial-one__client-name">Balmukund Viswakarma </h5>
                                    <p class="testimonial-one__client-title">MSA Global Logistics Pvt Ltd</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text tcontent">On having chosen CFSMag Ver 3.0 application
                                software for managing our CFS operation at Navi Mumbai and Chennai locations, out of
                                which Navi Mumbai location is under Maintenance Support and Chennai...
                            <div id="element" class="btn btn-primary show-modal-9">Read More</div>
                            </p>
                            <div class="testimonial-one__quote"> </div>
                        </div>
                    </div>
                </div>
                <section class="brand-one">
                    <div class="container">
                        <div class="thm-swiper__slider swiper-container" data-swiper-options='{                    "spaceBetween": 0,                    "slidesPerView": 2,                     "speed": 1000,                    "loop": true,                     "freeMode": true,                    "autoplay": { "delay": 1 ,                        "disableOnInteraction": true},                     "breakpoints": {                    "0": {                        "spaceBetween": 30,                        "slidesPerView": 2                    },                    "375": {                        "spaceBetween": 30,                        "slidesPerView": 2                    },                    "575": {                        "spaceBetween": 30,                        "slidesPerView": 3                    },                    "767": {                        "spaceBetween": 50,                        "slidesPerView": 4                    },                    "991": {                        "spaceBetween": 50,                        "slidesPerView": 5                    },                    "1199": {                        "spaceBetween": 100,                        "slidesPerView": 6,                    }                }}'>
                            <div class=" swiper-wrapper">
                                <div class="swiper-slide zoom"> <img src="{{asset('images/brand/1.png')}}" alt="" class=""> </div> <!-- /.swiper-slide -->
                                <div class="swiper-slide zoom"> <img src="{{asset('images/brand/2.png')}}" alt="">
                                </div> <!-- /.swiper-slide -->
                                <div class="swiper-slide zoom"> <img src="{{asset('images/brand/3.png')}}" alt="">
                                </div> <!-- /.swiper-slide -->
                                <div class="swiper-slide zoom"> <img src="{{asset('images/brand/4.png')}}" alt="">
                                </div> <!-- /.swiper-slide -->
                                <div class="swiper-slide zoom"> <img src="{{asset('images/brand/5.png')}}" alt="">
                                </div> <!-- /.swiper-slide -->
                                <div class="swiper-slide zoom"> <img src="{{asset('images/brand/6.png')}}" alt="">
                                </div> <!-- /.swiper-slide -->
                                <div class="swiper-slide zoom"> <img src="{{asset('images/brand/7.png')}}" alt="">
                                </div> <!-- /.swiper-slide -->
                                <div class="swiper-slide zoom"> <img src="{{asset('images/brand/8.png')}}" alt="">
                                </div> <!-- /.swiper-slide -->
                                <div class="swiper-slide zoom"> <img src="{{asset('images/brand/9.png')}}" alt="">
                                </div> <!-- /.swiper-slide -->
                                <div class="swiper-slide zoom"> <img src="{{asset('images/brand/10.png')}}" alt="">
                                </div> <!-- /.swiper-slide -->
                                <div class="swiper-slide zoom"> <img src="{{asset('images/brand/PTP-New-Logo.png')}}" alt=""> </div> <!-- /.swiper-slide -->
                                <div class="swiper-slide zoom"> <img src="{{asset('images/brand/hindi.png')}}" alt="">
                                </div> <!-- /.swiper-slide -->
                                <div class="swiper-slide zoom"> <img src="{{asset('images/brand/cargo.png')}}" alt="">
                                </div> <!-- /.swiper-slide -->
                                <div class="swiper-slide zoom"> <img src="{{asset('images/brand/bellore-group.svg')}}" alt=""> </div> <!-- /.swiper-slide -->
                                <div class="swiper-slide zoom"> <img src="{{asset('images/brand/balmer-lawrie.png')}}" alt=""> </div> <!-- /.swiper-slide -->
                                <div class="swiper-slide zoom"> <img src="{{asset('images/brand/dp-world.jfif')}}" alt=""> </div> <!-- /.swiper-slide -->
                                <div class="swiper-slide zoom"> <img src="{{asset('images/brand/karanja-terminal.png')}}" alt=""> </div>
                                <!-- /.swiper-slide -->
                            </div>
                        </div>
                    </div>
                </section>
            </div>
    </div>
    </section>
    <!--Testimonial One End-->
    <div id="testmodal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="testimonial-one__client-info">
                        <div class="testimonial-one__client-img"> <img src="{{asset('images/vnvcs/als.jfif')}}" alt="">
                        </div>
                        <div class="testimonial-one__client-details">
                            <h5 class="testimonial-one__client-name">Ashok Kumar Bhattacharjee</h5>
                            <p class="testimonial-one__client-title">Apollo LogiSolutions Ltd</p>
                        </div>
                    </div>
                    <p class="testimonial-one__text tcontent">CFSMag Ver 3.0 application software has been successfully
                        implemented by V&V Comptech Systems Pvt. Ltd. for our CFS at Panvel. We appreciate the support
                        being continuously provided by V&V Comptech Systems in streamlining our operations through
                        CFSMag Ver 3.0. We appreciate their expertise of having understood the logistics domain.
                </div>
                <div class="modal-footer"> <span class="btn btn-secondary"> Close</span> </div>
            </div>
        </div>
    </div>
    <div id="testmodal-1" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="testimonial-one__client-info">
                        <div class="testimonial-one__client-img"> <img src="{{asset('images/brand/3.png')}}" alt="">
                        </div>
                        <div class="testimonial-one__client-details">
                            <h5 class="testimonial-one__client-name"> Alejandro Rego Rodriguez</h5>
                            <p class="testimonial-one__client-title">APM TERMINALS</p>
                        </div>
                    </div>
                    <p class="testimonial-one__text tcontent">On having chosen FOCUS application software for managing
                        our Terminal of more than a Million TEUs per annum throughput, we are satisfied with the
                        solution offered. The key functionalities for our Terminal billings are covered in this
                        application including interface with NAVIS N4 Solution. We appreciate V&V Comptech Systems for
                        successfully implementing and training our staff. Considering the usability, we have issued
                        support contract post Go-Live to V & V Comptech Systems Pvt Ltd.
                </div>
                <div class="modal-footer"> <span class="btn btn-secondary"> Close</span> </div>
            </div>
        </div>
    </div>
    <div id="testmodal-2" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="testimonial-one__client-info">
                        <div class="testimonial-one__client-img" style="width:50%;"> <img src="{{asset('images/brand/karanja-terminal.png')}}" alt="" style="width:80%;"> </div>
                        <div class="testimonial-one__client-details">
                            <h5 class="testimonial-one__client-name">Shri KV Natarajan </h5>
                            <p class="testimonial-one__client-title">Karanja Terminal & Logistics Pvt Ltd </p>
                        </div>
                    </div>
                    <p class="testimonial-one__text tcontent">This is to certify that we have awarded turnkey contract
                        to M/s V & V Comptech Systems Pvt Ltd. Navi Mumbai for the supply, installation, commissioning
                        and implementation of Bulk & Liquid software application based on their credential in the field
                        of software development and implementation.
                </div>
                <div class="modal-footer"> <span class="btn btn-secondary"> Close</span> </div>
            </div>
        </div>
    </div>
    <div id="testmodal-3" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="testimonial-one__client-info">
                        <div class="testimonial-one__client-img"> <img src="{{asset('images/vnvcs/als.jfif')}}" alt="" style="width:55px"> </div>
                        <div class="testimonial-one__client-details">
                            <h5 class="testimonial-one__client-name">Shanmukha Raju </h5>
                            <p class="testimonial-one__client-title">A. S. Shipping Agencies Pvt Ltd. </p>
                        </div>
                    </div>
                    <p class="testimonial-one__text tcontent">On having chosen CFSMag Ver 3.0 application software on
                        Cloud for managing our CFS operation at Chennai and Tuticorin, we are satisfied with the
                        solution offered. The key functionalities for our CFSs are covered in this application. We
                        appreciate V&V Comptech Systems for successfully implementing and training our staff. </p>
                </div>
                <div class="modal-footer"> <span class="btn btn-secondary"> Close</span> </div>
            </div>
        </div>
    </div>
    <div id="testmodal-4" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="testimonial-one__client-info">
                        <div class="testimonial-one__client-img"> <img src="{{asset('images/brand/1.png')}}" alt="">
                        </div>
                        <div class="testimonial-one__client-details">
                            <h5 class="testimonial-one__client-name"> Pavan Tsunduru</h5>
                            <p class="testimonial-one__client-title">Adani Ports And SEZ Limited </p>
                        </div>
                    </div>
                    <p class="testimonial-one__text tcontent">We are happy to use the application software Designed,
                        Developed, Implemented and Supported by V&V Comptech Systems Private Limited for our Terminal
                        Operations related to CFS, ICD, Bulk, RORO, Rail and Road Transportation. </p>
                </div>
                <div class="modal-footer"> <span class="btn btn-secondary"> Close</span> </div>
            </div>
        </div>
    </div>
    <div id="testmodal-5" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="testimonial-one__client-info">
                        <div class="testimonial-one__client-img"> <img src="{{asset('images/brand/1.png')}}" alt="">
                        </div>
                        <div class="testimonial-one__client-details">
                            <h5 class="testimonial-one__client-name">Sandeep Mehta </h5>
                            <p class="testimonial-one__client-title">Adani Logistics Limited </p>
                        </div>
                    </div>
                    <p class="testimonial-one__text tcontent">We are using CFSMag+ 4.0 Enterprise Application to manage
                        our Logistics business operations. We evaluated other solutions from alternate parties who
                        claimed that they could meet our foreseen business scalability and subsequently we concluded on
                        migrating from the product E-Transport Mag to its upgraded and latest release CFSMag+ 4.0
                        Enterprise Solution. This product roll-out was done within stipulated time with ease across all
                        Business Units and are confident CFSMag+ 4.0 can scale up to our future growth. Our confidence
                        in CFSMag+ 4.0 Enterprise Solution and the implementation partner has increased multiple fold.
                        We also appreciate the post go-live support offered by our IT partner </p>
                </div>
                <div class="modal-footer"> <span class="btn btn-secondary"> Close</span> </div>
            </div>
        </div>
    </div>
    <div id="testmodal-6" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="testimonial-one__client-info">
                        <div class="testimonial-one__client-img"> <img src="{{asset('images/testimonial/ameya_logo.png')}}" alt=""> </div>
                        <div class="testimonial-one__client-details">
                            <h5 class="testimonial-one__client-name">Anmol Jumde </h5>
                            <p class="testimonial-one__client-title">Ameya Logistics Pvt. Ptd. </p>
                        </div>
                    </div>
                    <p class="testimonial-one__text tcontent">On having chosen CFSMag Ver 3.0 application software for
                        managing our CFS operation, we are satisfied with the solution offered. The key functionalities
                        for our CFS are covered in this application. We appreciate V&V Comptech Systems for successfully
                        implementing and training our staff . This product roll-out was done within stipulated time with
                        ease across our Business Unit and are confident CFSMag 3.O can scale up to our future growth-
                        Our confidence in CFSMag 3.0 Enterprise Solution and the implementation partner has increased
                        muhiple fold. We also appreciate the post go- live support offered by our lT partner </p>
                </div>
                <div class="modal-footer"> <span class="btn btn-secondary"> Close</span> </div>
            </div>
        </div>
    </div>
    <div id="testmodal-7" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="testimonial-one__client-info">
                        <div class="testimonial-one__client-img"> <img src="{{asset('images/brand/3.png')}}" alt="">
                        </div>
                        <div class="testimonial-one__client-details">
                            <h5 class="testimonial-one__client-name">Derprk Patidar</h5>
                            <p class="testimonial-one__client-title">Stgr Track Terminnls Fvf. Ltd, </p>
                        </div>
                    </div>
                    <p class="testimonial-one__text tcontent">V&V Comptech S1'stcms Pvt. Ltd. has implemented their ryeb
                        based CFSMag Vcr 3.0 successlully ro nrsnage on centralized environment for all our CFSs / ICDs
                        spread across locations in lnelia. Even though thcr.* had been teethirlg problL'nls as usuat
                        with any solution. in streamlining the application tu accomltrodale custotnization needs
                        ol'dit'{brent btrsirress models. C}'SMAC Ver f.O lras been ell'ective}1, and successlullf
                        implernented b1' V&V Comptech s)-stems Pvt. t-td. tlaserJ on the terms ol'ouragreemetrt.
                        .4PM'l'crminals have also purchased the copl ol'snrtrcs codc and lranred thc sr-rlutiorr
                        as.C(}NTRACK syslem'</p>
                </div>
                <div class="modal-footer"> <span class="btn btn-secondary"> Close</span> </div>
            </div>
        </div>
    </div>
    <div id="testmodal-8" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="testimonial-one__client-info">
                        <div class="testimonial-one__client-img" style="width: 50%;"> <img src=" {{asset('images/vnvcs/efc.png')}}" alt=""> </div>
                        <div class="testimonial-one__client-details">
                            <h5 class="testimonial-one__client-name">Sudeepta Das </h5>
                            <p class="testimonial-one__client-title">EFC LOGISTICS INDIA PVT. LTD. </p>
                        </div>
                    </div>
                    <p class="testimonial-one__text tcontent">On having chosen CFSMag Ver 3.0 application software on
                        Cloud for managing our CFS operation at Chennai and Tuticorin, we are satisfied with the
                        solution offered. The key functionalities for our CFSs are covered in this application. We
                        appreciate V&V Comptech Systems for successfully implementing and training our staff. </p>
                </div>
                <div class="modal-footer"> <span class="btn btn-secondary"> Close</span> </div>
            </div>
        </div>
    </div>
    <div id="testmodal-9" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="testimonial-one__client-info">
                        <div class="testimonial-one__client-img"> <img src="{{asset('images/vnvcs/mga.jpg')}}" alt="">
                        </div>
                        <div class="testimonial-one__client-details">
                            <h5 class="testimonial-one__client-name">Balmukund Viswakarma </h5>
                            <p class="testimonial-one__client-title">MSA Global Logistics Pvt Ltd</p>
                        </div>
                    </div>
                    <p class="testimonial-one__text tcontent">On having chosen CFSMag Ver 3.0 application software for
                        managing our CFS operation at Navi Mumbai and Chennai locations, out of which Navi Mumbai
                        location is under Maintenance Support and Chennai location is under implementation. we are
                        satisfied with the VnVCS's solution offered. The key functionalities for our CFSs are covered in
                        this application. We appreciate V&V Comptech Systems for successfully implementing and training
                        our staff. </p>
                </div>
                <div class="modal-footer"> <span class="btn btn-secondary"> Close</span> </div>
            </div>
        </div>
    </div>
    <!--Brand One Start-->
    <!--Brand One End-->
    <!--News One Start-->
    <section class="news-one" style="padding: 20px 0 20px;">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="section-title__title">News & Articles</h2>
            </div>
            <div class="row"> @foreach($ne as $na) <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <!--News One Single-->
                    <div class="news-one__single">
                        <div class="news-one__img"> <img src="{{asset('public/'.$na->img)}}" alt=""> <a href="<?php echo route('news.single', ['url' => $na->url]); ?>"> <span class="news-one__plus"></span> </a>
                            <div class="news-one__date-box">
                                <p>
                                    <?php echo  date('M Y', strtotime($na->datetime)); ?>
                                </p>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <!-- <ul class="list-unstyled news-one__meta">                                <li><a href=""><i class="far fa-user-circle"></i> by admin</a></li>                                <li><a href=""><i class="far fa-comments"></i> 2 Comments</a>                                </li>                            </ul> -->
                            <h3 class="news-one__title"> <a href="<?php echo route('news.single', ['url' => $na->url]); ?>">{{$na->title}}</a>
                            </h3>
                            <p class="news-one__text"> </p>
                            <div class="news-one__read-more"> <a href="<?php echo route('news.single', ['url' => $na->url]); ?>" class="news-one__read-more-btn">Read More</a> </div>
                        </div>
                    </div>
                </div> @endforeach </div>
    </section>
    <!--News One End-->
    <!--CTA One Start-->
    <section class="cta-one">
        <div class="cta-one__container">
            <div class="cta-one-bg" style="background-image: url('images/vnvcs/discover-more.png')"></div>
            <div class="cta-one-overly"></div>
            <div class="container">
                <div class="col-lg-12">
                    <div class="cta-one__inner">
                        <p class="cta-one__sub-title">Let’s Get Started Now</p>
                        <h2 class="cta-one__title">Lets overcome your supply chain challenges together</h2> <a href="{{url('about-us')}}" class="cta-one__btn thm-btn">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CTA One End-->
    <!--Site Footer One Start--> @include('footer1')
    <!--Site Footer One End-->
    </div><!-- /.page-wrapper -->
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div> <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#"> <label for="search" class="sr-only">search here</label><!-- /.sr-only --> <input type="text" id="search" placeholder="Search Here..." /> <button type="submit" aria-label="search submit" class="thm-btn"> <i class="icon-magnifying-glass"></i> </button> </form>
        </div> <!-- /.search-popup__content -->
    </div> <!-- /.search-popup --> <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <script src="{{asset('vendors/jquery/jquery-3.6.0.min.js')}}"> </script>
    <script src="{{asset('vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendors/jarallax/jarallax.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('vendors/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('vendors/odometer/odometer.min.js')}}"></script>
    <script src="{{asset('vendors/swiper/swiper.min.js')}}"></script>
    <script src="{{asset('vendors/tiny-slider/tiny-slider.min.js')}}"></script>
    <script src="{{asset('vendors/wnumb/wNumb.min.js')}}"></script>
    <script src="{{asset('vendors/wow/wow.js')}}"></script>
    <script src="{{asset('vendors/isotope/isotope.js')}}"></script>
    <script src="{{asset('vendors/countdown/countdown.min.js')}}"></script>
    <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('vendors/twentytwenty/twentytwenty.js')}}"></script>
    <script src="{{asset('vendors/twentytwenty/jquery.event.move.js')}}"></script>
    <script src="{{asset('vendors/bxslider/jquery.bxslider.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('vendors/vegas/vegas.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('vendors/timepicker/timePicker.js')}}"></script>
    <script src="{{asset('vendors/particles/particles.min.js')}}"></script>
    <script src="{{asset('vendors/particles/particles-config.js')}}"></script>
    <script type="text/javascript" src="{{asset('asseff/js/testimonial.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>
    <!-- template js -->
    <script src="{{asset('js/izeetak.js')}}"></script>
    <script>
        var swiperOptions = {
            loop: true,
            freeMode: true,
            spaceBetween: 70,
            grabCursor: true,
            slidesPerView: 5,
            loop: true,
            autoplay: {
                delay: 1,
                disableOnInteraction: true
            },
            freeMode: true,
            speed: 5000,
            freeModeMomentum: false,
            breakpoints: {
                0: {
                    spaceBetween: 30,
                    slidesPerView: 1
                },
                375: {
                    spaceBetween: 30,
                    slidesPerView: 2
                },
                575: {
                    spaceBetween: 30,
                    slidesPerView: 3
                },
                767: {
                    spaceBetween: 50,
                    slidesPerView: 5,
                },
            }
        };
        var swiper = new Swiper(".swiper-container", swiperOptions);
        $(".swiper-container").mouseenter(function() {
            console.log("mouse over");
            swiper.autoplay.stop();
        });
        $(".swiper-container").mouseleave(function() {
            console.log("mouse leave");
            swiper.autoplay.start();
        });
    </script>
    <script>
        $(document).ready(function() {
            var show_btn = $('.show-modal');
            var show_btn = $('.show-modal'); //$("#testmodal").modal('show');            
            show_btn.click(function() {
                $("#testmodal").modal('show');
            })
            $(".btn").click(function() {
                $("#testmodal").modal('hide');
            });
        });
        $(document).ready(function() {
                    var show_btn = $('.show-modal-1');
                    var show_btn = $('.show-modal-1'); //$("#testmodal").modal('show');            
                    show_btn.click(function() {                
                    $("#testmodal-1").modal('show'); })            
                    $(".btn").click(function() {      
                    $("#testmodal-1").modal('hide'); 
                  });        });        
    $(document).ready(function() {           
         var show_btn = $('.show-modal-2');
         var show_btn = $('.show-modal-2');       //$("#testmodal").modal('show'); 
         show_btn.click(function() { 
        $("#testmodal-2").modal('show');     })            
        $(".btn").click(function() { 
        $("#testmodal-2").modal('hide');            
    });   }); 

    $(document).ready(function() {            
        var show_btn = $('.show-modal-3');            
        var show_btn = $('.show-modal-3');            //$("#testmodal").modal('show');            
        show_btn.click(function() {                
        $("#testmodal-3").modal('show');            })            
        $(".btn").click(function() {                
        $("#testmodal-3").modal('hide');   });        });

     $(document).ready(function() {            
         var show_btn = $('.show-modal-4');            
         var show_btn = $('.show-modal-4');            //$("#testmodal").modal('show');            
         show_btn.click(function() {                
             $("#testmodal-4").modal('show');            })           
              $(".btn").click(function() {                
                  $("#testmodal-4").modal('hide');            });        }); 

    $(document).ready(function() { 
             var show_btn = $('.show-modal-5');
             var show_btn = $('.show-modal-5');            //$("#testmodal").modal('show');
             show_btn.click(function() { 
                  $("#testmodal-5").modal('show');            }) 
                  $(".btn").click(function() { 
                      $("#testmodal-5").modal('hide');            });        });

    $(document).ready(function() {  var show_btn = $('.show-modal-6'); 
         var show_btn = $('.show-modal-6'); 
         //$("#testmodal").modal('show');
          show_btn.click(function() { 
                $("#testmodal-6").modal('show');            }) 
                  $(".btn").click(function() { 
                        $("#testmodal-6").modal('hide');
                      });        });      

    $(document).ready(function() {
        var show_btn = $('.show-modal-7'); 
        var show_btn = $('.show-modal-7');            //$("#testmodal").modal('show');
        show_btn.click(function() { 
              $("#testmodal-7").modal('show');            })
                $(".btn").click(function() {
                     $("#testmodal-7").modal('hide'); 
                      });        });        

    $(document).ready(function() { 
          var show_btn = $('.show-modal-8');
           var show_btn = $('.show-modal-8');            //$("#testmodal").modal('show');
           show_btn.click(function() { 
                 $("#testmodal-8").modal('show');            }) 
                  $(".btn").click(function() {
                       $("#testmodal-8").modal('hide');
                     });        }); 

    $(document).ready(function() { 
          var show_btn = $('.show-modal-9');
           var show_btn = $('.show-modal-9');            //$("#testmodal").modal('show');
            show_btn.click(function() { 
                 $("#testmodal-9").modal('show');
                 })            
                 $(".btn").click(function() { 
                      $("#testmodal-9").modal('hide'); 
                     });        });

     $(document).ready(function() { 
          var show_btn = $('.show-modal-10');
           var show_btn = $('.show-modal-10');            //$("#testmodal").modal('show');
           show_btn.click(function() { 
                $("#testmodal-10").modal('show');
             })            
             $(".btn").click(function() { 
                   $("#testmodal-10").modal('hide');            });        });        // When the user clicks on <span> (x), close the modal    
    </script>
    <script>
        console.clear() const navExpand = [].slice.call(document.querySelectorAll('.nav-expand')) const backLink = `<li class="nav-item">	<a class="nav-link nav-back-link" href="javascript:;">		Back	</a></li>`
        navExpand.forEach(item => {
            item.querySelector('.nav-expand-content').insertAdjacentHTML('afterbegin', backLink) item.querySelector('.nav-link').addEventListener('click', () => item.classList.add('active')) item.querySelector('.nav-back-link').addEventListener('click', () => item.classList.remove('active'))
        }) // ---------------------------------------        // not-so-important stuff starts here        const ham = document.getElementById('ham')        ham.addEventListener('click', function() {            document.body.classList.toggle('nav-is-toggled')        })    
    </script>
    <script>
        var swiperOptions = {
            freeMode: true,
            spaceBetween: 100,
            grabCursor: true,
            slidesPerView: 3,
            autoplayHoverPause: true,
            autoplay: {
                delay: 1,
                disableOnInteraction: true
            },
            freeMode: true,
            speed: 8000,
            freeModeMomentum: false,
            breakpoints: {
                0: {
                    spaceBetween: 30,
                    slidesPerView: 1
                },
                375: {
                    spaceBetween: 30,
                    slidesPerView: 1
                },
                575: {
                    spaceBetween: 30,
                    slidesPerView: 1
                },
                767: {
                    spaceBetween: 50,
                    slidesPerView: 3,
                },
            }
        };
        var swiper = new Swiper(".swiper-container1", swiperOptions);
        $(".swiper-container1").mouseenter(function() {
            console.log("mouse over");
            swiper.autoplay.stop();
        });
        $(".swiper-container1").mouseleave(function() {
            console.log("mouse leave");
            swiper.autoplay.start();
        });
        $("#owl").owlCarousel({
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
        });
    </script>
</body>
<!-- Mirrored fromvnvcs.com/izeetak/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 11:22:03 GMT -->

</html>