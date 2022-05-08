<?php


use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\ServiceControllerController as ServiceControllerController;
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

//*************** admin panel routes ***************
Route::prefix( 'admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class,'index'])->name('index');
//*************** admin Category routes **********
    Route::prefix( '/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
      Route::get('/', action:'index')->name( name: 'index');
      Route::get('/create', action:'create')->name( name: 'create');
      Route::Post('/store', action:'store')->name( name: 'store');
      Route::get('/edit/{id}', action:'edit')->name( name: 'edit');
      Route::post('/update/{id}', action:'update')->name( name: 'update');
      Route::get('/destroy/{id}', action:'destroy')->name( name: 'destroy');
      Route::get('/show/{id}', action:'show')->name( name: 'show');


});
    //*************** admin Service routes **********
    Route::prefix( '/service')->name('service.')->controller(\App\Http\Controllers\Admin\ServiceController::class)->group(function () {
        Route::get('/', action:'index')->name( name: 'index');
        Route::get('/create', action:'create')->name( name: 'create');
        Route::Post('/store', action:'store')->name( name: 'store');
        Route::get('/edit/{id}', action:'edit')->name( name: 'edit');
        Route::post('/update/{id}', action:'update')->name( name: 'update');
        Route::get('/destroy/{id}', action:'destroy')->name( name: 'destroy');
        Route::get('/show/{id}', action:'show')->name( name: 'show');


    });
    //*************** admin Service Images routs **********
    Route::prefix( '/image')->name('image.')->controller(\App\Http\Controllers\Admin\ImageController::class)->group(function () {
        Route::get('/{sid}', action:'index')->name( name: 'index');
        Route::Post('/store/{sid}', action:'store')->name( name: 'store');
        Route::post('/update/{sid}/{id}', action:'update')->name( name: 'update');
        Route::get('/destroy/{sid}/{id}', action:'destroy')->name( name: 'destroy');

    });
});

