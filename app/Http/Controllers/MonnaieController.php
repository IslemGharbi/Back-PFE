<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monnaie;
use App\Models\Prospect;

class MonnaieController extends Controller
{
        public function indexMonnaie(){
            $propects = Prospect::with('monnaie')->get();
            return response()->json(Monnaie::all(), 200);
        }

        public function getMonnaie(){
            return response()->json(Monnaie::all(), 200);
        }

        public function getMonnaieById($id) {
            $Monnaie = Monnaie::find($id);
            if(is_null($Monnaie)) {
                return response()->json(['message' => 'Monnaie Not Found'], 404);
            }
            return response()->json($Monnaie::find($id), 200);
        }

        public function addMonnaie(Request $request) {
            $Monnaie = Monnaie::create($request->all());
            return response($Monnaie, 201);
        }

        public function updateMonnaie(Request $request, $id) {
            $Monnaie = Monnaie::find($id);
            if(is_null($Monnaie)) {
                return response()->json(['message' => 'Monnaie Not Found'], 404);
            }
            $Monnaie->update($request->all());
            return response($Monnaie, 200);
        }

        public function deleteMonnaie(Request $request, $id) {
            $Monnaie = Monnaie::find($id);
            if(is_null($Monnaie)) {
                return response()->json(['message' => 'Monnaie Not Found'], 404);
            }
            $Monnaie->delete();
            return response()->json(['message' => 'Monnaie deleted '], 204);
        }

    }

