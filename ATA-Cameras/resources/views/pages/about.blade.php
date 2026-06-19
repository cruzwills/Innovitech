@extends('layouts.app')
@section('content')
    <section class="page-title-layout1 page-title-light bg-overlay text-center">
        <div class="bg-img"><img src="assets/images/page-titles/1.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="pagetitle__heading">About Us</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="breadcrumb-area border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================
        Who We Are
      =========================== -->
    <section class="about-layout1 pt-130 pb-90">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6">
                    <div class="heading-layout2">
                        <h3 class="heading__title mb-50">Zimbabwe's Trusted IT Solutions Provider — Technology That Works For You.</h3>
                    </div>
                    <div class="about__Text">
                        <p class="heading__desc mb-20">Innovinetec Solutions is a leading IT services and technology company
                            based in Harare, Zimbabwe. We deliver a full spectrum of technology solutions to homes, businesses,
                            schools, healthcare facilities, and corporate organisations across the country.</p>
                        <p class="heading__desc mb-40">Founded on the belief that reliable technology should be accessible to
                            everyone, our team of certified technicians brings expertise, professionalism, and genuine care to
                            every project — big or small. From your first call to ongoing support, we are with you every step
                            of the way.</p>
                        <strong>What We Do:</strong>
                        <div class="row mt-20">
                            <div class="col-sm-12 col-md-6">
                                <ul class="list-items-layout1 list-unstyled">
                                    <li class="list__item">Starlink Internet Installation</li>
                                    <li class="list__item">CCTV &amp; Surveillance Systems</li>
                                    <li class="list__item">Access Control &amp; Alarm Systems</li>
                                </ul>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <ul class="list-items-layout1 list-unstyled">
                                    <li class="list__item">Networking &amp; Wi-Fi Installation</li>
                                    <li class="list__item">Computer &amp; Printer Repairs</li>
                                    <li class="list__item">Office Equipment Maintenance</li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-wrap mt-30 mb-40">
                            <a href="{{route('services')}}" class="btn btn__primary btn__xl mr-30">
                                <span>Our Services</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                            <a href="{{route('contact')}}" class="btn btn__secondary btn__xl">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 offset-xl-1 d-flex align-items-center">
                    <img src="assets/images/about/tech.png" alt="Innovinetec Solutions"
                        style="width:100%;border-radius:16px;box-shadow:0 16px 48px rgba(46,48,143,0.18);display:block;">
                </div>
            </div>
        </div>
    </section>

    <!-- ========================
        Our Mission & Vision
      =========================== -->
    <section class="about-layout2 pt-0">
        <div class="container-fluid px-0">
            <div class="row row-gutter-0">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 banner-img">
                    <div class="bg-img">
                        <img src="assets/images/about/itperson.jpeg" alt="Innovinetec Solutions Team" class="w-100" style="object-fit:cover;height:100%;min-height:500px;">
                    </div>
                    <div class="testimonials-box">
                        <div class="testimonials-layout1 testimonials-light">
                            <div class="slick-carousel carousel-arrows-light carousel-dots-light"
                                data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "autoplay": true, "autoplaySpeed": 5000, "arrows": true, "dots": false, "infinite": true}'>
                                <div class="testimonial-item">
                                    <h3 class="testimonial__title">"Innovinetec Solutions set up our entire office network
                                        and CCTV system in one day. Professional, efficient and the support after
                                        installation has been outstanding."
                                    </h3>
                                    <div class="testimonial__meta">
                                        <div class="testimonial__thmb">
                                            <img src="assets/images/testimonials/thumbs/1.png" alt="author thumb">
                                        </div>
                                        <div>
                                            <h4 class="testimonial__meta-title">Tendai Moyo</h4>
                                            <p class="testimonial__meta-desc">Operations Manager, Harare</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <h3 class="testimonial__title">"We got Starlink installed at our farm through
                                        Innovinetec Solutions. The whole process was smooth and we now have reliable
                                        internet for the first time. Highly recommended."
                                    </h3>
                                    <div class="testimonial__meta">
                                        <div class="testimonial__thmb">
                                            <img src="assets/images/testimonials/thumbs/2.png" alt="author thumb">
                                        </div>
                                        <div>
                                            <h4 class="testimonial__meta-title">Grace Chikwanda</h4>
                                            <p class="testimonial__meta-desc">Business Owner, Mashonaland</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="inner-padding">
                        <div class="about-content">
                            <div class="heading-layout2">
                                <h3 class="heading__title mb-30">Our Mission: Connecting &amp; Protecting Zimbabwe Through Technology.</h3>
                                <p class="heading__desc mb-30">At Innovinetec Solutions, our mission is simple — to make
                                    world-class technology accessible, affordable and reliable for every Zimbabwean. We
                                    believe that a well-connected, well-protected environment enables people and businesses
                                    to thrive.</p>
                                <p class="heading__desc mb-50">Our vision is to be Zimbabwe's number one IT services partner
                                    — known for our technical excellence, fast response times, honest pricing, and
                                    long-term client relationships. We don't just install technology; we build partnerships
                                    that last.</p>
                            </div>
                            <ul class="list-items-layout2 list-unstyled mt-20">
                                <li class="list__item">Certified technicians with hands-on experience across all IT disciplines</li>
                                <li class="list__item">Fast response times — same-day support available across Harare</li>
                                <li class="list__item">Transparent pricing with no hidden costs or surprise charges</li>
                                <li class="list__item">Ongoing after-sales support and maintenance contracts available</li>
                            </ul>
                            <div class="d-flex align-items-center flex-wrap mt-40 mb-40">
                                <a href="{{route('services')}}" class="btn btn__primary btn__xl mr-30">
                                    <span>Our Services</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                                <a href="{{route('services')}}" class="btn btn__secondary btn__link">
                                    <span>All Our Services</span>
                                    <i class="icon-arrow-right icon-outlined"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================
        Why Choose Us
      ========================= -->
    <section class="fancyboxs-layout1 fancybox-light bg-primary pb-0">
        <div class="container">
            <div class="row heading heading-light mb-100">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h3 class="heading__title mb-30">Why Businesses &amp; Homeowners Across Zimbabwe Choose Innovinetec Solutions.</h3>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <p class="heading__desc mb-30">We combine technical expertise with outstanding customer service to deliver
                        IT solutions that genuinely work. Whether you need a single printer repaired or a complete
                        technology overhaul for your business — we treat every job with the same level of professionalism
                        and dedication.</p>
                    <p class="heading__desc mb-40">Our team stays up to date with the latest technology so you always get
                        the best solutions available — from cutting-edge Starlink satellite internet to enterprise-grade
                        CCTV and networking infrastructure.</p>
                    <div class="d-flex align-items-center flex-wrap">
                        <a href="{{route('contact')}}" class="btn btn__white px-4 mr-30">
                            <span>Get A Free Quote</span>
                            <i class="icon-arrow-right ml-20"></i>
                        </a>
                        <div class="phone__number phone__number-light">
                            <div class="phone__icon">
                                <i class="icon-phone"></i>
                            </div>
                            <div>
                                <span class="email__link d-block">Call Us Anytime</span>
                                <a class="phone__link d-block mt-2 mb-0" href="tel:+263773625107">+263 773 625 107</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="row row-gutter-0">
                <div class="col-sm-6 col-md-6 col-lg-3 fancybox-item mb-0">
                    <div class="fancybox__img">
                        <div class="bg-img"><img src="assets/images/features/1.jpg" alt="feature"></div>
                    </div>
                    <div class="fancybox__body">
                        <h4 class="fancybox__title">Certified IT Technicians</h4>
                        <p class="fancybox__desc">Our engineers are trained and certified across networking, security systems,
                            Starlink, and hardware repair — ensuring quality workmanship on every job.</p>
                        <a href="{{route('services')}}" class="btn btn__white btn__link">
                            <i class="icon-arrow-right icon-filled"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 fancybox-item mb-0">
                    <div class="fancybox__img">
                        <div class="bg-img"><img src="assets/images/features/2.jpg" alt="feature"></div>
                    </div>
                    <div class="fancybox__body">
                        <h4 class="fancybox__title">Fast Same-Day Response</h4>
                        <p class="fancybox__desc">We understand that downtime costs money. That's why we offer same-day
                            support for urgent IT issues across Harare and surrounding areas.</p>
                        <a href="{{route('contact')}}" class="btn btn__white btn__link">
                            <i class="icon-arrow-right icon-filled"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 fancybox-item mb-0">
                    <div class="fancybox__img">
                        <div class="bg-img"><img src="assets/images/features/3.jpg" alt="feature"></div>
                    </div>
                    <div class="fancybox__body">
                        <h4 class="fancybox__title">End-to-End IT Solutions</h4>
                        <p class="fancybox__desc">From supply and installation to maintenance and ongoing support — we handle
                            every aspect of your technology needs under one roof, so you never need another provider.</p>
                        <a href="{{route('services')}}" class="btn btn__white btn__link">
                            <i class="icon-arrow-right icon-filled"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 fancybox-item mb-0">
                    <div class="fancybox__img">
                        <div class="bg-img"><img src="assets/images/features/4.jpg" alt="feature"></div>
                    </div>
                    <div class="fancybox__body">
                        <h4 class="fancybox__title">Transparent &amp; Fair Pricing</h4>
                        <p class="fancybox__desc">No hidden fees, no surprise invoices. We provide clear, upfront quotes
                            so you always know exactly what you're paying for before any work begins.</p>
                        <a href="{{route('contact')}}" class="btn btn__white btn__link">
                            <i class="icon-arrow-right icon-filled"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================
        CTA
      ========================= -->
    <section class="pt-90 pb-90 text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-10 col-lg-8">
                    <h2 class="heading__title mb-20">Ready To Work With Zimbabwe's IT Experts?</h2>
                    <p class="heading__desc mb-40">Whether you need a quick repair, a full office setup, or a Starlink
                        installation — our team is ready. Get in touch today for a free consultation and quote.</p>
                    <a href="{{route('contact')}}" class="btn btn__primary btn__xl mr-20">
                        <span>Get A Free Quote</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                    <a href="{{route('services')}}" class="btn btn__secondary btn__xl">
                        Explore Our Services
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
