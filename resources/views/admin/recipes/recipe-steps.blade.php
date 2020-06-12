@extends('layouts.header')

@section('content')

<div class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Додати кроки до рецепту</div>
    
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputLevel">Рецепт</label>
                                    <select id="inputLevel" class="form-control">
                                    <option selected>Оберіть рецепт...</option>
                                    <option>Новичок</option>
                                    <option>Мастер</option>
                                    <option>Ніндзя</option>
                                    </select>
                                </div>
                            </div>   
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="inputRecipeName">Номер кроку</label>
                                    <input type="text" class="form-control" id="inputRecipeName">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPhoto">Вкажіть шлях до фото кроку</label>
                                    <input type="text" class="form-control" id="inputPhoto">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="validationTextarea">Опис дій в кроку</label>
                                <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Введіть тут опис дій кроку." required></textarea>
                                
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