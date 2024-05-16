@extends('layouts.app')

@section('content')
    <div class="container d-flex">
        <!-- @*dd($comics) -->
        <section class="comics">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 row-cols-xxl-6">
                    @forelse ($comics as $comic)
                        <div class="col card m-3" style="width: 18rem;">
                            <a href=" {{ route('guests.comics.show', $comic) }} " class="btn btn-primary">
                                <img src="{{ $comic->thumb }}" class="img-fluid card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic->title }}</h5>
                                <p class="card-text">{{ $comic->series }}</p>
                                <a href=" {{ route('guests.comics.show', $comic) }} " class="btn btn-primary">View</a>
                            </div>
                        </div>
                    @empty
                        <div class="col">
                            no comics yet!
                        </div>
                    @endforelse

                </div>
            </div>
        </section>
    </div>
@endsection
