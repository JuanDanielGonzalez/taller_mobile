<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees_shifts;

class Employees_shiftsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees_shifts = Employees_shifts::all();
        return response()->json($employees_shifts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $employees_shifts = new Employees_shifts();
        $employees_shifts->employee_id = $request->employee_id;
        $employees->shift_start = $request->shift_start;
        $employees->shift_end = $request->shift_end;
        $employees_shifts->save();
        return response()->json("The employees_shifts have been created successfully", 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $employees_shifts = Employees_shifts::find($id);
        return response()->json($employees_shifts);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employees_shifts = Employees_shifts::find($id);
        $employees_shifts->employee_id = $request->employee_id;
        $employees->shift_start = $request->shift_start;
        $employees->shift_end = $request->shift_end;
        $employees_shifts->save();
        return response()->json("The employees_shifts have been updated successfully", 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employees_shifts = Employees_shifts::find($id);
        $employees_shifts->delete();
        return response()->json("The employee shift have been deleted successfully", 200);
    }
}
