<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\homeController;

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
//basic routing 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
     return "hello myself home";
});

Route::get('/home/create', function () {
    return "hello from create";
});

//optional and routing parameter
Route::get('/home/create/{post?}', function () {
    return view('index');
});

//route constraints 

Route::get('/home/create/{username}/{password}', function ($user, $pass) {
    return view('index' ,compact('user', 'pass'));
})->where(['username'=>'[A-Za-z]+', 'password'=>'[0-9]+']);

//global pattern
Route::get('/home/create/{username}/{password}', function ($user, $pass) {
    return view('index' ,compact('user', 'pass'));
});

//using middleware, group and name
Route::group(['middleware' => ['login']], function() { 
    Route::get('/dashboard', [App\Http\Controllers\homeController::class, 'index'])->name('dashboard.index');
    Route::post('/store', [App\Http\Controllers\homeController::class, 'store'])->name('dashboard.store');
    Route::get('/dashboard/show/{id}', [App\Http\Controllers\homeController::class, 'show'])->name('dashboard.show');
    Route::put('/dashboard/edit/{id}', [App\Http\Controllers\homeController::class, 'edit'])->name('dashboard.edit');
    Route::delete('/dashboard/destroy/{id}', [App\Http\Controllers\homeController::class, 'destroy'])->name('dashboard.destroy');

});
Route::get('/dashboard/create', [App\Http\Controllers\homeController::class, 'create'])->name('dashboard.create');
