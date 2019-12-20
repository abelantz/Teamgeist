<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\MembersCategory;
use Illuminate\Http\Request;

class MembersCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members_categories = MembersCategory::all();
        return response()->json(['data' => $members_categories], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $members_category = MembersCategory::create($request->all());
        return response()->json(['data' => $members_category], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MembersCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function show(MembersCategory $members_category)
    {
        return response()->json(['data' => $members_category], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MembersCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MembersCategory $members_category)
    {
        $members_category->update($request->all());
        return response()->json(['data' => $members_category], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MembersCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(MembersCategory $members_category)
    {
        $members_category->delete();
        return response()->json(['data' => $members_category], 204);
    }
}
