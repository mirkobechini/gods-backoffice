<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pantheon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        $data = $request->validate(
            [
                'name' => 'required|string|max:255|unique:pantheons,name',
                'region' => 'required|string|max:255|unique:pantheons,region',
                'home_base' => 'required|string|max:255|unique:pantheons,home_base',
                'description' => 'nullable|string',
                'image' => 'nullable|image',
            ],
            [
                'name.unique' => 'Esiste già un pantheon con questo nome.',
                'region.unique' => 'Esiste già un pantheon con questa regione.',
                'home_base.unique' => 'Esiste già un pantheon con questa base.',
            ]
        );

        $newPantheon = new Pantheon();
        $newPantheon->name = $data["name"];
        $newPantheon->region = $data["region"];
        $newPantheon->home_base = $data["home_base"];
        $newPantheon->description = $data["description"];

        //controllo x immagine
        if (array_key_exists("image", $data)) {
            $path = Storage::putFile('pantheons-img', $data['image']);
        } else {
            $path = 'pantheons-img/default.svg';
        }
        $newPantheon->image = $path;
        $newPantheon->save();
        if ($request->has("domains")) {
            $newPantheon->domains()->sync($data["domains"]);
        } else {
            $newPantheon->domains()->detach();
        }
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
        $pantheon->description = $data["description"];

        //controllo x immagine
        if (array_key_exists("image", $data)) {
            if ($pantheon->image !== 'pantheons-img/default.svg') {
                Storage::delete($pantheon->image);
            }
            $path = Storage::putFile('pantheons-img', $data["image"]);
            $pantheon->image = $path;
        }
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
        if ($pantheon->image && $pantheon->image !== 'pantheons-img/default.svg') {
            Storage::delete($pantheon->image);
        }
        $pantheon->delete();
        return redirect()->route("pantheons.index");
    }
}
