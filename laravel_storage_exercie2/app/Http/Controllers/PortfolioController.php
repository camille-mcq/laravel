<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //fonction index
    public function index(){
        // variable qui va nous permettre de selectionner les éléments de notre modele
        $portfolio = Portfolio::all();
    
        return view('backoffice.portfolio.all', compact('portfolios'));
    }

    //Fonction destroy

    public function destroy($id) {
        
        $portfolio = Portfolio::find($id);
        $portfolio->delete()

        return redirect()->back();

    }

    //function edit

    public function edit($id) {
        $portfolio = Portfolio::find($id);

        return view('backoffice.portfolio.edit', compact('portfolios'))
    }

    //function update

    public function update($id, Request $request){
        
        $portfolio = Portfolio::find($id);

        //dire quoi request
        $portfolio->nom = $portfolio->nom;
        $portfolio->image = $portfolio->image;
        $portfolio->categorie = $portfolio->categorie;
        $portfolio->description = $portfolio->description;


        //save
        $portfolio->save();

        //rediriger
        return redirect()->route('portfolios');

    }

    //function create

    public function create(){

        return view('backoffice.portfolio.create');
    }

    //function store

    public function store(Request $request){

        $portfolio->validate([
            "nom" => 'required',
            "image" => 'required',
            "categorie" => 'required',
            "description" => 'required',
        ]);
    }
}
