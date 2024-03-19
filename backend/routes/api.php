<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\PositionsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\Employees_shiftsController;

Route::apiResource('departments', DepartmentsController::class);
Route::apiResource('positions', PositionsController::class);
Route::apiResource('employees', EmployeesController::class);
Route::apiResource('employes_shifts', Employees_shiftsController::class);

// Route::get('/departments', [ DepartmentsController::class, 'index']);
// Route::post('/departments', [DepartmentsController::class, 'store']);
// Route::get('/departments/{id}', [DepartmentsController::class, 'show']);
// Route::put('/departments/{id}', [DepartmentsController::class, 'update']);
// Route::delete('/departments/{id}', [DepartmentsController::class, 'destroy']);
