@extends('layouts.navbar')

@section('content')
<div class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Крок 2. Додати інгредієнти</div>
    
                    <div class="card-body">
                        <form action="{{ route('admin.add.reсipe.ingr.store') }}" method="POST">
                            @csrf
                            @foreach ($ingr_category_with as $ingrcat)
                            @php /** @var App\Models\IngrCategory $ingr_category_with */ @endphp
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <h6>{{ $ingrcat->name }}</h6>
                                    </div>
                                    
                                </div>
                                
                                @foreach ($ingrcat->ingredients as $ingredient)  
                                    <div class="form-row">
                                        <div class="form-group col-md-3">                                 
                                            <div class="custom-control custom-checkbox ">
                                            <input type="checkbox" class="custom-control-input" name="ingredient_ids[{{ $ingredient->id }}]" id="{{ $ingredient->id }}">
                                                <label class="custom-control-label" for="{{ $ingredient->id }}">{{ $ingredient->name }}</label>
                                            </div>  
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputCount">Кількість</label>
                                        <input type="text" class="form-control" id="inputCount" name="count{{ $ingredient->id }}" placeholder="1,5">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputMeasure">Міра</label>
                                            <input type="text" class="form-control" id="inputMeasure" name="measure{{ $ingredient->id }}" placeholder="кг/л/ст.л./г">
                                        </div>
                                    </div>
                                @endforeach
                                
                            @endforeach
                            
                            
                            <button type="submit" class="btn btn-outline-success">Додати інгредієнти та перейти на наступний крок</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection