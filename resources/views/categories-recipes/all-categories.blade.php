@extends('layouts.header')

@section('content')
<div class="content">
    <form action="{{ route('category.recipes') }}" method="GET">
        <div class="container">
            <div class="text-center">
                <h2>Оберіть категорію</h2>
            </div>

            <div class="my-3 p-3 bg-white rounded shadow-sm">
                
                    
                    <div class="row">
                        
                        @foreach ($categories as $categorie)  
                        @php /** @var App\Models\IngrCategory $ingr_category_with */ @endphp                                        
                            <div class="col-md-auto">
                                <div class="custom-control custom-checkbox ">
                                <input type="checkbox" class="custom-control-input" name="category_ids[{{ $categorie->id }}]" id="{{ $categorie->id }}">
                                    <label class="custom-control-label" for="{{ $categorie->id }}">{{ $categorie->name }}</label>
                                </div>  
                            </div>
                        @endforeach
                    </div>
                </div>
        
                
                <br>
        
                <hr class="mb-4">
                <button type="submit" class="btn btn-outline-success btn-lg" href="{{ route('category.recipes') }}">Показати рецепти</button>
                
        
            </div>
        
        
        
        </div>
    </form>
</div>

@endsection