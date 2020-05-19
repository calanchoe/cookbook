@extends('layouts.header')

@section('content')
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 " >
                    <!-- Пункты вертикального меню -->
                    <h3>Редагування користувачів</h3>
                    <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="#link-1">Редагувати користувача</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#link-2">Видалити користувача</a>
                    </li>
                    </ul>
                    <h3>Управління рецептів</h3>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.categories-ingredients.index') }}">Редагувати категорію  інгредієнтів</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#link-2">Редагування категорій інгредієнтів</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#link-3">Видалити категорію інгредієнтів</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#link-4">Додати інгредієнт</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#link-5">Редагувати інгредієнт</a>
                        </li>
                        <a class="nav-link" href="#link-1">Видалити  інгредієнти</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#link-2">Редагування  категорій рецептів</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#link-3">Видалити категорію рецептів</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#link-4">Додати рецепт</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#link-5">Редагувати рецепт</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#link-5">Видалити рецепт</a>
                        </li>
                        </ul>
                </div>
                <div class="col-md-6">
                    <!-- Основной контент страницы  -->
                    ...
                </div>
            </div>
            </div>
            @endsection
