<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //fonction index

    public function index(){
        // variable qui va nous permettre de selectionner les éléments de notre modele
        $users = User::all();
    
        return view('backoffice.user.all', compact('users'));
    }

    //Fonction destroy

    public function destroy($id) {
        
        $user = User::find($id);
        $user->delete()

        return redirect()->back();

    }

    //function edit

    public function edit($id) {
        $user = User::find($id);

        return view('backoffice.user.edit', compact('users'))
    }

    //function update

    public function update($id, Request $request){
        
        $user = User::find($id);

        //dire quoi request
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->mdp = $user->mdp;
        $user->pdp = $user->pdp;

        //save
        $user->save();

        //rediriger
        return redirect()->route('users');

    }

    //function create

    public function create(){

        return view('backoffice.user.create');
    }

    //function store

    public function store(Request $request){

        $request->validate([
            "nom" => 'required',
            "prenom" => 'required',
            "age" => 'required',
            "email" => 'required',
            "mdp" => 'required',
            "pdp" => 'required',
        ]);
    }
}
