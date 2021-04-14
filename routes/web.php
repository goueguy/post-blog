<?php
namespace App;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;


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
/*--------------------HOME PAGE----------------------*/
Route::get("/",function(){
    return view("home");
})->name('home');
/*--------------------LOGOUT----------------------*/
Route::post('/logout',[LogoutController::class,'store'])->name('logout');

/*--------------------LOGIN----------------------*/
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);

/*-----------------------DASHBOARD-----------------*/
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
            
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);
/*-----------------------FRONTEND-----------------*/
Route::get('/posts', function () {
    return view('posts.index');
});

/*-----------------------1H 06 min-----------------*/

