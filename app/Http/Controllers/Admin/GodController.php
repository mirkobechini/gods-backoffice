<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Domain;
use App\Models\God;
use App\Models\Pantheon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class GodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $orderBy = ["id", "name", "pantheon_id", "rank"];
        $sort = $request->query('sort', 'id');
        $order = $request->query('order', 'asc');
        if (!in_array($sort, $orderBy)) $sort = 'id';
        if (!in_array($order, ['asc', 'desc'])) $order = 'asc';

        if ($sort == "pantheon_id") {
            $gods = God::with("pantheon")->get()->sortBy(function ($god) {
                return $god->pantheon->name;
            }, SORT_NATURAL | SORT_FLAG_CASE, $order == "desc");
        } else {

            $gods = God::orderBy($sort, $order)->get();
        }
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


        $data = $request->validate(
            [
                'name' => 'required|string|max:255|unique:gods,name',
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'rank' => 'required|integer',
                'pantheon_id' => 'required|exists:pantheons,id',
                'image' => 'nullable|image',
                'domains' => 'nullable|array',
                'domains.*' => 'exists:domains,id',
            ],
            [
                'name.unique' => 'Esiste già un dio con questo nome.'
            ]
        );
        $newGod = new God();
        $newGod->name = $data["name"];
        $newGod->title = $data["title"];
        $newGod->description = $data["description"];
        $newGod->rank = $data["rank"];
        $newGod->pantheon_id = $data["pantheon_id"];


        //controllo x immagine
        if (array_key_exists("image", $data)) {
            $path = Storage::putFile('gods-thumb', $data['image']);
        } else {
            $path = 'gods-thumb/default.svg';
        }
        $newGod->image = $path;

        $newGod->save();
        if (array_key_exists('domains', $data)) {
            $newGod->domains()->sync($data['domains']);
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
        $data = $request->validate(
            [
                'name' => ['required', 'string', 'max:255', Rule::unique('gods', 'name')->ignore($god->id)],
                'title' => ['required', 'string', 'max:255'],
                'description' => 'nullable|string',
                'rank' => 'required|integer',
                'pantheon_id' => 'required|exists:pantheons,id',
                'image' => 'nullable|image',
                'domains' => 'nullable|array',
                'domains.*' => 'exists:domains,id',
            ],
            [
                'name.unique' => 'Esiste già un dio con questo nome.',
            ]
        );
        $god->name = $data["name"];
        $god->title = $data["title"];

        $god->description = $data["description"];
        $god->rank = $data["rank"];
        $god->pantheon_id = $data["pantheon_id"];
        //controllo x immagine
        if (array_key_exists("image", $data)) {
            if ($god->image !== 'gods-thumb/default.svg') {
                Storage::delete($god->image);
            }
            $path = Storage::putFile('gods-thumb', $data["image"]);
            $god->image = $path;
        }
        $god->update();
        if (array_key_exists('domains', $data)) {
            $god->domains()->sync($data['domains']);
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

        if ($god->image  && $god->image !== 'gods-thumb/default.svg') {
            Storage::delete($god->image);
        }
        $god->delete();
        return redirect()->route("gods.index");
    }
}
