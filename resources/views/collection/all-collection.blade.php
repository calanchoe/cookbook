@extends('layouts.navbar')

@section('content')
<div class="content">
  <div class="container">
      <!-- Example row of columns -->
    <div class="row row-cols-3-md">
        
        @foreach ($collections as $collection)
        @php /** @var \App\Models\Collection $collection */ @endphp
        
            <div class="col-md-4">
            <h2>{{ $collection->name }}</h2>
            <p>{{ $collection->description }}</p>
            <p><a class="btn btn-secondary" href="{{ route('collection.show-collection', ['collection' => $collection->id]) }}" role="button">Дивитись &raquo;</a></p>
            </div>
        @endforeach
      </div>
  
      <hr>
  </div>
</div>
@endsection