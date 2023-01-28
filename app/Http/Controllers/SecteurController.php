<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secteur;
use App\Models\Prospect;

class SecteurController extends Controller
{
    public function indexSecteur(){
        $propects = Prospect::with('secteur')->get();
        return response()->json(Secteur::all(), 200);
    }

    public function getSecteur(){
        return response()->json(Secteur::all(), 200);
     }

    public function getSecteurById($id) {
        $propects = Prospect::with('secteur')->get();
        $Secteur = Secteur::find($id);
        if(is_null($Secteur)) {
            return response()->json(['message' => 'Secteur Not Found'], 404);
        }
        return response()->json($Secteur::find($id), 200);
    }

    public function addSecteur(Request $request) {
        $Secteur = Secteur::create($request->all());
        return response($Secteur, 201);
    }

    public function updateSecteur(Request $request, $id) {
        $Secteur = Secteur::find($id);
        if(is_null($Secteur)) {
            return response()->json(['message' => 'Secteur Not Found'], 404);
        }
        $Secteur->update($request->all());
        return response($Secteur, 200);
    }

    public function deleteSecteur(Request $request, $id) {
        $Secteur = Secteur::find($id);
        if(is_null($Secteur)) {
            return response()->json(['message' => 'Secteur Not Found'], 404);
        }
        $Secteur->delete();
        return response()->json(['message' => 'Secteur deleted '], 204);
    }
}
