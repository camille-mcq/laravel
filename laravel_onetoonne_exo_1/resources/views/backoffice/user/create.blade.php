@extends('layouts.app')

@section('content')
    <h1 class="text-center my-5">Créer un user</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">E-Mail</label>
            <input type="text" class="form-control" name="mail">
        </div>
        <div class="mb-3">
            <label class="form-label">Nickname</label>
            <input type="text" class="form-control" name="nickname">
        </div>
        <div class="mb-3">
            <label class="form-label">Profil</label>
            <input type="text" class="form-control" name="telephone">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection