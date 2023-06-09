<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Foodeiblog Template">
    <meta name="keywords" content="Foodeiblog, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Unna:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

@php
    $categories = \App\Models\Category::all();
@endphp

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="{{ route('home') }}"><img src="{{ asset('assets/img/humberger/humberger-logo.png') }}" alt=""></a>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li><a href="{{ route('home') }}">Главная</a></li>
            <li class="dropdown"><a href="{{ route('recipes') }}">Рецепты</a>
                <ul class="dropdown__menu">
                    @foreach($categories as $category)
                        <li><a href="{{ route('recipes.category', $category->slug) }}">{{ $category->title }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li><a href="{{ route('about') }}">О нас</a></li>
            <li><a href="{{ route('contact') }}">Контакты</a></li>
            <li><a href="{{ route('signin') }}">Войти</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="humberger__menu__subscribe">
        <div class="humberger__menu__title sidebar__item__title">
            <h6>Подписаться</h6>
        </div>
        <p>Подпишитесь на нашу рассылку и получайте наши самые свежие новости прямо на свой почтовый ящик.</p>

        @include('main.includes.errors')

        <form action="{{ route('newsletter') }}" method="POST">
            @csrf
            <input required name="email" type="email" class="email-input" placeholder="Ваш E-mail">
            <label for="s-agree-check">
                Я согласен с положениями и условиями
                <input required name="policy" type="checkbox" id="s-agree-check">
                <span class="checkmark"></span>
            </label>
            <button type="submit" class="site-btn">Подписаться</button>
        </form>


    </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-1 col-6 order-md-1 order-1">
                    <div class="header__humberger">
                        <i class="fa fa-bars humberger__open"></i>
                    </div>
                </div>
                <div class="col-lg-8 col-md-10 order-md-2 order-3">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="{{ route('home') }}">Главная</a></li>
                            <li>
                                <a href="{{ route('recipes') }}">Рецепты</a>
                                <div class="header__megamenu__wrapper">
                                    <div class="header__megamenu">
                                        @foreach($categories as $category)
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                     data-setbg="{{ asset('assets/img/megamenu/'.$category->slug.'.jpg') }}">
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="{{ route('recipes.category', $category->slug) }}">{{ $category->title }}</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </li>
                            <li><a href="{{ route('about') }}">О нас</a></li>
                            <li><a href="{{ route('contact') }}">Контакты</a></li>

                            @guest
                                <li><a href="{{ route('signin') }}">Войти</a></li>
                            @endguest

                            @auth
                                <li><a href="{{ route('logout') }}">Выйти</a></li>
                            @endauth
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 col-md-1 col-6 order-md-3 order-2">
                    <div class="header__search">
                        <a href="#newsletter" style="color: black"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__btn">
                    <a href="#" class="primary-btn">Подписаться</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="header__logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="logo"></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Section End -->


@yield('content')

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container-fluid">
        <div class="footer__instagram">
            <div class="footer__instagram__avatar">
                <div class="footer__instagram__avatar--pic">
                    <img src="{{ asset('assets/img/footer/instagram-avatar.jpg') }}" alt="">
                </div>
                <div class="footer__instagram__avatar--text">
                    <h5>@ Foodeiblog</h5>
                    <span>23,7k follower</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                    <div class="footer__instagram__item set-bg"
                         data-setbg="{{ asset('assets/img/footer/ip-1.jpg') }}"></div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                    <div class="footer__instagram__item set-bg"
                         data-setbg="{{ asset('assets/img/footer/ip-2.jpg') }}"></div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                    <div class="footer__instagram__item set-bg"
                         data-setbg="{{ asset('assets/img/footer/ip-3.jpg') }}"></div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                    <div class="footer__instagram__item set-bg"
                         data-setbg="{{ asset('assets/img/footer/ip-4.jpg') }}"></div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                    <div class="footer__instagram__item set-bg"
                         data-setbg="{{ asset('assets/img/footer/ip-5.jpg') }}"></div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                    <div class="footer__instagram__item set-bg"
                         data-setbg="{{ asset('assets/img/footer/ip-6.jpg') }}"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__text">
                    <div class="footer__logo">
                        <a href="#"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
                    </div>
                    <p>
                        Добро пожаловать на наш Foodeiblog, место, где можно найти вдохновение и вкусные рецепты блюд и
                        напитков! Наша команда страстных кулинаров и любителей еды собрала для вас самые интересные и
                        разнообразные рецепты, чтобы помочь вам создавать восхитительные блюда и напитки прямо у себя
                        дома.
                    </p>
                    <div class="footer__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
                <div class="footer__copyright">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Авторское право &copy;<script>document.write(new Date().getFullYear());</script> | Все права защищены
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/slug.js') }}"></script>
</body>

</html>
