<?php


use Illuminate\Support\Facades\Route;
use Innovation\EightHrm\Http\Controllers\HrmDashBoardController;
use Innovation\EightHrm\Http\Controllers\UserReportController;
use Innovation\EightHrm\Http\Controllers\attendance\AttendanceReportController;

use Innovation\EightHrm\Http\Controllers\Leave\AdminLeaveEntryController;
use Innovation\EightHrm\Http\Controllers\attendance\RosterGroupUpdateController; 




Route::group(['prefix' => 'hrm'], function () {
   

    //Attendance Controller
    //Route::resource('attendance', AttendanceReportController::class);
    // Route::get('daily-attendance', [AttendanceReportController::class, 'daily_attendance'])->name('attendance.daily_attendance');
    



  
 
});


