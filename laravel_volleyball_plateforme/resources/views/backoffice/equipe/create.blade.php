@extends('layouts.app')

@section('content')
    <section class="d-flex justify-content-evenly">
        @include('partials.nav')
        <section>
            <div class="container">
                <h1 class="text-center my-5">Créer une nouvelle équipe</h1>
                <a href="{{ route('equipes.index') }}" class="text-decoration-none text-primary fs-6 pb-2 d-block">< Retour </a>
                    <form action={{ route('equipes.store') }} method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nom</label>
                            <input type="text" class="form-control" name="nom">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ville</label>
                            <input type="text" class="form-control" name="ville">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pays</label>
                            <input type="text" class="form-control" name="pays">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nombre de joueurs max</label>
                            <input type="text" class="form-control" name="max">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Continent</label>
                            <select name="continent_id" id="">
                                @foreach ($continents as $continent)
                                    @if ($continent->nom != 'sans continent')
                                        <option value="{{ $continent->id }}">{{ $continent->nom }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary text-white">Créer</button>
                    </form>
            </div>
        </section>
    </section>
@endsection
