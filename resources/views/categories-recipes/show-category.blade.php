@extends('layouts.navbar')

@section('content')
<div class="content">
  <div class="container">


    
      <div class="starter-template text-center p-md-4">
        <h1>Знайдені рецепти</h1>
      </div>
    

      <div class="row mb-2">
        @foreach ($recipes as $recipe)
        @php /** @var \App\Models\Recipe $recipe */ @endphp
        
          <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0"><a href="{{ route('recipes.show', ['recipe' => $recipe->id]) }}">{{ $recipe->name }}</a></h3>
                <p class="card-text mb-auto">Складність: {{ $recipe->level }}</p>

              <p class="card-text mb-auto">Категорія: {{ $recipe->recipe_category->name }}</p>
              <p class="card-text mb-auto">Кухня: {{ $recipe->cuisine->name }}</p>
                <p class="card-text mb-auto">Час: {{ $recipe->time }}</p>
                <p class="card-text mb-auto">Інгредієнти:</p>
                <div class="row cols-md-6 row-2"> 
                @foreach ($recipe->ingredients as $ingredient) 
                
                  <div class="col-md-4 font-weight-light">
                    {{ $ingredient->name  }},
                  </div>
              
                @endforeach
              </div>

              </div>
              <div class="col-auto d-none d-lg-block">
                <img src="{{ Storage::url($recipe->photo) }}" class="img-fluid" alt="Recipe image">
              </div>
            </div>
          </div>
          @endforeach 
        </div>
       
  </div>
  
</div>

@endsection