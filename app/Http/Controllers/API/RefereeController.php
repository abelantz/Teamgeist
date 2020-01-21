<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Referee;
use Illuminate\Http\Request;

class RefereeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $referees = Referee::with(['category', 'membership' => function($query) {
                                                    $query->with('user');
                                                }])->get();
        return response()->json(['data' => $referees], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $referee = Referee::create($request->all());
        return response()->json(['data' => $referee], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Referee  $referee
     * @return \Illuminate\Http\Response
     */
    public function show(Referee $referee)
    {
        return response()->json(['data' => $referee], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Referee  $referee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Referee $referee)
    {
        $referee->update($request->all());
        return response()->json(['data' => $referee], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Referee  $referee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Referee $referee)
    {
        $referee->delete();
        return response()->json(['data' => $referee], 204);
    }
}
