@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    <section class="container">
        <h1 class="text-center my-5">Article</h1>
        <a class="btn btn-success" href={{ route("article.create") }}>Create</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Images</th>
                    <th scope="col">Categorie</th>
                    <th scope="col">Description</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Date de publication</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <th scope="row">{{ $article->id }}</th>
                        <td>{{ $article->nom }}</td>
                        <td><img style="width : 200px" src={{ asset('img/'. $article->image) }} alt=""></td>
                        <td>{{ $article->categorie }}</td>
                        <td>{{ $article->description }}</td>
                        <td>{{ $article->auteur }}</td>
                        <td>{{ $article->date }}</td>
                        <td>
                            <div class="d-flex">
                                <a class="btn text-white mx-1 btn-warning" href={{ route("articles.show", $article->id) }}>Show</a>
                                <a class="btn text-white mx-1 btn-primary" href={{ route("articles.edit", $article->id) }}>Edit</a>
                                <form action={{ route("articles.destroy", $article->id) }} method="post">
                                    @csrf
                                    @method("delete")
                                    <button class="btn text-white mx-1 btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>  
@endsection