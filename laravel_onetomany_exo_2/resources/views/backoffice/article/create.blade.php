@extends('layouts.app')

@section('content')     

<main class="container">
    <h1 class="text-center fs-4 mb-5 text-primary mt-5">Créer un article</h1>

    <form class="row w-50 mx-auto" action="{{route("articles.store")}}" method="post">
        @csrf
        <div class="col-6">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" id="">
        </div>
        <div class="col-6">
            <label class="form-label">Image</label>
            <input type="file" class="form-control" name="image">
        </div>
        <div class="col-12">
            <label class="form-label">Catégorie</label>
            <select name="" id="">
                <option>Catégorie 1</option>
                <option>Catégorie 2</option>
                <option>Catégorie 3</option>
                <option>Catégorie 4</option>
            </select>
        </div>
        <div class="col-12">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="col-12">
            <label class="form-label">Auteur</label>
            <textarea class="form-control" name="auteur" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="col-12">
            <label class="form-label">Date de publiation</label>
            <textarea class="form-control" name="date" id="" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary text-white w-auto mx-auto my-5">Create</button>
    </form>

</main>


@endsection