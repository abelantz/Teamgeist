<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Give permission to role.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function givePermissionTo(Request $request, Role $role)
    {
        $permission = Permission::findOrFail($request->input('permission'));
        $role->givePermissionTo($permission);
        return response()->json(['data' => $role], 200);
    }

    /**
     * Revoke permission from role
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function revokePermissionTo(Request $request, Role $role)
    {
        $permission = Permission::findOrFail($request->input('permission'));
        $role->revokePermissionTo($permission);
        return response()->json(['data' => $role], 200);
    }

    /**
     * Sync the permissions of the role.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function syncPermissions(Request $request, Role $role)
    {
        $permissions = Permission::findOrFail($request->input('permissions'));
        $role->syncPermissions($permissions);
        return response()->json(['data' => $role], 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return response()->json(['data' => $roles], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = Role::create($request->only('name'));
        foreach($request->permissions as $permission) {
            $role->givePermissionTo($permission);
        }
        return response()->json(['data' => $role], 201);
    }
    
    /**
     * Display the specified resource.
     *
    
     */
    public function show(Role $role)
    {
        return response()->json(['data' => $role], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $role->update($request->all());
        return response()->json(['data' => $role], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return response()->json(['data' => $role], 204);
    }
}
