@extends('layouts.app')

@section('content')
    @include('partials.nav')
    @include('partials.banner')
    <div class="card">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="" alt="">
                </div>
                <div class="col-6">
                    <h2>About Modern School</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur exercitationem tenetur magnam quos dolores ipsum aliquid repellendus maxime eaque optio.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium et minus eos distinctio provident repellendus.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id fugit sit ea natus. Voluptates, deserunt!</p>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
@endsection
