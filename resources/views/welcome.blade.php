@extends('layouts.app')

@section('content')
    <div class="container d-flex">
        <!-- @*dd($comics) -->
        <section class="comics">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 row-cols-xxl-6">
                    @forelse ($comics as $comic)
                        <div class="col">
                            <a href=" {{ route('comics.show', $comic) }} " class="btn btn-primary">
                                <img src="{{ $comic->thumb }}" class="img-fluid" alt="...">
                            </a>
                            <h5 class="card-title">{{ $comic->series }}</h5>
                        </div>
                    @empty
                        <div class="col">
                            no comics yet!
                        </div>
                    @endforelse

                </div>
            </div>
        </section>


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
