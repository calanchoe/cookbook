    @extends('layouts.header')

    @section('content')
       

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    
                    <a class="btn btn-outline-danger" href="{{ route('admin.categories-ingredients.create') }}">Додати категорію інгредієнтів</a>
                    
                    <div class="card">
                        <div class="card-header text-center">Категорії інгредієнтів</div>
                        <div class="card-body">
                            <div class="table table-hover">
                                <table class="table table-striped table-bordered" style="width:100%" id="orders">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Категорія</th>
                                            <!--<th>Батько</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ingrcategs as $ingrcateg)
                                        @php /** @var \App\Models\IngrCategory $ingrcateg */ @endphp
                                            <tr>
                                            <td>{{ $ingrcateg->id }}</td>
                                            <td>
                                            <a href="{{ route('admin.categories-ingredients.edit', $ingrcateg->id) }}">
                                                {{ $ingrcateg->name }}
                                            </a>  
                                            </td>
                                            <!--<td>{{ $ingrcateg->id}}</td>-->
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if ($ingrcategs->total() > $ingrcategs->count())
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    {{ $ingrcategs->links() }}
                                </div>
                            </div>
                        </div>

                    </div>

                    
                @endif
        </div>
    @endsection

