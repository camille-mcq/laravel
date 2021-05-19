<?php

namespace App\Http\Controllers;

use App\Models\Characteristique;
use Illuminate\Http\Request;

class CharacteristiqueController extends Controller
{
    //fonction index
    public function index(){
        // variable qui va nous permettre de selectionner les éléments de notre modele
        $characteristique = Characteristique::all();
    
        return view('backoffice.characteristique.all', compact('characteristiques'));
    }

    //Fonction destroy

    public function destroy($id) {
        
        $characteristique = Characteristique::find($id);
        $characteristique->delete()

        return redirect()->back();

    }

    //function edit

    public function edit($id) {
        $characteristique = Characteristique::find($id);

        return view('backoffice.characteristique.edit', compact('characteristiques'))
    }

    //function update

    public function update($id, Request $request){
        
        $characteristique = Characteristique::find($id);

        //dire quoi request
        $characteristique->nom = $characteristique->nom;
        $characteristique->image = $characteristique->image;
        $characteristique->description = $characteristique->description;


        //save
        $characteristique->save();

        //rediriger
        return redirect()->route('characteristiques');

    }

    //function create

    public function create(){

        return view('backoffice.characteristique.create');
    }

    //function store

    public function store(Request $request){

        $characteristique->validate([
            "nom" => 'required',
            "image" => 'required',
            "description" => 'required',
        ]);
    }
}
