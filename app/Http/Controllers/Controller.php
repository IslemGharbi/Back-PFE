<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\User;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function getUser(){
        return response()->json(user::all(), 200);
     }

     public function currentUser(Request $request){
        return $request->user();

         }

    public function getUtilisateurById($id) {
        $User = User::find($id);
        if(is_null($User)) {
            return response()->json(['message' => 'Utilisateur Not Found'], 404);
        }
        return response()->json($User::find($id), 200);
    }

    public function updateUtilisateur(Request $request, $id) {
    $User = User::find($id);
    if(is_null($User)) {
        return response()->json(['message' => 'Utilisateur Not Found'], 404);
    }
    $User->update($request->all());
    return response($User, 200);
}

public function deleteUtilisateur(Request $request, $id) {
    $User = User::find($id);
    if(is_null($User)) {
        return response()->json(['message' => 'Utilisateur Not Found'], 404);
    }
    $User->delete();
    return response()->json(['message' => 'Utilisateur deleted '], 204);
}
}
