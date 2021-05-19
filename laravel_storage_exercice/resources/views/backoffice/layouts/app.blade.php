<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice Storage</title>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">CRUD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Albums</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href={{ route("photos") }}>Photos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <script src={{ asset('js/app.js') }}></script>
</body>

</html>