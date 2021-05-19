<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controllers
{
    //function "index" sert à prendre tous les éléments du models et les envoyer vers un blade
    public function index() {
        //créer une variable qui stock toutes les données qu'il y a dans la table "user", et puis on l'envoi dan sla blade 'user'
        $users = User::all();
        return view("user", compact("users"));
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->back();
    }
}