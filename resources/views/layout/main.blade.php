<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en">
<![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="en">
<![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en">
<![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Cody Butz - @yield('title', "Web Portfolio") - Full-Stack Web Developer</title>

    <meta charset="UTF-8">
    <meta name="description" content="Cody is an outgoing, enthusiastic freelance web developer who aspires to learn new technologies everyday.">
    <meta name="keywords" content="PHP,Web Development,Laravel,Ruby on Rails,HTML,CSS,JavaScript">
    <meta name="author" content="Cody Butz">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <link rel="stylesheet" href="/vendor/css/select2.min.css"/>
    <link rel="stylesheet" href="/vendor/css/bootstrap-markdown.min.css"/>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
@include('layout.navigation')

@yield('content')

@include('layout.footer')

<script src="/vendor/js/jquery.min.js"></script>
<script src="/vendor/js/modernizr.min.js"></script>
<script src="/vendor/js/bootstrap.min.js"></script>
<script src="/vendor/js/select2.full.min.js"></script>
<script src="/vendor/js/markdown.js"></script>
<script src="/vendor/js/marked.js"></script>
<script src="/vendor/js/to-markdown.js"></script>
<script src="/vendor/js/bootstrap-markdown.js"></script>

<script src="/js/app.js"></script>

@if(App::environment('production'))
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-62982637-1', 'auto');
        ga('send', 'pageview');

    </script>
@endif
</body>
</html>

