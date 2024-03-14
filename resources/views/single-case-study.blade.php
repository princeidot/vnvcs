<!DOCTYPE HTML>
<html lang="en-US">

<!-- Mirrored from html.dreamitsolution.net/techno/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 11:13:32 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>VNVCS | {{$single->title}}</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex">
    <link rel="canonical" href="https://www.vnvcs.com/case-study/{{$single->url}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{asset('images/favicon.png')}}">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('asseff/css/bootstrap.min.css')}}" type="text/css" media="all" />
    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{asset('asseff/css/owl.carousel.min.css')}}" type="text/css" media="all" />
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{asset('asseff/css/responsive.css')}}" type="text/css" media="all" />
    <!-- nivo-slider CSS -->
    <link rel="stylesheet" href="{{asset('asseff/css/nivo-slider.css')}}" type="text/css" media="all" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('asseff/css/animate.css')}}" type="text/css" media="all" />
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="{{asset('asseff/css/animated-text.css')}}" type="text/css" media="all" />
    <!-- font-awesome CSS -->
    <link type="text/css" rel="stylesheet" href="{{asset('asseff/fonts/font-awesome/css/font-awesome.min.css')}}">
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="{{asset('asseff/css/flaticon.css')}}" type="text/css" media="all" />
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="{{asset('asseff/css/theme-default.css')}}" type="text/css" media="all" />
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('asseff/css/meanmenu.min.css')}}" type="text/css" media="all" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('asseff/css/style.css')}}" type="text/css" media="all" />
    <!-- transitions CSS -->
    <link rel="stylesheet" href="{{asset('asseff/css/owl.transitions.css')}}" type="text/css" media="all" />
    <!-- venobox CSS -->
    <link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="all" />
    <!-- widget CSS -->
    <link rel="stylesheet" href="{{asset('asseff/css/widget.css')}}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{asset('css/head.css')}}" type="text/css" media="all" />

    <!-- modernizr js -->
    <script type="text/javascript" src="{{asset('asseff/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('vendors/izeetak-icons/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .cform {

            width: 100%;
            background: #fff;
            padding: 25px;
            border-right: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 30px rgb(37 32 45 / 10%);

        }

        label {
            color: #000;
        }
	.singel-about-content p{		font-weight:600;		}
        .inc {
            border: 1px solid #cbd6e2;
            border-radius: 9px;
            height: 35px;
            background-color: #f5f8fa;
            box-sizing: border-box;
            padding: 0 50px;
            min-height: 27px;
            margin-bottom: 18px;
        }
    </style>
</head>

