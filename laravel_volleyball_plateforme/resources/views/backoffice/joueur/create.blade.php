@extends('layouts.app')

@section('content')
    <section class="d-flex justify-content-evenly">
        @include('partials.nav')
        <section>
            <div class="container">
            <h1 class="text-center my-5">Créer un nouveau joueur</h1>
            <a href="{{route('joueurs.index')}}" class="text-decoration-none text-primary fs-6 pb-2 d-block"> < Retour </a>
            <form action={{ route('joueurs.store') }} method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                     <label class="form-label">Nom</label>
                     <input type="text" class="form-control" name="nom">
                </div>
                <div class="mb-3">
                    <label class="form-label">Prénom</label>
                    <input type="text" class="form-control" name="prenom">
               </div>
               <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="text" class="form-control" name="age">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="mail">
               </div>
               <div class="mb-3">
                     <label class="form-label">Téléphone</label>
                     <input type="text" class="form-control" name="telephone">
                </div>
                <div class="mb-3">
                    <label class="form-label">Pays d'origine</label>
                    <input type="text" class="form-control" name="pays">
                </div>
                <div class="mb-3">
                    <label class="form-label">Genre</label>
                    <select name="genre_id" id="">
                        @foreach($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Poste/Rôle</label>
                    <select name="role_id" id="">
                        @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->nom }}</option>
                        
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Equipe</label>
                    <select name="equipe_id" id="">
                        @foreach($equipes as $equipe)
                        <option value="{{ $equipe->id }}">{{ $equipe->nom }}</option>
                        
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Continent</label>
                    <select name="continent_id" id="">
                        @foreach($continents as $continent)
                        <option value="{{ $continent->id }}">{{ $continent->nom }}</option>
                        
                        @endforeach
                    </select>
                   
                    
                </div>
                <button type="submit" class="btn btn-primary text-white">Créer</button>
            </form>
        </div></section>
        
    </section>
@endsection
