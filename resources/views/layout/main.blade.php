<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Foodeiblog Template">
    <meta name="keywords" content="Foodeiblog, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="./index.html"><img src="{{ asset('assets/img/humberger/humberger-logo.png') }}" alt=""></a>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li><a href="./index.html">Home</a></li>
            <li><a href="#">Recipes</a></li>
            <li><a href="#">Dinner</a></li>
            <li><a href="#">Desserts</a></li>
            <li class="dropdown"><a href="#">Pages</a>
                <ul class="dropdown__menu">
                    <li><a href="./categories-grid.html">Categories Grid</a></li>
                    <li><a href="./categories-list.html">Categories List</a></li>
                    <li><a href="./single-post.html">Single Post</a></li>
                    <li><a href="./signin.html">Sign In</a></li>
                    <li><a href="./404.html">404</a></li>
                    <li><a href="./typography.html">Typography</a></li>
                </ul>
            </li>
            <li><a href="./about.html">About</a></li>
            <li><a href="./contact.html">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="humberger__menu__about">
        <div class="humberger__menu__title sidebar__item__title">
            <h6>About me</h6>
        </div>
        <img src="{{ asset('assets/img/humberger/humberger-about.jpg') }}" alt="">
        <h6>Hi every one! I,m Lena Mollein.</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
        <div class="humberger__menu__about__social sidebar__item__follow__links">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-envelope-o"></i></a>
        </div>
    </div>
    <div class="humberger__menu__subscribe">
        <div class="humberger__menu__title sidebar__item__title">
            <h6>Subscribe</h6>
        </div>
        <p>Subscribe to our newsletter and get our newest updates right on your inbox.</p>
        <form action="#">
            <input type="text" class="email-input" placeholder="Your email">
            <label for="agree-check">
                I agree to the terms & conditions
                <input type="checkbox" id="agree-check">
                <span class="checkmark"></span>
            </label>
            <button type="submit" class="site-btn">Subscribe</button>
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
                            <li><a href="#">Рецепты</a>
                                <div class="header__megamenu__wrapper">
                                    <div class="header__megamenu">
                                        <div class="header__megamenu__item">
                                            <div class="header__megamenu__item--pic set-bg"
                                                 data-setbg="{{ asset('assets/img/megamenu/p-1.jpg') }}">
                                                <div class="label">Vegan</div>
                                            </div>
                                            <div class="header__megamenu__item--text">
                                                <h5><a href="#">How to Make a Milkshake With Any Ice Cream ...</a>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="header__megamenu__item">
                                            <div class="header__megamenu__item--pic set-bg"
                                                 data-setbg="{{ asset('assets/img/megamenu/p-2.jpg') }}">
                                                <div class="label">Vegan</div>
                                            </div>
                                            <div class="header__megamenu__item--text">
                                                <h5><a href="#">How to Make a Milkshake With Any Ice Cream ...</a>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="header__megamenu__item">
                                            <div class="header__megamenu__item--pic set-bg"
                                                 data-setbg="{{ asset('assets/img/megamenu/p-3.jpg') }}">
                                                <div class="label">Vegan</div>
                                            </div>
                                            <div class="header__megamenu__item--text">
                                                <h5><a href="#">How to Make a Milkshake With Any Ice Cream ...</a>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="header__megamenu__item">
                                            <div class="header__megamenu__item--pic set-bg"
                                                 data-setbg="{{ asset('assets/img/megamenu/p-4.jpg') }}">
                                                <div class="label">Vegan</div>
                                            </div>
                                            <div class="header__megamenu__item--text">
                                                <h5><a href="#">How to Make a Milkshake With Any Ice Cream ...</a>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="header__megamenu__item">
                                            <div class="header__megamenu__item--pic set-bg"
                                                 data-setbg="{{ asset('assets/img/megamenu/p-5.jpg') }}">
                                                <div class="label">Vegan</div>
                                            </div>
                                            <div class="header__megamenu__item--text">
                                                <h5><a href="#">How to Make a Milkshake With Any Ice Cream ...</a>
                                                </h5>
                                            </div>
                                        </div>
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
                        <i class="fa fa-search search-switch"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__btn">
                    <a href="./signin.html" class="primary-btn">Subscribe</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="header__logo">
                    <a href="./index.html"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-envelope-o"></i></a>
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
                    <h5>@ foodieblog</h5>
                    <span>23,7k follower</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                    <div class="footer__instagram__item set-bg" data-setbg="{{ asset('assets/img/footer/ip-1.jpg') }}"></div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                    <div class="footer__instagram__item set-bg" data-setbg="{{ asset('assets/img/footer/ip-2.jpg') }}"></div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                    <div class="footer__instagram__item set-bg" data-setbg="{{ asset('assets/img/footer/ip-3.jpg') }}"></div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                    <div class="footer__instagram__item set-bg" data-setbg="{{ asset('assets/img/footer/ip-4.jpg') }}"></div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                    <div class="footer__instagram__item set-bg" data-setbg="{{ asset('assets/img/footer/ip-5.jpg') }}"></div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                    <div class="footer__instagram__item set-bg" data-setbg="{{ asset('assets/img/footer/ip-6.jpg') }}"></div>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut<br /> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                        commodo viverra<br /> maecenas accumsan lacus vel facilisis. </p>
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
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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
