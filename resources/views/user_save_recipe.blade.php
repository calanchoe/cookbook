@extends('layouts.header')

@section('content')
<div class="content">
    <div class="container">


    
        <div class="starter-template text-center p-md-4">
          <h1>Збережені рецепти</h1>
        </div>
      
  
        <div class="row mb-2">
          @foreach ($favoriteUserResipes as $userRecipe)
          @php /** @var \App\Models\Favorite $userRecipe */ @endphp
          
            
            
                    <div class="col-md-6">
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <h3 class="mb-0"><a href="{{ route('recipes.show', ['recipe' => $userRecipe->recipe->id]) }}">{{ $userRecipe->recipe->name }}</a></h3>
                                <p class="card-text mb-auto">Складність:{{ $userRecipe->recipe->level }}</p>
            
                                 <!--<p class="card-text mb-auto">Категорія:</p>-->
                                <p class="card-text mb-auto">Час:{{ $userRecipe->recipe->time }}</p>
                            
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <img src="{{ Storage::url($userRecipe->recipe->photo) }}" class="img-fluid" alt="Recipe image">
                            </div>
                        </div>
                    </div>
                
            @endforeach 
          </div>
          @if ($favoriteUserResipes->total() > $favoriteUserResipes->count())
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{ $favoriteUserResipes->links() }}
                    </div>
                </div>
            </div>
  
        </div>
    @endif
    </div>
</div> 
@endsection