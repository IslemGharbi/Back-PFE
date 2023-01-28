<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pays;
use App\Models\Prospect;
class PaysController extends Controller
{
    public function indexPays(){
    $propects = Prospect::with('pay')->get();
    return response()->json(Pays::all(), 200);
}

    public function getPays(){
        return response()->json(Pays::all(), 200);
     }

    public function getPaysById($id) {
        $Pays = Pays::find($id);
        if(is_null($Pays)) {
            return response()->json(['message' => 'Pays Not Found'], 404);
        }
        return response()->json($Pays::find($id), 200);
    }

    public function addPays(Request $request) {
        $Pays = Pays::create($request->all());
        return response($Pays, 201);
    }

    public function updatePays(Request $request, $id) {
        $Pays = Pays::find($id);
        if(is_null($Pays)) {
            return response()->json(['message' => 'Pays Not Found'], 404);
        }
        $Pays->update($request->all());
        return response($Pays, 200);
    }

    public function deletePays(Request $request, $id) {
        $Pays = Pays::find($id);
        if(is_null($Pays)) {
            return response()->json(['message' => 'Pays Not Found'], 404);
        }
        $Pays->delete();
        return response()->json(['message' => 'Pays deleted '], 204);
    }
}
