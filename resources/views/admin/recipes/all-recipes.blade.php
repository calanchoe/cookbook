@extends('layouts.header')

@section('content')
   

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                
                <a class="btn btn-outline-danger" href="{{ route('admin.add.resipe') }}">Додати рецепт</a>
                
                <div class="card">
                    <div class="card-header text-center">Рецепти</div>
                    <div class="card-body">
                        <div class="table table-hover">
                            <table class="table table-striped table-bordered" style="width:100%" id="orders">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Назва</th>
                                        <th>Категорія</th>
                                        <th>Кухня</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recipes as $recipe)
                                    @php /** @var \App\Models\Recipe $recipe */ @endphp
                                        <tr>
                                        <td>{{ $recipe->id }}</td>
                                        <td>
                                        <a href="{{ route('admin.categories-ingredients.edit', $recipe->id) }}">
                                            {{ $recipe->name }}
                                        </a>  
                                        </td>
                                        <td>{{ $recipe->recipe_category_id}}</td>
                                        <td>{{ $recipe->cuisine_id}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($recipes->total() > $recipes->count())
                <br>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                {{ $recipes->links() }}
                            </div>
                        </div>
                    </div>

                </div>

                
            @endif
    </div>
@endsection
