<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use Illuminate\Http\Request;

class GalerieController extends Controller
{
     //fonction index
     public function index(){
        // variable qui va nous permettre de selectionner les éléments de notre modele
        $galerie = Galerie::all();
    
        return view('backoffice.galerie.all', compact('galeries'));
    }

    //Fonction destroy

    public function destroy($id) {
        
        $galerie = Galerie::find($id);
        $galerie->delete()

        return redirect()->back();

    }

    //function edit

    public function edit($id) {
        $galerie = Galerie::find($id);

        return view('backoffice.galerie.edit', compact('galeries'))
    }

    //function update

    public function update($id, Request $request){
        
        $galerie = Galerie::find($id);

        //dire quoi request
        $galerie->nom = $request->nom;
        $galerie->image = $request->image;
        $galerie->description = $request->description;


        //save
        $galerie->save();

        //rediriger
        return redirect()->route('galeries');

    }

    //function create

    public function create(){

        return view('backoffice.galerie.create');
    }

    //function store

    public function store(Request $request){

        $request->validate([
            "nom" => 'required',
            "image" => 'required',
            "description" => 'required',
        ]);
    }
}
