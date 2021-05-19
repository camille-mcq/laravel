<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristique extends Model
{
    use HasFactory;

    protected $fillable = [
        'icone',
        'chiffre',
        'nom',
    ];
}
