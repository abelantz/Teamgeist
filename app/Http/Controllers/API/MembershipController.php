<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Invoice;
use App\Models\Membership;
use Illuminate\Http\Request;
use App\Models\MembersCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memberships = Membership::all();
        return response()->json(['data' => $memberships], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->password = Hash::make($request->password);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $membership = Membership::create([
            'categories_member_id' => $request->categories_member_id,
            'team_id' => $request->team_id,
            'user_id' => $user->id
        ]);
        $invoice = Invoice::create([
            'membership_id' => $membership->id,
            'amount' => MembersCategory::find($request->categories_member_id)->amount,
            'paid' => 0
        ]);
        return response()->json(['data' => $membership], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function show(Membership $membership)
    {
        return response()->json(['data' => $membership], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Membership $membership)
    {
        $membership->update($request->all());
        return response()->json(['data' => $membership], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membership $membership)
    {
        $membership->delete();
        return response()->json(['data' => $membership], 204);
    }
}
