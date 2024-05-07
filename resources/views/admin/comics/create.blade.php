@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
            <!--ATTENZIONE: la route é 'comics.store' e NON 'admin.comics.store' perche: é una Route fa riferimento alla Route 'comics' e non alla cartella comics di views-->
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="Title..." />
                <small id="helpId" class="form-text text-muted">Type a title of comic</small>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper"
                    placeholder="https//...." />
                <small id="helpId" class="form-text text-muted">Insert link of image</small>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" id="price" aria-describedby="priceHelper"
                    placeholder="50.89" />
                <small id="helpId" class="form-text text-muted">Price</small>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper"
                    placeholder="Series ..." />
                <small id="helpId" class="form-text text-muted">series</small>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date"
                    aria-describedby="sale_dateHelper" placeholder="2022-04-25" />
                <small id="helpId" class="form-text text-muted">Sale date</small>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="date" class="form-control" name="type" id="type" aria-describedby="typeHelper"
                    placeholder="Type...." />
                <small id="helpId" class="form-text text-muted">Type</small>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection