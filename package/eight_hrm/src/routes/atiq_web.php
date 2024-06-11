<?php


use Illuminate\Support\Facades\Route;
use Innovation\EightHrm\Http\Controllers\employee\EmployeeInfoController;
use Innovation\EightHrm\Http\Controllers\e_recruitment\InterviewController;
use Innovation\EightHrm\Http\Controllers\e_recruitment\InterviewEvaluationController;

Route::group(['prefix' => 'hrm'], function () {
   Route::resource('employee', EmployeeInfoController::class);
    // E-Recruitment
    Route::resource('interview', InterviewController::class);
    Route::resource('interview-evaluation', InterviewController::class);
 
});