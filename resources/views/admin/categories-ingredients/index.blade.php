<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style_nav.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @include('layouts.header')
    <section>
       
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                    <a class="btn btn-outline-danger" href="{{ route('admin.categories-ingredients.create') }}">Додати категорію інгредієнтів</a>
                    </nav>
                    <div class="card">
                        <div class="card-header text-center">Дизайнери</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" style="width:100%" id="orders">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Ім'я</th>
                                            <th>Прізвище</th>
                                            <th>Вид дизайна</th>
                                            <th>Описания</th>
                                            <th>Рейтинг</th>
                                            <th>Дія</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>
</html>