<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/custom.select.css">
    <link rel="stylesheet" href="/css/intlTelInput.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/main.css">

    @yield('seo')

    <!-- Facebook -->
    <meta property="og:title" content="Candy Gold">
    <meta property="og:site_name" content="Candy Gold">
    <meta property="og:description" content="Одна из самых известных кондитерских фабрик Узбекистана">
    <meta property="og:url" content="Одна из самых известных кондитерских фабрик Узбекистана">
    <meta property="og:image" content="img/meta.jpg">
    <meta property="og:type" content="website">

    <!-- Google Plus -->
    <meta itemprop="name" content="Candy Gold">
    <meta itemprop="description" content="Одна из самых известных кондитерских фабрик Узбекистана">
    <meta itemprop="image" content="img/meta.jpg">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Candy Gold">
    <meta name="twitter:description" content="Одна из самых известных кондитерских фабрик Узбекистана">
    <meta name="twitter:image" content="img/meta.jpg">
</head>

<!-- arabic класс добавить body, если арабский -->

<body>

<x-preloader/>

<x-feedback/>

<x-fixed-btn/>

<x-mobile-menu/>

@yield('content')

<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/owl.carousel.js"></script>
<script src="/js/intlTelInput-jquery.min.js"></script>
<script src="/js/jquery.custom-select.js"></script>
<script src="/js/360.min.js"></script>
<script src="/js/wow.min.js"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script src="/js/main.js"></script>
@yield('scripts')
</body>
</html>
