<!DOCTYPE HTML>
<html lang="en-US">

<!-- Mirrored from html.dreamitsolution.net/techno/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 11:13:32 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>VNVCS | Blog</title>
    <link rel="canonical" href="https://www.vnvcs.com/blogs">
    <meta name="description" content="">
    <meta name="robots" content="noindex">
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
</head>

<body>
    <!--==================================================-->
    <!----- Start   Techno Header Top Menu Area Css ----->
    @include('header2')
    <!-- /.stricky-header -->


    <!--==================================================-->
    <!----- End Techno Main Menu Area ----->
    <!--==================================================-->



    <!-- ============================================================== -->
    <!-- Start Techno Breatcome Area -->
    <!-- ============================================================== -->
    <div class="breatcome_area d-flex align-items-center" style="background-image: url(asseff/images/slider/slider-10.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcome_title">
                        <div class="breatcome_title_inner pb-2">
                            <h2>Blogs</h2>
                        </div>
                        <div class="breatcome_content">
                            <ul>
                                <li><a href="">Home</a> <i class="fa fa-angle-right"></i> <span>Blogs</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Techno Breatcome Area -->
    <!-- ============================================================== -->



    <!--==================================================-->
    <!----- Start Techno Blog Area ----->
    <!--==================================================-->
    <div class="blog_area pt-85 pb-65">
        <div class="container">
            <div class="row">
                @foreach($blogs as $item)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_blog mb-30">
                        <div class="single_blog_thumb pb-4">
                            <a href="blog-details.html"><img src="{{asset('public/'.$item->img)}}" alt="" /></a>
                        </div>
                        <div class="single_blog_content pl-4 pr-4">
                            <div class="techno_blog_meta">
                                <a href="#">VnVCS </a>
                                <span class="meta-date pl-3">
                                    <?php echo  date('d-m-Y', strtotime($item->created_at)); ?>
                                </span>
                            </div>
                            <div class="blog_page_title pb-35">
                                <h3><a href="<?php echo route('blogs.single', ['url' => $item->url]); ?>">{{$item->title}}</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- start pagination -->
            <div class="row">
                <div class="col-md-12">
                    <div class="paginations">
                        <ul class="page-numbers">
                            <li><span aria-current="page" class="page-numbers current">1</span></li>
                            <li><a class="page-numbers" href="#">2</a></li>
                            <li><a class="page-numbers" href="#">3</a></li>
                            <li><a class="page-numbers" href="#">4</a></li>
                            <li><a class="next page-numbers" href="#"><i class="fa fa-long-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Blog Area ----->
    <!--==================================================-->


    <!--==================================================-->
    <!----- Start Techno Subscribe Area ----->
    <!--==================================================-->
    <!-- <div class="subscribe_area bg_color pt-30 pb-45">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="single_subscribe_contact">
                        <div class="subscribe_content_title white text_center pb-30">
                            <h2>Subscribe Our Newsletter</h2>
                        </div>
                        <form action="#">
                            <div class="subscribe_form">
                                <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Enter Your Email">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="subscribe_form_send">
                                <button type="submit" class="btn">
                                    Subscribe
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </div> -->
    <!--==================================================-->
    <!----- End Techno Subscribe Area ----->
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
    <script>
        console.clear()

        const navExpand = [].slice.call(document.querySelectorAll('.nav-expand'))
        const backLink = `<li class="nav-item">
	<a class="nav-link nav-back-link" href="javascript:;">
		Back
	</a>
</li>`

        navExpand.forEach(item => {
            item.querySelector('.nav-expand-content').insertAdjacentHTML('afterbegin', backLink)
            item.querySelector('.nav-link').addEventListener('click', () => item.classList.add('active'))
            item.querySelector('.nav-back-link').addEventListener('click', () => item.classList.remove('active'))
        })


        // ---------------------------------------
        // not-so-important stuff starts here

        const ham = document.getElementById('ham')
        ham.addEventListener('click', function() {
            document.body.classList.toggle('nav-is-toggled')
        })
    </script>
</body>

<!-- Mirrored from html.dreamitsolution.net/techno/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 11:13:34 GMT -->

</html>