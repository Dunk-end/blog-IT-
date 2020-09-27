<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body class="page light-theme transition-fade" id="swup">
    @include('inc.header')

    <div class="container">
        @include('inc.messages')

        <div class="row">
            <div class="col-8">
                @yield('content')
            </div>
            <div class="col-4">
                @include('inc.aside')
            </div>
        </div>
    </div>
    @include('inc.footer')
    <button class="up-button" type="button">
        
        <span class="visually-hidden"><img src="https://img.icons8.com/fluent/48/000000/up.png"/></span>
    </button>
    <script>

        let page = document.querySelector('.page');
        let themeButton = document.querySelector('.theme-button');

        themeButton.onclick = function () {
            page.classList.toggle('light-theme');
            page.classList.toggle('dark-theme');
        };

        let upButton = document.querySelector('.up-button');

        window.onscroll = function () {
            if (window.pageYOffset > 200) {
                upButton.classList.add('shown');
            } else {
                upButton.classList.remove('shown');
            }
        };

        upButton.onclick = function () {
            window.scrollTo(0, 0);
        };

        let downButton = document.querySelector('.down-button')

        downButton.onclick = function() {
            window.scrollTo(0, 1000000000);
        }
    </script>
</body>
</html>
