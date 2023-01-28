<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formejuridique extends Model
{
    use HasFactory;
    protected $table = "formejuridiques";
    protected $fillable = [
        'forme_juridique',
    ];
}
