<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table = 'photos';

    protected $fillable = [
        'nom',
        'lien',
        'categorie',
        'description',
        'album_id',
    ];

    //Annoncer que la fonction appartient bie à un autre modèle
    public function album(){
        return $this->belongsTo(Album::class);
    }
}
