<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ticketController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

Route::get('/', function () {
    return view('welcome');
});
*/

//_______________________________________________________________________________
//___________________________________________________________________ Route front
Route::get('/',[ticketController::class,'accueil'])->name('accueil');
Route::get('/Authentification',[ticketController::class,'login'])->name('login');
Route::get('/contact',[ticketController::class,'contact'])->name('contact');
Route::get('/creer_compte',[ticketController::class,'create_register'])->name('create_register');

Route::post('/ckeck_login',[ticketController::class,'ckeck_login'])->name('ckeck_login');
Route::post('/create_user',[ticketController::class,'create_user'])->name('create_user');
Route::get('/logout',[ticketController::class,'logout'])->name('logout');

//_______________________________________________________________________________
//___________________________________________________________________ Route admin

Route::group(["middleware"=>["admin"]],function(){
    Route::get('/admin',[adminController::class,'index'])->name('dasbord');
});

