<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    use HasFactory;


    protected $table = "prospects";
    protected $fillable = [
        'codeP',
        'raisonsocialeP',
        'typeP',
        'etatP',
        'adresseP',
        'codepostalP',
        'villeP',
        'paysP',
        'matriculefiscaleP',
        'registrecommerceP',
        'regimeP',
        'formejuridiqueP',
        'secteurP',
        'activiteP',
        'tvaP',
        'responsableP',
        'telephonefixeP',
        'telephonemobileP',
        'telecopieP',
        'sitewebP',
        'adresseelectroniqueP',
        // 'updated_at',
        // 'created_at',
        'monnaie_id',
        'pay_id',
        'societe_id',
        'regime_id',
        'tva_id',
        'formejuridique_id',
        'secteur_id',
        'delegation_id',
    ];

    public function monnaie()
    {
        return $this->belongsTo(Monnaie::class, 'monnaie_id', 'id');
    }

    public function pay()
    {
        return $this->belongsTo(Pays::class, 'pay_id', 'id');
    }

    public function societe()
    {
        return $this->belongsTo(Societe::class, 'societe_id', 'id');
    }

    public function regime()
    {
        return $this->belongsTo(Regime::class, 'regime_id', 'id');
    }

    public function tva()
    {
        return $this->belongsTo(Tva::class, 'tva_id', 'id');
    }

    public function formejuridique()
    {
        return $this->belongsTo(Formejuridique::class, 'formejuridique_id', 'id');
    }

    public function secteur()
    {
        return $this->belongsTo(Secteur::class, 'secteur_id', 'id');
    }

    public function delegation()
    {
        return $this->belongsTo(Delegation::class, 'delegation_id', 'id');
    }
}
