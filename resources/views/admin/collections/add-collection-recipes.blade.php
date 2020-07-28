@extends('layouts.navbar')

@section('content')
<div class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Крок 2. Додати рецепти</div>
    
                    <div class="card-body">
                        <form action="{{ route('admin.add.collection.recipes.store') }}" method="POST">
                            @csrf
                            @foreach ($reсipes as $recipe)
                            @php /** @var App\Models\Recipe $recipe */ @endphp
                                
                                    <div class="form-row">
                                        <div class="form-group col-md-3">                                 
                                            <div class="custom-control custom-checkbox ">
                                            <input type="checkbox" class="custom-control-input" name="recipe_ids[]" id="{{ $recipe->id }}" value = "{{ $recipe->id }}">
                                                <label class="custom-control-label" for="{{ $recipe->id }}">{{ $recipe->name }}</label>
                                            </div>  
                                        </div>
                                        
                                    </div>
                                
                                
                            @endforeach
                            
                            
                            <button type="submit" class="btn btn-outline-success">Додати рецепти</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection