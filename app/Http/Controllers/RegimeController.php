<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regime;
use App\Models\Prospect;

class RegimeController extends Controller
{
    public function indexRegime(){
        $propects = Prospect::with('regime')->get();
        return response()->json(Regime::all(), 200);
    }

    public function getRegime(){
        return response()->json(Regime::all(), 200);
     }

    public function getRegimeById($id) {
        $Regime = Regime::find($id);
        if(is_null($Regime)) {
            return response()->json(['message' => 'Regime Not Found'], 404);
        }
        return response()->json($Regime::find($id), 200);
    }

    public function addRegime(Request $request) {
        $Regime = Regime::create($request->all());
        return response($Regime, 201);
    }

    public function updateRegime(Request $request, $id) {
        $Regime = Regime::find($id);
        if(is_null($Regime)) {
            return response()->json(['message' => 'Regime Not Found'], 404);
        }
        $Regime->update($request->all());
        return response($Regime, 200);
    }

    public function deleteRegime(Request $request, $id) {
        $Regime = Regime::find($id);
        if(is_null($Regime)) {
            return response()->json(['message' => 'Regime Not Found'], 404);
        }
        $Regime->delete();
        return response()->json(['message' => 'Regime deleted '], 204);
    }

}
