<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;
    protected $table = "joueurs";

    protected $fillable = ["nom", "prenom", "age", "telephone", "email", "genre", "pays", "role_id", "equipe_id", "photo_id",
 ];

    public function joueur(){
        return $this->hasMany(Joueur::class);
    }
}
