@extends('layouts.app')

@section('content')
    <section class="d-flex">
        @include('partials.nav2')
        <section class="container">
            <h1 class="text-center">Les équipes</h1>
            <a class="btn btn-success" href="{{ route('equipes.create') }}">Créer une nouvelle équipe</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nom de l'équipe</th>
                        <th scope="col">Ville</th>
                        <th scope="col">Nombre de joueurs</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($equipes as $equipe)
                        @if ($equipe->nom != 'sans equipe')
                            <tr>
                                <th scope="row">{{ $equipe->nom }}</th>
                                <td>{{ $equipe->ville }}</td>
                                <td>{{ $equipe->max }}</td>
                                <td>
                                    <a class="btn text-white mx-1 btn-secondary"
                                        href="{{ route('equipes.show', $equipe->id) }}">Show</a>
                                    <a class="btn text-white mx-1 btn-primary"
                                        href="{{ route('equipes.edit', $equipe->id) }}">Edit</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </section>
    </section>
@endsection
