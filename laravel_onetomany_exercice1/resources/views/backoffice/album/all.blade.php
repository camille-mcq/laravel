@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    <section class="container">
        <h1 class="text-center my-5">Album</h1>
        <a href={{ route("albums.create") }} class="btn btn-success">create</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($albums as $album)
                    <tr>
                        <th scope="row">{{ $album->id }}</th>
                        <td>{{ $album->nom }}</td>
                        <td>{{ $album->description }}</td>
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-success text-white mx-1" href={{ route("albums.show", $album->id) }}>Show</a>
                                <a class="btn btn-primary text-white mx-1" href={{ route("albums.edit", $album->id) }}>Edit</a>
                                <form action={{ route("albums.destroy", $album->id) }} method="post">
                                    @csrf
                                    @method("delete")
                                    <button class="btn btn-danger text-white" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>  
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection