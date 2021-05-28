@extends('layouts.app')

@section('content')
    <section class="d-flex">
            @include('partials.nav2')
            <section class="container">
                <h1 class="text-center">Les joueurs</h1>
                <a class="btn btn-success" href="{{ route("joueurs.create") }}">Créer un nouveau joueur</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Equipe</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($joueurs as $joueur)
                            <tr>
                                <th scope="row">{{ $joueur->nom}}</th>
                                <td>{{ $joueur->prenom }}</td>
                                <td>{{ $joueur->equipe->nom }}</td>
                                <td>
                                    <a class="btn text-white mx-1 btn-secondary" href="{{ route("joueurs.show", $joueur->id) }}">Show</a>
                                    <a class="btn text-white mx-1 btn-primary" href="{{ route("joueurs.edit", $joueur->id) }}">Edit</a>
                                    <form action={{ route("joueurs.destroy", $joueur->id) }} method="post">
                                        @csrf
                                        @method("delete")
                                        <button class="btn text-white mx-1 btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
    </section>
@endsection
