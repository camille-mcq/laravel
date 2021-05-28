<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    protected $table = "equipes";

    protected $fillable = ["nom", "ville", "pays", "max", "continent_id"];

    //nom de club, une ville qu'elle représente , un pays et un maximum de joueur possible dans leur équipe et par role (2 avant, 2 centraux, 2 arrière, 3remplacants)*, continent_id (pour déterminer dans quel contient l'équipe joue)
    public function continent()
    {
        return $this->belongsTo(Continent::class);
    }
    
    public function joueurs()
    {
        return $this->hasMany(Joueur::class);
    }
}