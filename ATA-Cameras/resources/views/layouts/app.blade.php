<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Sekure - Security Systems HTML5 Template">
    <link href="assets/images/favicon/favicon.png" rel="icon">
    <title>Innovinetec Solutions </title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&amp;family=Roboto:wght@400;700&amp;display=swap">
    <link rel="stylesheet" href="../../../use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="assets/css/libraries.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* ============================================================
           MOBILE RESPONSIVE OVERRIDES — Innovinetec Solutions
           ============================================================ */

        /* ── Tablet (≤ 991px) ── */
        @media (max-width: 991px) {
            .slide__title         { font-size: 32px !important; line-height: 1.3 !important; }
            .pagetitle__heading   { font-size: 30px !important; }
            h3.heading__title,
            .heading__title       { font-size: 24px !important; }
            .nav.nav-tabs         { flex-wrap: wrap; }
            .nav.nav-tabs .nav__link { flex: 1 1 45%; font-size: 13px; margin-bottom: 4px; }
        }

        /* ── Mobile (≤ 767px) ── */
        @media (max-width: 767px) {

            /* Hero / Slider */
            .slide-item           { min-height: 480px; }
            .slide__subtitle      { font-size: 12px !important; letter-spacing: 0.05em; }
            .slide__title         { font-size: 22px !important; line-height: 1.3 !important; margin-bottom: 10px !important; }
            .slide__desc          { font-size: 13px !important; }
            .slide__content .btn  { margin-right: 0 !important; margin-bottom: 10px; }

            /* Page title heroes */
            .pagetitle__heading   { font-size: 22px !important; line-height: 1.3 !important; }
            .pagetitle__desc      { font-size: 13px !important; }

            /* Section padding */
            .pt-130               { padding-top: 60px !important; }
            .pb-90                { padding-bottom: 50px !important; }
            .pt-120               { padding-top: 60px !important; }
            .pb-80                { padding-bottom: 40px !important; }
            .pt-60                { padding-top: 40px !important; }
            .pb-50                { padding-bottom: 30px !important; }

            /* Section headings */
            h3.heading__title,
            .heading__title       { font-size: 20px !important; line-height: 1.4 !important; }
            h2.heading__subtitle,
            .heading__subtitle    { font-size: 13px !important; }
            .heading__desc        { font-size: 14px !important; }

            /* Buttons */
            .btn__xl              { padding: 12px 20px !important; font-size: 13px !important; }

            /* Contact panel: stack info + form */
            .contact-panel                { flex-direction: column !important; }
            .contact-panel__info,
            .contact-panel__form          { width: 100% !important; min-width: 100% !important; }
            .mt--100                      { margin-top: -40px !important; }

            /* Gallery */
            .gallery-img                  { height: 180px !important; }

            /* Service cards */
            .service__img                 { height: 180px !important; }

            /* Review bar — stack */
            .categories-list              { flex-direction: column !important; gap: 20px; }
            .cat__item                    { width: 100%; justify-content: flex-start !important; }

            /* Testimonials */
            .testimonial-item             { padding: 20px 15px !important; }
            .testimonial__title           { font-size: 15px !important; }
            .testimonial__meta            { flex-wrap: wrap; gap: 4px; }

            /* Work process tabs */
            .nav.nav-tabs                 { flex-direction: column !important; }
            .nav.nav-tabs .nav__link      { width: 100%; border-bottom: 1px solid rgba(255,255,255,0.15); }
            .process-item.row             { flex-direction: column !important; }
            .process__img                 { margin-top: 20px; }

            /* Contact info cards */
            .contact-card                 { padding: 28px 18px 22px !important; margin-bottom: 20px; }

            /* Footer social */
            .footer-widget-social         { text-align: left !important; }
            .social-icons                 { justify-content: flex-start !important; }

            /* Breadcrumbs */
            .breadcrumb                   { font-size: 13px; }

            /* Feature list */
            .list__item                   { font-size: 13px !important; }

            /* Clients section */
            .clients .font-weight-bold    { font-size: 14px !important; }
        }

        /* ── Small phones (≤ 480px) ── */
        @media (max-width: 480px) {
            .slide__title         { font-size: 18px !important; }
            .pagetitle__heading   { font-size: 18px !important; }
            h3.heading__title,
            .heading__title       { font-size: 18px !important; }

            /* Single-column gallery */
            .gallery .col-sm-6    { flex: 0 0 100% !important; max-width: 100% !important; }
            .gallery-img          { height: 220px !important; }

            /* Stack hero buttons */
            .slide__content .d-flex.flex-wrap,
            .page-title-layout2 .d-flex.flex-wrap { flex-direction: column !important; align-items: flex-start !important; }
            .slide__content .btn,
            .page-title-layout2 .btn { width: 100%; max-width: 280px; margin-right: 0 !important; }

            /* Contact form full-width inputs */
            .contact-panel__form .col-sm-6 { flex: 0 0 100% !important; max-width: 100% !important; }

            /* Services request form */
            .contact-layout3 .col-sm-6 { flex: 0 0 100% !important; max-width: 100% !important; }
        }
    </style>
</head>

<body>
    <div class="wrapper">

        <!-- preloader -->
        <div class="preloader">
            <div class="loading"><span></span><span></span><span></span><span></span></div>
          </div>
        <!-- preloader -->

        @include('partials.header')

        @yield('content')

        @include('partials.footer')
        
    </div>

    <div class="search-popup">
        <button type="button" class="search-popup__close"><i class="fas fa-times"></i></button>
        <form class="search-popup__form">
            <input type="text" class="search-popup__form__input" placeholder="Type Words Then Enter">
            <button class="search-popup__btn"><i class="icon-search"></i></button>
        </form>
    </div>
    <!-- jequery plugins -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
