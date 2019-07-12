<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>Dashboard</title>

    <base href="{{ asset('') }}">
    <style>#loader{transition:all .3s ease-in-out;opacity:1;visibility:visible;position:fixed;height:100vh;width:100%;background:#fff;z-index:90000}#loader.fadeOut{opacity:0;visibility:hidden}.spinner{width:40px;height:40px;position:absolute;top:calc(50% - 20px);left:calc(50% - 20px);background-color:#333;border-radius:100%;-webkit-animation:sk-scaleout 1s infinite ease-in-out;animation:sk-scaleout 1s infinite ease-in-out}@-webkit-keyframes sk-scaleout{0%{-webkit-transform:scale(0)}100%{-webkit-transform:scale(1);opacity:0}}@keyframes sk-scaleout{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}</style>
    <link href="css/style.css" rel="stylesheet">
    {{--<link href="css/material-design-iconic-font.min.css" rel="stylesheet" media="all">--}}

</head>
<body class="app">
<div id="loader">
    <div class="spinner"></div>
</div>
<script>window.addEventListener('load', function load() {
        const loader = document.getElementById('loader');
        setTimeout(function() {
            loader.classList.add('fadeOut');
        }, 300);
    });
</script>
<div>
    {{--SIDEBAR--}}
    @include('layout.admin_parts.sidebar')

    <div class="page-container">
        {{--HEADER--}}
        @include('layout.admin_parts.header')

        <main class="main-content bgc-grey-100">
            <div id="mainContent">

                    @yield('content')

            </div>
        </main>

    </div>
</div>
<script type="text/javascript" src="js/vendor.js"></script>
<script type="text/javascript" src="js/bundle.js"></script>
</body>
</html>