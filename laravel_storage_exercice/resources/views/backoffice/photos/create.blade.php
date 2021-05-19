@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Create Photo</h1>
        <ul>
            @foreach($error->all() as $message)
                <li>{{ $message }}</li>                
            @endforeach
        </ul>
        <form action="/photos/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" name="lien">
            </div>
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="text" class="form-control" name="lien">
            </div>
            <div class="mb-3">
                <label class="form-label">Categorie</label>
                <select name="categorie" class="form-label">
                    <option value="item1">item1</option>
                    <option value="item2">item2</option>
                    <option value="item3">item3</option>
                    <option value="item4">item4</option>
                    <option value="item5">item5</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea type="text" class="form-control" name="lien"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection