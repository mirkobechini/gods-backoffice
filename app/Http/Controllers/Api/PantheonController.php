<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pantheon;
use Illuminate\Http\Request;

class PantheonController extends Controller
{
    public function index(){
        $pantheons = Pantheon::with('gods')->get();
        return response()->json([
            'success' => true,
            'data' => $pantheons
        ]);
    }

    public function show(Pantheon $pantheon){
        $pantheon->load('gods');

        return response()->json([
            'success' => true,
            'data' => $pantheon
        ]);
    }
}
