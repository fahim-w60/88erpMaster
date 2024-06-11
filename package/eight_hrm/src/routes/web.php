<?php


use Illuminate\Support\Facades\Route;
use Innovation\EightHrm\Http\Controllers\HrmDashBoardController;
use Innovation\EightHrm\Http\Controllers\UserReportController;
use Innovation\EightHrm\Http\Controllers\attendance\AttendanceReportController;

use Innovation\EightHrm\Http\Controllers\Leave\AdminLeaveEntryController;
use Innovation\EightHrm\Http\Controllers\attendance\RosterGroupUpdateController; 


use Innovation\EightHrm\Http\Controllers\employee\EmployeeInfoController;

Route::group(['prefix' => 'hrm'], function () {
   

    //Attendance Controller
    //Route::resource('attendance', AttendanceReportController::class);
    // Route::get('daily-attendance', [AttendanceReportController::class, 'daily_attendance'])->name('attendance.daily_attendance');
    
    // Route::get('monthly-attendance', [AttendanceReportController::class, 'monthly_attendance'])->name('attendance.monthly_attendance');
    // Route::get('summary-attendance', [AttendanceReportController::class, 'summary_attendance'])->name('attendance.summary_attendance');
    // Route::get('job-card', [AttendanceReportController::class, 'job_card'])->name('attendance.job_card');
    // Route::get('punch-record', [AttendanceReportController::class, 'punch_record'])->name('attendance.punch_record');

  
    
    
    
    //employee controller

    Route::resource('employee', EmployeeInfoController::class);


    /*Leave Management URLS*/
    Route::resource('admin-leave-entry', AdminLeaveEntryController::class);
    Route::resource('roster-group-update', RosterGroupUpdateController::class);
 
});


