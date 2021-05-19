<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
    <h1>Users</h1>
    @foreach ($users as $user)
        <p>{{ $user->name }}</p>
        {{-- autre écriture possible si on veut afficher le nom et l'email
    <p>{{ $user->name . " " . $user->email }}</p> --}}
        <form action="/user/{{ $user->id }}/delete" method="POST">
            @csrf 
            {{-- pour sécuriser le formulaire, c'est obligatoire sur Laravel --}}
            <button type="submit">Delete</button>
        </form>
    @endforeach
</body>

</html>