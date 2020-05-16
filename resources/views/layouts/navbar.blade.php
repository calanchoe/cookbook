<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('css/style_nav.css') }}" rel="stylesheet">
    <!-- Fonts 
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->

    <!-- Styles -->

    <title>Cookbook</title>
</head>
<body>

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="col-md-2 logotype">
                <a class="navbar-brand" href="#"><img src="{{ asset("img/logo.jpg") }}" alt="Logo CookBook"></a>
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