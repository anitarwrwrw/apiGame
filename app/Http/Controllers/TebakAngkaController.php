<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TebakAngkaController extends Controller
{
    public function store(Request $request) {
        $tebakan = $request->input("tebakan");
        $targetNumber = 40;
        if ($tebakan == $targetNumber){
            
        }
    }
}