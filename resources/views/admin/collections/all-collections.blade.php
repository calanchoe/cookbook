@extends('layouts.header')

@section('content')
   

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                
                <a class="btn btn-outline-danger" href="{{ route('admin.add.collection') }}">Створити збірку</a>
                <br>
                <br>
                <div class="card">
                    <div class="card-header text-center">Збірки</div>
                    <div class="card-body">
                        <div class="table table-hover">
                            <table class="table table-striped table-bordered" style="width:100%" id="orders">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Назва</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($collections as $collection)
                                    @php /** @var \App\Models\Collection $collection */ @endphp
                                        <tr>
                                        <td>{{ $collection->id }}</td>
                                        <td>
                                        <a href="{{ route('admin.categories-ingredients.edit', $collection->id) }}">
                                            {{ $collection->name }}
                                        </a>  
                                        </td>
                                        
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($collections->total() > $collections->count())
                <br>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                {{ $collections->links() }}
                            </div>
                        </div>
                    </div>

                </div>

                
            @endif
    </div>
    <br>
@endsection
