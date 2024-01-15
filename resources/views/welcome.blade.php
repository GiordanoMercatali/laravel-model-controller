@extends('layouts.app')

@section('content')
    <h1>Movies</h1>
    <div class="container">
        {{-- <ul> --}}
            
        <div class="row d-flex justify-content-center align-baseline flex-wrap">
            @foreach ($movies as $movie)
                <div class="col-3 p-1">
                    <div class="card">
                        <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
                        <h4 class="text-center">{{ $movie->title }}</h4>
                        {{-- <h5 class="text-center">{{ $movie->original_title }}</h5> --}}
                        @if ($movie->original_title != $movie->title)
                        <h5 class="text-center">{{ $movie->original_title }}</h5>
                        @endif
                        <p class="text-center">{{ $movie->vote }}</p>
                    </div>
                </div>
            @endforeach
        </div>
            
        {{-- </ul> --}}
    </div>
@endsection