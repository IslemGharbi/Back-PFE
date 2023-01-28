<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intervention;

class InterventionController extends Controller
{
    public function indexIntervention(){
        $offres = Offre::with('intervention')->get();
        return response()->json(Intervention::all(), 200);
    }

    public function getIntervention(){
        return response()->json(Intervention::all(), 200);
     }

    public function getInterventionById($id) {
        $Intervention = Intervention::find($id);
        if(is_null($Intervention)) {
            return response()->json(['message' => 'Intervention Not Found'], 404);
        }
        return response()->json($Intervention::find($id), 200);
    }

    public function addIntervention(Request $request) {
        $Intervention = Intervention::create($request->all());
        return response($Intervention, 201);
    }

    public function updateIntervention(Request $request, $id) {
        $Intervention = Intervention::find($id);
        if(is_null($Intervention)) {
            return response()->json(['message' => 'Intervention Not Found'], 404);
        }
        $Intervention->update($request->all());
        return response($Intervention, 200);
    }

    public function deleteIntervention(Request $request, $id) {
        $Intervention = Intervention::find($id);
        if(is_null($Intervention)) {
            return response()->json(['message' => 'Intervention Not Found'], 404);
        }
        $Intervention->delete();
        return response()->json(['message' => 'Intervention deleted '], 204);
    }
}
