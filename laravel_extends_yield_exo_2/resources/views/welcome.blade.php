@extends('layouts.app')

@section('content')
    @include('partials.nav')
    @include('partials.banner')
    <section class="my-5">
        <div class="container py-5 px-4 bg-gris text-center rounded">
            <h2>Hello CodingSchool</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, laudantium?</p>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
            <a class="btn btn-primary text-white" href="">About</a>
        </div>
    </section>
    @include('partials.footer')
@endsection