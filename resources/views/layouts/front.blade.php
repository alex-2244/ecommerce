<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Shopping</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/crumina-fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/styles.css') }}">
    <!--Plugins styles-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/primary-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/magnific-popup.css') }}">
    <!--Styles for RTL-->
    <!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->
    <!--External fonts-->
     <!--fas fa icon link -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <style>
        /* nav.navigation {
            margin: 20px auto;width: 100%;position: relative;max-width: 770px;text-align: center;
        }
        nav.navigation a {
            position: relative;
            background: #fff;
            display: inline-block;
            margin: 0 12px 0 0;
            width: 60px;
            height: 60px;
            line-height: 60px;
            text-align: center;
            border: 2px solid transparent;
            text-transform: uppercase;
            color: #acacac;
            font-size: 20px;
            border-radius: 100%;
            transition: all .3s ease;
        }
        .navigation a.bg-border-color.current {
            background-color: transparent;
        }
        .navigation a.current {
            border-color: #4cc2c0;
            background-color: transparent;
            color: #4cc2c0;
        } */
    </style>
</head>

<body class=" ">
<header class="header" id="site-header">
    <div class="container">
        <div class="header-content-wrapper">
            <ul class="nav-add">
                <li class="cart" style="margin-right:20px;">
                    <a href="{{ route('home') }}"> <i class="fas fa-home" style="font-size: 16px;"></i> Home</a>
                </li>
                <li class="cart">
                    <a href="#" class="js-cart-animate">
                        <i class="seoicon-basket"></i>
                        <span class="cart-count">0</span>
                    </a>
                    <div class="cart-popup-wrap">
                        <div class="popup-cart">
                            <h4 class="title-cart">No products in the cart!</h4>
                            <p class="subtitle">Please make your choice.</p>
                            <div class="btn btn-small btn--dark">
                                <span class="text">view all catalog</span>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>


<div class="content-wrapper">
    <div class="container">
        <div class="row pt120">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="heading align-center mb60">
                    <h4 class="h1 heading-title">Udemy E-commerce tutorial</h4>
                    <p class="heading-text">Buy books, and we ship to you.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- End Books products grid -->

    @yield('page')
</div>

<!-- Footer -->

<footer class="footer">
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                </div>
            </div>
        </div>
    </div>
</footer>



<script src="{{ asset('app/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('app/js/crum-mega-menu.js') }}"></script>
<script src="{{ asset('app/js/swiper.jquery.min.js') }}"></script>
<script src="{{ asset('app/js/theme-plugins.js') }}"></script>
<script src="{{ asset('app/js/main.js') }}"></script>
<script src="{{ asset('app/js/form-actions.js') }}"></script>

<script src="{{ asset('app/js/velocity.min.js') }}"></script>
<script src="{{ asset('app/js/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('app/js/animation.velocity.min.js') }}"></script>

<!-- ...end JS Script -->


</body>

<!-- Mirrored from theme.crumina.net/html-seosight/16_shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2016 13:03:04 GMT -->
</html>










































{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #menu-items a {
                /* color: rgb(0, 82, 204); */
                color:#fff;

            }
            #back {
                background-image: url(assets/bg/bg2.jpg);
                background-position: inherit;
                background-size: cover;
            }
        </style>
    </head>
    <body style="background-color: #f8fafc;">
        <div class="flex-center position-ref full-height" id="back">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" style="color: #fff;">
                            <span><i class="fas fa-fw fa-user"></i></span>Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="color: #fff;">
                                <span><i class="fas fa-fw fa-sign-in-alt"></i></span>&nbsp;Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md" style="color: #fff;font-weight:800;">
                    E-commerce
                </div>

                
            </div>
        </div>
    </body>
</html>


 --}}
