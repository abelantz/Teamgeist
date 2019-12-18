<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'API'], function () {

    // Role api routes
    Route::apiResource('roles', 'RoleController');
    Route::post('roles/{role}/give_permission_to', 'RoleController@givePermissionTo');
    Route::post('roles/{role}/revoke_permission_to', 'RoleController@revokePermissionTo');
    Route::post('roles/{role}/sync_permissions', 'RoleController@syncPermissions');

    // Permission api routes
    Route::apiResource('permissions', 'PermissionController');
    Route::post('permissions/{permission}/assign_role', 'PermissionController@assignRole');
    Route::post('permissions/{permission}/remove_role', 'PermissionController@removeRole');
    Route::post('permissions/{permission}/sync_roles', 'PermissionController@syncRoles');

    // User api routes
    Route::apiResource('users', 'UserController');
    Route::post('users/{user}/assign_role', 'UserController@assignRole');
    Route::post('users/{user}/remove_role', 'UserController@removeRole');
    Route::post('users/{user}/sync_roles', 'UserController@syncRoles');
    Route::post('users/{user}/give_permission_to', 'UserController@givePermissionTo');
    Route::post('users/{user}/revoke_permission_to', 'UserController@revokePermissionTo');
    Route::post('users/{user}/sync_permissions', 'UserController@syncPermissions');

    Route::apiResource('teams', 'TeamController'); // Team api routes
    Route::apiResource('members', 'MemberController'); // Team Member api routes

    // Route::apiResource('contracts', 'ContractController'); // Contract api routes
    Route::apiResource('invoices', 'InvoiceController'); // Invoice api routes
    Route::apiResource('sponsor', 'SponsorController'); //Sponsor api routes
    Route::apiResource('categories', 'CategoryController');
    Route::apiResource('subcategories', 'SubcategoryController');
    Route::apiResource('trainings', 'TrainingController');
    Route::apiResource('memberships', 'MembershipController');
    Route::apiResource('mcategories', 'MembersCategoryController');
    Route::apiResource('referees', 'RefereeController');
    Route::apiResource('matchdays', 'MatchdayController');


    
});
