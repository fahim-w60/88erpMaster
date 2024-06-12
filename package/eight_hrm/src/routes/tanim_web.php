<?php


use Illuminate\Support\Facades\Route;
use Innovation\EightHrm\Http\Controllers\HrmDashBoardController;
use Innovation\EightHrm\Http\Controllers\UserReportController;
use Innovation\EightHrm\Http\Controllers\attendance\AttendanceReportController;
use Innovation\EightHrm\Http\Controllers\attendance\AttendanceSetupController;


Route::group(['prefix' => 'hrm'], function () {
    Route::get('payment_slip_report', [UserReportController::class,'payment_slip_report'])->name('payment_slip_report');
    Route::get('user_job_card', [UserReportController::class,'user_job_card'])->name('user_job_card');
    Route::get('user_report', [UserReportController::class,'user_report'])->name('hrm_user_report');

    //Attendance report Controller
    
    Route::get('daily-attendance', [AttendanceReportController::class, 'daily_attendance'])->name('attendance.daily_attendance');
    
    Route::get('monthly-attendance', [AttendanceReportController::class, 'monthly_attendance'])->name('attendance.monthly_attendance');
    Route::get('summary-attendance', [AttendanceReportController::class, 'summary_attendance'])->name('attendance.summary_attendance');
    Route::get('job-card', [AttendanceReportController::class, 'job_card'])->name('attendance.job_card');
    Route::get('punch-record', [AttendanceReportController::class, 'punch_record'])->name('attendance.punch_record');
    
    
    //Attendance setup Controller
    Route::get('monthly-attendance-lock', [AttendanceSetupController::class, 'attendance_lock'])->name('attendance.attendance_lock');
    Route::get('monthly-attendance-unlock', [AttendanceSetupController::class, 'attendance_unlock'])->name('attendance.attendance_unlock');
    Route::get('shift-time-setting', [AttendanceSetupController::class, 'shift_time_setting'])->name('attendance.shift_time_setting');
    Route::get('employee-wise-time-setting', [AttendanceSetupController::class, 'employee_wise_time_setting'])->name('attendance.employee_wise_time_setting');
    Route::get('roaster-sheet-generate-process', [AttendanceSetupController::class, 'roaster_sheet_generate'])->name('attendance.roaster_sheet_generate');
    Route::get('group-roaster-sheet-modify', [AttendanceSetupController::class, 'group_roaster_sheet_modify'])->name('attendance.group_roaster_sheet_modify');
    Route::get('employee-roaster-sheet-modify', [AttendanceSetupController::class, 'employee_roaster_sheet_modify'])->name('attendance.employee_roaster_sheet_modify');
    Route::get('roster-excel-upload', [AttendanceSetupController::class, 'roster_excel_upload'])->name('attendance.roster_excel_upload');
    Route::get('movement-approve-byAdmin', [AttendanceSetupController::class, 'movement_approve_byAdmin'])->name('attendance.movement_approve_byAdmin');
});


