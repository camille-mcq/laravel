@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    <div class="container">
        <h1 class="text-center">Create Photo</h1>
        <form action={{ route('photos.store', $photo->id) }} method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" value={{ $phot->nom }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Lien</label>
                <input type="text" class="form-control" name="lien">
            </div>
            <div class="mb-3">
                <label class="form-label">Categorie</label>
                <select name="categorie" id="">
                    <option value={{ $photo->categorie }}>{{ $photo }}</option>
                    <option value="item2">Item 2</option>
                    <option value="item3">Item 3</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea type="text" class="form-control" name="description" cols="30" rows="10">{{ $photo->description }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Album</label>
                <select name="album_id" class="form-control">
                    @foreach($albums as $album)
                            <option value={{ $album->id }}>{{ $album->nom }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection