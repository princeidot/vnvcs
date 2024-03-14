<footer class="site-footer">
    <div class="site-footer__top">
        <div class="container">
            <div class="site-footer__top-inner">
                <div class="site-footer-map"
                    style="background-image: url({{asset('images/shapes/site-footer-mape.png')}})"></div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget__about">
                            <div class="footer-widget__about-logo"> <a href="{{url('')}}"><img
                                        src="{{asset('images/vnvcs/logo.png')}}" alt=""></a> </div>
                            <p class="footer-widget__about-text" style="padding-top:19px;font-size:25px;">Value Customer
                                Vision</p>
                            <div class="footer-widget__about-social"> <a href="#" target="_blank"><i
                                        class="fab fa-twitter"></i></a> <a
                                    href="https://www.facebook.com/vnvcomptechsystems/" target="_blank"><i
                                        class="fab fa-facebook"></i></a> <a
                                    href="https://www.linkedin.com/company/vnvcs/" target="_blank"><i
                                        class="fab fa-linkedin"></i></a> <a href="https://wa.me/919152123651"
                                    target="_blank"><i class="fab fa-whatsapp"></i></a> </div>
                        </div>
                     
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer-widget__contact">
                            <h3 class="footer-widget__title">Contact</h3>
                            <p class="footer-widget__contact-text">Unit # 15, Building ll (A-3), Sector l, Millennium
                                Business Park,MIDC, Mahape Navi Mumbai - 400710 (INDIA)</p>
                            <ul class="list-unstyled footer-widget__contact-list">
                                <li>
                                    <div class="icon"> <span class="icon-email"></span> </div>
                                    <div class="text">
                                        <p><a href="mailto:contact@vnvcs.com"> contact@vnvcs.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"> <span class="icon-telephone"></span> </div>
                                    <div class="text">
                                        <p><a href="tel:+919152123651">+91-9152123651 / 52</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="certificate" style="margin-top:13px;"> <img src="{{asset('images/vnvcs/isa.png')}}"
                                style="Width:47%"> </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget__links clearfix">
                            <h3 class="footer-widget__title">Links</h3>
                            <ul class="footer-widget__links-list list-unstyled clearfix">
                                <li><a href="{{url('about-us')}}">About us</a></li>
                                <li><a href="{{url('products')}}">Products</a></li>
                                <li><a href="{{url('services')}}">Services</a></li>
                                <li><a href="{{url('careers')}}">Careers</a></li>
                                <li><a href="{{url('our-team')}}">Our Team</a></li>
                            </ul>
                            <ul class="footer-widget__links-list footer-widget__links-list-two list-unstyled clearfix">
                                <li><a href="{{url('blog')}}"> Blog</a></li>
                                <li><a href="{{url('news-and-event')}}">News & Event</a></li>
                                <li><a href="{{url('case-studies')}}">Case-studies</a></li>
                                <li><a href="{{url('contact-us')}}">Contact us</a></li>
                            </ul>
                        </div>
                        <div class="certificate"> <img src="{{asset('images/vnvcs/ifa.png')}}" style="width:50%;"> <img
                                src="{{asset('images/vnvcs/egac.png')}}" style="width:45%;"> </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="footer-widget__column footer-widget__newsletter">
                            <h3 class="footer-widget__title">Newsletter</h3>
                            <p class="footer-widget__newsletter-text">Subscribe to our newsletter for daily new and
                                updates</p>
                            <form class="footer-widget__newsletter-form mc-form" method="post"
                                action="{{url('news_latter')}}"> @csrf <div class="footer-widget__newsletter-input-box">
                                    <input type="email" placeholder="Email address" name="email"> <button type="submit"
                                        class="footer-widget__newsletter-btn">Send</button> </div>
                            </form>
                            <div class="mc-form__response"></div><!-- /.mc-form__response -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="site-footer__bottom-container">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer__bottom-inner">
                            <div class="site-footer__bottom-left">
                                <p class="site-footer__bottom-text">© All Copyright <span class="dynamic-year"> </span>
                                    <!-- /.dynamic-year --> by <a href="#">vnvcs.com</a></p>
                            </div>
                            <div class="site-footer__bottom-right">
                                <ul class="list-unstyled site-footer__bottom-menu">
                                    <li><a href="{{url('terms-and-conditions')}}">Terms & Condition</a></li>
                                    <li><span>/</span></li>
                                    <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Start of Tawk.to Script-->
<script
    type="text/javascript">     var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date(); (function () { var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0]; s1.async = true; s1.src = 'https://embed.tawk.to/625d0bdfb0d10b6f3e6e0b15/1g0tncou7'; s1.charset = 'UTF-8'; s1.setAttribute('crossorigin', '*'); s0.parentNode.insertBefore(s1, s0); })(); </script>
<!--End of Tawk.to Script-->