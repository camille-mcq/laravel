@extends('layouts.app')

@section('content')
<section class="d-flex justify-content-evenly">
    @include('partials.nav')
    <section>
        <div class="container">
        <h1 class="text-center my-5">Joueur</h1>

    <a href="{{route('joueurs.index')}}" class="text-decoration-none text-primary fs-6 pb-2 d-block"> < Retour </a>

    <div class="container w-75 mx-auto">
        <div class="my-4">
            <span class="text-secondary">Nom</span>
            <h2 class="text-success my-1">{{ $joueur->nom }}</h2>
        </div>
        <div class="my-4">
            <span class="text-secondary">Prénom</span>
            <h2 class="text-success my-1">{{ $joueur->prenom }}</h2>
        </div>
        <div class="my-4">
            <span class="text-secondary">Age</span>
            <h2 class="text-secondary my-1">{{ $joueur->age }}</h2>
        </div>
        <div class="my-4">
            <span class="text-secondary">Téléphone</span>
            <h2 class="text-secondary my-1">{{ $joueur->telephone }}</h2>
        </div>
        <div class="my-4">
            <span class="text-secondary">Genre</span>
            <p class="fs-4 text-secondary my-1">{{ $joueur->genre->nom }}</p>
        </div>
        <div class="my-4">
            <span class="text-secondary">Pays</span>
            <p class="fs-4 text-secondary my-1">{{ $joueur->pays }}</p>
        </div>
        <div class="my-4">
            <span class="text-secondary">Role/Poste</span>
            <p class="fs-4 text-secondary my-1">{{ $joueur->role->nom }}</p>
        </div>
        <div class="my-4">
            <span class="text-secondary">Equipe</span>
            <p class="fs-4 text-secondary my-1">{{ $joueur->equipe->nom }}</p>
        </div>
    </div>
</main>
  
@endsection