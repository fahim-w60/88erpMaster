<?php


use Illuminate\Support\Facades\Route;
use Innovation\EightHrm\Http\Controllers\HrmDashBoardController;

Route::group(['prefix' => 'hrm'], function () {
    Route::get('dashboard', [HrmDashBoardController::class,'index'])->name('innovation-contact');
    Route::get('payment_slip_report', [HrmDashBoardController::class,'payment_slip_report'])->name('payment_slip_report');
    
});





