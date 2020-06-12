@extends('layouts.navbar')

@section('content')
<div class="content">
    <div class="container">
        
        <div class="row">
            <div class="col">
                <h2>{{ $collection->name }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>{{ $collection->description }}</p>
            </div>
        </div>
        <div class="row row-cols-3-md">
            
            @foreach ($collection->recipes as $recipe)
            @php /** @var \App\Models\Recipe $recipe */ @endphp
           @php /** @var \App\Models\Collection $collection */ @endphp
           
           
               <div class="col-md-4">
                   <div class="card mb-4 shadow-sm">
                   <a href="{{ route('recipes.show', ['recipe' => $recipe->pivot->recipe_id]) }}"><img class="img_recipe img-thumbnail" src="{{ Storage::url($recipe->photo) }}" alt="img recipe" ></a>
                           <h6 class="card-title">{{ $recipe->name }}</h6>
                           <p class="">Час: {{ $recipe->time }}</p>
                           <p class="">Складнысть: {{ $recipe->level }}</p>
                   </div>
               </div>
           @endforeach
        </div>

    </div>
</div>
@endsection