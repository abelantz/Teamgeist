<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Give permission to user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function givePermissionTo(Request $request, User $user)
    {
        $user->givePermissionTo($request->input('permissions'));
        return response()->json(['data' => $user], 200);
    }

    /**
     * Revoke permission to user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function revokePermissionTo(Request $request, User $user)
    {
        $user->revokePermissionTo($request->input('permission'));
        return response()->json(['data' => $user], 200);
    }

     /**
     * Sync the users permissions.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function syncPermissions(Request $request, User $user)
    {
        $user->syncPermissions($request->input('permissions'));
        return response()->json(['data' => $user], 200);
    }

    /**
     * Assign role to user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function assignRole(Request $request, User $user)
    {
        $user->assignRole($request->input('roles'));
        return response()->json(['data' => $user], 200);
    }

    /**
     * Remove permission to user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function removeRole(Request $request, User $user)
    {
        $user->removeRole($request->input('role'));
        return response()->json(['data' => $user], 200);
    }

     /**
     * Sync the users roles.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function syncRoles(Request $request, User $user)
    {
        $user->syncRoles($request->input('roles'));
        return response()->json(['data' => $user], 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return response()->json(['data' => $users], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response()->json(['data' => $user], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response()->json(['data' => $user], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return response()->json(['data' => $user], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['data' => $user], 204);
    }
}
