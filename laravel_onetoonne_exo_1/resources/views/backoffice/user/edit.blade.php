@extends('layouts.app')

@section('content')
<section class="d-flex justify-content-evenly">
    @include('partials.nav')
    <section>
        <div class="container">
        <h1 class="text-center my-5">Modifier un user</h1>
        <a href="{{route('users.index')}}" class="text-decoration-none text-primary fs-6 pb-2 d-block"> < Retour </a>
            <form action="/users/{{$user->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                     <label class="form-label">E-mail</label>
                     <input type="text" class="form-control" name="mail" value={{ $profil->mail }}>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nickname</label>
                    <input type="text" class="form-control" name="nickname" value={{ $profil->nickname }}>
                </div>
                <div class="mb-3">
                    <label class="form-label">Profil</label>
                    <input type="text" class="form-control" name="profil" value={{ $profil->nom }}>
                </div>
                
                <button type="submit" class="btn btn-primary text-white">Modifier</button>
            </form>
        </div></section>
        
    </section>
@endsection

