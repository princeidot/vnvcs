<!DOCTYPE HTML>
<html lang="en-US">

<!-- Mirrored from html.dreamitsolution.net/techno/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Feb 2022 11:13:32 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>VNVCS | Single blog</title>
    <link rel="canonical" href="https://www.vnvcs.com/blogs/{{$single->url}}">
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
    <div class="breatcome_area d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcome_title">
                        <div class="breatcome_title_inner pb-2">
                            <h2>Blog VnVCS</h2>
                        </div>
                        <div class="breatcome_content">
                            <ul>
                                <li><a href="">Home</a> <i class="fa fa-angle-right"></i><a href="{{url('blogs')}}"> blog</a><i class="fa fa-angle-right"></i> <span>{{$single->title}}</span></li>
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


    <!-- BLOG AREA -->
    <div class="blog_area blog-details-area pt-100 pb-100" id="blog">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="blog_details">
                                <div class="blog_dtl_thumb">
                                    <img src="{{asset('public/'.$single->img)}}" alt="" />
                                </div>

                                <div class="blog_dtl_content">
                                    <div class="blog_dtl_top_bs pt-2">
                                        <span>Business</span>
                                    </div>
                                    <h2>{{$single->title}}</h2>
                                    <!-- BLOG META -->
                                    <div class="techno-blog-meta">
                                        <div class="techno-blog-meta-left">
                                            <span><i class="fa fa-calendar"> <?php echo  date('d-m-Y', strtotime($single->created_at)); ?></i> </span>

                                        </div>
                                    </div>
                                    <?php echo htmlspecialchars_decode(($single->decrip)); ?>


                                    <div class="blog_details_dtn_icon">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-reddit"></i></a>
                                    </div>
                                </div>




                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="recent_post_dtls mt-5">
                                <div class="blog_dt_title mb-4">
                                    <h4>Recent Post</h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="single_blog mb-4">
                                            <div class="single_blog_thumb pb-4">
                                                <a href="blog-details.html"><img src="assets/images/blog1.jpg" alt="" /></a>
                                            </div>
                                            <div class="single_blog_content pl-4 pr-4">
                                                <div class="techno_blog_meta">
                                                    <a href="#">Techno </a>
                                                    <span class="meta-date pl-3">January 3, 2020</span>
                                                </div>
                                                <div class="blog_page_title pb-1">
                                                    <h3><a href="blog-details.html">The five devices you need to work anytime</a></h3>
                                                </div>
                                                <div class="blog_description">
                                                    <p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore. </p>
                                                </div>
                                                <div class="blog_page_button pb-4">
                                                    <a href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="single_blog mb-4">
                                            <div class="single_blog_thumb pb-4">
                                                <a href="blog-details.html"><img src="assets/images/blog2.jpg" alt="" /></a>
                                            </div>
                                            <div class="single_blog_content pl-4 pr-4">
                                                <div class="techno_blog_meta">
                                                    <a href="#">Techno </a>
                                                    <span class="meta-date pl-3">December 3, 2020</span>
                                                </div>
                                                <div class="blog_page_title pb-1">
                                                    <h3><a href="blog-details.html">How to learn PHP 10 tips to get you started</a></h3>
                                                </div>
                                                <div class="blog_description">
                                                    <p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore. </p>
                                                </div>
                                                <div class="blog_page_button pb-4">
                                                    <a href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <!-- BLOG COMMENTST SECTION -->
                            <div class="blog_comments_section mt-5">
                                <div class="comments_ttl">
                                    <h3>3 Comments</h3>
                                </div>
                                <!-- Single Comments -->
                                <div class="single_comments">
                                    <div class="comments_thumb">
                                        <img src="assets/images/testi2.png" alt="" />
                                    </div>
                                    <div class="commentst_content">
                                        <div class="post_meta">
                                            <span class="badmin">John Dome</span>
                                            <span class="badmin"><i class="fa fa-clock-o"></i> Jan 06 2020</span>
                                            <a href=""><span class="commentst_meta_reply"><i class="fa fa-reply"></i>Reply</span></a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .</p>
                                    </div>

                                </div>
                                <!-- Single Comments -->
                                <div class="single_comments">
                                    <div class="comments_thumb">
                                        <img src="assets/images/testi3.png" alt="" />
                                    </div>
                                    <div class="commentst_content">
                                        <div class="post_meta">
                                            <span class="badmin">John Dome</span>
                                            <span class="badmin"><i class="fa fa-clock-o"></i> Jan 06 2020</span>
                                            <a href=""><span class="commentst_meta_reply"><i class="fa fa-reply"></i>Reply</span></a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="blog_reply_coment_dtl mt-5">
                                <div class="reply_ttl">
                                    <h3>Leave Comments</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="contact_from">
                                            <form id="contact_form" action="" method="POST">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form_box mb-30">
                                                            <input type="text" name="name" placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form_box mb-30">
                                                            <input type="email" name="email" placeholder="Email Address">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form_box mb-30">
                                                            <input type="text" name="phone" placeholder="Phone Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form_box mb-30">
                                                            <input type="text" name="web" placeholder="Website">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form_box mb-30">
                                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Write a Message"></textarea>
                                                        </div>
                                                        <div class="quote_btn text_center">
                                                            <button class="btn" type="submit">Send Message</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <p class="form-message"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class=" col-lg-4 col-md-5 col-sm-12 col-xs-12 sidebar-right content-widget pdsr">
                    <div class="blog-left-side widget">


                        <div id="categories-3" class="widget widget_categories">
                            <h2 class="widget-title">Categories</h2>
                            <ul>
                                <li class="cat-item cat-item-8"><a href="#/"><i class="fa fa-youtube-play"></i> Graphic Design <span>(25)</span></a>
                                </li>
                                <li class="cat-item cat-item-10"><a href="#"><i class="fa fa-youtube-play"></i> Corporate building <span>(29)</span></a>
                                </li>
                                <li class="cat-item cat-item-10"><a href="#"><i class="fa fa-youtube-play"></i> Web Design <span>(29)</span></a>
                                </li>
                                <li class="cat-item cat-item-9"><a href="#"><i class="fa fa-youtube-play"></i> Corporate Office <span>(15)</span></a>
                                </li>
                                <li class="cat-item cat-item-11"><a href="#"><i class="fa fa-youtube-play"></i> Road Map <span>(22)</span></a>
                                </li>
                            </ul>
                        </div>
                        <div id="em_recent_post_widget-6" class="widget widget_recent_data">
                            <div class="single-widget-item">
                                <h2 class="widget-title">Popular Post</h2>
                                <div class="recent-post-item">
                                    <div class="recent-post-image">
                                        <a href="#">
                                            <img width="100" height="80" src="assets/images/recent1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="recent-post-text">

                                        <h4><a href="#">
                                                3 Ways to Transform Your Blog Into
                                            </a>
                                        </h4>
                                        <span class="rcomment">October 16, 2020</span>
                                    </div>
                                </div>
                                <div class="recent-post-item">
                                    <div class="recent-post-image">
                                        <a href="#">
                                            <img width="100" height="80" src="assets/images/recent2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="recent-post-text">

                                        <h4><a href="#">
                                                How Important Is Design To Business.
                                            </a></h4>
                                        <span class="rcomment">October 16, 2020</span>
                                    </div>
                                </div>
                                <div class="recent-post-item">
                                    <div class="recent-post-image">
                                        <a href="#">
                                            <img width="100" height="80" src="assets/images/recent3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="recent-post-text">

                                        <h4><a href="#">
                                                Your Small Business Web Design Solution.
                                            </a></h4>
                                        <span class="rcomment">October 16, 2020</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id="tags" class="widget tagcloud">
                            <h2 class="widget-title">Archives</h2>
                            <a href="">Event</a>
                            <a href="">Food</a>
                            <a href="">Water</a>
                            <a href="">Glass</a>
                            <a href="">Ciramic</a>
                            <a href="">Plastic</a>
                            <a href="">Polite</a>
                            <a href="">Modern</a>
                            <a href="">Compaign</a>
                            <a href="">Government</a>
                        </div>


                        <div id="tags" class="widget thumb_left">                            <div class="wedget_sideber_thumb">                                <img src="assets/images/blg-dtl-sd.jpg" alt="" />                            </div>                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- BLOG_AREA END -->




    <!--==================================================-->
    <!----- Start Techno Footer Middle Area ----->
    <!--==================================================-->
         @include('footer')<!--==================================================-->
    <!----- End Techno Footer Middle Area ----->
    <!--==================================================-->

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
    <!-- jquery js -->
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