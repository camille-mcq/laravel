@extends('layouts.app')

@section('content')
<section class="d-flex justify-content-evenly">
    @include('partials.nav')
    <section>
        <div class="container">
        <h1 class="text-center my-5">Profil</h1>

    <a href="{{route('profil.index')}}" class="text-decoration-none text-primary fs-6 pb-2 d-block"> < Retour </a>

    <div class="container w-75 mx-auto">
        <div class="my-4">
            <span class="text-secondary">Nom</span>
            <h2 class="text-success my-1">{{ $profil->name }}</h2>
        </div>
        <div class="my-4">
            <span class="text-secondary">Age</span>
            <h2 class="text-secondary my-1">{{ $profil->age }}</h2>
        </div>
        <div class="my-4">
            <span class="text-secondary">Téléphone</span>
            <p class="fs-4 text-secondary my-1">{{ $profil->telephone }}</p>
        </div>
    </div>
</main>
  
@endsection