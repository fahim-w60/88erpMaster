<?php


use Illuminate\Support\Facades\Route;
use Innovation\EightHrm\Http\Controllers\employee\EmployeeInfoController;

Route::group(['prefix' => 'hrm'], function () {
   Route::resource('employee', EmployeeInfoController::class);
 
});