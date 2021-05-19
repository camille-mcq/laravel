@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Edit Photo</h1>
        <ul class="alert-danger">
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
        <form action="/photos/{{ $photo->id }}/update" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $photo->nom }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" class="form-control" name="lien" value="{{ $photo->lien }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Categorie</label>
                <select class="form-select" name="categorie">
                    <option value="{{ $photo->categorie }}">{{ $photo->categorie }}</option>
                    <option value="item1">Item 1</option>
                    <option value="item2">Item 2</option>
                    <option value="item3">Item 3</option>
                    <option value="item4">Item 4</option>
                    <option value="item5">Item 5</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description">{{ $photo->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection