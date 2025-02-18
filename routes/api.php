<?php

use App\Http\Controllers\EmployeesController;

Route::get('get_all_employees', [EmployeesController::class, 'get_all_employees']);
