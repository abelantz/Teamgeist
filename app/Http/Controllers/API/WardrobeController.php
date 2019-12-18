<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Wardrobe;
use Illuminate\Http\Request;

class WardrobeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wardrobes = Wardrobe::all();
        return response()->json(['data' => $wardrobes], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wardrobe = Wardrobe::create($request->all());
        return response()->json(['data' => $wardrobe], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wardrobe  $wardrobe
     * @return \Illuminate\Http\Response
     */
    public function show(Wardrobe $wardrobe)
    {
        return response()->json(['data' => $wardrobe], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wardrobe  $wardrobe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wardrobe $wardrobe)
    {
        $wardrobe->update($request->all());
        return response()->json(['data' => $wardrobe], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wardrobe  $wardrobe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wardrobe $wardrobe)
    {
        $wardrobe->delete();
        return response()->json(['data' => $wardrobe], 204);
    }
}
