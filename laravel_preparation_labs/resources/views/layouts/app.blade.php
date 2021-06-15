<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Favicons -->
  <link href={{ asset('img/favicon.png') }} rel="icon">
  <link href={{ asset('img/apple-touch-icon.png') }} rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{ asset('css/aos.css') }} rel="stylesheet">
  <link href={{ asset('css/bootstrap.min.css') }} rel="stylesheet">
  <link href={{ asset('css/bootstrap-icons.css') }} rel="stylesheet">
  <link href={{ asset('css/boxicons.min.css') }} rel="stylesheet">
  <link href={{ asset('css/glightbox.min.css') }} rel="stylesheet">
  <link href={{ asset('css/swiper-bundle.min.css') }} rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href={{ asset('css/style.css') }} rel="stylesheet">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @yield('content')

        </div>
        <!-- Vendor JS Files -->
  <script src={{ asset('js/aos.js') }}></script>
  <script src={{ asset('js/bootstrap.bundle.min.js') }}></script>
  <script src={{ asset('js/glightbox.min.js') }}></script>
  <script src={{ asset('js/isotope.pkgd.min.js') }}></script>
  <script src={{ asset('js/validate.js') }}></script>
  <script src={{ asset('js/swiper-bundle.min.js') }}></script>

  <!-- Template Main JS File -->
  <script src={{ asset('/js/main.js') }}></script>

    </body>
</html>
