<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $commentaires = Commentaire::all();
        return view("backoffice.commentaire.all", compact("commentaires"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $commentaire = new Commentaire();
        return view("backoffice.commentaire.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $commentaire = new Commentaire();
        $commentaire->nom = $request->nom;
        $commentaire->email = $request->email;
        $commentaire->message = $request->message;
        $commentaire->date = $request->date;
        $commentaire->created_at = now();

        $commentaire->save();
       
        return redirect()->route("commentaires.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function show(commentaire $commentaire)
    {
        //
        return view("backoffice.commentaire.show", compact("commentaire"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function edit(commentaire $commentaire)
    {
        //
        $commentaire = Commentaire::all();
        return view("backoffice.commentaire.edit", compact("commentaire"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, commentaire $commentaire)
    {
        //
        $commentaire->nom = $request->nom;
        $commentaire->email = $request->email;
        $commentaire->message = $request->message;
        $commentaire->date = $request->date;

        $commentaire->updated_at = now();

        $commentaire->save();

        return redirect()->route("commentaires.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(commentaire $commentaire)
    {
        //
        $commentaire->delete();
        return redirect()->back();
        
    }
}
