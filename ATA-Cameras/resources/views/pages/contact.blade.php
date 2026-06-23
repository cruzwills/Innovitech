@extends('layouts.app')
@section('title', 'Contact Us | Innovinetec Solutions — Get A Free IT Quote')
@section('meta_description', 'Contact Innovinetec Solutions for a free IT services quote. Call +263 773 625 107 or email info@innovinetec.co.zw. Same-day response for Starlink, CCTV, networking and computer support.')
@section('content')

    <!-- ========================
         Page Title
    =========================== -->
    <section class="page-title-layout1 page-title-light bg-overlay text-center">
        <div class="bg-img"><img src="assets/images/about/itperson.jpeg" alt="Contact Us"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="pagetitle__heading mb-0">Contact Us</h1>
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
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================
         Contact Panel
    =========================== -->
    <section class="contact-layout1 py-0 mt--100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-panel d-flex flex-wrap">

                        <!-- Left info panel -->
                        <div class="contact-panel__info bg-overlay bg-overlay-primary">
                            <div class="bg-img"><img src="assets/images/about/itperson.jpeg" alt="contact"></div>
                            <h4 class="contact-panel__title color-white">Get In Touch With Our Team</h4>
                            <p class="contact-panel__desc color-white">
                                We're ready to help with any IT challenge — from a quick repair to a full office setup.
                                Reach out and we'll respond same day.
                            </p>
                            <ul class="contact__list list-unstyled mb-40">
                                <li>
                                    <i class="icon-phone"></i>
                                    <a href="tel:+263773625107">+263 773 625 107</a>
                                </li>
                                <li>
                                    <i class="icon-email"></i>
                                    <a href="mailto:info@innovinetec.co.zw">info@innovinetec.co.zw</a>
                                </li>
                                <li>
                                    <i class="icon-location"></i>
                                    <span>Harare, Zimbabwe</span>
                                </li>
                                <li>
                                    <i class="icon-clock"></i>
                                    <span>Mon – Fri: 8:00am – 6:00pm</span>
                                </li>
                            </ul>
                            <a href="tel:+263773625107" class="btn btn__white btn__xl btn__block justify-content-between">
                                <span>Call Us Now</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>

                        <!-- Right contact form -->
                        <form class="contact-panel__form" method="post" action="#" id="contactForm">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="contact-panel__title">Send Us A Message</h4>
                                    <p class="contact-panel__desc mb-30">Fill in the form below and one of our
                                        technicians will get back to you within the same business day.</p>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="">Select a Service</option>
                                            <option>CCTV &amp; Surveillance</option>
                                            <option>Access Control Systems</option>
                                            <option>Starlink Internet Installation</option>
                                            <option>Networking &amp; Wi-Fi Setup</option>
                                            <option>Computer &amp; IT Support</option>
                                            <option>Office Equipment Maintenance</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Tell us about your project or issue..." rows="5"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn__secondary btn__xl mt-10">
                                        <i class="icon-arrow-right"></i>
                                        <span>Send Message</span>
                                    </button>
                                    <div class="contact-result"></div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================
         Info Boxes
    =========================== -->
    <style>
        /* ── Override green overlay on info panel ── */
        .contact-panel__info.bg-overlay::before {
            background-color: #2E308F !important;
            opacity: 0.88;
        }
        /* ── Theme colour overrides for contact page ── */
        .contact-layout1 .btn__secondary,
        #contactForm .btn__secondary {
            background-color: #2E308F !important;
            border-color: #2E308F !important;
            color: #fff !important;
        }
        .contact-layout1 .btn__secondary:hover,
        #contactForm .btn__secondary:hover {
            background-color: #1A1C6B !important;
            border-color: #1A1C6B !important;
        }
        /* Kill ALL Bootstrap green — focus, valid, was-validated, feedback */
        .contact-layout1 .form-control:focus,
        #contactForm .form-control:focus {
            border-color: #2E308F !important;
            box-shadow: 0 0 0 0.2rem rgba(46,48,143,0.25) !important;
            outline: none !important;
        }
        .contact-layout1 .form-control.is-valid,
        .contact-layout1 .was-validated .form-control:valid,
        #contactForm .form-control.is-valid,
        #contactForm .was-validated .form-control:valid {
            border-color: #2E308F !important;
            background-image: none !important;
        }
        .contact-layout1 .form-control.is-valid:focus,
        .contact-layout1 .was-validated .form-control:valid:focus,
        #contactForm .form-control.is-valid:focus,
        #contactForm .was-validated .form-control:valid:focus {
            border-color: #2E308F !important;
            box-shadow: 0 0 0 0.2rem rgba(46,48,143,0.25) !important;
        }
        .contact-layout1 .valid-feedback,
        #contactForm .valid-feedback {
            color: #2E308F !important;
        }
        .contact-layout1 .custom-control-input:checked ~ .custom-control-label::before,
        #contactForm .custom-control-input:checked ~ .custom-control-label::before {
            background-color: #2E308F !important;
            border-color: #2E308F !important;
        }
        .contact-layout1 select.form-control:focus,
        #contactForm select.form-control:focus {
            border-color: #2E308F !important;
            box-shadow: 0 0 0 0.2rem rgba(46,48,143,0.25) !important;
        }
        /* ── Info card section ── */
        .contact-info-section {
            padding: 90px 0;
            background: #f8f9ff;
        }
        .contact-info-section .section-heading {
            text-align: center;
            margin-bottom: 50px;
        }
        .contact-info-section .section-heading h2 {
            font-size: 32px;
            font-weight: 700;
            color: #1a1c2e;
            margin-bottom: 10px;
        }
        .contact-info-section .section-heading p {
            color: #6c757d;
            font-size: 16px;
        }
        .contact-card {
            background: #fff;
            border-radius: 16px;
            padding: 45px 30px 40px;
            text-align: center;
            box-shadow: 0 4px 24px rgba(46,48,143,0.08);
            transition: transform 0.35s ease, box-shadow 0.35s ease;
            height: 100%;
            opacity: 0;
            transform: translateY(40px);
        }
        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 16px 48px rgba(46,48,143,0.18);
        }
        .contact-card:hover .contact-card__icon {
            background: #2E308F;
            transform: scale(1.1) rotate(-5deg);
        }
        .contact-card:hover .contact-card__icon i {
            color: #fff !important;
        }
        .contact-card__icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #eaebf8;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            transition: background 0.35s ease, transform 0.35s ease;
        }
        .contact-card__icon i {
            font-size: 30px;
            color: #2E308F !important;
            transition: color 0.35s ease;
        }
        .contact-card h4 {
            font-size: 20px;
            font-weight: 700;
            color: #1a1c2e;
            margin-bottom: 12px;
        }
        .contact-card p {
            color: #6c757d;
            font-size: 15px;
            margin-bottom: 24px;
            min-height: 44px;
        }
        .contact-card .contact-link {
            display: inline-block;
            font-weight: 600;
            font-size: 15px;
            color: #2E308F !important;
            border: 2px solid #2E308F;
            border-radius: 8px;
            padding: 10px 22px;
            text-decoration: none !important;
            transition: background 0.25s ease, color 0.25s ease, border-color 0.25s ease;
            text-transform: none !important;
            letter-spacing: 0;
        }
        .contact-card .contact-link:hover {
            background: #2E308F !important;
            border-color: #2E308F !important;
            color: #fff !important;
        }
        /* Staggered entrance animation */
        @keyframes cardEntrance {
            from { opacity: 0; transform: translateY(40px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .contact-card.animate-1 { animation: cardEntrance 0.6s ease 0.1s forwards; }
        .contact-card.animate-2 { animation: cardEntrance 0.6s ease 0.3s forwards; }
        .contact-card.animate-3 { animation: cardEntrance 0.6s ease 0.5s forwards; }
    </style>

    <section class="contact-info-section">
        <div class="container">
            <div class="section-heading">
                <h2>How To Reach Us</h2>
                <p>Our team is available Monday to Friday, 8am – 6pm. Same-day response guaranteed.</p>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 mb-30">
                    <div class="contact-card animate-1">
                        <div class="contact-card__icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h4>Call Us</h4>
                        <p>Speak directly with one of our technicians — we answer fast.</p>
                        <a href="tel:+263773625107" class="contact-link">+263 773 625 107</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 mb-30">
                    <div class="contact-card animate-2">
                        <div class="contact-card__icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h4>Email Us</h4>
                        <p>We respond to all enquiries within the same business day.</p>
                        <a href="mailto:info@innovinetec.co.zw" class="contact-link" style="font-size:13px;">info@innovinetec.co.zw</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 mb-30">
                    <div class="contact-card animate-3">
                        <div class="contact-card__icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4>Visit Us</h4>
                        <p>Based in Harare, serving businesses and homes across Zimbabwe.</p>
                        <span class="contact-link">Harare, Zimbabwe</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
