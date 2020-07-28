@extends('layouts.navbar')

@section('content')
<div class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Редагування користувача</div>
    
                    <div class="card-body">
                    <form action="{{ route('admin.add.user.update') }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" style="display: none"  name="id" value="{{ $user->id }}">
                                <label for="inputUserName">Ім'я</label>
                            <input type="text" class="form-control" id="inputUserName" name="name" value="{{ $user->name }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <input type="text" class="form-control" id="inputEmail" name="email" value="{{ $user->email }}">
                            </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputRole">Роль</label>
                                <select id="inputRole" name="role_id" class="form-control">
                                @foreach ($roles as $role)
                                @if ($user->role_id == $role->id )
                                <option selected value="{{ $user->id }}">{{ $role->name }}</option>
                                @else
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endif
                                @endforeach
                                </select>
                            </div>
                            </div>
                            
                            <button type="submit" class="btn btn-outline-success">Редагувати</button>
                        </form>
                        <br>
                        <form class="hide-print" action="{{ route('admin.add.user.delete', ['id' => $user->id]) }}" method="POST">
                            @csrf
                            @method('put')
                                        <button type="submit" class="btn btn-outline-danger">Видалити користувача</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
</div>
@endsection