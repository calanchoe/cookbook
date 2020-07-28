@extends('layouts.header')

@section('content')

<div class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Крок 1. Нова збірка</div>
    
                    <div class="card-body">
                        <form action="{{ route('admin.add.collection.store') }}" method="POST">
                            @csrf
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCollectionName">Назва</label>
                                <input type="text" class="form-control" id="inputCollectionName" name="name">
                            </div>
                            
                            </div>
                            <div class="mb-3">
                                <label for="validationTextarea">Опис збірки</label>
                                <textarea class="form-control is-invalid" name="description" id="validationTextarea" placeholder="Введіть тут опис збірки." required></textarea>
                                
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