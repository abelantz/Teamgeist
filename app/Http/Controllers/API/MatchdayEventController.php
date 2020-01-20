<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\MatchdayEvent;
use Illuminate\Http\Request;

class MatchdayEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matchday_events = MatchdayEvent::all();
        return response()->json(['data' => $matchday_events], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matchday_event = MatchdayEvent::create($request->all());
        return response()->json(['data' => $matchday_event], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MatchdayEvent  $matchday_event
     * @return \Illuminate\Http\Response
     */
    public function show(MatchdayEvent $matchday_event)
    {
        return response()->json(['data' => $matchday_event], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MatchdayEvent  $matchday_event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MatchdayEvent $matchday_event)
    {
        $matchday_event->update($request->all());
        return response()->json(['data' => $matchday_event], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MatchdayEvent  $matchday_event
     * @return \Illuminate\Http\Response
     */
    public function destroy(MatchdayEvent $matchday_event)
    {
        $matchday_event->delete();
        return response()->json(['data' => $matchday_event], 204);
    }
}
