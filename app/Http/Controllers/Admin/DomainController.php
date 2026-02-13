<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Domain;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $domains = Domain::all();
        return view('domains.index', compact("domains"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return(view("domains.create"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newDomain = new Domain();
        $newDomain->name = $data["name"];
        $newDomain->icon = $data["icon"];
        $newDomain->color = $data["color"];
        $newDomain->description = $data["description"];
        $newDomain->save();
        return redirect()->route("domains.show", $newDomain);
    }

    /**
     * Display the specified resource.
     */
    public function show(Domain $domain)
    {
        return view('domains.show', compact("domain"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Domain $domain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Domain $domain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Domain $domain)
    {
        //
    }
}
