<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Domain;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    public function index(){
        $domains = Domain::with('gods')->get();
        return response()->json([
            'success' => true,
            'data' => $domains
        ]);
    }

    public function show(Domain $domain){
        $domain->load('gods');

        return response()->json([
            'success' => true,
            'data' => $domain
        ]);
    }
}
