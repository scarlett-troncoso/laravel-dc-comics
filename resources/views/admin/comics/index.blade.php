@extends('layouts.app')

@section('content')
    <div class="container min-vh-100 py-5">
        <div class="table-responsive">
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
                        <th>Actions</th>
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
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('comics.show', $comic) }}">View</a>
                                <a class="btn btn-primary btn-sm" href="{{ route('comics.edit', $comic) }}">Edit</a>
                                <form action="{{ route('comics.destroy', $comic) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
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
