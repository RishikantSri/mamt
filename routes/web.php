<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


// all SuperAdmin routes: starts


Route::group(['prefix' => 'superadmin', 'as' => 'superadmin.'], function() {
    Route::group(['middleware' => 'superadmin.guest'], function(){
        Route::get('/login',[App\Http\Controllers\SuperAdmin\AuthController::class, 'login'])->name('login');
        Route::post('/adminlogin',[App\Http\Controllers\SuperAdmin\AuthController::class, 'loginAuthenticate'])->name('auth');

    });

    Route::group(['middleware' => 'superadmin.auth'], function(){
       Route::get('/dashboard',[App\Http\Controllers\SuperAdmin\AuthController::class, 'dashboard'])->name('dashboard');
       Route::post('/logout', [App\Http\Controllers\SuperAdmin\AuthController::class, 'logout'])->name('logout');

    });
});


// all Company routes: starts

Route::group(['prefix' => 'company', 'as' => 'company.'], function() {
    Route::group(['middleware' => 'company.guest'], function(){
        Route::get('/login',function () {
            echo "Company Login";
        })->name('login');
        
       
    });

    Route::group(['middleware' => 'company.auth'], function(){
        Route::get('/dashboard',function () {
            echo "Company Dashboard";
        })->name('dashboard');
       
    });
});

// all Employee routes: starts

Route::group(['prefix' => 'employee', 'as' => 'employee.'], function() {
    Route::group(['middleware' => 'employee.guest'], function(){
        Route::get('/login',function () {
            echo "Employee Login";
        })->name('login');
       
    });

    Route::group(['middleware' => 'employee.auth'], function(){
        Route::get('/dashboard',function () {
            echo "Employee Dashboard";
        })->name('dashboard');
    });
});

