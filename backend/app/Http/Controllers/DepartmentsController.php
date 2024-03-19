<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        return response()->json($departments);
    }

    public function store(Request $request)
    {
        $departments = new Department();
        $departments->name = $request->name;
        $departments->save();
        return response()->json("The department have been created successfully", 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $departments = Department::find($id);
        return response()->json($departments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $departments = Department::find($id);
        $departments->name = $request->name;
        $departments->save();
        return response()->json("The department have been updated successfully", 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $departments = Department::find($id);
        $departments->delete();
        return response()->json("The department have been deleted successfully", 200);
    }
}
