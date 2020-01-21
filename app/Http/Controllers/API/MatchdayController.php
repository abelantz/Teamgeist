<?php

namespace App\Http\Controllers\API;

use App\Models\Matchday;
use Illuminate\Http\Request;
use App\Models\MatchdayAttendance;
use App\Http\Controllers\Controller;

class MatchdayController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function attendance(Request $request)
    {
        $matchday_attendances = [];
        foreach($request->members as $member) {
            $matchday_attendance = MatchdayAttendance::create([
                'member_id' => $member,
                'matchday_id' => $request->matchday_id,
                'type' => 'first_team'
            ]);
            array_push($matchday_attendances, $matchday_attendance);
        }
        return response()->json(['data' => $matchday_attendances], 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matchdays = Matchday::with([
                                'team', 
                                'referee', 
                                'field', 
                                'wardrobe', 
                                'captain' => function($query) {
                                    $query->with(['membership' => function($query) {
                                        $query->with('user');
                                    }]); 
                                }])->get();
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
