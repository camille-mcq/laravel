<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    protected $table = "equipes";

    protected $fillable = ["club", "ville", "pays", "max", "continent_id"];

    public function joueur(){
        return $this->hasMany(Joueur::class);
    }
}