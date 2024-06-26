<?php


use Illuminate\Support\Facades\Route;
use Innovation\EightHrm\Http\Controllers\Leave\AdminLeaveEntryController;
use Innovation\EightHrm\Http\Controllers\attendance\RosterGroupUpdateController; 
use Innovation\EightHrm\Http\Controllers\attendance\attendanceModifyAdminController; 
use Innovation\EightHrm\Http\Controllers\attendance\EmplAttenModAdminController; 
use Innovation\EightHrm\Http\Controllers\System_Administration\Super_Administrator_Settings\UserProfileEntryController;
use Innovation\EightHrm\Http\Controllers\System_Administration\Super_Administrator_Settings\InactiveUserProcessController;
use Innovation\EightHrm\Http\Controllers\System_Administration\Super_Administrator_Settings\UserCodeTEController;
use Innovation\EightHrm\Http\Controllers\System_Administration\Super_Administrator_Settings\UserCodePermController;
use Innovation\EightHrm\Http\Controllers\System_Administration\Administration_Settings\GroupEntryController;


Route::group(['prefix' => 'hrm'], function () {
 
      /*Leave Management URLS*/
      Route::resource('admin-leave-entry', AdminLeaveEntryController::class);
      Route::resource('roster-group-update', RosterGroupUpdateController::class); //date:10/06/24
      Route::resource('attendance-modify-admin', attendanceModifyAdminController::class); //date:11/06/24
      Route::resource('empl-atten-mod-admin', EmplAttenModAdminController::class); //date:11/06/24
      Route::resource('user-profile-entry', UserProfileEntryController::class); //date:12/06/24
      Route::resource('inactive-user-process', InactiveUserProcessController::class); //date:19/06/24
      Route::resource('user-code-te', UserCodeTEController::class); //date:22/06/24
      Route::resource('user-code-permission', UserCodePermController::class); //date:22/06/24
      Route::resource('group-entry', GroupEntryController::class); //date:22/06/24

 
});


