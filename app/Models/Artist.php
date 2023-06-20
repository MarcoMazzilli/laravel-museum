<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist_name',
        'artist_lastname',
        'place_of_birth',
        'date_of_birth',
        'category',
        'alive',
        'composition',
    ];
}
