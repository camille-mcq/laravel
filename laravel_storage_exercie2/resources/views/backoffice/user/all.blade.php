@extends('layouts.app')

@section('content')
<main>
    <h1>Users</h1>
    <div>
        <a href="/users/create">Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Age</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Mot de passe</th>
                    <th scope="col">Photo de profil</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->nom }}</td>
                        <td>{{ $user->prenom }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->mdp }}</td>
                        <td>{{ $user->pdp }}</td>
                        <td>
                            <a href="/users/{{ $user->id }}/edit">Edit</a>
                            <form action="/users/{{ $user->id }}/delete" method="POST">
                                @csrf
                                <button class="bg-danger" type="submit" >Delete</button>
                            </form>
                       </td>
                    </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</main>
@endsection