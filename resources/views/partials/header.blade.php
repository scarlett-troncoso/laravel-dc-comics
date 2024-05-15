@extends('layouts.app')

@section('content')
    <header>
        <div class="p-3">
            <a href=" {{ route('comics.index') }} " class="btn btn-primary">Admin</a>
            <a href="/" class="btn btn-primary">Home</a>
        </div>
    </header>
@endsection
