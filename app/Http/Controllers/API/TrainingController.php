<?php

namespace App\Http\Controllers\API;

use App\Models\Training;
use Illuminate\Http\Request;
use App\Models\TrainingAttendance;
use App\Http\Controllers\Controller;

class TrainingController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function attendance(Request $request)
    {
        $training_attendances = [];
        foreach($request->members as $member) {
            $training_attendance = TrainingAttendance::create([
                'member_id' => $member,
                'training_id' => $request->training_id
            ]);
            array_push($training_attendances, $training_attendance);
        }
        return response()->json(['data' => $training_attendances], 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings = Training::with('team', 'field', 'wardrobe')->get();
        return response()->json(['data' => $trainings], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $training = Training::create($request->all());
        return response()->json(['data' => $training], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function show(Training $training)
    {
        return response()->json(['data' => $training], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Training $training)
    {
        $training->update($request->all());
        return response()->json(['data' => $training], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function destroy(Training $training)
    {
        $training->delete();
        return response()->json(['data' => $training], 204);
    }
}
