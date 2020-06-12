@extends('layouts.header')

@section('content')

<div class="content">
    <div class="container">
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Управляння коллекціями</h6>
            <div class="media text-muted pt-3">
              
              <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <a href="#">Редагувати коллекцію</a>
              </p>
            </div>
            <div class="media text-muted pt-3">
              <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <a href="#">Видалити коллекцію</a>
              </p>
            </div>
            
        </div>
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Управляння користувачами</h6>
            <div class="media text-muted pt-3">
              
              <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <a href="#">Редагувати користувача</a>
              </p>
            </div>
            <div class="media text-muted pt-3">
              <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <a href="#">Видалити користувача</a>
              </p>
            </div>
            
        </div>
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Управління рецептами</h6>
            <div class="media text-muted pt-3">
              
              <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <a href="{{ route('admin.categories-ingredients.index') }}">Редагувати категорію  інгредієнтів</a>
              </p>
            </div>
            <div class="media text-muted pt-3">
              <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <a href="">Редагування інгредієнтів</a>
              </p>
            </div>
            <div class="media text-muted pt-3">
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                  <a href="#">Редагування категорії рецепту</a>
                </p>
            </div>
            <div class="media text-muted pt-3">
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                  <a href="{{ route('admin.recipes') }}">Редагування рецепту</a>
                </p>
            </div>
            
        </div>
         
    </div>
    
</div>
            @endsection