<body>
    <!--==================================================-->
    <!----- Start   Techno Header Top Menu Area Css ----->
    @include('header2')
    <!-- /.stricky-header -->


    <!--==================================================-->
    <!----- End Techno Main Menu Area ----->
    <!--==================================================-->


    <!--==================================================-->
    <!----- Start Techno Slider Area ----->
    <!--==================================================-->
    <div class="slider_area d-flex align-items-center slider5" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_slider">
                        <div class="slider_content">
                            <div class="slider_text">
                                <div class="slider_text_inner">

                                    <h1 style="font-size:40px;"> {{$single->title}}</h1>

                                </div>

                                <div class="slider_button d-flex" style="float: right;    margin-top: 250px;">
                                    <div class="button">

                                        <a class="active" href="{{url('contact-us')}}">Contact Us <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_slider_rot two">
                            <div class="single_slider_rot_inner rotateme">
                                <img src="{{asset('asseff/images/sdt.png')}}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Slider Area ----->
    <!--==================================================-->


    <!--==================================================-->
    <!----- Start Techno About Area ----->
    <!--==================================================-->
    <div class="about_area pt-70 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-6">
                    <div class="section_title text_left mb-40 mt-3">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>Client Name:-</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>{{$single->client}}</h1>
                            <!-- <h1>Provide Best <span>IT Solutions.</span></h1> -->
                        </div>

                        <div class="section_content_text bold pt-5">
                            <div class="section_sub_title uppercase mb-3">
                                <h6>Challenges Faced:-</h6>
                            </div>
                           <div class="singel-about-content pl-4"> <p style="font-size:18px;">{{$single->challenge}}</p></div>
                        </div>
                    </div>
                    <div class="singel_about_left mb-30">
                        <div class="singel_about_left_inner mb-3">
                            <div class="section_sub_title uppercase mb-3">
                                <h6>Our Solution:-</h6>
                            </div>
                            <div class="singel-about-content pl-4">

                                <p> <?php echo htmlspecialchars_decode(($single->overview)); ?>

                                </p>

                            </div>
                        </div>

                    </div>
                    <div class="singel_about_left mb-30">
                        <div class="singel_about_left_inner mb-3">
                            <div class="section_sub_title uppercase mb-3">
                                <h6>Benefits:-</h6>
                            </div>
                            <div class="singel-about-content pl-4">

                                <p>{{$single->benefits}}</p>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-12 col-xs-6">
                    <div class="cform">
                        <h3>Download Case Study</h3>
                        <form>
                            <label>Name</label>*<br>
                            <input type="text" name="name" class="inc" required>
                            <label>Work Email Id</label>*<br>
                            <input type="text" name="name" class="inc" required>
                            <label>Company Name</label>*<br>
                            <input type="text" name="name" class="inc" required><br>
                            <label>Job Title</label>*<br>
                            <input type="text" name="name" class="inc" required>
                            <label>Phone Number</label>*<br>
                            <input type="text" name="name" class="inc" required><br>
                            <label>Country</label>*<br>
                            <input type="text" name="name" class="inc" required>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno About Area ----->
    <!--==================================================-->

    @include('footer')

    <!-- jquery js -->
    <script src="{{asset('vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asseff/js/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="{{asset('asseff/js/bootstrap.min.js')}}"></script>
    <!-- carousel js -->
    <script type="text/javascript" src="{{asset('asseff/js/owl.carousel.min.js')}}"></script>
    <!-- counterup js -->
    <script type="text/javascript" src="{{asset('asseff/js/jquery.counterup.min.js')}}"></script>
    <!-- waypoints js -->
    <script type="text/javascript" src="{{asset('asseff/js/waypoints.min.js')}}"></script>
    <!-- wow js -->
    <script type="text/javascript" src="{{asset('asseff/js/wow.js')}}"></script>
    <!-- imagesloaded js -->
    <script type="text/javascript" src="{{asset('asseff/js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- venobox js -->
    <script type="text/javascript" src="{{asset('venobox/venobox.js')}}"></script>
    <!-- ajax mail js -->
    <script type="text/javascript" src="{{asset('asseff/ajax-mail.html')}}"></script>
    <!--  testimonial js -->
    <script type="text/javascript" src="{{asset('asseff/js/testimonial.js')}}"></script>
    <!--  animated-text js -->
    <script type="text/javascript" src="{{asset('asseff/js/animated-text.js')}}"></script>
    <!-- venobox min js -->
    <script type="text/javascript" src="{{asset('venobox/venobox.min.js')}}"></script>
    <!-- isotope js -->
    <script type="text/javascript" src="{{asset('asseff/js/isotope.pkgd.min.js')}}"></script>
    <!-- jquery nivo slider pack js -->
    <script type="text/javascript" src="{{asset('asseff/js/jquery.nivo.slider.pack.js')}}"></script>
    <!-- jquery meanmenu js -->
    <script type="text/javascript" src="{{asset('asseff/js/jquery.meanmenu.js')}}"></script>
    <!-- jquery scrollup js -->
    <script type="text/javascript" src="{{asset('asseff/js/jquery.scrollUp.js')}}"></script>
    <!-- theme js -->
    <script type="text/javascript" src="{{asset('asseff/js/theme.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('vendors/swiper/swiper.min.js')}}"></script>

</body>

<!-- Mirrored from html.dreamitsolution.net/techno/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 11:13:34 GMT -->

</html>