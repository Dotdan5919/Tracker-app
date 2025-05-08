<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController ;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
// use App\Http\Controllers\Auth\LogoutController;


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

// Auth::routes();
// auth routes

Route::get('/admin-login', [LoginController::class, 'showLoginForm'])->name('admin-login');
Route::post('/admin-login', [LoginController::class, 'login']);




Route::get('/admin-register', [RegisterController::class, 'showRegistrationForm'])->name('admin-register');
Route::post('/admin-register', [RegisterController::class, 'register']);


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/'); // Or wherever you want to redirect after logout
})->name('logout');


// guest routes

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/track', [GuestController::class, 'track'])->name('track');
Route::get('/about', [GuestController::class, 'about'])->name('about');
Route::get('/contact', [GuestController::class, 'contact'])->name('contact');
Route::post('/track',[GuestController::class,'find'])->name('find_item');



// admin routes

Route::get('/dashboard',[HomeController::class,'view'])->name('dashboard');
Route::post('/dashboard',[HomeController::class,'store'])->name('generate_id');



Route::post('/dashboard/search',[HomeController::class,'search'])->name('search');
Route::get('/dashboard/search',[HomeController::class,'search'])->name('search');

Route::post('/dashboard/update',[HomeController::class,'update'])->name('update');

Route::get('/dashboard/{type}',[HomeController::class,'new_view'])->name('type');




