

@extends('layouts.header')

@section('content')

<div class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Крок 1. Новий рецепт</div>
    
                    <div class="card-body">
                        <form action="{{ route('admin.add.reсipe.store') }}" method="POST">
                            @csrf
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputRecipeName">Назва</label>
                                <input type="text" class="form-control" id="inputRecipeName" name="name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPhoto">Вкажіть шлях до фото рецепту</label>
                                <input type="text" class="form-control" id="inputPhoto" name="photo">
                            </div>
                            </div>
                            
                            
                                <div class="form-group col-md-6">
                                    <label for="inputTime">Введіть час приготування</label>
                                    <input type="text" class="form-control" id="inputTime" name="time" placeholder="1 год. 30 хв.">
                                </div>

                            <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputLevel">Рівень</label>
                                <select id="inputLevel" name="level" class="form-control">
                                <option selected>Оберіть рівень...</option>
                                <option>Новичок</option>
                                <option>Мастер</option>
                                <option>Ніндзя</option>
                                </select>
                            </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCategories">Категорія</label>
                                    <select id="inputCategories" name="recipe_category_id" class="form-control">
                                    <option selected>Оберіть категорію...</option>
                                    @foreach ($igrcategories as $igrcategorie)
                                    @php /** @var \App\Models\RecipeCategory $igrcategorie */ @endphp
                                        <option value="{{$igrcategorie->id}}">{{$igrcategorie->name}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputCuisines">Кухня</label>
                                    <select id="inputCuisines" name="cuisine_id" class="form-control">
                                    <option selected>Оберіть кухню...</option>
                                    @foreach ($cuisines as $cuisine)
                                    @php /** @var \App\Models\Cuisine $cuisine */ @endphp
                                    <option value="{{$cuisine->id}}">{{$cuisine->name}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-success">Додати</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection