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
    public function index(Request $request)
    {
        $orderBy = ["id", "name", "pantheon_id"];
        $sort = $request->query('sort', 'id');
        $order = $request->query('order', 'asc');
        if (!in_array($sort, $orderBy)) $sort = 'id';
    if (!in_array($order, ['asc', 'desc'])) $order = 'asc';

        $gods = God::orderBy($sort, $order)->get();
        return view('gods.index', compact("gods", "order", "sort"));
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
        $newGod = new God();
        $newGod->name = $data["name"];
        $newGod->title = $data["title"];
        $newGod->image = $data["image"];
        $newGod->description = $data["description"];
        $newGod->rank = $data["rank"];
        $newGod->pantheon_id = $data["pantheon_id"];
        $newGod->save();
        if ($request->has("domains")) {
            $newGod->domains()->sync($data["domains"]);
        } else {
            $newGod->domains()->detach();
        }
        return redirect()->route("gods.show", $newGod);
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
        $pantheons = Pantheon::all();
        $domains = Domain::all();
        return view('gods.edit', compact("god", "pantheons", "domains"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, God $god)
    {
        $data = $request->all();
        $god->name = $data["name"];
        $god->title = $data["title"];
        $god->image = $data["image"];
        $god->description = $data["description"];
        $god->rank = $data["rank"];
        $god->pantheon_id = $data["pantheon_id"];
        $god->update();
        if ($request->has("domains")) {
            $god->domains()->sync($data["domains"]);
        } else {
            $god->domains()->detach();
        }
        return redirect()->route("gods.show", $god);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(God $god)
    {

        $god->delete();
        return redirect()->route("gods.index");
    }
}
