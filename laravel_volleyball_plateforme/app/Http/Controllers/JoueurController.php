<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Equipe;
use App\Models\Genre;
use App\Models\Joueur;
use App\Models\Photo;
use App\Models\Role;
use Database\Seeders\RoleSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $joueurs = Joueur::all();
        return view("backoffice.joueur.all", compact("joueurs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipes = Equipe::all();
        $continents = Continent::all();
        $roles = Role::all();
        $genres = Genre::all();
        return view("backoffice.joueur.create", compact("continents", "equipes", "roles", "genres"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $joueur = new Joueur();

        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->age = $request->age;
        $joueur->telephone = $request->telephone;
        $joueur->mail = $request->mail;
        $joueur->genre_id = $request->genre_id;
        $joueur->pays = $request->pays;
        $joueur->role_id = $request->role_id;
        $joueur->equipe_id = $request->equipe_id;
        
        $joueur->save();
        
        $photo = new Photo();
        $photo->nom = $request->file('photo');
        $photo->joueur_id = $joueur->id;
        $photo->save();
        $request->file('photo')->storePublicly('img', 'public');

        return redirect()->route("joueurs.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function show(Joueur $joueur)
    {
        $equipes = Equipe::all();
        $continents = Continent::all();
        $roles = Role::all();
        $genres = Genre::all();
        return view("backoffice.joueur.show", compact("equipes", "continents", "roles", "genres", "joueur"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function edit(Joueur $joueur)
    {
        $equipes = Equipe::all();
        $continents = Continent::all();
        $roles = Role::all();
        $genres = Genre::all();
        return view("backoffice.joueur.edit", compact("equipes", "continents", "roles", "genres", "joueur"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Joueur $joueur)
    {
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->age = $request->age;
        $joueur->telephone = $request->telephone;
        $joueur->mail = $request->mail;
        $joueur->genre_id = $request->genre_id;
        $joueur->pays = $request->pays;
        $joueur->role_id = $request->role_id;
        $joueur->equipe_id = $request->equipe_id;
        $photos = Photo::all();
        Storage::disk('public')->delete("img/" . $joueur->photo->nom);
        $joueur->save();

        $photo = new Photo();
        $photo->nom = $request->file('photo');
        $photo->joueur_id = $joueur->id;
        $photo->save();
        $request->file('photo')->storePublicly('img', 'public');

        return redirect()->route("joueurs.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joueur $joueur)
    {
        Storage::disk("public")->delete("img/" . $joueur->photo->nom);
        $joueur->delete();
    
        return redirect()->back(); 
    }
}
