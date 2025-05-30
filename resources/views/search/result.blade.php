@extends('user.layout.main')

@section('content')
  <h2>Search results for: {{ $keyword }}</h2>

  @if($results->isEmpty())
    <p>No results found.</p>
  @else
    <ul>
      @foreach($results as $item)
        <li><strong>{{ $item->title }}</strong> - {{ Str::limit($item->description, 100) }}</li>
      @endforeach
    </ul>
  @endif
@endsection
