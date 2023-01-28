<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prospect;
use App\Models\Tva;
use App\Models\Monnaie;
use App\Models\Pays;
use App\Models\Formejuridique;
use App\Models\Secteur;
use App\Models\Regime;


class ProspectController extends Controller
{
    public function getProspect(){

        return response()->json(Prospect::all(), 200);
     }

    public function getProspectById($id) {

        $Prospect = Prospect::find($id);
        if(is_null($Prospect)) {
            return response()->json(['message' => 'Prospect Not Found'], 404);
        }
        // $Prospect = Prospect::with('tva')->get();
        $p = $Prospect::find($id);
        $p['tva']=Tva::find($p['tva_id']);
        $p['monnaie']=Monnaie::find($p['monnaie_id']);
        $p['pay']=Pays::find($p['pay_id']);
        $p['regime']=Regime::find($p['regime_id']);
        $p['formejuridique']=Formejuridique::find($p['formejuridique_id']);
        $p['secteur']=Secteur::find($p['secteur_id']);

        return response()->json($p, 200);
    }

    public function addProspect(Request $request) {
        $Prospect = Prospect::create($request->all());
        return response($Prospect, 201);
    }

    public function updateProspect(Request $request, $id) {
        $Prospect = Prospect::find($id);
        if(is_null($Prospect)) {
            return response()->json(['message' => 'Prospect Not Found'], 404);
        }
        $Prospect->update($request->all());
        return response($Prospect, 200);
    }

    public function deleteProspect(Request $request, $id) {
        $Prospect = Prospect::find($id);
        if(is_null($Prospect)) {
            return response()->json(['message' => 'Prospect Not Found'], 404);
        }
        $Prospect->delete();
        return response()->json(['message' => 'Prospect deleted '], 204);
    }

}
