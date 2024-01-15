@extends('layouts.app')

@section('content')
    <h1>Movies</h1>
    <div class="container">
        <ul>
            @foreach ($movies as $movie)
            <li class="col-2 p-2">
                <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
                <h4 class="text-center">{{ $movie->title }}</h4>
            </li>
            @endforeach
        </ul>
    </div>
@endsection