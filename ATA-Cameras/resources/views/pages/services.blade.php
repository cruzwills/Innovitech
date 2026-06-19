@extends('layouts.app')
@section('content')
    <section class="page-title-layout2 page-title-light bg-overlay">
        <div class="bg-img"><img src="assets/images/page-titles/11.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                    <h1 class="pagetitle__heading">Complete IT Services &amp; Technology Solutions</h1>
                    <p class="pagetitle__desc">From CCTV and access control to Starlink installation, networking, computer
                        repairs, printers, and office equipment maintenance — Innovinetec Solutions delivers every IT service your home or
                        business needs.</p>
                    <div class="d-flex flex-wrap align-items-center">
                        <a href="{{route('contact')}}" class="btn btn__white my-2 mr-30">
                            <span>Get A Free Quote</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                        <a href="{{route('contact')}}" class="btn btn__white btn__outlined my-2">
                            Get A Free Quote
                        </a>
                    </div>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->
    <div class="breadcrumb-area border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ol class="breadcrumb  mb-0">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb-area -->

    <style>
        /* Equal-height service cards with aligned images */
        .services-layout1 .row > [class*="col-"] {
            display: flex;
        }
        .service-item {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100%;
        }
        .service__body {
            flex: 1;
        }
        .service__img {
            height: 220px;
            overflow: hidden;
            flex-shrink: 0;
        }
        .service__img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }
        .service-item:hover .service__img img {
            transform: scale(1.05);
        }
    </style>

    <!-- ========================
          Services Layout 1
      =========================== -->
    <section class="services-layout1 pt-130 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-60">
                        <h3 class="heading__title">Everything Your Business &amp; Home Needs — In One Place</h3>
                        <p class="heading__desc">Innovinetec Solutions delivers a full range of technology services covering security,
                            connectivity, computing, and office equipment — all installed and supported by our expert team.</p>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <!-- service item #1 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service__body">
                            <div class="service__icon"><i class="icon-cctv-camera2"></i></div>
                            <h4 class="service__title">CCTV &amp; Video Surveillance</h4>
                            <p class="service__desc">Supply, installation and maintenance of CCTV cameras, DVRs, NVRs and
                                full video surveillance systems for homes, offices and commercial properties.
                            </p>
                            
                        </div>
                        <div class="service__img"><img src="assets/images/gallery/9.jpg" alt="CCTV & Video Surveillance"></div>
                    </div>
                </div>
                <!-- service item #2 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service__body">
                            <div class="service__icon"><i class="icon-smart-control"></i></div>
                            <h4 class="service__title">Access Control &amp; Alarm Systems</h4>
                            <p class="service__desc">Biometric access, electric gates, intruder alarms, vehicle security,
                                drone surveillance and all safety &amp; detection systems professionally installed.
                            </p>
                            
                        </div>
                        <div class="service__img"><img src="assets/images/gallery/8.jpg" alt="Access Control & Alarm Systems"></div>
                    </div>
                </div>
                <!-- service item #3 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service__body">
                            <div class="service__icon"><i class="icon-home-automation"></i></div>
                            <h4 class="service__title">Starlink Installation</h4>
                            <p class="service__desc">Professional Starlink satellite internet installation for homes, farms,
                                businesses and remote locations — fast, reliable connectivity anywhere in Zimbabwe.
                            </p>
                            
                        </div>
                        <div class="service__img"><img src="starlink.jpg" alt="Starlink Installation"></div>
                    </div>
                </div>
                <!-- service item #4 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service__body">
                            <div class="service__icon"><i class="icon-intrusion"></i></div>
                            <h4 class="service__title">Networking &amp; Wi-Fi Installation</h4>
                            <p class="service__desc">Structured cabling, LAN/WAN configuration, managed Wi-Fi, router and
                                switch setup for offices, warehouses, schools and commercial buildings.
                            </p>
                            
                        </div>
                        <div class="service__img"><img src="network.png" alt="Networking & Wi-Fi Installation"></div>
                    </div>
                </div>
                <!-- service item #5 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service__body">
                            <div class="service__icon"><i class="icon-detector"></i></div>
                            <h4 class="service__title">Computer &amp; IT Support</h4>
                            <p class="service__desc">Laptop and desktop repairs, virus removal, software installation, data
                                recovery, OS upgrades and on-site IT support for businesses of all sizes.
                            </p>
                            
                        </div>
                        <div class="service__img"><img src="assets/images/gallery/6.jpg" alt="Computer & IT Support"></div>
                    </div>
                </div>
                <!-- service item #6 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service__body">
                            <div class="service__icon"><i class="icon-surveillance3"></i></div>
                            <h4 class="service__title">Printers, Photocopiers &amp; Office Equipment</h4>
                            <p class="service__desc">Supply, installation and full maintenance of printers, photocopiers,
                                scanners and all office equipment — with consumables and accessories available.
                            </p>
                            
                        </div>
                        <div class="service__img"><img src="assets/images/gallery/3.jpg" alt="Printers & Office Equipment"></div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Services Layout 1 -->

    <!-- ======================
       Work Process
      ========================= -->
    <section class="work-process-layout1 bg-overlay bg-overlay-gradient pb-0">
        <div class="bg-img"><img src="assets/images/banners/3.jpg" alt="background"></div>
        <div class="container">
            <div class="row heading heading-light mb-70">
                <div class="col-12">
                    <h2 class="heading__subtitle color-primary">See How it works!</h2>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <h3 class="heading__title">The Right IT Solution Delivered To Your Door &amp; Installed By Experts.</h3>
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
                    <p class="heading__desc mb-30">At Innovinetec Solutions, our process is simple — we assess your needs, recommend the
                        right solution, supply the equipment, and install everything professionally. Whether it's a
                        Starlink dish, a CCTV system, a network setup, or a printer fleet — we handle it all from
                        start to finish, and provide ongoing support so your technology keeps working.</p>
                    <a href="{{route('about')}}" class="btn btn__white btn__outlined btn__xl justify-content-around">
                        <span>Meet Our Experts</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="processes-wrapper bg-white">
                        <nav class="nav nav-tabs">
                            <a class="nav__link active" data-toggle="tab" href="#process1">
                                <span class="nav__number">1</span>
                                <span>Consult &amp; Assess</span>
                            </a>
                            <a class="nav__link" data-toggle="tab" href="#process2">
                                <span class="nav__number">2</span>
                                <span>Supply &amp; Configure</span>
                            </a>
                            <a class="nav__link" data-toggle="tab" href="#process3">
                                <span class="nav__number">3</span>
                                <span>Install &amp; Test</span>
                            </a>
                            <a class="nav__link" data-toggle="tab" href="#process4">
                                <span class="nav__number">4</span>
                                <span>Support &amp; Maintain</span>
                            </a>
                        </nav>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="process1">
                                <div class="process-item row">
                                    <div class="col-lg-6-sm-12 col-md-12 col-lg-6">
                                        <div class="process__text">
                                            <h4 class="process__title">We Assess Your Needs &amp; Recommend The Right
                                                Technology Solution For Your Budget.</h4>
                                            <p class="process__desc">Our technicians visit your site, understand your
                                                requirements, and recommend the most suitable IT solutions — whether it's
                                                Starlink connectivity, a CCTV system, a network setup, or computer and
                                                printer support. No pushy sales, just honest expert advice.</p>
                                            <a href="{{route('about')}}"
                                                class="btn btn__secondary btn__outlined btn__xl justify-content-around">
                                                <span>Learn More About Us</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="process__img">
                                            <img src="assets/images/work-process/1.jpg" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="process2">
                                <div class="process-item row">
                                    <div class="col-lg-6-sm-12 col-md-12 col-lg-6">
                                        <div class="process__text">
                                            <h4 class="process__title">We Supply &amp; Configure The Right Equipment —
                                                Sourced From Leading Brands.</h4>
                                            <p class="process__desc">Innovinetec Solutions supplies a comprehensive range of IT products
                                                including Starlink kits, CCTV systems, networking equipment, computers,
                                                laptops, printers, photocopiers, and all accessories — fully configured
                                                before installation.</p>
                                            <a href="{{route('about')}}"
                                                class="btn btn__secondary btn__outlined btn__xl justify-content-around">
                                                <span>View Our Products</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="process__img">
                                            <img src="assets/images/work-process/2.jpg" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="process3">
                                <div class="process-item row">
                                    <div class="col-lg-6-sm-12 col-md-12 col-lg-6">
                                        <div class="process__text">
                                            <h4 class="process__title">Our Certified Technicians Install Everything
                                                Professionally &amp; Test Thoroughly Before Handover.</h4>
                                            <p class="process__desc">From mounting CCTV cameras and running cables to
                                                aligning a Starlink dish and configuring a network — our engineers
                                                install every solution to the highest standard and ensure everything
                                                is working perfectly before they leave.</p>
                                            <a href="{{route('about')}}"
                                                class="btn btn__secondary btn__outlined btn__xl justify-content-around">
                                                <span>Our Installation Process</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="process__img">
                                            <img src="assets/images/work-process/3.jpg" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="process4">
                                <div class="process-item row">
                                    <div class="col-lg-6-sm-12 col-md-12 col-lg-6">
                                        <div class="process__text">
                                            <h4 class="process__title">We Provide Ongoing Support &amp; Maintenance So
                                                Your Technology Keeps Running.</h4>
                                            <p class="process__desc">Innovinetec Solutions offers preventive maintenance contracts, on-call
                                                support, and regular servicing for all equipment we install and supply.
                                                One call and our team is on the way — keeping your business connected,
                                                secure, and productive at all times.</p>
                                            <a href="{{route('contact')}}"
                                                class="btn btn__secondary btn__outlined btn__xl justify-content-around">
                                                <span>Get A Support Plan</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="process__img">
                                            <img src="assets/images/work-process/4.jpg" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.tab-content -->
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.Work Process -->

    <!-- ======================
       Clients
      ========================= -->
    <section class="clients pb-50 border-bottom bg-gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <p class="font-weight-bold my-3">
                        Provide better security and control for residential and business customers.
                        <a href="#" class="text-underlined">Compare Security Options!</a>
                    </p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="slick-carousel"
                        data-slick='{"slidesToShow": 4, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                        <div class="client">
                            <img src="assets/images/clients/8.png" alt="client">
                        </div><!-- /.client -->
                        <div class="client">
                            <img src="assets/images/clients/9.png" alt="client">
                        </div><!-- /.client -->
                        <div class="client">
                            <img src="assets/images/clients/10.png" alt="client">
                        </div><!-- /.client -->
                        <div class="client">
                            <img src="assets/images/clients/11.png" alt="client">
                        </div><!-- /.client -->
                        <div class="client">
                            <img src="assets/images/clients/9.png" alt="client">
                        </div><!-- /.client -->
                    </div><!-- /.carousel -->
                </div><!-- /.col-lg-6 -->
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
                        <form class="contact-panel__form" method="post"
                            action="https://7oroof.com/demos/sekure/assets/php/contact.php" id="contactForm">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="contact-panel__title">Request A Quote</h4>
                                    <p class="contact-panel__desc mb-30">Please complete the form below, to request a
                                        quote, and we'll
                                        be in touch. Or you can call us <strong
                                            class="color-secondary">01061245741</strong> and our
                                        specialists will provide the
                                        necessary help!
                                    </p>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group float-label">
                                        <label for="homeBussiness">Home Or Business?</label>
                                        <select id="homeBussiness" class="form-control">
                                            <option>For Home</option>
                                            <option>For Business</option>
                                        </select>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group float-label">
                                        <label for="Industry">Industry:</label>
                                        <select id="Industry" class="form-control">
                                            <option>Commercial Buildings</option>
                                            <option>Commercial Buildings</option>
                                        </select>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group float-label">
                                        <label for="size">System Size:</label>
                                        <select id="size" class="form-control">
                                            <option>Small (1-5 locations)</option>
                                            <option>large (6-10 locations)</option>
                                        </select>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group float-label">
                                        <label for="own">Own Or Rent?</label>
                                        <select id="own" class="form-control">
                                            <option>I'm representing occupant</option>
                                            <option>other</option>
                                        </select>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email Address">
                                    </div>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-12">
                                    <div class="form-group mb-10">
                                        <label>System Of Interest:</label>
                                        <div>
                                            <div class="custom-control custom-checkbox custom-control-inline mb-20">
                                                <input type="checkbox" class="custom-control-input" id="Intrusion">
                                                <label class="custom-control-label" for="Intrusion">Intrusion
                                                    Detection</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline mb-20">
                                                <input type="checkbox" class="custom-control-input" id="Surveillance">
                                                <label class="custom-control-label" for="Surveillance">Video
                                                    Surveillance</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline mb-20">
                                                <input type="checkbox" class="custom-control-input" id="Integration">
                                                <label class="custom-control-label" for="Integration">System
                                                    Integration</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline mb-20">
                                                <input type="checkbox" class="custom-control-input" id="Monitoring">
                                                <label class="custom-control-label" for="Monitoring">Monitoring</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline mb-20">
                                                <input type="checkbox" class="custom-control-input" id="fire">
                                                <label class="custom-control-label" for="fire">Fire Detection</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline mb-20">
                                                <input type="checkbox" class="custom-control-input" id="Control">
                                                <label class="custom-control-label" for="Control">Access Control</label>
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
                                            <h4 class="package__title">Starter Plan</h4>
                                            <p class="package__desc">Our highly trained technicians will set-up your
                                                security system so you
                                                don't
                                                have to. They show you how to work your equipment.</p>
                                            <div class="d-flex mb-40">
                                                <div class="package__icon">
                                                    <i class="icon-burglar"></i>
                                                </div><!-- /.package__icon -->
                                                <div class="package__icon">
                                                    <i class="icon-intrusion"></i>
                                                </div><!-- /.package__icon -->
                                                <div class="package__icon">
                                                    <i class="icon-door-lock"></i>
                                                </div><!-- /.package__icon -->
                                            </div>
                                            <ul class="package__list list-items-layout4 list-unstyled">
                                                <li class="list__item">Enterprise Network Video Recorders</li>
                                                <li class="list__item">Streaming video network or Internet</li>
                                            </ul>
                                        </div><!-- /.package__body -->
                                        <div class="package__footer">
                                            <a href="{{route('contact')}}" class="btn btn__secondary btn__xl">
                                                <span>Get A Free Quote</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div><!-- /.package__footer -->
                                    </div><!-- /.pricing-package -->
                                </div>
                                <!-- pricing item #2-->
                                <div class="h-100">
                                    <div class="pricing-package">
                                        <div class="package__body">
                                            <h4 class="package__title">Professional Plan</h4>
                                            <p class="package__desc">Our highly trained technicians will set-up your
                                                security system so you
                                                don't
                                                have to. They show you how to work your equipment.</p>
                                            <div class="d-flex mb-40">
                                                <div class="package__icon">
                                                    <i class="icon-home-automation"></i>
                                                </div><!-- /.package__icon -->
                                                <div class="package__icon">
                                                    <i class="icon-detector"></i>
                                                </div><!-- /.package__icon -->
                                                <div class="package__icon">
                                                    <i class="icon-surveillance"></i>
                                                </div><!-- /.package__icon -->
                                            </div>
                                            <ul class="package__list list-items-layout4 list-unstyled">
                                                <li class="list__item">Enterprise Network Video Recorders</li>
                                                <li class="list__item">Streaming video network or Internet</li>
                                                <li class="list__item">Intelligent video technology storage</li>
                                            </ul>
                                        </div><!-- /.package__body -->
                                        <div class="package__footer">
                                            <a href="{{route('contact')}}" class="btn btn__primary btn__xl">
                                                <span>Get A Free Quote</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div><!-- /.package__footer -->
                                    </div><!-- /.pricing-package -->
                                </div>
                                <!-- pricing item #3-->
                                <div class="h-100">
                                    <div class="pricing-package">
                                        <div class="package__body">
                                            <h4 class="package__title">Business Plan</h4>
                                            <p class="package__desc">Our highly trained technicians will set-up your
                                                security system so you
                                                don't
                                                have to. They show you how to work your equipment.</p>
                                            <div class="d-flex mb-40">
                                                <div class="package__icon">
                                                    <i class="icon-notification"></i>
                                                </div><!-- /.package__icon -->
                                                <div class="package__icon">
                                                    <i class="icon-surveillance2"></i>
                                                </div><!-- /.package__icon -->
                                                <div class="package__icon">
                                                    <i class="icon-smart-control"></i>
                                                </div><!-- /.package__icon -->
                                            </div>
                                            <ul class="package__list list-items-layout4 list-unstyled">
                                                <li class="list__item">Enterprise Network Video Recorders</li>
                                                <li class="list__item">Streaming video network or Internet</li>
                                                <li class="list__item">Intelligent video technology storage</li>
                                                <li class="list__item">Networked with distributed video</li>
                                                <li class="list__item">Advanced management software</li>
                                            </ul>
                                        </div><!-- /.package__body -->
                                        <div class="package__footer">
                                            <a href="{{route('contact')}}" class="btn btn__secondary btn__xl">
                                                <span>Get A Free Quote</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div><!-- /.package__footer -->
                                    </div><!-- /.pricing-package -->
                                </div>
                            </div><!-- /.carousel-->
                        </div><!-- /.packages-rapper -->
                    </div><!-- /.col-lg-5 -->
                </div><!-- /.contact-panel -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact layout 3 -->

    <!-- ======================
        features layout1
      ========================= -->
    <section class="features-layout1 pt-120 pb-90">
        <div class="container">
            <div class="row heading mb-30">
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <h3 class="heading__title">Everything Included In Every Innovinetec Solutions Service &amp; Maintenance Plan!</h3>
                    <p class="heading__desc font-weight-bold mb-30">Whether you're on a basic support package or a full
                        enterprise IT contract, every Innovinetec Solutions client gets the same commitment to quality, speed, and
                        professional service — no matter the size of the job.
                    </p>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row row-gutter-15 list-items-layout3">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">CCTV &amp; Surveillance Supply</div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">Access Control &amp; Alarms</div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">Starlink Installation</div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">Networking &amp; Wi-Fi Setup</div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">Computer Repairs &amp; IT Support</div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">Printer &amp; Photocopier Service</div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">Office Equipment Maintenance</div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">Vehicle &amp; Drone Security</div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">Data Recovery &amp; Backup</div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">IT Equipment Supply &amp; Sales</div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">On-Site Technician Support</div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="list__item">Preventive Maintenance Plans</div>
                </div>
            </div><!-- /.row -->
            <div class="row align-items-center mt-60">
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-7">
                    <p class="fz-15 font-weight-bold my-3">
                        Innovinetec Solutions is Zimbabwe's trusted IT partner — delivering comprehensive technology services for homes,
                        offices, and enterprises. From Starlink and networking to CCTV, computers, printers and office
                        equipment maintenance, we provide the full package with expert installation and dedicated support.
                        <a href="{{route('contact')}}" class="text-underlined">Schedule A Visit</a>
                    </p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-5 d-flex justify-content-lg-end">
                    <a href="{{route('contact')}}" class="btn btn__secondary btn__outlined btn__xl">
                        Get A Free Quote
                    </a>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.features layout1 -->
@endsection
