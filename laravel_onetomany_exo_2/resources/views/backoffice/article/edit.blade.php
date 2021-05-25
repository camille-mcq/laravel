@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    <div class="container">
        <h1 class="text-center my-5">Edit Article</h1>
        <form action={{ route('articles.update', $article->id) }} method="post" enctype="multipart/form-data">
            @csrf
            @method("put")
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" value={{ $article->nom }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Images</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="mb-3">
                <label class="form-label">Categorie</label>
                <select name="categorie" class="form-control">
                    <option value={{ $article->categorie }}>{{ $article->categorie }}</option>
                    <option>Catégorie 1</option>
                    <option>Catégorie 2</option>
                    <option>Catégorie 3</option>
                    <option>Catégorie 4</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" cols="30" rows="10">{{ $article->description }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Auteur</label>
                <input type="text" class="form-control" name="auteur" value={{ $article->auteur }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Date de publication</label>
                <input type="text" class="form-control" name="date" value={{ $article->date }}>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection