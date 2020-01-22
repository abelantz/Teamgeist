<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use App\Models\Member;
use App\Models\Training;
use Illuminate\Http\Request;
use App\Models\TrainingAttendance;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::with(['team', 'membership' => function($query) {
                                $query->with('user');
                            }])->limit(25)->get();

        $yesterday = Carbon::now();
        $one_week_ago = Carbon::now()->subWeeks(1);
        $trainings = Training::where('date', '>=', $one_week_ago)
                            ->where('date', '<=', $yesterday)->count();
                
        foreach($members as $member) {
            $training_attendance = TrainingAttendance::whereHas('training', function($trainings) use ($one_week_ago, $yesterday) {
                                                        $trainings->where('date', '>=', $one_week_ago)
                                                                    ->where('date', '<=', $yesterday);
                                                        })->where('member_id', $member->id)->count();
            if($trainings == $training_attendance) {
                $member['lastweek_training_attendance'] = '100%';
            } else {
                $member['lastweek_training_attendance'] = ($training_attendance * 100)/$trainings . '%';
            }
        }

        return response()->json(['data' => $members], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member = Member::create($request->all());
        return response()->json(['data' => $member], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        return response()->json(['data' => $member], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $member->update($request->all());
        return response()->json(['data' => $member], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return response()->json(['data' => $member], 204);
    }
}
