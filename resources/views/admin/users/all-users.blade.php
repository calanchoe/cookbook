@extends('layouts.navbar')

@section('content')
<div class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                
                
                <br>
                <div class="card">
                    <div class="card-header text-center">Користувачі</div>
                    <div class="card-body">
                        <div class="table table-hover">
                            <table class="table table-striped table-bordered" style="width:100%" id="orders">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ім'я</th>
                                        <th>Роль</th>
                                        <th>email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    @php /** @var \App\User $user */ @endphp
                                        <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>
                                        <a href="{{ route('admin.user.edit', ['user' => $user->id]) }}">
                                            {{ $user->name }}
                                        </a>  
                                        </td>
                                        @foreach ($roles as $role)
                                        @if ($user->role_id == $role->id )
                                        <td>{{ $role->name }}</td>
                                        @endif
                                        @endforeach
                                        <td>{{ $user->email}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($users->total() > $users->count())
                <br>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>

                </div>

                
            @endif
    </div>
</div>
@endsection