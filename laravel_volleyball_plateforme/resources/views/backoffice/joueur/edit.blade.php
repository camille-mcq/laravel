@extends('layouts.app')

@section('content')
    <section class="d-flex justify-content-evenly">
        @include('partials.nav')
        <section>
            <div class="container">
            <h1 class="text-center my-5">Mettre à jour les informations</h1>
            <a href="{{route('joueurs.index')}}" class="text-decoration-none text-primary fs-6 pb-2 d-block"> < Retour </a>
            <form action="/joueurs/{{$joueur->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                     <label class="form-label">Nom</label>
                     <input type="text" class="form-control" name="nom" value={{ $joueur->nom }}>
                </div>
                <div class="mb-3">
                    <label class="form-label">Prénom</label>
                    <input type="text" class="form-control" name="prenom" value={{ $joueur->prenom }}>
               </div>
               <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="text" class="form-control" name="age" value={{ $joueur->age }}>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="mail" value={{ $joueur->mail }}>
               </div>
               <div class="mb-3">
                     <label class="form-label">Téléphone</label>
                     <input type="text" class="form-control" name="telephone" value={{ $joueur->telephone }}>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pays d'origine</label>
                    <input type="text" class="form-control" name="pays" value={{ $joueur->pays }}>
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
                <button type="submit" class="btn btn-primary text-white">Update</button>
            </form>
        </div></section>
        
    </section>
@endsection
