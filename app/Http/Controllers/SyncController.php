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
    public function syncToServer(Request $request)
    {
        $data = $request->all();
        foreach ($data as $tebakan) {
            TebakAngka::updateOrCreate(
                ['id' => $tebakan['id'] ?? null],
                [
                    'id' => $tebakan['id'],
                    'input' => $tebakan['input'],
                ]
            );
        }
        return response()->json(['message' => 'Data berhasil disinkronisasi ke server.'], 200);
    }
    
}