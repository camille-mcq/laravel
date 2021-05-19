<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //Capture de 10h38 le 11.05
    public function create()
{
    return view ("image.create");
}

    public function update($id, Request $request)
    {
        $image = Image::find($id);
        $image->nom = $request->nom;
        Storage::disk("public")->delete("img/". $image->path);
        $image->path = $request->file("path")->hashName();
        $image->description =$request->description;
    
        $image->save();
        
        $request->file("path")->storePublicly("img","public");
    
        return redirect()->route("images"); 
    }
    public function store(Request $request)
{
    $request->validate([
        "nom" => "require",
        "path" => ["max:255", "required"],
        "description" => "required"

    ]);
    $image = new Image;
    $image->nom = $request->nom;
    $image->path = $request->file("path")->hashName();
    $image->description =$request->description;

    $image->save();
    $request->file("path")->storePublicly("img","public");

    return redirect()->route("images");
}
    public function destroy($id)
{
    $image =Image::find($id);
    Storage::disk("public")->delete("img/" . $image->path);
    $image->delete();

    return redirect()->back();
}
}


