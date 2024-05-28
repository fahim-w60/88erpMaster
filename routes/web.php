<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\AccountGroup;
use App\Models\AccountLedger;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\BranchController;
use Illuminate\Support\Facades\Auth;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





 Route::get('/', 'App\Http\Controllers\FrontendController@index');





 Auth::routes();
Route::post('/login', 'App\Http\Controllers\CustomLoginController@login');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {



    //Admin Section start
    Route::resource('roles', RoleController::class);
    
    Route::resource('users', UserController::class);
   
    Route::resource('branch', BranchController::class);
    Route::post('branch/update', 'App\Http\Controllers\BranchController@update');

    Route::resource('companies',CompanyController::class);

    

   Route::get('item-damage-search', 'App\Http\Controllers\ResturantSalesController@itemDamageSearch');

});

