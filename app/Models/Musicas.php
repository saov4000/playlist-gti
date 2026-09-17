<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Musicas extends Model
{
    protected $fillable = ["titulo","artista","album","ano"];
}
