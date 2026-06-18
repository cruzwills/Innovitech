@extends('layouts.app')
@section('content')
    <section class="slider">
        <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
            data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
            <div class="slide-item bg-overlay align-v-h">
                <div class="bg-img"><img src="assets/images/sliders/1.jpg" alt="slide img"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                            <div class="slide__content">
                                <span class="slide__subtitle">Your Complete IT Solutions Partner in Zimbabwe</span>
                                <h2 class="slide__title">Comprehensive IT Services For Homes & Businesses</h2>
                                <p class="slide__desc">From Starlink installation and CCTV surveillance to computer repairs,
                                    networking, and office equipment maintenance — ATA delivers end-to-end technology solutions
                                    you can rely on.
                                </p>
                                <div class="d-flex flex-wrap align-items-center">
                                    <a href="{{route('services')}}" class="btn btn__primary btn__xl mr-30">
                                        <span>Explore Our Services</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                    <a href="{{route('about')}}" class="btn btn__white btn__xl">
                                        More About Us!
                                    </a>
                                </div>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-xl-7 -->
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3 offset-xl-2 d-none d-xl-block">
                            <div class="cta-banner">
                                <h4 class="cta__title">Need IT Support Right Now?</h4>
                                <img src="assets/images/cta/1.jpg" alt="cta__img" class="cta__img">
                                <p class="cta__desc">Same-day support available for computer repairs, printer faults,
                                    networking issues and more.
                                </p>
                                <a href="{{route('contact')}}" class="btn btn__primary btn__link">
                                    <i class="icon-arrow-right icon-filled"></i>
                                    <span>Contact Us Today</span>
                                </a>
                            </div>
                        </div><!-- /.col-xl-2 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
            <div class="slide-item bg-overlay align-v-h">
                <div class="bg-img"><img src="assets/images/sliders/2.jpg" alt="slide img"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                            <div class="slide__content">
                                <span class="slide__subtitle">Security, Connectivity & Technology — All Under One Roof</span>
                                <h2 class="slide__title">Advanced Security & Surveillance Solutions For Every Environment</h2>
                                <p class="slide__desc">We supply and install CCTVs, access control systems, alarms, vehicle
                                    security, drones, and all safety &amp; surveillance products for homes, offices, and
                                    commercial properties.
                                </p>
                                <div class="d-flex flex-wrap align-items-center">
                                    <a href="{{route('services')}}" class="btn btn__primary btn__xl mr-30">
                                        <span>Explore Our Services</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                    <a href="{{route('contact')}}" class="btn btn__white btn__xl">
                                        Get A Free Quote
                                    </a>
                                </div>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-xl-7 -->
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3 offset-xl-2 d-none d-xl-block">
                            <div class="cta-banner">
                                <h4 class="cta__title">Protect What Matters Most</h4>
                                <img src="assets/images/cta/1.jpg" alt="cta__img" class="cta__img">
                                <p class="cta__desc">CCTV, alarms, access control and drone security — professionally
                                    installed and monitored.
                                </p>
                                <a href="{{route('servicessingle')}}" class="btn btn__primary btn__link">
                                    <i class="icon-arrow-right icon-filled"></i>
                                    <span>View Security Solutions</span>
                                </a>
                            </div>
                        </div><!-- /.col-xl-2 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
        </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- ========================
        About Layout 1
      =========================== -->
    <section class="about-layout1 pt-130 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6">
                    <div class="heading-layout2">
                        <h3 class="heading__title mb-50">Your One-Stop IT Solutions Provider — From Security &amp; Connectivity to Computers &amp; Office Equipment.</h3>
                    </div><!-- /heading -->
                    <div class="about__Text">
                        <p class="heading__desc mb-20">All Tech Alliance (ATA) is Zimbabwe's trusted technology partner,
                            delivering a full spectrum of IT services and products to residential, commercial, and corporate
                            clients. We combine technical expertise with outstanding customer service to keep your business
                            running smoothly and securely.</p>
                        <p class="heading__desc mb-40">Whether you need Starlink internet installed, CCTV cameras set up,
                            a network built from scratch, or your printers and computers repaired — our certified technicians
                            are on hand to get the job done right.</p>
                        <strong>What We Offer:</strong>
                        <div class="row mt-20">
                            <div class="col-sm-12 col-md-6">
                                <ul class="list-items-layout1 list-unstyled">
                                    <li class="list__item">Starlink Internet Installation</li>
                                    <li class="list__item">CCTV &amp; Surveillance Systems</li>
                                    <li class="list__item">Access Control &amp; Alarms</li>
                                </ul>
                            </div><!-- /.col-md-6 -->
                            <div class="col-sm-12 col-md-6">
                                <ul class="list-items-layout1 list-unstyled">
                                    <li class="list__item">Networking &amp; Wi-Fi Installation</li>
                                    <li class="list__item">Computer &amp; Printer Repairs</li>
                                    <li class="list__item">Office Equipment Maintenance</li>
                                </ul>
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->
                        <div class="d-flex align-items-center flex-wrap mt-10 mb-40">
                            <a href="{{route('services')}}" class="btn btn__primary btn__xl my-1 mr-30">
                                <span>All Services &amp; Products</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                            <a href="{{route('contact')}}" class="btn btn__secondary btn__xl my-1">Contact Us</a>
                        </div>
                    </div>
                </div><!-- /.col-xl-6 -->
                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 offset-xl-1">
                    <div class="video-banner-layout2 mb-50">
                        <img src="assets/images/about/1.jpg" alt="about">
                        <a class="video__btn video__btn-white popup-video"
                            href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                            <div class="video__player">
                                <i class="fa fa-play"></i>
                            </div>
                            <span class="video__title color-white">Watch Our Intro!</span>
                        </a>
                    </div><!-- /.video-banner -->
                </div><!-- /.col-xl-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.About Layout 1 -->

    <!-- ========================
        Features layout 2
      ========================== -->
    <section class="features-layout2 bg-overlay bg-overlay-gradient pt-130">
        <div class="bg-img"><img src="assets/images/banners/7.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="heading-layout2 heading-light mb-140">
                        <h3 class="heading__title">Serving Every Sector With Complete IT Solutions!</h3>
                        <p class="heading__desc">From corporate offices and retail stores to schools, hospitals, and
                            homes — ATA provides tailored technology services that keep every environment secure,
                            connected, and productive.
                        </p>
                    </div><!-- /heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="slick-carousel"
                        data-slick='{"slidesToShow": 5, "arrows": true, "dots": false, "autoplay": false,  "infinite": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                        <div class="feature-item">
                            <h3 class="feature__number">01</h3>
                            <div class="feature__body">
                                <h4 class="feature__title">Corporate &amp; Office</h4>
                                <a href="{{route('industriessingle')}}" class="btn btn__link btn__white">
                                    <i class="icon-arrow-right icon-filled"></i>
                                    <span>Get Started</span>
                                </a>
                            </div><!-- /.feature__body -->
                        </div><!-- /.feature-item -->
                        <div class="feature-item">
                            <h3 class="feature__number">02</h3>
                            <div class="feature__body">
                                <h4 class="feature__title">Retail &amp; Commercial</h4>
                                <a href="{{route('industriessingle')}}" class="btn btn__link btn__white">
                                    <i class="icon-arrow-right icon-filled"></i>
                                    <span>Get Started</span>
                                </a>
                            </div><!-- /.feature__body -->
                        </div><!-- /.feature-item -->
                        <div class="feature-item">
                            <h3 class="feature__number">03</h3>
                            <div class="feature__body">
                                <h4 class="feature__title">Healthcare &amp; Medical</h4>
                                <a href="{{route('industriessingle')}}" class="btn btn__link btn__white">
                                    <i class="icon-arrow-right icon-filled"></i>
                                    <span>Get Started</span>
                                </a>
                            </div><!-- /.feature__body -->
                        </div><!-- /.feature-item -->
                        <div class="feature-item">
                            <h3 class="feature__number">04</h3>
                            <div class="feature__body">
                                <h4 class="feature__title">Education &amp; Schools</h4>
                                <a href="{{route('industriessingle')}}" class="btn btn__link btn__white">
                                    <i class="icon-arrow-right icon-filled"></i>
                                    <span>Get Started</span>
                                </a>
                            </div><!-- /.feature__body -->
                        </div><!-- /.feature-item -->
                        <div class="feature-item">
                            <h3 class="feature__number">05</h3>
                            <div class="feature__body">
                                <h4 class="feature__title">Manufacturing &amp; Logistics</h4>
                                <a href="{{route('industriessingle')}}" class="btn btn__link btn__white">
                                    <i class="icon-arrow-right icon-filled"></i>
                                    <span>Get Started</span>
                                </a>
                            </div><!-- /.feature__body -->
                        </div><!-- /.feature-item -->
                        <div class="feature-item">
                            <h3 class="feature__number">06</h3>
                            <div class="feature__body">
                                <h4 class="feature__title">Finance &amp; Banking</h4>
                                <a href="{{route('industriessingle')}}" class="btn btn__link btn__white">
                                    <i class="icon-arrow-right icon-filled"></i>
                                    <span>Get Started</span>
                                </a>
                            </div><!-- /.feature__body -->
                        </div><!-- /.feature-item -->
                        <div class="feature-item">
                            <h3 class="feature__number">07</h3>
                            <div class="feature__body">
                                <h4 class="feature__title">Residential &amp; Homes</h4>
                                <a href="{{route('industriessingle')}}" class="btn btn__link btn__white">
                                    <i class="icon-arrow-right icon-filled"></i>
                                    <span>Get Started</span>
                                </a>
                            </div><!-- /.feature__body -->
                        </div><!-- /.feature-item -->
                    </div><!-- /.carousel -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <button class="btn__download d-flex align-items-center">
                        <span class="text-right mx-2">
                            <span class="color-body d-block">Everything you need in one place</span>
                            <strong class="color-white d-block fz-15">Download Our Services Brochure</strong>
                        </span>
                        <span class="download__icon">
                            <i class="icon-download"></i>
                        </span>
                    </button>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Features-layout2 -->

    <!-- ========================
          Services Layout 1
      =========================== -->
    <section class="services-layout2 pb-0">
        <div class="container">
            <div class="row heading mb-70">
                <div class="col-12">
                    <h2 class="heading__subtitle">Complete IT services tailored to your needs</h2>
                </div><!-- /.col-12 -->
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <h3 class="heading__title">Technology Solutions That Keep Your Business Moving!</h3>
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
                    <p class="heading__desc">ATA provides a complete range of IT services — from security and surveillance
                        to internet connectivity, computer support, and office equipment maintenance. Our certified
                        technicians deliver fast, reliable service so your operations never miss a beat.</p>
                    <div class="d-flex flex-wrap align-items-center mt-30">
                        <a href="{{route('howitworks')}}" class="btn btn__secondary btn__xl my-1 mr-30">
                            <span>How Does It Work?</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                        <a href="{{route('services')}}" class="btn btn__secondary btn__link my-1">
                            <i class="icon-arrow-right icon-outlined"></i>
                            <span>Check All Services</span>
                        </a>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="services-wrapper">
                <div class="row row-gutter-0">
                    <!-- service item #1 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-item">
                            <div class="service__body">
                                <div class="service__icon">
                                    <i class="icon-cctv-camera2"></i>
                                </div><!-- /.service__icon -->
                                <h4 class="service__title">CCTV &amp; Surveillance</h4>
                                <p class="service__desc">Supply, installation and maintenance of CCTV cameras, DVRs, NVRs,
                                    and complete video surveillance systems for homes and businesses.
                                </p>
                                <a href="{{route('servicessingle')}}" class="btn btn__primary btn__link">
                                    <i class="icon-arrow-right icon-filled"></i>
                                    <span>Read More</span>
                                </a>
                            </div><!-- /.service__body -->
                        </div><!-- /.service-item -->
                    </div><!-- /.col-lg-3 -->
                    <!-- service item #2 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-item">
                            <div class="service__body">
                                <div class="service__icon">
                                    <i class="icon-smart-control"></i>
                                </div><!-- /.service__icon -->
                                <h4 class="service__title">Access Control &amp; Alarms</h4>
                                <p class="service__desc">Biometric access systems, electric gates, alarm systems, vehicle
                                    security, and drone security — keeping people and property safe.
                                </p>
                                <a href="{{route('servicessingle')}}" class="btn btn__primary btn__link">
                                    <i class="icon-arrow-right icon-filled"></i>
                                    <span>Read More</span>
                                </a>
                            </div><!-- /.service__body -->
                        </div><!-- /.service-item -->
                    </div><!-- /.col-lg-3 -->
                    <!-- service item #3 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-item">
                            <div class="service__body">
                                <div class="service__icon">
                                    <i class="icon-home-automation"></i>
                                </div><!-- /.service__icon -->
                                <h4 class="service__title">Starlink Installation</h4>
                                <p class="service__desc">Professional Starlink satellite internet installation for homes,
                                    farms, businesses, and remote locations across Zimbabwe.
                                </p>
                                <a href="{{route('servicessingle')}}" class="btn btn__primary btn__link">
                                    <i class="icon-arrow-right icon-filled"></i>
                                    <span>Read More</span>
                                </a>
                            </div><!-- /.service__body -->
                        </div><!-- /.service-item -->
                    </div><!-- /.col-lg-3 -->
                    <!-- service item #4 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-item">
                            <div class="service__body">
                                <div class="service__icon">
                                    <i class="icon-intrusion"></i>
                                </div><!-- /.service__icon -->
                                <h4 class="service__title">Networking Installation</h4>
                                <p class="service__desc">Structured cabling, Wi-Fi setup, LAN/WAN configuration, router
                                    and switch installation for offices and commercial buildings.
                                </p>
                                <a href="{{route('servicessingle')}}" class="btn btn__primary btn__link">
                                    <i class="icon-arrow-right icon-filled"></i>
                                    <span>Read More</span>
                                </a>
                            </div><!-- /.service__body -->
                        </div><!-- /.service-item -->
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->

                <!-- Second row of services -->
                <div class="row row-gutter-0">
                    <!-- service item #5 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-item">
                            <div class="service__body">
                                <div class="service__icon">
                                    <i class="icon-detector"></i>
                                </div><!-- /.service__icon -->
                                <h4 class="service__title">Computer &amp; IT Support</h4>
                                <p class="service__desc">Laptop and desktop repairs, virus removal, software installation,
                                    data recovery, and on-site IT support for businesses of all sizes.
                                </p>
                                <a href="{{route('servicessingle')}}" class="btn btn__primary btn__link">
                                    <i class="icon-arrow-right icon-filled"></i>
                                    <span>Read More</span>
                                </a>
                            </div><!-- /.service__body -->
                        </div><!-- /.service-item -->
                    </div><!-- /.col-lg-3 -->
                    <!-- service item #6 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-item">
                            <div class="service__body">
                                <div class="service__icon">
                                    <i class="icon-surveillance"></i>
                                </div><!-- /.service__icon -->
                                <h4 class="service__title">Printers &amp; Photocopiers</h4>
                                <p class="service__desc">Supply, installation, and maintenance of printers, photocopiers,
                                    scanners, and all printing consumables and accessories.
                                </p>
                                <a href="{{route('servicessingle')}}" class="btn btn__primary btn__link">
                                    <i class="icon-arrow-right icon-filled"></i>
                                    <span>Read More</span>
                                </a>
                            </div><!-- /.service__body -->
                        </div><!-- /.service-item -->
                    </div><!-- /.col-lg-3 -->
                    <!-- service item #7 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-item">
                            <div class="service__body">
                                <div class="service__icon">
                                    <i class="icon-notification"></i>
                                </div><!-- /.service__icon -->
                                <h4 class="service__title">Office Equipment Maintenance</h4>
                                <p class="service__desc">General maintenance and repair of all office equipment including
                                    computers, printers, photocopiers, and networking devices.
                                </p>
                                <a href="{{route('servicessingle')}}" class="btn btn__primary btn__link">
                                    <i class="icon-arrow-right icon-filled"></i>
                                    <span>Read More</span>
                                </a>
                            </div><!-- /.service__body -->
                        </div><!-- /.service-item -->
                    </div><!-- /.col-lg-3 -->
                    <!-- service item #8 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-item">
                            <div class="service__body">
                                <div class="service__icon">
                                    <i class="icon-burglar"></i>
                                </div><!-- /.service__icon -->
                                <h4 class="service__title">Security Products &amp; Accessories</h4>
                                <p class="service__desc">Supply of CCTVs, alarms, vehicle trackers, drones, networking
                                    equipment, computers, and all IT accessories and peripherals.
                                </p>
                                <a href="{{route('servicessingle')}}" class="btn btn__primary btn__link">
                                    <i class="icon-arrow-right icon-filled"></i>
                                    <span>Read More</span>
                                </a>
                            </div><!-- /.service__body -->
                        </div><!-- /.service-item -->
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->

                <div class="row">
                    <div class="col-12">
                        <div class="cta-layout3 bg-white d-flex flex-wrap align-items-center justify-content-between p-40">
                            <div class="d-flex align-items-center">
                                <div class="cta__icon"><i class="icon-alert"></i></div>
                                <p class="cta__desc font-weight-bold my-2">Zimbabwe's trusted IT partner — we bring fast,
                                    reliable technology solutions directly to your door.
                                    <a href="{{route('contact')}}" class="text-underlined">Schedule A Visit</a>
                                </p>
                            </div>
                            <a href="{{route('contact')}}" class="btn btn__secondary btn__outlined btn__xl">
                                <span>Get A Free Quote</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div><!-- /.cta-layout3 -->
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.services-wrapper -->
        </div><!-- /.container -->
    </section><!-- /.Services Layout 2 -->

    <!-- ========================
        About Layout 3
      =========================== -->
    <section class="about-layout3 bg-dark pb-90">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading-layout2 heading-light text-center mb-90">
                        <h2 class="heading__subtitle">Security, Connectivity &amp; Technology — All In One Place</h2>
                        <h3 class="heading__title">Integrated IT Solutions &amp; Professional Support 24/7</h3>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6">
                    <div class="about__text">
                        <div class="heading-layout1 heading-light mb-50">
                            <h2 class="heading__subtitle color-primary">Complete Technology Control For Your Business</h2>
                            <h3 class=" heading__title mb-40">The Right IT Infrastructure That Protects, Connects &amp;
                                Empowers Your Organisation.</h3>
                            <p class="heading__desc">We partner with businesses of all sizes to design, install, and maintain
                                scalable IT solutions — from enterprise surveillance and access control systems to high-speed
                                Starlink connectivity, robust networking infrastructure, and fully managed office equipment
                                support.</p>
                        </div><!-- /heading -->
                        <ul class="list-items-layout5 list-items-light list-unstyled mb-40">
                            <li class="list__item">CCTV, alarms &amp; access control systems</li>
                            <li class="list__item">Starlink &amp; networking installation</li>
                            <li class="list__item">Computers, printers &amp; office equipment repairs</li>
                        </ul>
                        <a href="{{route('about')}}" class="btn btn__primary btn__primary-style2 btn__xl mb-40">
                            <span>Meet Our Experts</span>
                            <i class=" icon-arrow-right"></i>
                        </a>
                    </div>
                </div><!-- /.col-xl-6 -->
                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 offset-xl-1">
                    <div class="about__img">
                        <img src="assets/images/about/4.jpg" alt="about">
                        <div class="cta-banner">
                            <h3 class="cta__subtitle">Power Your Business With ATA!</h3>
                            <h4 class="cta__title">All The IT Essentials To Keep Your Operations Running.</h4>
                            <ul class="list-items-layout5 list-unstyled mb-0">
                                <li class="list__item">Fast Starlink connectivity</li>
                                <li class="list__item">Reliable security systems</li>
                                <li class="list__item">Expert equipment support</li>
                            </ul>
                        </div>
                    </div><!-- /.about__img -->
                </div><!-- /.col-xl-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.About Layout 3 -->

    <!-- ========================
        About Layout 4
      =========================== -->
    <section class="about-layout4 bg-dark pt-0 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                    <div class="about__img">
                        <img src="assets/images/about/5.jpg" alt="about">
                        <div class="cta-banner cta-banner-primary">
                            <h3 class="cta__subtitle">Leave The Tech To Us.</h3>
                            <h4 class="cta__title">We Handle Everything — So You Can Focus On Your Business!</h4>
                            <ul class="list-items-layout5 list-unstyled mb-0">
                                <li class="list__item">On-site technician support</li>
                                <li class="list__item">Same-day response available</li>
                                <li class="list__item">Preventive maintenance plans</li>
                            </ul>
                        </div>
                    </div><!-- /.about__img -->
                </div><!-- /.col-xl-5 -->
                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6 offset-xl-1">
                    <div class="about__text">
                        <div class="heading-layout1 heading-light mb-60">
                            <h2 class="heading__subtitle color-primary">Products &amp; Equipment Supplied Nationwide</h2>
                            <h3 class=" heading__title mb-40">Trusted Technology Products That Deliver Real Results.</h3>
                            <p class="heading__desc mb-30">We supply and install a comprehensive range of IT products
                                including computers, laptops, printers, photocopiers, networking equipment, Starlink kits,
                                CCTV systems, access control hardware, alarms, vehicle security devices, drones, and all
                                associated accessories.</p>
                            <p class="heading__desc mb-30">Our team of certified engineers handles projects of all sizes —
                                from a single office setup to multi-site enterprise deployments across Zimbabwe.</p>
                        </div><!-- /heading -->
                        <blockquote class="blockquote mb-0">
                            <h3 class="quote__title color-white">ATA transformed our office network and security
                                infrastructure in under a week. Excellent service from a truly professional team.
                            </h3>
                            <div class="d-flex align-items-center">
                                <div class="quote__rate mr-20">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <strong class="quote__author color-white">Business Client, Harare</strong>
                            </div>
                        </blockquote>
                    </div>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.About Layout 4 -->

    <!-- ========================
        About Layout 5
      =========================== -->
    <section class="about-layout5 bg-dark pt-0 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6">
                    <div class="about__text">
                        <div class="heading-layout1 heading-light mb-50">
                            <h2 class="heading__subtitle color-primary">Tailored IT Solutions For Every Budget
                            </h2>
                            <h3 class=" heading__title mb-40">Solutions That Reduce Cost &amp; Increase Business Efficiency.
                            </h3>
                            <p class="heading__desc">We design, install, and maintain technology solutions built around your
                                specific needs and budget. Whether you're a small startup needing reliable internet and a
                                few workstations, or a large enterprise requiring full security surveillance, access control,
                                and a managed IT infrastructure — ATA has you covered.
                            </p>
                        </div><!-- /heading -->
                        <div class="widget-categories p-0 mb-60">
                            <div class="widget-content">
                                <ul class="list-unstyled d-flex flex-wrap mb-0">
                                    <li><a href="#">CCTV Systems</a></li>
                                    <li><a href="#">Access Control</a></li>
                                    <li><a href="#">Starlink</a></li>
                                    <li><a href="#">Networking</a></li>
                                    <li><a href="#">Computers</a></li>
                                    <li><a href="#">Printers</a></li>
                                    <li><a href="#">Photocopiers</a></li>
                                    <li><a href="#">IT Maintenance</a></li>
                                </ul>
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-categories -->
                        <p class="font-weight-bold color-white">
                            Our team delivers expert installation and ongoing support for every technology solution we provide.
                            <a href="{{route('contact')}}" class="text-underlined color-primary">Contact Us Now!</a>
                        </p>
                    </div>
                </div><!-- /.col-xl-6 -->
                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 offset-xl-1">
                    <div class="video-banner-layout3 mb-50">
                        <img src="assets/images/about/6.jpg" alt="about">
                        <a class="video__btn video__btn-white popup-video"
                            href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                            <div class="video__player">
                                <i class="fa fa-play"></i>
                            </div>
                        </a>
                    </div> <!-- /.video-banner -->
                </div><!-- /.col-xl-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.About Layout 5 -->

    <!-- ======================
        Portfolio
      ========================= -->
    <section class="portfolio-carousel portfolio-layout2">
        <div class="container">
            <div class="row heading mb-20">
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <h3 class="heading__title">Explore Our Case Studies &amp; Latest Success Stories.</h3>
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
                    <p class="heading__desc mb-30">From securing a hospital's entire campus with CCTV and access control,
                        to deploying Starlink for remote farms and building enterprise networks for growing businesses —
                        ATA delivers results that matter.</p>
                    <p class="heading__desc mb-30">We understand that technology must work reliably, every single day.
                        That's why our solutions are built to last, backed by expert support whenever you need it.</p>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="carousel-container">
                        <div class="slick-carousel"
                            data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "autoplay": false, "arrows": true, "dots": true, "responsive": [{"breakpoint": 1300, "settings": {"slidesToShow": 3,"slidesToScroll": 3}}, {"breakpoint": 992, "settings": {"slidesToShow": 2,"slidesToScroll": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1,"slidesToScroll": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1,"slidesToScroll": 1}}]}'>
                            <div class="portfolio-item">
                                <div class="portfolio__img">
                                    <img src="assets/images/portfolio/grid/1.jpg" alt="portfolio img">
                                </div>
                                <div class="portfolio__body">
                                    <div class="portfolio__cat">
                                        <a href="#">CCTV</a><a href="#">Security</a>
                                    </div>
                                    <div class="portfolio__info">
                                        <h4 class="portfolio__title"><a href="#">Full CCTV &amp; Access Control
                                                Deployment For A Corporate Campus</a>
                                        </h4>
                                        <p class="portfolio__desc">Complete surveillance system with 64 cameras, biometric
                                            access control, and 24/7 monitoring integration installed across a multi-building
                                            corporate site.</p>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn__secondary">
                                            <i class="icon-arrow-right"></i>
                                            <span>Explore More</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="#" class="portfolio__readmore"><i class="icon-arrow-right"></i></a>
                            </div>
                            <div class="portfolio-item">
                                <div class="portfolio__img">
                                    <img src="assets/images/portfolio/grid/2.jpg" alt="portfolio img">
                                </div>
                                <div class="portfolio__body">
                                    <div class="portfolio__cat">
                                        <a href="#">Starlink</a><a href="#">Connectivity</a>
                                    </div>
                                    <div class="portfolio__info">
                                        <h4 class="portfolio__title"><a href="#">Starlink Internet Installation For
                                                A Remote Farm &amp; Lodge</a>
                                        </h4>
                                        <p class="portfolio__desc">Delivered high-speed Starlink satellite internet to a
                                            remote agricultural operation, enabling reliable connectivity for the first time.</p>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn__secondary">
                                            <i class="icon-arrow-right"></i>
                                            <span>Explore More</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="#" class="portfolio__readmore"><i class="icon-arrow-right"></i></a>
                            </div>
                            <div class="portfolio-item">
                                <div class="portfolio__img">
                                    <img src="assets/images/portfolio/grid/3.jpg" alt="portfolio img">
                                </div>
                                <div class="portfolio__body">
                                    <div class="portfolio__cat">
                                        <a href="#">Networking</a><a href="#">IT</a>
                                    </div>
                                    <div class="portfolio__info">
                                        <h4 class="portfolio__title"><a href="#">Enterprise Network Build For A
                                                Growing Retail Chain</a>
                                        </h4>
                                        <p class="portfolio__desc">Designed and installed a full LAN/WAN infrastructure
                                            across 5 retail branches, including structured cabling and managed Wi-Fi.</p>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn__secondary">
                                            <i class="icon-arrow-right"></i>
                                            <span>Explore More</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="#" class="portfolio__readmore"><i class="icon-arrow-right"></i></a>
                            </div>
                            <div class="portfolio-item">
                                <div class="portfolio__img">
                                    <img src="assets/images/portfolio/grid/4.jpg" alt="portfolio img">
                                </div>
                                <div class="portfolio__body">
                                    <div class="portfolio__cat">
                                        <a href="#">Computers</a><a href="#">IT Support</a>
                                    </div>
                                    <div class="portfolio__info">
                                        <h4 class="portfolio__title"><a href="#">Full IT Refresh For A Healthcare
                                                Facility</a>
                                        </h4>
                                        <p class="portfolio__desc">Supplied, configured, and deployed 40 workstations,
                                            printers, and a server room for a medical clinic — with ongoing support contract.</p>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn__secondary">
                                            <i class="icon-arrow-right"></i>
                                            <span>Explore More</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="#" class="portfolio__readmore"><i class="icon-arrow-right"></i></a>
                            </div>
                            <div class="portfolio-item">
                                <div class="portfolio__img">
                                    <img src="assets/images/portfolio/grid/5.jpg" alt="portfolio img">
                                </div>
                                <div class="portfolio__body">
                                    <div class="portfolio__cat">
                                        <a href="#">Printers</a><a href="#">Maintenance</a>
                                    </div>
                                    <div class="portfolio__info">
                                        <h4 class="portfolio__title"><a href="#">Managed Print &amp; Equipment
                                                Maintenance Contract For A Law Firm</a></h4>
                                        <p class="portfolio__desc">Ongoing maintenance and support for all printers,
                                            photocopiers, and office equipment across a busy legal firm's Harare office.</p>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn__secondary">
                                            <i class="icon-arrow-right"></i>
                                            <span>Explore More</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="#" class="portfolio__readmore"><i class="icon-arrow-right"></i></a>
                            </div>
                            <div class="portfolio-item">
                                <div class="portfolio__img">
                                    <img src="assets/images/portfolio/grid/6.jpg" alt="portfolio img">
                                </div>
                                <div class="portfolio__body">
                                    <div class="portfolio__cat">
                                        <a href="#">Access Control</a><a href="#">Alarms</a>
                                    </div>
                                    <div class="portfolio__info">
                                        <h4 class="portfolio__title"><a href="#">Vehicle Security &amp; Alarm System
                                                Installation For A Fleet Company</a>
                                        </h4>
                                        <p class="portfolio__desc">Installed GPS vehicle trackers, immobilizers, and
                                            alarm systems across an entire commercial vehicle fleet for real-time security.</p>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn__secondary">
                                            <i class="icon-arrow-right"></i>
                                            <span>Explore More</span>
                                        </a>
                                    </div>
                                </div>
                                <a href="#" class="portfolio__readmore"><i class="icon-arrow-right"></i></a>
                            </div>
                        </div><!-- /.carousel -->
                    </div><!-- /.carousel-container -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.portfolio -->

    <!-- ======================
       Clients
      ========================= -->
    <section class="clients border-top pt-50 pb-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <p class="font-weight-bold my-3">
                        Trusted by businesses, institutions, and homeowners across Zimbabwe.
                        <a href="{{route('review')}}" class="text-underlined">Read Our Reviews!</a>
                    </p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="slick-carousel"
                        data-slick='{"slidesToShow": 4, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                        <div class="client">
                            <img src="assets/images/clients/8.png" alt="client">
                        </div>
                        <div class="client">
                            <img src="assets/images/clients/9.png" alt="client">
                        </div>
                        <div class="client">
                            <img src="assets/images/clients/10.png" alt="client">
                        </div>
                        <div class="client">
                            <img src="assets/images/clients/11.png" alt="client">
                        </div>
                        <div class="client">
                            <img src="assets/images/clients/9.png" alt="client">
                        </div>
                    </div><!-- /.carousel -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Clients -->

    <!-- ==========================
          contact layout 3
      =========================== -->
    <section class="contact-layout3 bg-overlay bg-overlay-primary bg-overlay-primary-gradient">
        <div class="bg-img"><img src="assets/images/banners/5.jpg" alt="banner"></div>
        <div class="container">
            <div class="contact-panel p-0">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-7">
                        <form class="contact-panel__form" method="post" id="contactForm">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="contact-panel__title">Request A Quote</h4>
                                    <p class="contact-panel__desc mb-30">Complete the form below to request a quote and
                                        we'll get back to you promptly. Or call us on
                                        <strong class="color-secondary">+263 773 625 107</strong> and our specialists
                                        will assist you right away!
                                    </p>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group float-label">
                                        <label for="clientType">Home Or Business?</label>
                                        <select id="clientType" class="form-control">
                                            <option>For Home</option>
                                            <option>For Business</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group float-label">
                                        <label for="Industry">Industry:</label>
                                        <select id="Industry" class="form-control">
                                            <option>Corporate &amp; Office</option>
                                            <option>Retail &amp; Commercial</option>
                                            <option>Healthcare &amp; Medical</option>
                                            <option>Education &amp; Schools</option>
                                            <option>Manufacturing &amp; Logistics</option>
                                            <option>Residential</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-10">
                                        <label>Service Of Interest:</label>
                                        <div>
                                            <div class="custom-control custom-checkbox custom-control-inline mb-20">
                                                <input type="checkbox" class="custom-control-input" id="cctv">
                                                <label class="custom-control-label" for="cctv">CCTV &amp; Surveillance</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline mb-20">
                                                <input type="checkbox" class="custom-control-input" id="access">
                                                <label class="custom-control-label" for="access">Access Control &amp; Alarms</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline mb-20">
                                                <input type="checkbox" class="custom-control-input" id="starlink">
                                                <label class="custom-control-label" for="starlink">Starlink Installation</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline mb-20">
                                                <input type="checkbox" class="custom-control-input" id="networking">
                                                <label class="custom-control-label" for="networking">Networking</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline mb-20">
                                                <input type="checkbox" class="custom-control-input" id="computers">
                                                <label class="custom-control-label" for="computers">Computers &amp; IT Support</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline mb-20">
                                                <input type="checkbox" class="custom-control-input" id="printers">
                                                <label class="custom-control-label" for="printers">Printers &amp; Photocopiers</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline mb-20">
                                                <input type="checkbox" class="custom-control-input" id="maintenance">
                                                <label class="custom-control-label" for="maintenance">Office Equipment Maintenance</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline mb-20">
                                                <input type="checkbox" class="custom-control-input" id="Other">
                                                <label class="custom-control-label" for="Other">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn__secondary btn__xl">
                                        <i class="icon-arrow-right icon-filled"></i> <span>Submit Request</span>
                                    </button>
                                    <div class="contact-result"></div>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div><!-- /.col-lg-7 -->
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <div class="packages-wrapper">
                            <div class="slick-carousel m-slides-0"
                                data-slick='{"slidesToShow": 1, "slidesToScroll": 1,"arrows": false, "dots": true, "autoplay": true}'>
                                <!-- pricing item #1-->
                                <div class="h-100">
                                    <div class="pricing-package">
                                        <div class="package__body">
                                            <h4 class="package__title">Basic IT Package</h4>
                                            <p class="package__desc">Perfect for small businesses and home offices needing
                                                reliable connectivity, basic security, and equipment support.</p>
                                            <div class="d-flex mb-40">
                                                <div class="package__icon">
                                                    <i class="icon-intrusion"></i>
                                                </div>
                                                <div class="package__icon">
                                                    <i class="icon-home-automation"></i>
                                                </div>
                                                <div class="package__icon">
                                                    <i class="icon-detector"></i>
                                                </div>
                                            </div>
                                            <ul class="package__list list-items-layout4 list-unstyled">
                                                <li class="list__item">Starlink or networking setup</li>
                                                <li class="list__item">Basic CCTV installation (up to 4 cameras)</li>
                                                <li class="list__item">Computer &amp; printer support</li>
                                            </ul>
                                        </div>
                                        <div class="package__footer">
                                            <a href="{{route('contact')}}" class="btn btn__secondary btn__xl">
                                                <span>Get A Quote</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- pricing item #2-->
                                <div class="h-100">
                                    <div class="pricing-package">
                                        <div class="package__body">
                                            <h4 class="package__title">Business IT Package</h4>
                                            <p class="package__desc">Ideal for growing businesses needing comprehensive IT
                                                infrastructure, security, and reliable support coverage.</p>
                                            <div class="d-flex mb-40">
                                                <div class="package__icon">
                                                    <i class="icon-cctv-camera2"></i>
                                                </div>
                                                <div class="package__icon">
                                                    <i class="icon-smart-control"></i>
                                                </div>
                                                <div class="package__icon">
                                                    <i class="icon-surveillance"></i>
                                                </div>
                                            </div>
                                            <ul class="package__list list-items-layout4 list-unstyled">
                                                <li class="list__item">Full CCTV &amp; access control system</li>
                                                <li class="list__item">Enterprise networking setup</li>
                                                <li class="list__item">Computer fleet support</li>
                                                <li class="list__item">Printer &amp; equipment maintenance</li>
                                            </ul>
                                        </div>
                                        <div class="package__footer">
                                            <a href="{{route('contact')}}" class="btn btn__primary btn__xl">
                                                <span>Get A Quote</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- pricing item #3-->
                                <div class="h-100">
                                    <div class="pricing-package">
                                        <div class="package__body">
                                            <h4 class="package__title">Enterprise IT Package</h4>
                                            <p class="package__desc">Full-scope managed IT solutions for large organisations,
                                                multi-site deployments, and enterprise-level security requirements.</p>
                                            <div class="d-flex mb-40">
                                                <div class="package__icon">
                                                    <i class="icon-notification"></i>
                                                </div>
                                                <div class="package__icon">
                                                    <i class="icon-surveillance2"></i>
                                                </div>
                                                <div class="package__icon">
                                                    <i class="icon-burglar"></i>
                                                </div>
                                            </div>
                                            <ul class="package__list list-items-layout4 list-unstyled">
                                                <li class="list__item">Multi-site CCTV &amp; access control</li>
                                                <li class="list__item">Starlink &amp; enterprise networking</li>
                                                <li class="list__item">Full computer &amp; printer fleet management</li>
                                                <li class="list__item">Dedicated support &amp; maintenance plan</li>
                                                <li class="list__item">Vehicle &amp; drone security solutions</li>
                                            </ul>
                                        </div>
                                        <div class="package__footer">
                                            <a href="{{route('contact')}}" class="btn btn__secondary btn__xl">
                                                <span>Get A Quote</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.carousel-->
                        </div><!-- /.packages-wrapper -->
                    </div><!-- /.col-lg-5 -->
                </div><!-- /.contact-panel -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact layout 3 -->

    <!-- ======================
        Blog Grid
      ========================= -->
    <section class="blog-grid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-40">
                        <h2 class="heading__subtitle">IT Tips, Guides &amp; Industry News</h2>
                        <h3 class="heading__title">Recent Articles</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Post Item #1 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="post-item">
                        <div class="post__img">
                            <a href="#">
                                <img src="assets/images/blog/grid/1.jpg" alt="post image" loading="lazy">
                            </a>
                            <div class="post__meta-cat">
                                <a href="#">Starlink</a>
                            </div>
                        </div>
                        <div class="post__body">
                            <h4 class="post__title">
                                <a href="#">Everything You Need To Know Before Getting Starlink Installed In Zimbabwe</a>
                            </h4>
                            <div class="post__meta d-flex">
                                <span class="post__meta-date">Jan 30, 2025</span>
                                <div class="post__meta-author"><a href="#">ATA Team</a></div>
                            </div>
                            <p class="post__desc">Starlink is changing internet access across Zimbabwe. Here's what you need
                                to know about costs, installation, speed expectations, and the best locations for your dish.
                            </p>
                            <a href="#" class="btn btn__secondary btn__outlined">
                                <i class="icon-arrow-right"></i>
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Post Item #2 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="post-item">
                        <div class="post__img">
                            <a href="#">
                                <img src="assets/images/blog/grid/2.jpg" alt="post image" loading="lazy">
                            </a>
                            <div class="post__meta-cat">
                                <a href="#">Security</a>
                                <a href="#">CCTV</a>
                            </div>
                        </div>
                        <div class="post__body">
                            <h4 class="post__title">
                                <a href="#">How To Choose The Right CCTV System For Your Business Or Home</a>
                            </h4>
                            <div class="post__meta d-flex">
                                <span class="post__meta-date">Jan 22, 2025</span>
                                <div class="post__meta-author"><a href="#">ATA Team</a></div>
                            </div>
                            <p class="post__desc">With so many CCTV options on the market, knowing which system suits your
                                environment and budget is crucial. Our experts break down what matters most.
                            </p>
                            <a href="#" class="btn btn__secondary btn__outlined">
                                <i class="icon-arrow-right"></i>
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Post Item #3 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="post-item">
                        <div class="post__img">
                            <a href="#">
                                <img src="assets/images/blog/grid/3.jpg" alt="post image" loading="lazy">
                            </a>
                            <div class="post__meta-cat">
                                <a href="#">IT Support</a>
                                <a href="#">Maintenance</a>
                            </div>
                        </div>
                        <div class="post__body">
                            <h4 class="post__title">
                                <a href="#">5 Signs Your Office Equipment Needs Professional Maintenance Right Now</a>
                            </h4>
                            <div class="post__meta d-flex">
                                <span class="post__meta-date">Jan 15, 2025</span>
                                <div class="post__meta-author"><a href="#">ATA Team</a></div>
                            </div>
                            <p class="post__desc">Ignoring early warning signs from your printers, computers, and
                                photocopiers can lead to costly breakdowns. Here's what to watch out for.
                            </p>
                            <a href="#" class="btn btn__secondary btn__outlined">
                                <i class="icon-arrow-right"></i>
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12 text-center">
                    <a href="{{route('services')}}" class="btn btn__secondary btn__link">
                        <span>View All Our Services</span>
                        <i class="icon-arrow-right icon-outlined"></i>
                    </a>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.blog Grid -->
@endsection
