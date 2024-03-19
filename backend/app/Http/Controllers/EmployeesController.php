<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;


class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employees::all();
        return response()->json($employees);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $employees = new Employees();
        $employees->position_id = $request->position_id;
        $employees->name = $request->name;
        $employees->last_name = $request->last_name;
        $employees->card = $request->card;
        $employees->start_date = $request->start_date;
        $employees->start_contract_date = $request->start_contract_date;
        $employees->save();
        return response()->json("The department have been created successfully", 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $employees = Employees::find($id);
        return response()->json($employees);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employees = Employees::find($id);
        $employees->position_id = $request->position_id;
        $employees->name = $request->name;
        $employees->last_name = $request->last_name;
        $employees->card = $request->card;
        $employees->start_date = $request->start_date;
        $employees->start_contract_date = $request->start_contract_date;
        $employees->save();
        return response()->json("The employee have been updated successfully", 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employees = Employees::find($id);
        $employees->delete();
        return response()->json("The employee have been deleted successfully", 200);
    }
}
