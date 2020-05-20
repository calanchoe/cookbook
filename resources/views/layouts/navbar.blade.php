<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('css/style_nav.css') }}" rel="stylesheet">
    <!-- Fonts 
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->

    <!-- Styles -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
      .content {
            margin-top: 7em;
        }
        .myform {
            margin-top: 11em;
        }
    </style>

    <title>Cookbook</title>
</head>
<body>

    
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mb-6">
            
          <a class="navbar-brand" href="{{ route('start-recipes') }}"><img src="{{ asset("img/logo.jpg") }}" alt="Logo CookBook"></a>
      
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('start-recipes') }}">Головна <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Збірки рецептів</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Про кухаря</a>
          </li>
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link text-light"
                     href="{{ route('login') }}">{{ __('Увійти') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link text-light"
                         href="{{ route('register') }}">{{ __('Зареєструватися') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown"
                     class="nav-link dropdown-toggle text-light"
                     href="#" role="button" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right position-absolute"
                      aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"
                               href="{{ route('user_save_recipe') }}">
                                Мій кабінет
                            </a>
                      <a class="dropdown-item text-danger"
                         href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                          {{ __('Вийти') }}
                      </a>
                      <form id="logout-form"
                            class="d-none"
                            action="{{ route('logout') }}" method="POST">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
        </ul>
        <!--<form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Пошук" aria-label="Search">
          <button class="btn btn-danger  my-2 my-sm-0" type="submit">Пошук</button>
        </form>-->
      </div>
    </nav>
        

        @yield('content')

    <footer class="text-muted">
            <div class="container">
              <p class="float-right">
                <a href="#">Вгору</a>
              </p>
              <p>Кулінарні рецепти &copy; CookBoook</p>
              <p>Всі тексти рецептів і фотографії, що розміщені<br> 
                на сайті cookbook, захищені<br>
                 законом про авторське право.</p>
            </div>
          </footer>
</body>
</html>