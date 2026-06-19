@extends('layouts.app')
@section('content')

    <!-- ========================
         Page Title
    =========================== -->
    <section class="page-title-layout1 page-title-light bg-overlay text-center">
        <div class="bg-img"><img src="assets/images/page-titles/5.jpg" alt="Client Reviews"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="pagetitle__heading mb-0">Client Reviews</h1>
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
                            <li class="breadcrumb-item active" aria-current="page">Client Reviews</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================
         Review Summary Bar
    =========================== -->
    <section class="reviews-categories pt-60 pb-60 bg-gray border-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="categories-list d-flex flex-wrap align-items-center justify-content-center list-unstyled mb-0">
                        <li class="cat__item d-flex justify-content-center align-items-center">
                            <div class="cat__img"><img src="assets/images/icons/google.png" alt="Google"></div>
                            <div>
                                <h3 class="cat__title">Rated 5 Stars on Google</h3>
                                <div class="cat__rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </li>
                        <li class="cat__item d-flex justify-content-center align-items-center">
                            <div class="cat__img" style="width:60px;height:60px;display:flex;align-items:center;justify-content:center;background:#2E308F;border-radius:12px;">
                                <i class="fab fa-whatsapp fa-2x" style="color:#fff;"></i>
                            </div>
                            <div>
                                <h3 class="cat__title">Trusted via WhatsApp Referrals</h3>
                                <div class="cat__rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </li>
                        <li class="cat__item d-flex justify-content-center align-items-center">
                            <div class="cat__img" style="width:60px;height:60px;display:flex;align-items:center;justify-content:center;background:#2E308F;border-radius:12px;">
                                <i class="fas fa-handshake fa-2x" style="color:#fff;"></i>
                            </div>
                            <div>
                                <h3 class="cat__title">100% Client Satisfaction Rate</h3>
                                <div class="cat__rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================
         Testimonials
    =========================== -->
    <section class="testimonials-layout2">
        <div class="container">
            <div class="row mb-50">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2 text-center">
                    <h2 class="heading__subtitle color-primary">What Our Clients Say</h2>
                    <h3 class="heading__title">Real Feedback From Zimbabwean Businesses &amp; Homes</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">

                    <!-- Review 1 -->
                    <div class="testimonial-item d-flex flex-wrap">
                        <div class="testimonial__icon"></div>
                        <div class="testimonial__info">
                            <h3 class="testimonial__title">
                                "Innovinetec Solutions installed our Starlink and set up the entire office network in one visit.
                                Everything worked perfectly from day one. Incredibly professional team — I won't use anyone else."
                            </h3>
                            <div class="testimonial__meta d-flex align-items-center">
                                <div class="testimonial__rating mr-20">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <h4 class="testimonial__meta-title mb-0">Tendai Moyo,&nbsp;</h4>
                                <p class="testimonial__meta-desc mb-0">Operations Manager, Harare</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="testimonial-item d-flex flex-wrap">
                        <div class="testimonial__icon"></div>
                        <div class="testimonial__info">
                            <h3 class="testimonial__title">
                                "Our CCTV system was installed quickly and the cameras give us crystal-clear footage. The
                                technician explained everything and even showed us how to access the feed remotely. Excellent service."
                            </h3>
                            <div class="testimonial__meta d-flex align-items-center">
                                <div class="testimonial__rating mr-20">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <h4 class="testimonial__meta-title mb-0">Grace Chikwanda,&nbsp;</h4>
                                <p class="testimonial__meta-desc mb-0">Business Owner, Mashonaland</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 3 -->
                    <div class="testimonial-item d-flex flex-wrap">
                        <div class="testimonial__icon"></div>
                        <div class="testimonial__info">
                            <h3 class="testimonial__title">
                                "Called them in the morning about a networking issue at our shop — a technician arrived
                                the same afternoon and had everything sorted within two hours. Fast, affordable and no
                                hidden charges. Highly recommended."
                            </h3>
                            <div class="testimonial__meta d-flex align-items-center">
                                <div class="testimonial__rating mr-20">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <h4 class="testimonial__meta-title mb-0">Farai Ncube,&nbsp;</h4>
                                <p class="testimonial__meta-desc mb-0">Retail Store Owner, Bulawayo</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 4 -->
                    <div class="testimonial-item d-flex flex-wrap">
                        <div class="testimonial__icon"></div>
                        <div class="testimonial__info">
                            <h3 class="testimonial__title">
                                "We had a fleet of printers and computers that needed servicing across our offices.
                                Innovinetec Solutions handled everything efficiently and kept us updated throughout.
                                Our productivity hasn't been disrupted since. Great team."
                            </h3>
                            <div class="testimonial__meta d-flex align-items-center">
                                <div class="testimonial__rating mr-20">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <h4 class="testimonial__meta-title mb-0">Rutendo Dube,&nbsp;</h4>
                                <p class="testimonial__meta-desc mb-0">IT Administrator, Harare CBD</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 5 -->
                    <div class="testimonial-item d-flex flex-wrap">
                        <div class="testimonial__icon"></div>
                        <div class="testimonial__info">
                            <h3 class="testimonial__title">
                                "Innovinetec set up Starlink at our farm in Mashonaland and we finally have reliable
                                internet for the first time. The whole process was smooth, the pricing was transparent,
                                and the signal has been rock solid. Absolutely worth it."
                            </h3>
                            <div class="testimonial__meta d-flex align-items-center">
                                <div class="testimonial__rating mr-20">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <h4 class="testimonial__meta-title mb-0">Samuel Mhuru,&nbsp;</h4>
                                <p class="testimonial__meta-desc mb-0">Farm Owner, Mashonaland East</p>
                            </div>
                        </div>
                    </div>

                    <!-- Review 6 -->
                    <div class="testimonial-item d-flex flex-wrap">
                        <div class="testimonial__icon"></div>
                        <div class="testimonial__info">
                            <h3 class="testimonial__title">
                                "The access control system they installed at our clinic has made a huge difference.
                                Staff entry is now managed properly and we have full logs of who enters and exits.
                                The installation was neat and professional, and the team was very courteous."
                            </h3>
                            <div class="testimonial__meta d-flex align-items-center">
                                <div class="testimonial__rating mr-20">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <h4 class="testimonial__meta-title mb-0">Dr. Aisha Banda,&nbsp;</h4>
                                <p class="testimonial__meta-desc mb-0">Clinic Director, Harare</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ========================
         CTA
    =========================== -->
    <section class="cta-layout1 bg-overlay bg-overlay-primary bg-overlay-primary-gradient text-center pt-120 pb-90">
        <div class="bg-img"><img src="assets/images/about/itperson.jpeg" alt="banner"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                    <div class="heading heading-light mb-40">
                        <h2 class="heading__subtitle">Join Hundreds of Satisfied Clients Across Zimbabwe</h2>
                        <h3 class="heading__title">Ready To Experience The Innovinetec Difference?</h3>
                        <p class="heading__desc">Get in touch today for a free consultation — no obligation, no hidden fees, just honest IT support you can count on.</p>
                    </div>
                    <a href="{{route('contact')}}" class="btn btn__white btn__xl mr-20">
                        <span>Get A Free Quote</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                    <a href="{{route('services')}}" class="btn btn__white btn__outlined btn__xl">
                        Our Services
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
