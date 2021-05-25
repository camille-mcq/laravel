@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    <div class="container">
        <h1 class="text-center my-5">Edit Commentaire</h1>
        <form action={{ route('commentaires.update', $commentaire->id) }} method="post" enctype="multipart/form-data">
            @csrf
            @method("put")
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" value={{ $commentaire->nom }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Mail</label>
                <input type="text" class="form-control" name="mail" value={{ $commentaire->mail }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Message</label>
                <input type="text" class="form-control" name="message" value={{ $commentaire->message }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Date du commentaire</label>
                <textarea class="form-control" name="date" cols="30" rows="10">{{ $commentaire->date }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection