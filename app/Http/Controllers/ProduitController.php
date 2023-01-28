<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    public function indexProduit(){
        $offres = Offre::with('produit')->get();
    }

    public function getProduit(){
        return response()->json(Produit::all(), 200);
     }
    
    public function getProduitById($id) {
        $Produit = Produit::find($id);
        if(is_null($Produit)) {
            return response()->json(['message' => 'Produit Not Found'], 404);
        }
        return response()->json($Produit::find($id), 200);
    }

    public function addProduit(Request $request) {
        $Produit = Produit::create($request->all());
        return response($Produit, 201);
    }

    public function updateProduit(Request $request, $id) {
        $Produit = Produit::find($id);
        if(is_null($Produit)) {
            return response()->json(['message' => 'Produit Not Found'], 404);
        }
        $Produit->update($request->all());
        return response($Produit, 200);
    }

    public function deleteProduit(Request $request, $id) {
        $Produit = Produit::find($id);
        if(is_null($Produit)) {
            return response()->json(['message' => 'Produit Not Found'], 404);
        }
        $Produit->delete();
        return response()->json(['message' => 'Produit deleted '], 204);
    }
}
