<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delegation;
class DelegationController extends Controller
{
    public function indexDelegation(){
        $propects = Prospect::with('Delegation')->get();
    }

    public function getDelegation(){
        return response()->json(Delegation::all(), 200);
     }
    
    public function getDelegationById($id) {
        $Delegation = Delegation::find($id);
        if(is_null($Delegation)) {
            return response()->json(['message' => 'Delegation Not Found'], 404);
        }
        return response()->json($Delegation::find($id), 200);
    }

    public function addDelegation(Request $request) {
        $Delegation = Delegation::create($request->all());
        return response($Delegation, 201);
    }

    public function updateDelegation(Request $request, $id) {
        $Delegation = Delegation::find($id);
        if(is_null($Delegation)) {
            return response()->json(['message' => 'Delegation Not Found'], 404);
        }
        $Delegation->update($request->all());
        return response($Delegation, 200);
    }

    public function deleteDelegation(Request $request, $id) {
        $Delegation = Delegation::find($id);
        if(is_null($Delegation)) {
            return response()->json(['message' => 'Delegation Not Found'], 404);
        }
        $Delegation->delete();
        return response()->json(['message' => 'Delegation deleted '], 204);
    }
}
