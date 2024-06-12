<?php


use Illuminate\Support\Facades\Route;
use Innovation\EightHrm\Http\Controllers\Leave\AdminLeaveEntryController;
use Innovation\EightHrm\Http\Controllers\attendance\RosterGroupUpdateController; 
use Innovation\EightHrm\Http\Controllers\attendance\attendanceModifyAdminController; 
use Innovation\EightHrm\Http\Controllers\attendance\EmplAttenModAdminController; 


Route::group(['prefix' => 'hrm'], function () {
 
      /*Leave Management URLS*/
      Route::resource('admin-leave-entry', AdminLeaveEntryController::class);
      Route::resource('roster-group-update', RosterGroupUpdateController::class); //date:10/06/24
      Route::resource('attendance-modify-admin', attendanceModifyAdminController::class); //date:11/06/24
      Route::resource('empl-atten-mod-admin', EmplAttenModAdminController::class); //date:11/06/24

 
});


