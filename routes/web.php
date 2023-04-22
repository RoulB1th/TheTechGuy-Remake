<?php

use App\Http\Controllers\registerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;

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

Route::get('/',[Controller::class, "index"]);
Route::get('/login',[LoginController::class, "index"])->name("loginPage");
Route::get('/register',[registerController::class, "index"])->name("registerPage");

Route::post('/register',[registerController::class, "register"])->name("newRegister");
Route::post('/login',[LoginController::class, "login"])->name("newLogin");

Route::get('/logout/exit/user_exit',function(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name("logout");
