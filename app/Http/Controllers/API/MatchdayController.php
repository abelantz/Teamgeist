<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Matchday;
use Illuminate\Http\Request;

class MatchdayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matchdays = Matchday::all();
        return response()->json(['data' => $matchdays], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matchday = Matchday::create($request->all());
        return response()->json(['data' => $matchday], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matchday  $matchday
     * @return \Illuminate\Http\Response
     */
    public function show(Matchday $matchday)
    {
        return response()->json(['data' => $matchday], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matchday  $matchday
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matchday $matchday)
    {
        $matchday->update($request->all());
        return response()->json(['data' => $matchday], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matchday  $matchday
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matchday $matchday)
    {
        $matchday->delete();
        return response()->json(['data' => $matchday], 204);
    }
}
