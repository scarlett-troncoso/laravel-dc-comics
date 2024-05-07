@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="table-responsive container">
            <a class="btn btn-primary rounded-pill position-fixed bottom-0 end-0 m-3" href=" {{ route('comics.create') }} "
                role="button">
                <i class="fa-solid fa-plus"></i>
                <span>ADD</span>
            </a>
            <table class="table table-primary fs-6">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Thumb</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">Sale date</th>
                        <th scope="col">Type</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr class="">
                            <td scope="row">{{ $comic->id }}</td>
                            <td>{{ $comic->title }}</td>
                            <td>
                                <img width="100" src="{{ $comic->thumb }}" alt="">
                            </td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>{{ $comic->created_at }}</td>
                            <td> <a href="{{ route('comics.show', $comic) }}">View</a> </td>
                        </tr>
                    @empty
                        <tr class="">
                            <td scope="row">no comics yet</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
