<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Positions;


class PositionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $positions = Positions::all();
        return response()->json($positions);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $positions = new Positions();
        $positions->department_id = $request->department_id;
        $positions->name = $request->name;
        $positions->hourly_rate = $request->hourly_rate;
        $positions->save();
        return response()->json("The position have been created successfully", 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $positions = Positions::find($id);
        return response()->json($positions);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $positions = Positions::find($id);
        $positions->department_id = $request->department_id;
        $positions->name = $request->name;
        $positions->hourly_rate = $request->hourly_rate;
        $positions->save();
        return response()->json("The position have been updated successfully", 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $positions = Positions::find($id);
        $positions->delete();
        return response()->json("The positions have been deleted successfully", 200);
    }
}
