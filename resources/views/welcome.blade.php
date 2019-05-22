<!doctype html>
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












































{{-- @extends('layouts.front')

@section('page')
    <div class="container">
        <div class="row pt120">
            <div class="books-grid">
              <div class="row mb30">
                  @foreach ($products as $product)
                      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="books-item">
                          <div class="books-item-thumb">
                              <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                              <div class="new">New</div>
                              <div class="sale">Sale</div>
                              <div class="overlay overlay-books"></div>
                          </div>
                          <div class="books-item-info">
                            <a href="{{ route('product.single', ['id' => $product->id]) }}">
                                <h5 class="books-title"> {{ $product->name }} </h5>
                            </a>

                              <div class="books-price">${{ $product->price }}</div>
                          </div>
                          <a href="19_cart.html" class="btn btn-small btn--dark add">
                              <span class="text">Add to Cart</span>
                              <i class="seoicon-commerce"></i>
                          </a>
                        </div>
                    </div>
                  @endforeach
              </div>
              <div class="row pb120">
                  <div class="col-lg-12">
                      
                      {{ $products->links() }}
                  </div>
                  {{-- <div class="col-lg-12">
                      <nav class="navigation align-center">
                          <a href="#" class="page-numbers bg-border-color current"><span>1</span></a>
                          <a href="#" class="page-numbers bg-border-color"><span>2</span></a>
                          <a href="#" class="page-numbers bg-border-color"><span>3</span></a>
                          <a href="#" class="page-numbers bg-border-color"><span>4</span></a>
                          <a href="#" class="page-numbers bg-border-color"><span>5</span></a>
                          <svg class="btn-prev">
                              <use xlink:href="#arrow-left"></use>
                          </svg>
                          <svg class="btn-next">
                              <use xlink:href="#arrow-right"></use>
                          </svg>
                      </nav>
                  </div>
              </div>
          </div>
        </div>
    </div>
@endsection --}}