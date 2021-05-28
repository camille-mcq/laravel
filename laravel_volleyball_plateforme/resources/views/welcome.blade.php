@extends('layouts.app')

@section('content')
    <section class="d-flex welcome">
        @include('partials.nav')
        <section class="main center">
            <h1 class="text-center">Welcome To The Volleyball Platform</h1>
            <section id="e_incomplete">
                <h2 class="text-center">Equipe incomplètes</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Pays</th>
                            <th scope="col">Maximun de joueurs</th>
                            <th scope="col">Continent</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($equipes as $key => $equipe)
                            @if (count($equipe->joueurs) <= $equipe->max && $key <= 2)
                                <tr>
                                    <td>{{ $equipe->id }}</td>
                                    <td>{{ $equipe->nom }}</td>
                                    <td>{{ $equipe->ville }}</td>
                                    <td>{{ $equipe->pays }}</td>
                                    <td>{{ $equipe->max }}</td>
                                    <td>{{ $equipe->continent->nom }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </section>
            <section id="e_complete">
                <h2 class="text-center">Equipe complètes</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Pays</th>
                            <th scope="col">Maximun de joueurs</th>
                            <th scope="col">Continent</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($equipes as $key => $equipe)
                            @if (count($equipe->joueurs) == $equipe->max && $key <= 2)
                                <tr>
                                    <td>{{ $equipe->id }}</td>
                                    <td>{{ $equipe->nom }}</td>
                                    <td>{{ $equipe->ville }}</td>
                                    <td>{{ $equipe->pays }}</td>
                                    <td>{{ $equipe->max }}</td>
                                    <td>{{ $equipe->continent->nom }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </section>
            <section id="j_sans_equipe">
                <h2 class="text-center">Joueurs sans équipe</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Age</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Pays</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($joueurs as $key => $joueur)
                            @if ($joueur->equipe_id <= 1 && $key <= 4 && $joueur->equipe->nom != "sans equipe")
                                <tr>
                                    <td>{{ $joueur->id }}</td>
                                    <td><img src="{{ asset("img/" . $joueur->photo->nom) }}" alt="" width="50"></td>
                                    <td>{{ $joueur->nom }}</td>
                                    <td>{{ $joueur->prenom }}</td>
                                    <td>{{ $joueur->age }}</td>
                                    <td>{{ $joueur->mail }}</td>
                                    <td>{{ $joueur->telephone }}</td>
                                    <td>{{ $joueur->pays }}</td>
                                    <td>{{ $joueur->genre->nom }}</td>
                                    <td>{{ $joueur->role->nom }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </section>
            {{-- Joueurs sans equipe --}}
            <section id="j_equipe">
                <h2 class="text-center">Joueurs avec équipe</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Age</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Pays</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Role</th>
                            <th scope="col">Equipe</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($joueurs as $key => $joueur)
                            @if ($joueur->equipe_id > 1 && $key <= 4)
                                <tr>
                                    <td>{{ $joueur->id }}</td>
                                    <td><img src="{{ asset("img/" . $joueur->photo->nom) }}" alt="" width="50"></td>
                                    <td>{{ $joueur->nom }}</td>
                                    <td>{{ $joueur->prenom }}</td>
                                    <td>{{ $joueur->age }}</td>
                                    <td>{{ $joueur->mail }}</td>
                                    <td>{{ $joueur->telephone }}</td>
                                    <td>{{ $joueur->pays }}</td>
                                    <td>{{ $joueur->genre->nom }}</td>
                                    <td>{{ $joueur->role->nom }}</td>
                                    <td>{{ $equipes[$joueur->equipe_id - 1]->nom }}</td>
                                </tr>

                            @endif
                        @endforeach
                    </tbody>
                </table>
            </section>

            <section id="e_europe">
                <h2 class="text-center">Equipe d'Europe</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Pays</th>
                            <th scope="col">Maximun de joueurs</th>
                            <th scope="col">Continent</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($equipes as $equipe)
                            @if ($equipe->continent->nom == 'Europe')
                                <tr>
                                    <td>{{ $equipe->id }}</td>
                                    <td>{{ $equipe->nom }}</td>
                                    <td>{{ $equipe->ville }}</td>
                                    <td>{{ $equipe->pays }}</td>
                                    <td>{{ $equipe->max }}</td>
                                    <td>{{ $equipe->continent->nom }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </section>
            <section id="e_hors_europe">
                <h2 class="text-center">Equipes hors Europe</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Pays</th>
                            <th scope="col">Maximun de joueurs</th>
                            <th scope="col">Continent</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($equipes as $equipe)
                            @if ($equipe->continent->nom != 'Europe' && $equipe->continent->nom != 'sans continent')
                                <tr>
                                    <td>{{ $equipe->id }}</td>
                                    <td>{{ $equipe->nom }}</td>
                                    <td>{{ $equipe->ville }}</td>
                                    <td>{{ $equipe->pays }}</td>
                                    <td>{{ $equipe->max }}</td>
                                    <td>{{ $equipe->continent->nom }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </section>
            <section id="femmes">
                <h2 class="text-center">Femmes</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Age</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Pays</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Role</th>
                            <th scope="col">Equipe</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{ dd($joueurs[0]->genre->nom, $joueurs[0]->photo->nom) }}
                        @foreach ($joueurs as $joueur)
                            <p>{{ $joueur->genre->nom }}</p>
                        @endforeach --}}
                        @foreach ($joueurs as $key => $joueur)
                            @if ($joueur->genre->nom == 'Femme' && $joueur->equipe_id > 1 && $key <= 5)
                                <tr>
                                    <td>{{ $joueur->id }}</td>
                                    <td><img src="{{ asset("img/" . $joueur->photo->nom) }}" alt="" width="50"></td>
                                    <td>{{ $joueur->nom }}</td>
                                    <td>{{ $joueur->prenom }}</td>
                                    <td>{{ $joueur->age }}</td>
                                    <td>{{ $joueur->mail }}</td>
                                    <td>{{ $joueur->telephone }}</td>
                                    <td>{{ $joueur->pays }}</td>
                                    <td>{{ $joueur->genre->nom }}</td>
                                    <td>{{ $joueur->role->nom }}</td>
                                    <td>{{ $joueur->equipe->nom }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </section>
            <section id="hommes">
                <h2 class="text-center">Hommes</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Age</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Pays</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Role</th>
                            <th scope="col">Equipe</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($joueurs as $key => $joueur)
                            @if ($joueur->genre->nom == 'Homme' && $joueur->equipe_id > 1 && $key <= 5)
                                <tr>
                                    <td>{{ $joueur->id }}</td>
                                    <td><img src="{{ asset("img/" . $joueur->photo->nom) }}" alt="" width="50"></td>
                                    <td>{{ $joueur->nom }}</td>
                                    <td>{{ $joueur->prenom }}</td>
                                    <td>{{ $joueur->age }}</td>
                                    <td>{{ $joueur->mail }}</td>
                                    <td>{{ $joueur->telephone }}</td>
                                    <td>{{ $joueur->pays }}</td>
                                    <td>{{ $joueur->genre->nom }}</td>
                                    <td>{{ $joueur->role->nom }}</td>
                                    <td>{{ $joueur->equipe->nom }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </section>
        </section>
    </section>
@endsection
