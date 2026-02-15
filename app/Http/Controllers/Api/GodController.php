<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\God;
use Illuminate\Http\Request;

class GodController extends Controller
{
    public function index(){
        $gods = God::with('domains', 'pantheon')->get();
        return response()->json([
            'success' => true,
            'data' => $gods
        ]);
    }

    public function show(God $god){
        $god->load('domains', 'pantheon');

        return response()->json([
            'success' => true,
            'data' => $god
        ]);
    }
}
