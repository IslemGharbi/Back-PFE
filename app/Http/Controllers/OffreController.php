<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offre;

class OffreController extends Controller
{
    
    public function getOffre(){
        return response()->json(Offre::all(), 200);
     }
    
    public function getOffreById($id) {
        $Offre = Offre::find($id);
        if(is_null($Offre)) {
            return response()->json(['message' => 'Offre Not Found'], 404);
        }
        return response()->json($Offre::find($id), 200);
    }

    public function addOffre(Request $request) {
        $Offre = Offre::create($request->all());
        return response($Offre, 201);
    }

    public function updateOffre(Request $request, $id) {
        $Offre = Offre::find($id);
        if(is_null($Offre)) {
            return response()->json(['message' => 'Offre Not Found'], 404);
        }
        $Offre->update($request->all());
        return response($Offre, 200);
    }

    public function deleteOffre(Request $request, $id) {
        $Offre = Offre::find($id);
        if(is_null($Offre)) {
            return response()->json(['message' => 'Offre Not Found'], 404);
        }
        $Offre->delete();
        return response()->json(['message' => 'Offre deleted '], 204);
    }
}