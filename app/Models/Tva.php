<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tva extends Model
{
    use HasFactory;
    protected $table = "tvas";
    protected $fillable = [
        'type_tva',
        'valeur_tva',
    ];
}
