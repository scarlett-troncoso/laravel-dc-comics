@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="w-75 d-flex">
            <div class="card m-3 w-25" style="width: 18rem;">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->series }}</p>
                    <a href=" {{ route('comics.show', $comic) }} " class="btn btn-primary">View</a>
                </div>
            </div>
            <div class="w-50 m-3">
                <p class="card-text">{{ $comic->description }}</p>
            </div>
        </div>


    </div>
@endsection
