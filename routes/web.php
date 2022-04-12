<?php


use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
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
// 1- write in route
Route::get('/hello', function () {
    return 'Hello World';
});
// 2- call view in route

Route::get('/welcome', function () {
    return view('welcome');
});
// 3- call controll function
Route::get('/', [\App\Http\Controllers\HomeController::class,'Index'])->name( name: 'home');

// 4- route > controll > view
Route::get('/test', [\App\Http\Controllers\HomeController::class,'test'])->name( name: 'test');

// 5- route > post

Route::get('/test', [\App\Http\Controllers\HomeController::class,'test'])->name( name: 'test');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//*************** admin panel routes ************

// 3- call controll function
Route::get('/admin', [AdminHomeController::class,'Index'])->name( name: 'admin');
