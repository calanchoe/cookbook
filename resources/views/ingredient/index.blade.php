@extends('layouts.navbar')

@section('content')
<div class="content">

<form action="{{ route('ingredient.find') }}" method="GET">
    <div class="container">
        <div class="text-center">
            <h2>Що у вашому холодильнику?</h2>
        </div>
    
        
        
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            @foreach ($ingr_category_with as $ingrcat)
            @php /** @var App\Models\IngrCategory $ingr_category_with */ @endphp
    
            <h6 class="border-top border-gray pb-2 mb-0">{{ $ingrcat->name }}</h6>
            <div class="media text-muted pt-3">
                
                <div class="row">
                    
                    @foreach ($ingrcat->ingredients as $ingredient)                                          
                        <div class="col-md-auto">
                            <div class="custom-control custom-checkbox ">
                            <input type="checkbox" class="custom-control-input" name="ingredient_ids[{{ $ingredient->id }}]" id="{{ $ingredient->id }}">
                                <label class="custom-control-label" for="{{ $ingredient->id }}">{{ $ingredient->name }}</label>
                            </div>  
                        </div>
                    @endforeach
                </div>
            </div>
    
            @endforeach
            <br>
    
            <hr class="mb-4">
            <button type="submit" class="btn btn-outline-success btn-lg" href="{{ route('ingredient.find') }}">Підібрати рецепт</button>
            
    
        </div>
    
    
    </div>

</div>
</form>

</div>


@endsection