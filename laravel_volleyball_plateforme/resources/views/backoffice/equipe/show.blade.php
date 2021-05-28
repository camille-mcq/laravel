@extends('layouts.app')

@section('content')
<section class="d-flex justify-content-evenly">
    @include('partials.nav')
    <section>
        <div class="container">
        <h1 class="text-center my-5">Equipe</h1>

    <a href="{{route('equipes.index')}}" class="text-decoration-none text-primary fs-6 pb-2 d-block"> < Retour </a>

    <div class="container w-75 mx-auto">
        <div class="my-4">
            <span class="text-secondary">Nom</span>
            <h2 class="text-success my-1">{{ $equipe->nom }}</h2>
        </div>
        <div class="my-4">
            <span class="text-secondary">ville</span>
            <h2 class="text-secondary my-1">{{ $equipe->ville }}</h2>
        </div>
        <div class="my-4">
            <span class="text-secondary">Pays</span>
            <p class="fs-4 text-secondary my-1">{{ $equipe->pays }}</p>
        </div>
        <div class="my-4">
            <span class="text-secondary">Nombre de joueurs max</span>
            <p class="fs-4 text-secondary my-1">{{ $equipe->max }}</p>
        </div>
        <div class="my-4">
            <span class="text-secondary">Continent</span>
            <p class="fs-4 text-secondary my-1">{{ $equipe->continent->nom }}</p>
        </div>
    </div>
</main>
  
@endsection