@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center justify-content-center mb-5">
        <h1 class="my-0 mx-2">User</h1>
        <a href={{ route('users.create') }} class="btn btn-success text-white"><i class="fas fa-plus"></i></a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">E-mail</th>
                <th scope="col">Nickname</th>
                <th scope="col">Profil</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{  $user->id }}</th>
                    <td>{{ $user->mail }}</td>
                    <td>{{ $user->nickname }}</td>
                    <td>{{ $user->profil }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

