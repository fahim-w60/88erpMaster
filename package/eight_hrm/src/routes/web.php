<?php


use Illuminate\Support\Facades\Route;
use Innovation\EightHrm\Http\Controllers\HrmDashBoardController;
use Innovation\EightHrm\Http\Controllers\UserReportController;
use Innovation\EightHrm\Http\Controllers\attendance\AttendanceReportController;
use Innovation\EightHrm\Http\Controllers\employee\EmployeeInfoController;

Route::group(['prefix' => 'hrm'], function () {
    Route::get('dashboard', [HrmDashBoardController::class,'index'])->name('hrm-dashboard');
    Route::get('payment_slip_report', [UserReportController::class,'payment_slip_report'])->name('payment_slip_report');
    Route::get('user_job_card', [UserReportController::class,'user_job_card'])->name('user_job_card');
    Route::get('user_report', [UserReportController::class,'user_report'])->name('hrm_user_report');



    //Attendance Controller
    //Route::resource('attendance', AttendanceReportController::class);
    Route::get('daily-attendance', [AttendanceReportController::class, 'daily_attendance'])->name('attendance.daily_attendance');
    
    Route::get('monthly-attendance', [AttendanceReportController::class, 'monthly_attendance'])->name('attendance.monthly_attendance');
    Route::get('summary-attendance', [AttendanceReportController::class, 'summary_attendance'])->name('attendance.summary_attendance');
    Route::get('job-card', [AttendanceReportController::class, 'job_card'])->name('attendance.job_card');
    Route::get('punch-record', [AttendanceReportController::class, 'punch_record'])->name('attendance.punch_record');


    Route::resource('employee', EmployeeInfoController::class);


});


