<?php

namespace App\Http\Controllers;

use App\Models\TebakAngka;
use Illuminate\Http\Request;

class SyncController extends Controller
{
    public function syncFromServer()
    {
        $tebakAngka = TebakAngka::all();
        return response()->json($tebakAngka, 200);
    }
    
}