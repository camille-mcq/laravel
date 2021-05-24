<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::all();
        return view("backoffice.article.all", compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("backoffice.article.create");
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
        $article = new Article();
        $article->nom = $request->nom;
        $article->image = $request->file("image")->hashName();
        $article->categorie = $request->categorie;
        $article->description = $request->description;
        $article->auteur = $request->auteur;
        $article->date = $request->date;
        $article->created_at = now();

        $article->save();
        $request->file("image")->storePublicly("img", "public");
       

        return redirect()->route("articles.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
        return view("backoffice.article.show", compact("article"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
        $article = Article::all();
        return view("backoffice.article.edit", compact("article"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //

        $article->nom = $request->nom;
        if ($request->file("image") !== null) {
            Storage::disk("public")->delete("img/"  . $article->lien);
            $article->lien = $request->file("article")->hashName();
            $request->file("lien")->storePublicly("img", "public");
        }
        $article->categorie = $request->categorie;
        $article->description = $request->description;
        $article->auteur = $request->auteur;
        $article->date = $request->date;
        $article->created_at = now();

        $article->save();
        

        return redirect()->route("articles.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
        $article->delete();
        return redirect()->back();

        Storage::disk("public")->delete("img/". $article->image); 
        // Suppression du fichier local

    }
}
