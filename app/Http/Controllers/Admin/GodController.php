<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Domain;
use App\Models\God;
use App\Models\Pantheon;
use Illuminate\Http\Request;

class GodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gods = God::all();
        return view('gods.index', compact("gods"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pantheons = Pantheon::all();
        $domains = Domain::all();
        return view('gods.create', compact("pantheons", "domains"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        dd($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(God $god)
    {
        return view('gods.show', compact("god"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(God $god)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, God $god)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(God $god)
    {
        //
    }
}
