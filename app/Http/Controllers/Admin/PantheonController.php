<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pantheon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PantheonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $order = $request->query('order', 'asc');
        if (!in_array($order, ['asc', 'desc'])) $order = 'asc';

        $pantheons = Pantheon::orderBy('name', $order)->get();
        return view('pantheons.index', compact('pantheons', 'order'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pantheons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newPantheon = new Pantheon();
        $newPantheon->name = $data["name"];
        $newPantheon->region = $data["region"];
        $newPantheon->home_base = $data["home_base"];
        $newPantheon->image = $data["image"];
        $newPantheon->description = $data["description"];
        $newPantheon->save();
        return redirect()->route("pantheons.show", $newPantheon);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pantheon $pantheon)
    {
        return view('pantheons.show', compact('pantheon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pantheon $pantheon)
    {
        return view('pantheons.edit', compact('pantheon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pantheon $pantheon)
    {
        $data = $request->all();
        $pantheon->name = $data["name"];
        $pantheon->region = $data["region"];
        $pantheon->home_base = $data["home_base"];
        $pantheon->image = $data["image"];
        $pantheon->description = $data["description"];
        $pantheon->update();
        return redirect()->route("pantheons.show", $pantheon);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pantheon $pantheon)
    {
        DB::table("gods")
            ->where("pantheon_id", $pantheon->id)
            ->delete();
        $pantheon->delete();
        return redirect()->route("pantheons.index");
    }
}
