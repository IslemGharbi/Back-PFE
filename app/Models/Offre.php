<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;
    protected $table = "offres";
    protected $fillable = [
 'nom_prospect',
'tva_prospect',
'contact_prospect',
'monnaie_prospect',
'offre_produit',
'offre_pack',
'offre_remise',
'prix_remise',
'prix_ht',
'prix_ht_AR',
'prix_apres_tva',
'prix_final',

    ];
    public function produit()
    {
        return $this->belongsTo(Produits::class, 'produit_id', 'id');
    }

    public function presentation()
    {
        return $this->belongsTo(Presentation::class, 'presentation_id', 'id');
    }

    public function intervention()
    {
        return $this->belongsTo(Intervention::class, 'intervention_id', 'id');
    }

}
