<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Album extends Model
{
    use HasFactory;

    protected $table = 'albums';

    protected $fillable = [
        'nom',
        'description',
    ];

    //on rend connectée les 2 tables
    public function photos(){
        return $this->hasMany(Photo::class);
    }
}
