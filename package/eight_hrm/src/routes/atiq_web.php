<?php


use Illuminate\Support\Facades\Route;
use Innovation\EightHrm\Http\Controllers\employee\EmployeeInfoController;
use Innovation\EightHrm\Http\Controllers\e_recruitment\InterviewController;
use Innovation\EightHrm\Http\Controllers\e_recruitment\InterviewEvaluationController;
use Innovation\EightHrm\Http\Controllers\e_recruitment\RecruitmentRequisitionController;
use Innovation\EightHrm\Http\Controllers\e_recruitment\CandidatesController;

Route::group(['prefix' => 'hrm'], function () {
   Route::resource('employee', EmployeeInfoController::class);
    // E-Recruitment
    Route::resource('recruitment-requisition', RecruitmentRequisitionController::class);
    Route::resource('interview', InterviewController::class);
    Route::resource('interview-evaluation', InterviewEvaluationController::class);
    Route::resource('candidates', CandidatesController::class);
 
});