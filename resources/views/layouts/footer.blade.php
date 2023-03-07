
<footer class="footer">
    <div class="footer__main">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="text-center">
                        <a href="/" class="footer__logo">
                            <img src="{{URL::asset('assets/logo/logo-light.png')}}" alt="Logo" width="250px" class="img-responsive"/>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="footer-section">
                        <h3 class="footer-section__title ui-title-inner">
                            <i class="ui-decor-2 bg-primary"></i> About Phoenix Events
                        </h3>
                        <div class="footer-section__subtitle">The Events Specialists!</div>
                        <div class="footer__info">
                            <p>Aorem ipsum dolor sit amet elit sed lum tempor incididunt ut labore el dolore alg minim veniam quis nostrud lorem psum dolor sit amet sed incididunt.</p>
                        </div>
                        <a href="{{route('about')}}" class="btn btn-default btn-xs">
                            <i class="icon"></i> Read More
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <section class="footer-section">
                        <h3 class="footer-section__title ui-title-inner">
                            <i class="ui-decor-2 bg-primary"></i> Keep In Touch
                        </h3>
                        <div class="footer__contact">
                            <i class="icon icon-map"></i> 38-2 Hilton Street, California, USA
                        </div>
                        <div class="footer__contact">
                            <i class="icon icon-call-in"></i> (+01) 123 456 7890
                        </div>
                        <div class="footer__contact">
                            <i class="icon icon-envelope-open"></i> info@Phoenix Events.org
                        </div>
                        <div class="footer__contact">
                            <i class="icon icon-clock"></i> Mon - Fri 9.00 am - 6.00 pm
                        </div>
                    </section>
                </div>

                <div class="col-md-3">
                    <section class="footer-section">
                        <h3 class="footer-section__title ui-title-inner">
                            <i class="ui-decor-2 bg-primary"></i> Events Gallery
                        </h3>
                        <ul class="clearfix footer-gallery list-unstyled js-zoom-gallery">
                            <li class="footer-gallery__item">
                                <a href="assets/media/components/footer/gallery-1.jpg" class="footer-gallery__link js-zoom-gallery__item">
                                    <img src="assets/media/components/footer/gallery-1.jpg" alt="foto" class="img-responsive"/>
                                </a>
                            </li>
                            <li class="footer-gallery__item">
                                <a href="assets/media/components/footer/gallery-2.jpg" class="footer-gallery__link js-zoom-gallery__item">
                                    <img src="assets/media/components/footer/gallery-2.jpg" alt="foto" class="img-responsive"/>
                                </a>
                            </li>
                            <li class="footer-gallery__item">
                                <a href="assets/media/components/footer/gallery-3.jpg" class="footer-gallery__link js-zoom-gallery__item">
                                    <img src="assets/media/components/footer/gallery-3.jpg" alt="foto" class="img-responsive"/>
                                </a>
                            </li>
                            <li class="footer-gallery__item">
                                <a href="assets/media/components/footer/gallery-4.jpg" class="footer-gallery__link js-zoom-gallery__item">
                                    <img src="assets/media/components/footer/gallery-4.jpg" alt="foto" class="img-responsive"/>
                                </a>
                            </li>
                            <li class="footer-gallery__item">
                                <a href="assets/media/components/footer/gallery-5.jpg" class="footer-gallery__link js-zoom-gallery__item">
                                    <img src="assets/media/components/footer/gallery-5.jpg" alt="foto" class="img-responsive"/>
                                </a>
                            </li>
                            <li class="footer-gallery__item">
                                <a href="assets/media/components/footer/gallery-6.jpg" class="footer-gallery__link js-zoom-gallery__item">
                                    <img src="assets/media/components/footer/gallery-6.jpg" alt="foto" class="img-responsive"/>
                                </a>
                            </li>
                        </ul>
                    </section>
                </div>

                <div class="col-md-3">
                    <section class="footer-section">
                        <h3 class="footer-section__title ui-title-inner">
                            <i class="ui-decor-2 bg-primary"></i> Quick Links
                        </h3>
                        <ul class="footer-list list list-mark-4 list-unstyled">
                            <li class="footer-list__item">
                                <a href="{{route('services')}}" class="footer-list__link">Our Services</a>
                            </li>
                            <li class="footer-list__item">
                                <a href="/" class="footer-list__link">Our Team</a>
                            </li>
                            <li class="footer-list__item">
                                <a href="{{route('about')}}" class="footer-list__link">About Phoenix Events</a>
                            </li>
                            <li class="footer-list__item">
                                <a href="/" class="footer-list__link">Clients List</a>
                            </li>
                            <li class="footer-list__item">
                                <a href="{{route('contact')}}" class="footer-list__link">Get In Touch</a>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="copyright pull-left">© <?php echo date('Y'); ?><strong> Phoenix Events</strong> - The Events Specialists All Rights Reserved.
                        <a href="{{route('terms')}}" class="copyright__link"> Terms of Use</a>
                        <a href="{{route('privacy')}}" class="copyright__link">Privacy Policy</a>
                    </div>
                    <ul class="social-net list-inline pull-right">
                        <li class="social-net__item">
                            <a href="youtube.com" class="social-net__link text-primary_h">
                                <i class="icon fa fa-youtube"></i>
                            </a>
                        </li>
                        <li class="social-net__item">
                            <a href="twitter.com" class="social-net__link text-primary_h">
                                <i class="icon fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="social-net__item">
                            <a href="facebook.com" class="social-net__link text-primary_h">
                                <i class="icon fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="social-net__item">
                            <a href="plus.google.com" class="social-net__link text-primary_h">
                                <i class="icon fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li class="social-net__item">
                            <a href="instagram.com" class="social-net__link text-primary_h">
                                <i class="icon fa fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
