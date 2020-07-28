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
                                        <div class="embed-responsive embed-responsive-16by9 hide-print">
                                            <iframe width="560" height="315" src="{{ $recipe->video }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            
                                        </div>
                                        <br>
                                        
                                
                            </div>
                            <div class="container">
                            
                                <button type="submit" class="btn btn-outline-success btn-lg hide-print" onclick=" window.print(); ">
                                    Друкувати рецепт
                                </button>
                            </div>
                            <br>
                            @auth
                                @if ($favoriteCount == true)
                                    <form class="hide-print" action="{{ route('recipe.favorite.delete', ['id' => $recipe->id]) }}" method="POST">
                                        @csrf
                                        @method('put')
                                        
                                                <button type="submit" class="btn btn-success">Видалити зі збереженого</button>
                                        
                                    </form>
                                    @else
                                    <form class="hide-print" action="{{ route('recipes.favorite.store.add.favorite', ['favorite_id' => $recipe->id]) }}" method="POST">
                                        @csrf
                                            <button type="submit" class="btn btn-outline-success">Додати до збереженого</button>                   
                                   </form>
                                @endif
                                
                                @if ($recipeLikeCountUser == true)
                                    <form class="hide-print" action="{{ route('recipe.like.delete', ['id' => $recipe->id]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        
                                                <button type="submit" class="btn btn-danger">Like: {{ $recipeLikesCount }}</button>
                                        
                                    </form>
                                @else
                                    <form class="hide-print" action="{{ route('recipes.like.store.add.like') }}" method="POST">
                                        @csrf
                                        <input type="text" class="form-control" style="display: none"  name="id" value="{{ $recipe->id }}">
                                            <button type="submit" class="btn btn-outline-danger">Like: {{ $recipeLikesCount }}</button>                   
                                </form>
                                @endif
                            @endauth

                            @guest
                            <div class="row justify-content-start">
                                <div class="col-md-9">
                                    <p>Увійдіть або зареєструйтесь щоб додати до обранного</p>                                   
                                </div>  
                                    
                                <div class="col-md-4">
                                    <p style="color: green">Likes: {{ $recipeLikesCount }} </p>
                                </div>
                            </div>

                            @endguest
                           
                        
                        </div>
                    </div>

            
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection

