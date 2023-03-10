<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monnaie extends Model
{
    use HasFactory;

    protected $table = "monnaies";
    protected $fillable = [
        'type_monnaie',
        'valeur_monnaie',
        'image'
    ];

}
