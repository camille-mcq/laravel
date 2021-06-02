@extends('layouts.app')

@section('content')
<section class="d-flex justify-content-evenly">
    @include('partials.nav')
    <section>
        <div class="container">
        <h1 class="text-center my-5">Modifier un profil</h1>
        <a href="{{route('profil.index')}}" class="text-decoration-none text-primary fs-6 pb-2 d-block"> < Retour </a>
            <form action="/profil/{{$profil->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                     <label class="form-label">Nom</label>
                     <input type="text" class="form-control" name="name" value={{ $profil->name }}>
                </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="text" class="form-control" name="age" value={{ $profil->age }}>
                </div>
                <div class="mb-3">
                    <label class="form-label">Téléphone</label>
                    <input type="text" class="form-control" name="telephone" value={{ $profil->telephone }}>
                </div>
                
                <button type="submit" class="btn btn-primary text-white">Modifier</button>
            </form>
        </div></section>
        
    </section>
@endsection

