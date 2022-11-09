<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BikerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DoctypeController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Auth::routes();

Route::middleware(['auth'])->name('')->prefix('')->group(function () {
    Route::resource('/bikers', BikerController::class);
    Route::resource('/doctypes', DoctypeController::class);
    Route::resource('/services', ServiceController::class);
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
