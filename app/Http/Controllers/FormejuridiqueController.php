<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formejuridique;
use App\Models\Prospect;
class FormejuridiqueController extends Controller
{
    public function indexFormejuridique(){
        $propects = Prospect::with('formejuridique')->get();
        return response()->json(Formejuridique::all(), 200);
    }

    public function getFormejuridique(){
        return response()->json(Formejuridique::all(), 200);
     }

    public function getFormejuridiqueById($id) {
        $Formejuridique = Formejuridique::find($id);
        if(is_null($Formejuridique)) {
            return response()->json(['message' => 'Formejuridique Not Found'], 404);
        }
        return response()->json($Formejuridique::find($id), 200);
    }

    public function addFormejuridique(Request $request) {
        $Formejuridique = Formejuridique::create($request->all());
        return response($Formejuridique, 201);
    }

    public function updateFormejuridique(Request $request, $id) {
        $Formejuridique = Formejuridique::find($id);
        if(is_null($Formejuridique)) {
            return response()->json(['message' => 'Formejuridique Not Found'], 404);
        }
        $Formejuridique->update($request->all());
        return response($Formejuridique, 200);
    }

    public function deleteFormejuridique(Request $request, $id) {
        $Formejuridique = Formejuridique::find($id);
        if(is_null($Formejuridique)) {
            return response()->json(['message' => 'Formejuridique Not Found'], 404);
        }
        $Formejuridique->delete();
        return response()->json(['message' => 'Formejuridique deleted '], 204);
    }
}
