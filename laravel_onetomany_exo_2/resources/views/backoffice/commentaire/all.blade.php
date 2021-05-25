@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section class="container">
        <h1 class="text-center my-5">Commentaire</h1>
        <a class="btn btn-success" href={{ route("commentaire.create") }}>Create ton com</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Message</th>
                    <th scope="col">Date du com</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($commentaires as $commentaire)
                    <tr>
                        <th scope="row">{{ $commentaire->id }}</th>
                        <td>{{ $commentaire->nom }}</td>
                        <td>{{ $commentaire->mail }}</td>
                        <td>{{ $commentaire->message }}</td>
                        <td>{{ $commentaire->date }}</td>
                        <td>
                            <div class="d-flex">
                                <a class="btn text-white mx-1 btn-warning" href={{ route("commentaires.show", $commentaire->id) }}>Show</a>
                                <a class="btn text-white mx-1 btn-primary" href={{ route("commentaires.edit", $commentaire->id) }}>Edit</a>
                                <form action={{ route("commentaires.destroy", $commentaire->id) }} method="post">
                                    @csrf
                                    @method("delete")
                                    <button class="btn text-white mx-1 btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>  
@endsection