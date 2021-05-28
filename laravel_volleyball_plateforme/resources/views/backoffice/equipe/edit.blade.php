
{{--  --}}

@extends('layouts.app')

@section('content')
<section class="d-flex justify-content-evenly">
    @include('partials.nav')
    <section>
        <div class="container">
        <h1 class="text-center my-5">Modifier une équipe</h1>
        <a href="{{route('equipes.index')}}" class="text-decoration-none text-primary fs-6 pb-2 d-block"> < Retour </a>
            <form action="/equipes/{{$equipe->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                     <label class="form-label">Nom</label>
                     <input type="text" class="form-control" name="nom" value={{ $equipe->nom }}>
                </div>
                <div class="mb-3">
                    <label class="form-label">Ville</label>
                    <input type="text" class="form-control" name="ville" value={{ $equipe->ville }}>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pays</label>
                    <input type="text" class="form-control" name="pays" value={{ $equipe->pays }}>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nombre de joueurs max</label>
                    <input type="text" class="form-control" name="max" value={{ $equipe->max }}>
                </div>
                <div class="mb-3">
                    <label class="form-label">Continent</label>
                    <select name="continent_id" id="">
                        @foreach($continents as $continent)
                        <option value="{{ $continent->id }}">{{ $continent->nom }}</option>
                        @endforeach
                    </select>
                
                </div>
                <button type="submit" class="btn btn-primary text-white">Modifier</button>
            </form>
        </div></section>
        
    </section>
@endsection



