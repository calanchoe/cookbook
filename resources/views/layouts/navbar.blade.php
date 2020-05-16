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

    <nav ><!-- class="fixed-top" -->
        <div class="container">
                <div class="row">
                    <div class="col-md-2 logotype">
                        <a href="#"><img src="{{ asset("img/logo.jpg") }}" alt="Logo CookBook"></a>
                    </div>


                    <!-- Main Nav -->
                    <div class="col-md-8 main_nav">
                        <ul class="ul list-inline list-justify">
                            <li class="active"><a href="#">Головна</a></li>
                            <li><a href="#">Всі рецепти</a></li>
                            <li><a href="#">Про кухаря</a></li>
                            @if (Route::has('login'))
                            @auth
                                <li><a href="{{ url('/home') }}">Мій кабінет</a></li>
                            @else
                                <li><a href="{{ route('login') }}">Увійти</a></li>
                            <!--<li><a href="#"></a></li>-->
                            @endauth
                            @endif
                        </ul>
                    </div>

                    <!-- Search -->
                    <div class=" col-md-2 search">
                        <div class="d-flex flex-row align-items-center justify-content-start">
                            <a href="#">Пошук</a>
                        </div>
                    </div>



                </div>
        </div>
    </nav>

    <!-----MainFrontBaner----->
    <section id="main">
        <div class="container">
            <div class="row">
                <h3>Тільки смачне</h3>
            </div>
            <div class="row">
                <h1 class="display-4 font-italic">Let's cook!</h1>
            </div>
            <div class="row">
               <button>Оберіть інгредієнти</button>
            </div>
        </div>
    </section>
    
</body>
</html>