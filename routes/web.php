<?php

use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\CtrAnnonce;
use App\Http\Controllers\CtrLike;
use App\Http\Controllers\CtrProfile;
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
// Route::get('/home', function () {
//         return view('home');
//     })->name('home');

// Route::get('/home', [AnnonceController::class, 'show'])->name('home');



Route::resource('profile',CtrProfile::class)->middleware('auth'); 
Route::resource('annonce',CtrAnnonce::class)->middleware('auth'); 

Route::resource('annoncelike',CtrLike::class); 
Route::post('/annonce/{id}/like', [CtrLike::class, 'like'])->name('annonce.like');
Route::post('/annonce/{id}/dislike', [CtrLike::class, 'dislike'])->name('annonce.dislike');
Route::get('/annonce/{id}/like', [CtrLike::class, 'like'])->name('annonce.like');
Route::get('/annonce/{id}/dislike', [CtrLike::class, 'dislike'])->name('annonce.dislike');


Route::post('/login', [LoginController::class,'login'])->name('login')->middleware('guest');
Route::get('/login', [LoginController::class,'show'])->name('login.show')->middleware('guest');
Route::get('/logout', [LoginController::class,'logout'])->name('login.logout');
Route::get('/login/create',[LoginController::class,"create"])->name("create");
Route::post('/login/store',[LoginController::class,"store"])->name("store");


// Route::get('/profiles',[ProfileController::class,"index"])->name('profile');

// Route::get('/Annonces/{id}',[AnnonceController::class, 'show_One'])
// // ->where("id","\d+")
// ->name('annonce.show')
// ->where('id','\d+');
