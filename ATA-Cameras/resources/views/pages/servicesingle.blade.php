@extends('layouts.app')
@section('title', 'CCTV & Surveillance Systems | Innovinetec Solutions Zimbabwe')
@section('meta_description', 'Professional CCTV & video surveillance installation in Zimbabwe. Innovinetec Solutions supplies and installs IP cameras, DVR/NVR systems and remote monitoring for homes, offices and commercial properties.')
@section('content')

    <!-- ========================
         Page Title
    =========================== -->
    <section class="page-title-layout2 page-title-light bg-overlay">
        <div class="bg-img"><img src="assets/images/page-titles/6.jpg" alt="CCTV & Surveillance Systems — Innovinetec Solutions"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                    <h1 class="pagetitle__heading">CCTV &amp; Video Surveillance Systems</h1>
                    <p class="pagetitle__desc">Professional supply, installation and maintenance of CCTV cameras, DVRs,
                        NVRs and full video surveillance systems for homes, offices and commercial properties across Zimbabwe.</p>
                    <div class="d-flex flex-wrap align-items-center">
                        <a href="{{route('contact')}}" class="btn btn__primary mr-30">
                            <span>Get A Free Quote</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                        <a href="tel:+263773625107" class="btn btn__white btn__outlined">
                            Call +263 773 625 107
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="breadcrumb-area border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('services')}}">Services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">CCTV &amp; Surveillance</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <style>
        .gallery-img {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            margin-bottom: 20px;
            height: 220px;
        }
        .gallery-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }
        .gallery-img:hover img { transform: scale(1.06); }
        .gallery-img a.popup-gallery-item {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(46, 48, 143, 0.55);
            opacity: 0;
            transition: opacity 0.35s ease;
            z-index: 2;
        }
        .gallery-img:hover a.popup-gallery-item { opacity: 1; }
        .gallery-img a.popup-gallery-item i { color: #fff; font-size: 26px; }
    </style>

    <!-- ========================
         Main Content + Sidebar
    =========================== -->
    <section class="pb-80 pt-80">
        <div class="container">
            <div class="row">

                <!-- Sidebar -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <aside class="sidebar has-marign-right sticky-top mb-30">

                        <!-- Services Nav -->
                        <div class="widget widget-categories">
                            <h5 class="widget__title">Our Services</h5>
                            <div class="widget-content">
                                <ul class="list-unstyled mb-0">
                                    <li class="active">
                                        <a href="{{route('servicessingle')}}">
                                            <span>CCTV &amp; Surveillance</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('services')}}">
                                            <span>Access Control &amp; Alarms</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('services')}}">
                                            <span>Starlink Installation</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('services')}}">
                                            <span>Networking &amp; Wi-Fi</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('services')}}">
                                            <span>Computers &amp; IT Support</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('services')}}">
                                            <span>Printers &amp; Office Equipment</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Help Widget -->
                        <div class="widget widget-help bg-overlay bg-overlay-primary">
                            <div class="bg-img"><img src="assets/images/banners/5.jpg" alt="background"></div>
                            <div class="widget-content">
                                <h4 class="widget__title">Need A Custom CCTV Solution?</h4>
                                <p class="widget__desc mb-50">Our technicians will assess your site, recommend the right
                                    cameras and system, and install everything professionally. No obligation, no hidden fees.</p>
                                <a href="tel:+263773625107" class="phone__number">
                                    <i class="icon-phone"></i> <span>+263 773 625 107</span>
                                </a>
                                <a href="{{route('contact')}}" class="btn btn__white btn__xl btn__block justify-content-between">
                                    <span>Get A Free Quote</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Contact Quick-Info -->
                        <div class="widget widget-download">
                            <div class="widget-content">
                                <h4 class="widget__title">Contact Us</h4>
                                <ul class="contact__list list-unstyled mb-20">
                                    <li><i class="icon-phone"></i> <a href="tel:+263773625107">+263 773 625 107</a></li>
                                    <li><i class="icon-email"></i> <a href="mailto:info@innovinetec.co.zw">info@innovinetec.co.zw</a></li>
                                    <li><i class="icon-location"></i> <span>Harare, Zimbabwe</span></li>
                                    <li><i class="icon-clock"></i> <span>Mon – Fri: 8am – 6pm</span></li>
                                </ul>
                                <a href="{{route('contact')}}" class="btn btn__secondary btn__block">
                                    <i class="icon-arrow-right"></i>
                                    <span>Send An Enquiry</span>
                                </a>
                            </div>
                        </div>

                    </aside>
                </div>

                <!-- Main Content -->
                <div class="col-sm-12 col-md-12 col-lg-8">

                    <!-- Overview -->
                    <div class="text-block mb-50">
                        <h5 class="text-block__title">Service Overview</h5>
                        <p class="text-block__desc mb-20">Innovinetec Solutions provides end-to-end CCTV and video surveillance
                            services across Zimbabwe. Whether you need a single camera for your home entrance or a multi-site
                            enterprise system covering dozens of locations, our certified technicians design, supply, install,
                            and commission the right solution for your specific needs.</p>
                        <p class="text-block__desc mb-20">We work with leading CCTV brands to deliver crystal-clear HD and 4K
                            footage, night-vision capability, and remote viewing via your smartphone or computer — so you always
                            know what's happening at your property, wherever you are. All installations are completed to the
                            highest professional standard with neat cable management and full system testing before handover.</p>
                    </div>

                    <!-- Gallery -->
                    <section class="gallery py-0 mb-50">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="gallery-img">
                                    <a class="popup-gallery-item" href="assets/images/gallery/4.jpg"><i class="fas fa-plus"></i></a>
                                    <img src="assets/images/gallery/4.jpg" alt="CCTV Installation Zimbabwe">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="gallery-img">
                                    <a class="popup-gallery-item" href="assets/images/gallery/5.jpg"><i class="fas fa-plus"></i></a>
                                    <img src="assets/images/gallery/5.jpg" alt="Security Camera Setup">
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- What We Offer -->
                    <div class="text-block mb-40">
                        <h5 class="text-block__title">What We Install &amp; Supply</h5>
                        <p class="text-block__desc mb-20">Our CCTV service covers a comprehensive range of surveillance
                            technologies — from basic entry-level systems for small homes to advanced enterprise-grade
                            IP networks for large commercial properties:</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <ul class="list-items-layout1 list-unstyled">
                                    <li class="list__item">HD &amp; 4K IP CCTV cameras (indoor &amp; outdoor)</li>
                                    <li class="list__item">DVR &amp; NVR recording systems</li>
                                    <li class="list__item">PTZ (pan-tilt-zoom) cameras</li>
                                    <li class="list__item">Night-vision &amp; infrared cameras</li>
                                </ul>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <ul class="list-items-layout1 list-unstyled">
                                    <li class="list__item">Remote viewing via smartphone &amp; web</li>
                                    <li class="list__item">Motion detection &amp; smart alerts</li>
                                    <li class="list__item">Solar-powered &amp; wireless cameras</li>
                                    <li class="list__item">Maintenance &amp; upgrade of existing systems</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Accordion -->
                    <div class="text-block mb-50">
                        <h5 class="text-block__title">Common Questions</h5>
                        <div class="accordion" id="cctv-faq">
                            <div class="accordion-item opened">
                                <div class="accordion-item__header" data-toggle="collapse" data-target="#faq1">
                                    <a class="accordion-item__title" href="#">How many cameras do I need?</a>
                                </div>
                                <div id="faq1" class="collapse show" data-parent="#cctv-faq">
                                    <div class="accordion-item__body">
                                        <p>The number of cameras depends on the size of your property and your security
                                            priorities. Our technicians will conduct a free site assessment and recommend
                                            the optimal number and placement of cameras to give you maximum coverage
                                            with no blind spots.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item__header" data-toggle="collapse" data-target="#faq2">
                                    <a class="accordion-item__title" href="#">Can I view my cameras remotely?</a>
                                </div>
                                <div id="faq2" class="collapse" data-parent="#cctv-faq">
                                    <div class="accordion-item__body">
                                        <p>Yes. All modern CCTV systems we install support remote viewing via a
                                            smartphone app or web browser. As long as your property has internet
                                            access, you can check your cameras from anywhere in the world in real time.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item__header" data-toggle="collapse" data-target="#faq3">
                                    <a class="accordion-item__title" href="#">How long is footage stored?</a>
                                </div>
                                <div id="faq3" class="collapse" data-parent="#cctv-faq">
                                    <div class="accordion-item__body">
                                        <p>Storage duration depends on the hard drive size in your DVR/NVR and the
                                            number of cameras. Most systems we install store between 14 and 30 days of
                                            continuous recording. We can recommend the right storage capacity for your
                                            needs and budget during your free consultation.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item__header" data-toggle="collapse" data-target="#faq4">
                                    <a class="accordion-item__title" href="#">Do you service existing CCTV systems?</a>
                                </div>
                                <div id="faq4" class="collapse" data-parent="#cctv-faq">
                                    <div class="accordion-item__body">
                                        <p>Yes. We repair, upgrade, and maintain existing CCTV systems regardless of
                                            brand. Whether you need a camera replaced, a hard drive upgraded, or the
                                            entire system overhauled, our technicians can help.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Why Choose Innovinetec -->
                    <div class="text-block mb-30">
                        <h5 class="text-block__title">Why Choose Innovinetec Solutions</h5>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 pr-xl-30">
                                <p class="text-block__desc mb-20">Our technicians are certified and experienced across
                                    all major CCTV brands and system types. We don't take shortcuts — every installation
                                    is planned carefully, executed neatly, and tested thoroughly before we consider the
                                    job complete.</p>
                                <p class="text-block__desc mb-20">We provide honest, transparent quotes with no hidden
                                    costs. If we visit your site and determine that a smaller or simpler system will
                                    serve your needs, we'll tell you — because long-term relationships matter more to
                                    us than one-off sales.</p>
                                <p class="text-block__desc mb-20">After installation, we remain available for ongoing
                                    support, maintenance, and upgrades — giving you a single, reliable IT partner you
                                    can call whenever you need help.</p>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="gallery-img" style="height:260px;">
                                    <img src="assets/images/gallery/9.jpg" alt="Professional CCTV Installation">
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- ========================
         Features Dark Section
    =========================== -->
    <section class="about-layout3 bg-dark pt-100 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading-layout2 heading-light text-center mb-70">
                        <h2 class="heading__subtitle">Complete Security. Total Peace Of Mind.</h2>
                        <h3 class="heading__title">Professional CCTV Solutions For Homes &amp; Businesses Across Zimbabwe</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6">
                    <div class="about__text">
                        <div class="heading-layout1 heading-light mb-50">
                            <h2 class="heading__subtitle color-primary">Total Visibility Over Your Property</h2>
                            <h3 class="heading__title mb-40">Scalable Surveillance Solutions — From A Single Camera To Enterprise-Wide Coverage.</h3>
                            <p class="heading__desc">Innovinetec Solutions designs and installs CCTV systems that are
                                tailored to your property, your budget, and your security priorities. We partner with
                                leading brands to deliver HD and 4K image quality, intelligent motion detection, and
                                remote access — giving you complete visibility over your home or business at all times.</p>
                        </div>
                        <ul class="list-items-layout5 list-items-light list-unstyled mb-40">
                            <li class="list__item">HD, 4K and night-vision camera options available</li>
                            <li class="list__item">Remote viewing on smartphone, tablet and desktop</li>
                            <li class="list__item">Motion detection with instant smartphone alerts</li>
                            <li class="list__item">Neat, professional cable management and installation</li>
                        </ul>
                        <a href="{{route('about')}}" class="btn btn__primary btn__primary-style2 btn__xl mb-40">
                            <span>Meet Our Team</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 offset-xl-1">
                    <div class="about__img">
                        <img src="assets/images/about/4.jpg" alt="Innovinetec CCTV">
                        <div class="cta-banner">
                            <h3 class="cta__subtitle">Your Security, Our Priority.</h3>
                            <h4 class="cta__title">Professional Installation &amp; Ongoing Support — No Shortcuts.</h4>
                            <ul class="list-items-layout5 list-unstyled mb-0">
                                <li class="list__item">Free site assessment</li>
                                <li class="list__item">Transparent, upfront pricing</li>
                                <li class="list__item">Same-day support available</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================
         Second Dark Section
    =========================== -->
    <section class="about-layout5 bg-dark pt-0 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6">
                    <div class="about__text">
                        <div class="heading-layout1 heading-light mb-50">
                            <h2 class="heading__subtitle color-primary">Solutions Tailored To Your Security Needs</h2>
                            <h3 class="heading__title mb-40">We Serve Homes, Offices, Farms, Schools &amp; Commercial Properties.</h3>
                            <p class="heading__desc">Every property is different. That's why we conduct a thorough site
                                visit before recommending any system. We consider entry points, lighting conditions,
                                coverage requirements, and your budget — then design a solution that delivers maximum
                                protection without unnecessary expense.</p>
                        </div>
                        <div class="widget-categories p-0 mb-60">
                            <div class="widget-content">
                                <ul class="list-unstyled d-flex flex-wrap mb-0">
                                    <li><a href="{{route('contact')}}">Residential</a></li>
                                    <li><a href="{{route('contact')}}">Commercial</a></li>
                                    <li><a href="{{route('contact')}}">Schools</a></li>
                                    <li><a href="{{route('contact')}}">Healthcare</a></li>
                                    <li><a href="{{route('contact')}}">Agriculture</a></li>
                                    <li><a href="{{route('contact')}}">Enterprise</a></li>
                                </ul>
                            </div>
                        </div>
                        <p class="font-weight-bold color-white">
                            Need a CCTV system for a complex or multi-site property? We offer preventive maintenance
                            plans and long-term support contracts.
                            <a href="{{route('contact')}}" class="text-underlined color-primary">Contact Us Today</a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 offset-xl-1">
                    <div class="video-banner-layout3 mb-50">
                        <img src="assets/images/gallery/8.jpg" alt="CCTV Camera Installation Zimbabwe">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================
         CTA Banner
    =========================== -->
    <section class="cta-layout1 bg-overlay bg-overlay-primary bg-overlay-primary-gradient text-center pt-120 pb-90">
        <div class="bg-img"><img src="assets/images/about/itperson.jpeg" alt="banner"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                    <div class="heading heading-light mb-40">
                        <h2 class="heading__subtitle">Ready To Secure Your Property?</h2>
                        <h3 class="heading__title">Get A Free CCTV Assessment — No Obligation.</h3>
                        <p class="heading__desc">Call us or fill in the contact form and one of our technicians will
                            visit your site, assess your security needs, and provide a transparent quote — completely free.</p>
                    </div>
                    <a href="{{route('contact')}}" class="btn btn__white btn__xl mr-20">
                        <span>Get A Free Quote</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                    <a href="{{route('services')}}" class="btn btn__white btn__outlined btn__xl">
                        All Our Services
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
