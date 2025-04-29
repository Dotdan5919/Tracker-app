<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController ;



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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/track', [GuestController::class, 'track'])->name('track');

Route::get('/dashboard',[HomeController::class,'view'])->name('dashboard');
Route::post('/dashboard',[HomeController::class,'store'])->name('generate_id');
Route::post('/track',[GuestController::class,'find'])->name('find_item');



Route::get('/dashboard/search',[HomeController::class,'search'])->name('search');

Route::get('/dashboard/{type}',[HomeController::class,'new_view'])->name('type');


// Route::get('/dashboard/delivered',[HomeController::class,'view']);
// Route::get('/dashboard/shipped',[HomeController::class,'view'])->name('shipped');
