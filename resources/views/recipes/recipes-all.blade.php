
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <h2>Усі рецепти</h2>
            </div>
        </div>
        
    </div>
    
    <div class="row row-cols-3-md">
        
         @foreach ($recipes as $recipe)
        @php /** @var \App\Models\Recipe $recipe */ @endphp
        
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                <a href="{{ route('recipes.recipe-show', $ingrcateg->id) }}"><img class="img_recipe img-thumbnail" src="{{ Storage::url($recipe->photo) }}" alt="img recipe" ></a>
                        <h6 class="card-title">{{ $recipe->name }}</h6>
                        <p class="">Час: {{ $recipe->time }}</p>
                        <p class="">Складнысть: {{ $recipe->level }}</p>
                </div>
            </div>
        @endforeach
        <!--<div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                    <img class="img_recipe" src="" alt="img recipe">
                    <h6 class="card-title">{{ $recipe->name }}</h6>
                    <p class="">Час: 40мин</p>
                    <p class="">Складнысть: середня</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                    <img class="img_recipe" src="" alt="img recipe">
                    <h6 class="card-title">{{ $recipe->name }}</h6>
                    <p class="">Час: 40мин</p>
                    <p class="">Складнысть: середня</p>
            </div>
        </div>-->
    </div>
    
    
</div>

