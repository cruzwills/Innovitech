<style>
    /* ── Footer typography ── */
    .footer {
        font-family: inherit;
    }
    .footer-widget__title {
        font-size: 15px !important;
        font-weight: 700 !important;
        letter-spacing: 0.08em !important;
        text-transform: uppercase !important;
        margin-bottom: 20px !important;
    }
    .footer-widget-nav nav ul li {
        margin-bottom: 10px !important;
    }
    .footer-widget-nav nav ul li a {
        font-size: 14px !important;
        font-weight: 400 !important;
        line-height: 1.6 !important;
        letter-spacing: 0 !important;
        text-transform: none !important;
        transition: color 0.25s ease, padding-left 0.25s ease !important;
    }
    .footer-widget-nav nav ul li a:hover {
        padding-left: 5px !important;
    }
    .footer-widget-contact p,
    .footer-widget-contact .contact__list li,
    .footer-widget-contact .contact__list li a {
        font-size: 14px !important;
        font-weight: 400 !important;
        line-height: 1.7 !important;
        letter-spacing: 0 !important;
    }
    .footer-widget-social .btn {
        font-size: 13px !important;
        font-weight: 600 !important;
        letter-spacing: 0.03em !important;
    }
    .footer__copyrights span {
        font-size: 13px !important;
        font-weight: 400 !important;
        letter-spacing: 0 !important;
    }
    .footer__copyright-links li a {
        font-size: 13px !important;
        font-weight: 400 !important;
        letter-spacing: 0 !important;
    }
    .contact__icon {
        margin-right: 8px !important;
    }
</style>
<footer class="footer">
    <div class="footer-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="footer-widget-contact">
                        <a href="{{route('index')}}" class="footer-logo-link d-block mb-20">
                            <img src="assets/images/logo/ata-logo.png" alt="Innovinetec Solutions" class="footer-logo">
                        </a>
                        <h6 class="footer-widget__title">Quick Contacts</h6>
                        <p>If you have any questions or need help, feel free to contact our team — we're ready to assist.</p>
                        <ul class="contact__list list-unstyled">
                            <li>
                                <a href="mailto:info@innovinetec.co.zw">
                                    <i class="contact__icon icon-email"></i> <span>info@innovinetec.co.zw</span>
                                </a>
                            </li>
                            <li>
                                <a href="tel:+263773625107">
                                    <i class="contact__icon icon-phone"></i> <span>(+263) 773 625 107</span>
                                </a>
                            </li>
                        </ul>
                        <p>Harare, Zimbabwe.</p>
                        <a href="{{route('contact')}}" class="btn btn__white btn__link mr-30">
                            <i class="fas fa-map-marker-alt"></i> <span>Get Directions</span>
                        </a>
                    </div><!-- /.footer-widget-contact -->
                </div><!-- /.col-lg-3 -->
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="footer-widget-nav">
                        <h6 class="footer-widget__title">Company</h6>
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('review')}}">Customer Reviews</a></li>
                                <li><a href="{{route('gallery')}}">Our Gallery</a></li>
                            </ul>
                        </nav>
                    </div><!-- /.footer-widget-nav -->
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="footer-widget-nav">
                        <h6 class="footer-widget__title">Our Services</h6>
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="{{route('servicessingle')}}">CCTV &amp; Surveillance</a></li>
                                <li><a href="{{route('servicessingle')}}">Access Control Systems</a></li>
                                <li><a href="{{route('servicessingle')}}">Starlink Installation</a></li>
                                <li><a href="{{route('servicessingle')}}">Networking Installation</a></li>
                                <li><a href="{{route('servicessingle')}}">Computer &amp; IT Support</a></li>
                                <li><a href="{{route('servicessingle')}}">Office Equipment Maintenance</a></li>
                            </ul>
                        </nav>
                    </div><!-- /.footer-widget-nav -->
                </div><!-- /.col-lg-3 -->
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="footer-widget-nav">
                        <h6 class="footer-widget__title">Help</h6>
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div><!-- /.footer-widget-nav -->
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="footer-widget-social text-right">
                        <h6 class="footer-widget__title">Have A Project?</h6>
                        <a href="{{route('contact')}}" class="btn btn__primary mb-40">Get A Free Quote</a>
                        <ul class="social-icons list-unstyled justify-content-end mb-0">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                        </ul><!-- /.social-icons -->
                    </div><!-- /.footer-widget-social -->
                </div><!-- /.col-lg-2 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-primary -->
    <div class="footer-scroll text-center">
        <button id="scrollTopBtn">
            <i class="fas fa-long-arrow-alt-up"></i>
            <span class="scroll__text">Back To Top</span>
        </button>
    </div><!-- /.footer-scroll -->
    <div class="footer-secondary bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div
                    class="col-sm-12 col-md-8 col-lg-12 col-xl-8 offset-xl-2 d-flex flex-wrap justify-content-between align-items-center">
                    <div class="footer__copyrights">
                        <span class="fz-14">&copy; 2025 Innovinetec Solutions. All Rights Reserved.</span>
                    </div>
                    <nav>
                        <ul class="list-unstyled footer__copyright-links d-flex flex-wrap mb-0">
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Cookies</a></li>
                        </ul>
                    </nav>
                </div><!-- /.col-xl-10 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-secondary -->
</footer>
