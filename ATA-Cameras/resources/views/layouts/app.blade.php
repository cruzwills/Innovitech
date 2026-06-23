<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="@yield('meta_description', 'Innovinetec Solutions — Zimbabwe\'s trusted IT services provider. Starlink installation, CCTV surveillance, access control, networking, computer repairs and office equipment maintenance in Harare.')">

    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', 'Innovinetec Solutions | IT Services Zimbabwe')">
    <meta property="og:description" content="@yield('og_description', 'Complete IT services for homes & businesses — Starlink, CCTV, networking, computers, printers and more. Serving Zimbabwe from Harare.')">
    <meta property="og:image" content="assets/images/logo/ata-logo.png">
    <meta name="twitter:card" content="summary_large_image">

    <link href="assets/images/favicon/favicon.png" rel="icon">
    <link href="assets/images/favicon/favicon.png" rel="apple-touch-icon">
    <title>@yield('title', 'Innovinetec Solutions | IT Services Zimbabwe')</title>

    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">

    <!-- Font Awesome (single CDN load) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="assets/css/libraries.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* ============================================================
           GLOBAL DESIGN SYSTEM — Innovinetec Solutions
           ============================================================ */

        /* Base: prevent horizontal scroll */
        html, body, .wrapper { overflow-x: hidden; max-width: 100%; }
        img { max-width: 100%; height: auto; }

        /* Skip-to-content link for keyboard accessibility */
        .skip-link {
            position: absolute;
            top: -999px;
            left: 6px;
            z-index: 9999;
            background: #2E308F;
            color: #fff;
            padding: 8px 16px;
            border-radius: 0 0 4px 4px;
            font-size: 14px;
            text-decoration: none;
        }
        .skip-link:focus { top: 0; }

        /* ── Tablet (≤ 991px) ── */
        @media (max-width: 991px) {
            .navbar-brand .ata-logo     { max-height: 50px !important; width: auto; }
            .slide__title               { font-size: 30px !important; line-height: 1.3 !important; }
            .pagetitle__heading         { font-size: 28px !important; }
            h3.heading__title,
            .heading__title             { font-size: 22px !important; }
            h2.heading__subtitle,
            .heading__subtitle          { font-size: 13px !important; }
            .mb-140                     { margin-bottom: 70px !important; }
            .mb-90                      { margin-bottom: 50px !important; }
            .pb-120                     { padding-bottom: 70px !important; }
            .nav.nav-tabs               { flex-wrap: wrap; }
            .nav.nav-tabs .nav__link    { flex: 1 1 45%; font-size: 13px; margin-bottom: 4px; }
            .about__img                 { position: relative; overflow: hidden; }
            .features-layout2 .heading-layout2.mb-140 { margin-bottom: 50px !important; }
        }

        /* ── Mobile (≤ 767px) ── */
        @media (max-width: 767px) {
            .navbar-brand .ata-logo     { max-height: 42px !important; width: auto; }
            .navbar                     { padding: 10px 15px !important; }

            .slide-item                 { min-height: 420px; padding: 60px 0 40px; }
            .slide__subtitle            { font-size: 11px !important; letter-spacing: 0.04em; }
            .slide__title               { font-size: 20px !important; line-height: 1.35 !important; margin-bottom: 10px !important; }
            .slide__desc                { font-size: 13px !important; margin-bottom: 16px !important; }
            .slide__content .btn        { margin-right: 0 !important; margin-bottom: 10px; }
            .slide__content             { padding: 0 5px; }

            .page-title-layout2         { padding: 60px 0 40px !important; }
            .pagetitle__heading         { font-size: 20px !important; line-height: 1.35 !important; }
            .pagetitle__desc            { font-size: 13px !important; margin-bottom: 16px !important; }

            .pt-130                     { padding-top: 55px !important; }
            .pt-120                     { padding-top: 55px !important; }
            .pt-60                      { padding-top: 35px !important; }
            .pb-120                     { padding-bottom: 55px !important; }
            .pb-90                      { padding-bottom: 45px !important; }
            .pb-80                      { padding-bottom: 40px !important; }
            .pb-50                      { padding-bottom: 30px !important; }
            .pt-50                      { padding-top: 30px !important; }
            .pt-0                       { padding-top: 0 !important; }
            .pb-0                       { padding-bottom: 0 !important; }

            .mb-140                     { margin-bottom: 40px !important; }
            .mb-90                      { margin-bottom: 40px !important; }
            .mb-70                      { margin-bottom: 35px !important; }
            .mb-60                      { margin-bottom: 30px !important; }
            .mb-50                      { margin-bottom: 25px !important; }
            .mb-40                      { margin-bottom: 20px !important; }
            .mt--100                    { margin-top: -30px !important; }

            h3.heading__title,
            .heading__title             { font-size: 19px !important; line-height: 1.4 !important; }
            h2.heading__subtitle,
            .heading__subtitle          { font-size: 12px !important; letter-spacing: 0.08em; }
            .heading__desc              { font-size: 14px !important; line-height: 1.65; }
            .heading-layout2.heading-light.mb-140,
            .heading-layout2.mb-140     { margin-bottom: 40px !important; }
            .heading.mb-70              { margin-bottom: 35px !important; }
            .heading.mb-60              { margin-bottom: 30px !important; }
            .heading.text-center.mb-40  { margin-bottom: 20px !important; }

            .btn__xl                    { padding: 11px 20px !important; font-size: 13px !important; }
            .mr-30                      { margin-right: 0 !important; margin-bottom: 10px; }

            .feature-item               { padding: 20px 15px !important; }
            .feature__title             { font-size: 14px !important; }

            .about__img                 { margin-bottom: 30px; position: relative; overflow: visible; }
            .about__img img             { border-radius: 10px; width: 100%; }
            .about__img .cta-banner     { position: relative !important; bottom: auto !important;
                                          right: auto !important; left: auto !important;
                                          margin-top: 16px; border-radius: 8px; }
            .about-layout3              { padding-bottom: 50px !important; }
            .about-layout5              { padding-bottom: 40px !important; }
            .video-banner-layout3       { margin-bottom: 30px !important; }

            .service-item .service__body { padding: 28px 20px 22px !important; }
            .service__title             { font-size: 15px !important; }
            .service__desc              { font-size: 13px !important; }

            .service__img               { height: 180px !important; }

            .cta-layout3                { flex-direction: column !important; align-items: flex-start !important;
                                          padding: 28px 20px !important; }
            .cta-layout3 .d-flex        { flex-wrap: wrap; }
            .cta-layout3 .btn           { margin-top: 16px; }

            .btn__download              { flex-direction: column !important; align-items: center !important;
                                          text-align: center; padding: 14px 20px !important; }
            .btn__download .text-right  { text-align: center !important; margin: 0 0 10px !important; }

            .contact-layout3            { padding: 50px 0 !important; }
            .contact-panel__form        { padding: 30px 20px !important; }
            .contact-panel__title       { font-size: 18px !important; }
            .contact-panel__desc        { font-size: 13px !important; }
            .packages-wrapper           { margin-top: 30px; }
            .pricing-package            { padding: 28px 20px !important; }
            .package__title             { font-size: 16px !important; }
            .package__desc              { font-size: 13px !important; }

            .contact-panel              { flex-direction: column !important; }
            .contact-panel__info,
            .contact-panel__form        { width: 100% !important; min-width: 100% !important; }
            .contact-panel__info        { padding: 40px 20px !important; }
            .contact-card               { padding: 24px 16px !important; margin-bottom: 16px; }

            .gallery-img                { height: 170px !important; }

            .post-item                  { margin-bottom: 30px; }
            .post__title                { font-size: 15px !important; }
            .post__desc                 { font-size: 13px !important; }

            .clients                    { padding: 35px 0 !important; }
            .clients .col-lg-4          { margin-bottom: 16px; }
            .clients .font-weight-bold  { font-size: 14px !important; }

            .widget-categories .widget-content ul { flex-wrap: wrap; gap: 8px; }
            .widget-categories .widget-content ul li { margin: 0 !important; }
            .widget-categories .widget-content ul li a { font-size: 12px !important; padding: 5px 10px !important; }

            .categories-list            { flex-direction: column !important; gap: 16px; }
            .cat__item                  { width: 100%; justify-content: flex-start !important; }

            .testimonial-item           { padding: 20px 15px !important; }
            .testimonial__title         { font-size: 15px !important; }
            .testimonial__meta          { flex-wrap: wrap; gap: 4px; }
            .testimonial__rating        { font-size: 12px !important; }

            .nav.nav-tabs               { flex-direction: column !important; }
            .nav.nav-tabs .nav__link    { width: 100%; border-bottom: 1px solid rgba(255,255,255,0.15); }
            .process-item.row           { flex-direction: column !important; }
            .process__img               { margin-top: 20px; }

            .blockquote .quote__title   { font-size: 15px !important; }

            .list__item                 { font-size: 13px !important; }
            .package__list .list__item  { font-size: 13px !important; }

            .breadcrumb                 { font-size: 12px; flex-wrap: wrap; padding: 10px 0 !important; }

            .footer-primary             { padding: 50px 0 30px !important; }
            .footer-widget              { margin-bottom: 35px !important; }
            .footer__copyrights         { text-align: center; }
            .footer__copyright-links    { justify-content: center !important; flex-wrap: wrap; }
            .footer-widget-social       { text-align: left !important; }
            .social-icons               { justify-content: flex-start !important; }

            /* Sidebar stacks below content on mobile */
            .sidebar                    { margin-bottom: 40px; }
        }

        /* ── Small phones (≤ 480px) ── */
        @media (max-width: 480px) {
            .slide__title               { font-size: 17px !important; }
            .pagetitle__heading         { font-size: 17px !important; }
            h3.heading__title,
            .heading__title             { font-size: 17px !important; }

            .slide__content .d-flex,
            .page-title-layout2 .d-flex { flex-direction: column !important; align-items: flex-start !important; }
            .slide__content .btn,
            .page-title-layout2 .btn    { width: 100%; max-width: 280px; margin-right: 0 !important; margin-bottom: 10px; }

            .col-sm-6.gallery-col       { flex: 0 0 100% !important; max-width: 100% !important; }
            .gallery-img                { height: 210px !important; }

            .contact-panel__form .col-sm-6,
            .contact-layout3 .col-sm-6  { flex: 0 0 100% !important; max-width: 100% !important; }

            .services-layout1 .heading.text-center { padding: 0 5px; }
        }

        /* ── Focus styles for accessibility ── */
        a:focus-visible,
        button:focus-visible,
        input:focus-visible,
        select:focus-visible,
        textarea:focus-visible {
            outline: 3px solid #2E308F !important;
            outline-offset: 2px !important;
        }

        /* ── Phone icon colour fix ── */
        .phone__number .phone__icon {
            box-shadow: 0 0 0 2px rgba(46,48,143,0.5) !important;
        }
        .phone__number .phone__icon::before {
            box-shadow: 0 0 0 2px rgba(46,48,143,0.5) !important;
            animation: none !important;
        }
    </style>
</head>

<body>
    <a href="#main-content" class="skip-link">Skip to main content</a>
    <div class="wrapper">

        <!-- preloader -->
        <div class="preloader" role="status" aria-label="Loading page">
            <div class="loading"><span></span><span></span><span></span><span></span></div>
        </div>

        @include('partials.header')

        <main id="main-content">
            @yield('content')
        </main>

        @include('partials.footer')

    </div>

    <div class="search-popup" role="dialog" aria-modal="true" aria-label="Search">
        <button type="button" class="search-popup__close" aria-label="Close search"><i class="fas fa-times" aria-hidden="true"></i></button>
        <form class="search-popup__form" role="search" aria-label="Site search">
            <label for="search-input" class="sr-only">Search the site</label>
            <input type="search" id="search-input" class="search-popup__form__input" placeholder="Type words then press Enter">
            <button type="submit" class="search-popup__btn" aria-label="Submit search"><i class="icon-search" aria-hidden="true"></i></button>
        </form>
    </div>

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
