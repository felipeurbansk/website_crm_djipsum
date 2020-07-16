<html lang="{{config('app.locale')}}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DJoz Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', env('APP_NAME'))</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{mix('front/assets/css/vendor.css')}}" type="text/css">
    <link rel="stylesheet" href="{{mix('front/assets/css/style.css')}}" type="text/css">

</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="header__logo">
                    <a href="./index.html"><img src="front/assets/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{ route('web.home') }}">Home</a></li>
                            <li><a href="{{ route('web.musics') }}">Musicas</a></li>
                            <li><a href="{{ route('web.videos') }}">Videos</a></li>
                            <li><a href="{{ route('web.shows') }}">Shows</a></li>
                            <li><a href="{{ route('web.contact') }}">Contato</a></li>
                        </ul>
                    </nav>
                    <div class="header__right__social">
                        <a href="{{ env('CLIENT_FACEBOOK_URL')}}"><i class="fa fa-facebook"></i></a>
                        <a href="{{ env('CLIENT_TWITTER_URL')  }}"><i class="fa fa-twitter"></i></a>
                        <a href="{{ env('CLIENT_INSTAGRAM_URL')  }}"><i class="fa fa-instagram"></i></a>
                        <a href="{{ env('CLIENT_SPOTIFY_URL')  }}"><i class="fa fa-spotify"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>

@include('front.includes.header')

@yield('content')

@include('front.includes.footer')

<script src="{{ mix('front/assets/js/vendor.js') }}"></script>
<script src="{{ mix('front/assets/js/main.js') }}"></script>

</body>
</html>
