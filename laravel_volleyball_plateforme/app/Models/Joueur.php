<?php

namespace App\Models;

use Database\Seeders\GenreSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;
    protected $table = "joueurs";

    protected $fillable = [
        "nom", 
        "prenom", 
        "age", 
        "telephone", 
        "email", 
        "genre_id", 
        "pays", 
        "role_id", 
        "equipe_id",
    ];

    //un nom , prénom,age, téléphone,email, un genre, un pays d'origine, rôle_id dans une partie ( avant, central, arrière, remplaçant ), une equipe_id et une photo_id
    public function role()
    {   
        return $this->belongsTo(Role::class);
    }

    public function equipe()
    {
        return $this->belongsTo(Equipe::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function photo()
    {
        return $this->hasOne(Photo::class);
    }

}
