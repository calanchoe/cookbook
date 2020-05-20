@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 d-flex justify-content-center">
                                <div class="text-center">{{ $recipe->name }}</div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12 d-flex justify-content-center">
                                <img src="{{ Storage::url($recipe->photo) }}" class="img-fluid" alt="Recipe image">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-2 d-flex">
                                <div class="text-center"><h4>Інгредієнти</h4></div>
                            </div>
                        </div>
                        @foreach ($recipe->ingredients as $ingredient)
                            <div class="row justify-content-center">
                                <div class="col-md-3">
                                    <p>{{ $ingredient->name }}</p>
                                </div>
                                <div class="col-md-2">
                                    <p>{{ $ingredient->pivot->count }}</p>
                                </div>
                                <div class="col-md-2">
                                    <p>{{ $ingredient->pivot->measure }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                
                                    <div class="col-md-2 justify-content-center">
                                        <div class="text-center"><h4>Кроки</h4></div>
                                     </div>
                                    
                                        <div class="table table-hover">
                                            <table class="table table-striped table-bordered" style="width:100%" id="orders">
                                                <thead>
                                                    <tr>
                                                        <th>Крок</th>
                                                        <th>Фото</th>
                                                        <th>Опис</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($recipe->steps as $step)
                                                    <tr>
                                                        <td>{{ $step->num_step }}</td>
                                                        <td>
                                                            <img class="img_step img-thumbnail" src="{{ Storage::url($step->photo) }}" alt="img step" >
                                                            </td>
                                                        <td>{{ $step->description_step }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    
                                
                            </div>
                            <form action="{{ route('recipes.favorite.store.add.favorite', ['favorite_id' => $recipe->id]) }}" method="POST">
                                @csrf

                            @if (Route::has('login'))
                                    @auth
                                    <div class="row justify-content-center">
                                        <div class="col-md-3">
                                            <button type="submit" class="btn btn-outline-success btn-lg">Додати до збереженого</button>
                                        </div>
                                    </div>

                                    
                                @else
                                <div class="row justify-content-center">
                                    <div class="col-md-3">
                                        <p>Увійдіть або зареєструйтесь щоб додати до обранного</p>
                                        <!--<a class="btn btn-outline-success " href="#" role="button">Додати до збереженого</a>-->
                                    </div>
                                </div>
                            
                            
                            @endauth
                            @endif
                        </form>
                        </div>
                
                    </div>

            
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

