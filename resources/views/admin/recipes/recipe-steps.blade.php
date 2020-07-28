@extends('layouts.header')

@section('content')

<div class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">крок3. Додати кроки до рецепту</div>
    
                    <div class="card-body">
                    <form action="{{ route('admin.add.reсipe.step.store') }}" method="POST">
                        @csrf
                            <div class="form-row">
                            </div>   
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="inputRecipeName">Номер кроку</label>
                                    <input type="text" class="form-control" id="inputRecipeName" name="num_step">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPhoto">Вкажіть шлях до фото кроку</label>
                                    <input type="text" class="form-control" id="inputPhoto" name="photo">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="validationTextarea">Опис дій в кроку</label>
                                <textarea class="form-control is-invalid" name="description_step" id="validationTextarea" placeholder="Введіть тут опис дій кроку." required></textarea>
                                
                            </div> 

                            
                            <button type="submit" class="btn btn-outline-success">Додати</button>
                        <a href="{{ route('admin.recipes.return') }}" class="btn btn-outline-success">Закінчити додавати кроки</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection