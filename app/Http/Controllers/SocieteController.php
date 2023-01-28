<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Societe;
class SocieteController extends Controller
{
    public function indexSociete(){
        $propects = Prospect::with('societe')->get();
        return response()->json(Societe::all(), 200);
    }

    public function getSociete(){
        return response()->json(Societe::all(), 200);
     }

    public function getSocieteById($id) {
        $Societe = Societe::find($id);
        if(is_null($Societe)) {
            return response()->json(['message' => 'Societe Not Found'], 404);
        }
        return response()->json($Societe::find($id), 200);
    }

    public function addSociete(Request $request) {
        $Societe = Societe::create($request->all());
        return response($Societe, 201);
    }

    public function updateSociete(Request $request, $id) {
        $Societe = Societe::find($id);
        if(is_null($Societe)) {
            return response()->json(['message' => 'Societe Not Found'], 404);
        }
        $Societe->update($request->all());
        return response($Societe, 200);
    }

    public function deleteSociete(Request $request, $id) {
        $Societe = Societe::find($id);
        if(is_null($Societe)) {
            return response()->json(['message' => 'Societe Not Found'], 404);
        }
        $Societe->delete();
        return response()->json(['message' => 'Societe deleted '], 204);
    }
}
