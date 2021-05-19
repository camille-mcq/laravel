<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //fonction index
    public function index(){
        // variable qui va nous permettre de selectionner les éléments de notre modele
        $services = Service::all();
    
        return view('backoffice.service.all', compact('services'));
    }

    //Fonction destroy

    public function destroy($id) {
        
        $service = Service::find($id);
        $service->delete()

        return redirect()->back();

    }

    //function edit

    public function edit($id) {
        $service = Service::find($id);

        return view('backoffice.service.edit', compact('services'))
    }

    //function update

    public function update($id, Request $request){
        
        $service = Service::find($id);

        //dire quoi request
        $service->icone = $request->icone;
        $service->titre = $request->titre;
        $service->description = $request->description;


        //save
        $service->save();

        //rediriger
        return redirect()->route('services');

    }

    //function create

    public function create(){

        return view('backoffice.service.create');
    }

    //function store

    public function store(Request $request){

        $request->validate([
            "icone" => 'required',
            "titre" => 'required',
            "description" => 'required',
        ]);
    }
}
