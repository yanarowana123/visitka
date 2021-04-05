<?php

use App\Http\Controllers\admin\Block3Controller;
use App\Http\Controllers\admin\HomeController;
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
    return view('index');
})->middleware(['auth'])->name('index');


Route::group(['prefix' => '/admin','middleware' => 'auth','name' => 'admin.'], function () {
    Route::resource('/block3', Block3Controller::class);
    Route::get('/', [HomeController::class,'index'])->name('home');

});


require __DIR__.'/auth.php';
