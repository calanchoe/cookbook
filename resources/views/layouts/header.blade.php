<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cookbook</title>
        
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
            <!-- Favicons -->
        <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        
        <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
        <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
        <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#563d7c">
        <!-- Fonts 
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->

        <!-- Styles -->
        
        <style>
            
            /*nav {
                background-color: rgba(0, 0, 0, 0.0.466);
                font-family: Verdana;
                font-weight: bold;
                
            }*/
            /*.main_nav {
                text-transform: uppercase;
            }*/
           /* html, body {
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
            }*/


           /* .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }*/
        </style>
    </head>
    <body>

<header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="col-md-2 logotype">
                <a class="navbar-brand" href="{{ route('start-recipes') }}"><img src="{{ asset("img/logo.jpg") }}" alt="Logo CookBook"></a>
            </div>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Головна <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Всі рецепти</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Про кухаря</a>
                </li>
                @if (Route::has('login'))
                            @auth
                                <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">Мій кабінет</a></li>
                            @else
                                <li class="nav-item "><a class="nav-link" href="{{ route('login') }}">Увійти</a></li>
                            <!--<li><a href="#"></a></li>-->
                            @endauth
                            @endif
              </ul>
              <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Пошук" aria-label="Search">
                <button class="btn btn-danger  my-2 my-sm-0" type="submit">Пошук</button>
              </form>
            </div>
          </nav>
        </header>

        <div class="main">

            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="jumbotron text-center mainheader">
              <div class="container">
                <h3 class="header_text">Тільки смачне</h3>
                <h1 class="display-3 font-italic letscook">Let's cook!</h1>
                <p class="choose"><a class="btn btn-danger btn-lg" href="#" role="button">Оберіть інгредієнти</a></p>
              </div>
            </div>
          
        </div>

        @yield('content')

        <footer class="text-muted">
            <div class="container">
              <p class="float-right">
                <a href="#">Back to top</a>
              </p>
              <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
              <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.4/getting-started/introduction/">getting started guide</a>.</p>
            </div>
          </footer>

    </body>
</html>
    