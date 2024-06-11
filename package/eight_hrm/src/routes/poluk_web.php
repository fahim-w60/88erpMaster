<?php


use Illuminate\Support\Facades\Route;
use Innovation\EightHrm\Http\Controllers\Leave\AdminLeaveEntryController;
use Innovation\EightHrm\Http\Controllers\attendance\RosterGroupUpdateController; 


Route::group(['prefix' => 'hrm'], function () {
    /*Leave Management URLS*/
    Route::resource('admin-leave-entry', AdminLeaveEntryController::class);
    Route::resource('roster-group-update', RosterGroupUpdateController::class);
 
});


