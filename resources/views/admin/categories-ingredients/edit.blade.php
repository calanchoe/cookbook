<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style_nav.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>Редагування категорії</title>
</head>
<body>
    @include('layouts.header')

    @section('content')
    @php
        /** @var \App\Models\IngrCategory $ingrcateg */
    @endphp
    
    <form method="POST" action="{{ route('admin.categories-ingredients.update', ['ingredientCategory' => $ingrcateg->id]) }}">
        @method('PATCH')
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @include('admin.categories-ingredients.ingrcateg_edit_main_col')
                </div>
                <div class="col-md-3">
                    @include('admin.categories-ingredients.ingrcateg_edit_add_col')
                </div>
            </div>

        </div>
    </form>
        
    @endsection


</body>
</html>