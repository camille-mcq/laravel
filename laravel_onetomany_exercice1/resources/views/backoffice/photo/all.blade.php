@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    <section class="container">
        <h1 class="text-center my-5">Photo</h1>
        <a href={{ route("photos.create") }} class="btn btn-success">create</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Lien</th>
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
                        <td>{{ $photo->lien }}</td>
                        <td>{{ $photo->categorie }}</td>
                        <td>{{ $photo->description }}</td>
                        <td>{{ $photo->album->nom }}</td>
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-warning text-white mx-1" href={{ route("photo.show", $photo->id) }}>Show</a>
                                <a class="btn btn-primary text-white mx-1" href={{ route("photo.edit", $photo->id) }}>Edit</a>
                                <form action={{ route("photo.destroy", $photo->id) }} method="post">
                                    @csrf
                                    @method("delete")
                                    <button class="btn btn-danger text-white" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>  
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection