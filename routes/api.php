<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('employees', [EmployeesController::class, 'index']);
Route::post('employees/store', [EmployeesController::class, 'store']);
Route::post('employees/update/{id}', [EmployeesController::class, 'update']);
Route::delete('employees/delete/{id}', [EmployeesController::class, 'destroy']);
Route::get('employees/{id}', [EmployeesController::class, 'fetch_employee']);