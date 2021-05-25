@extends('layouts.app')

@section('content')     

<main class="container">
    <h1 class="text-center fs-4 mb-5 text-primary mt-5">Créer un commentaire</h1>

    <form class="row w-50 mx-auto" action="{{route("commentaires.store")}}" method="post">
        @csrf
        <div class="col-6">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" id="">
        </div>
        <div class="col-6">
            <label class="form-label">Mail</label>
            <input type="text" class="form-control" name="mail">
        </div>
        <div class="col-12">
            <label class="form-label">Message</label>
            <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="col-12">
            <label class="form-label">Date du commentaire</label>
            <textarea class="form-control" name="date" type="text"></textarea>
        </div>
        <button type="submit" class="btn btn-primary text-white w-auto mx-auto my-5">Create</button>
    </form>

</main>

@endsection