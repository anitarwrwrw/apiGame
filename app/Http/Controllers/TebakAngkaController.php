<?php

namespace App\Http\Controllers;

use App\Models\TebakAngka;
use Illuminate\Http\Request;

class TebakAngkaController extends Controller
{
    public function store(Request $request) {
        $tebakan = $request->input("tebakan");
        $targetNumber = 40;
        $kesempatan = 10;
        if ($tebakan) {

            TebakAngka::create([
                "riwayat" => $tebakan
            ]);
            $kesempatan -= 1;

            if ($tebakan == $targetNumber){
                
            };
        }
       
        if ($tebakan == $targetNumber){
            return response()->json([
                "data" => $targetNumber,
                "message" => "tebakan anda benar!"
            ],200);
        }
        return response()->json([
            "data" => $tebakan,
            "message" => "riwayat tebakan masuk"
        ], 200);
    }
    public function index(){
        $riwayatTebakan = TebakAngka::all();
         return response()->json([
            "data" => $riwayatTebakan,
            "message" => "data berhasil ditampilkan"
         ], 200);
    }
    public function delete($id){
        $riwayatTebakan = TebakAngka::findOrFail($id);
        $riwayatTebakan->delete();
        return response()->json([
            "data" => $riwayatTebakan,
            "message" => "data berhasil dihapus!"
         ], 200);
    }
    
}