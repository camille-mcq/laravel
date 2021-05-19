@extends('layout.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Photos</h1>
        <div class="d-block text-center mb-3">
            <a href="/photos/create" class="btn btn-success">Ajouter</a>
        </div>

        @if(session("message"))
            <div class="alert alert-success">{{ session("message") }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Image</th>
                    <th scope="col">Categorie</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($photos as $photo)
                    <tr>
                        <th scope="row">{{ $photo->id }}</th>
                        <td>{{ $photo->nom }}</td>
                        <td class="w-25">
                            <img src={{ asset("img/" .$photo->lien) }} alt="">
                        </td>
                        <td>{{ $photo->categorie }}</td>
                        <td>{{ $photo->description }}</td>
                        <td>
                            <div class="d-flex">
                                <form action="/photos/{{ $photo->id }}/download" method="post">
                                    @csrf
                                    <button class="btn btn-warning text-white" type="submit">
                                    <i class="fas fa-download"></i></button>
                                </form>
                                <a href="/photos/{{ $photo->id }}/edit" class="btn btn-primary text-white mx-2"></a>
                                <form action="/photos/{{ $photo->id }}/delete" method="POST">
                                    @csrf
                                    <button class="btn btn-danger text-white">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection