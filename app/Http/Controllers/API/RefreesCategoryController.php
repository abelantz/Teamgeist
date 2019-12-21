<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\RefreesCategory;
use Illuminate\Http\Request;

class RefreesCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refrees_categories = RefreesCategory::all();
        return response()->json(['data' => $refrees_categories], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $refrees_category = RefreesCategory::create($request->all());
        return response()->json(['data' => $refrees_category], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RefreesCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $refrees_category)
    {
        return response()->json(['data' => $refrees_category], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RefreesCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RefreesCategory $refrees_category)
    {
        $refrees_category->update($request->all());
        return response()->json(['data' => $refrees_category], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RefreesCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $refrees_category)
    {
        $refrees_category->delete();
        return response()->json(['data' => $refrees_category], 204);
    }
}
