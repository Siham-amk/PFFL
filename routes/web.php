<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('acceuil');
});
Route::get('/home', function () {
        return view('home');
    })->name('home');

Route::get('/login', [LoginController::class,'show'])->name('login.show');
Route::get('/profile', [ProfileController::class,'show'])->name('profile');

Route::post('/login', [LoginController::class,'login'])->name('login.login');

Route::get('/logout', [LoginController::class,'logout'])->name('login.logout');


Route::get('/login/create',[LoginController::class,"create"])->name("create");
Route::post('/login/store',[LoginController::class,"store"])->name("store");


// Route::get('/profiles',[ProfileController::class,"index"])->name('profile');

// Route::get('/profiles/{id}',[ProfileController::class,"show"])
// ->where("id","\d+")
// ->name('profile.show');
