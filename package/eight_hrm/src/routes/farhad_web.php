<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Innovation\EightHrm\Http\Controllers\HrmDashBoardController;
use Innovation\EightHrm\Http\Controllers\UserReportController;
use Innovation\EightHrm\Http\Controllers\attendance\PayatdController;
use Innovation\EightHrm\Http\Controllers\system_adminstration\SysCodeTypeController;
use Innovation\EightHrm\Http\Controllers\system_adminstration\SysCodeController;
 

Route::middleware(['web', 'auth'])->prefix('hrm')->group(function () {
    Auth::routes();
    Route::get('dashboard', [HrmDashBoardController::class,'index'])->name('hrm-dashboard');
    Route::get('payment_slip_report', [UserReportController::class,'payment_slip_report'])->name('payment_slip_report');
    Route::get('user_job_card', [UserReportController::class,'user_job_card'])->name('user_job_card');
    Route::get('user_report', [UserReportController::class,'user_report'])->name('hrm_user_report');
    Route::get('attendance',[PayatdController::class,'index'])->name('hrm_attendance');



    /* System adminstration Code type and code Section
    Start Date: 19-06-2024 10:00 AM
    End Date : 
    Developer: MD Farhad Ali

    */
    Route::resource('sys_code', SysCodeController::class);
    Route::resource('sys_code_type',SysCodeTypeController::class);


});


