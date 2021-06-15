<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @extends('layouts.app')
    @section('content')
      @include('partials.nav')
      @include('partials.hero')
      @include('partials.about')
      @include('partials.features')
      @include('partials.services')
      @include('partials.portfolio')
      @include('partials.testimonials')
      @include('partials.team')
      @include('partials.contact')
      @include('partials.footer')
  <!--Bouton pour remonter à droite -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>
</html>