<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Sekure - Security Systems HTML5 Template">
    <link href="assets/images/favicon/favicon.png" rel="icon">
    <title>Sekure - Security Systems HTML5 Template</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&amp;family=Roboto:wght@400;700&amp;display=swap">
    <link rel="stylesheet" href="../../../use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="assets/css/libraries.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="wrapper">

        <!-- preloader -->
        <div class="preloader">
            <div class="loading"><span></span><span></span><span></span><span></span></div>
          </div>
        <!-- preloader -->

        @include('patials.header')

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
