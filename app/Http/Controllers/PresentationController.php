<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presentation;

class PresentationController extends Controller
{
    public function indexPresentation(){
        $offres = Offre::with('presentation')->get();
    }

    public function getPresentation(){
        return response()->json(Presentation::all(), 200);
     }
    
    public function getPresentationById($id) {
        $Presentation = Presentation::find($id);
        if(is_null($Presentation)) {
            return response()->json(['message' => 'Presentation Not Found'], 404);
        }
        return response()->json($Presentation::find($id), 200);
    }

    public function addPresentation(Request $request) {
        $Presentation = Presentation::create($request->all());
        return response($Presentation, 201);
    }

    public function updatePresentation(Request $request, $id) {
        $Presentation = Presentation::find($id);
        if(is_null($Presentation)) {
            return response()->json(['message' => 'Presentation Not Found'], 404);
        }
        $Presentation->update($request->all());
        return response($Presentation, 200);
    }

    public function deletePresentation(Request $request, $id) {
        $Presentation = Presentation::find($id);
        if(is_null($Presentation)) {
            return response()->json(['message' => 'Presentation Not Found'], 404);
        }
        $Presentation->delete();
        return response()->json(['message' => 'Presentation deleted '], 204);
    }
}
