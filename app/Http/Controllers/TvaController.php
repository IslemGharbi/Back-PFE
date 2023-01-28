<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tva;
use App\Models\Prospect;
class TvaController extends Controller
{
    public function indexTva(){
        $propects = Prospect::with('tva')->get();
        return response()->json(Tva::all(), 200);
    }
    public function getTva(){
        return response()->json(Tva::all(), 200);
     }

    public function getTvaById($id) {
        $Tva = Tva::find($id);
        if(is_null($Tva)) {
            return response()->json(['message' => 'Tva Not Found'], 404);
        }
        return response()->json($Tva::find($id), 200);
    }

    public function addTva(Request $request) {
        $Tva = Tva::create($request->all());
        return response($Tva, 201);
    }

    public function updateTva(Request $request, $id) {
        $Tva = Tva::find($id);
        if(is_null($Tva)) {
            return response()->json(['message' => 'Tva Not Found'], 404);
        }
        $Tva->update($request->all());
        return response($Tva, 200);
    }

    public function deleteTva(Request $request, $id) {
        $Tva = Tva::find($id);
        if(is_null($Tva)) {
            return response()->json(['message' => 'Tva Not Found'], 404);
        }
        $Tva->delete();
        return response()->json(['message' => 'Tva deleted '], 204);
    }
}
