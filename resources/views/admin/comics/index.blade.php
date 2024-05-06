@extends('layouts.app')

@section('content')
    <div class="container d-flex">
        <!-- @*dd($comics) -->
        @foreach ($comics as $comic)
            <div class="card m-3" style="width: 18rem;">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->series }}</p>
                    <a href=" {{ route('comics.show', $comic) }} " class="btn btn-primary">View</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
