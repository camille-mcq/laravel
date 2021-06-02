@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center justify-content-center mb-5">
        <h1 class="my-0 mx-2">Profil</h1>
        <a href={{ route('profil.create') }} class="btn btn-success text-white"><i class="fas fa-plus"></i></a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Age</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profils as $profil)
                <tr>
                    <td>{{ $profil->name }}</td>
                    <td>{{ $profil->age }}</td>
                    <td>{{ $profil->telephone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

