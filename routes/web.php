<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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


Route::middleware('auth')
->namespace('\App\Http\Controllers')
->group(function(){
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/reset-password',[App\Http\Controllers\AuthenticateController::class, 'resetPassword'])->name('user.reset-password');
Route::post('user/logout',[App\Http\Controllers\AuthenticateController::class, 'logout'])->name('user.logout');
});
Route::post('user/register', [App\Http\Controllers\AuthenticateController::class, 'register'])->name('user.register');
Route::post('user/login',[App\Http\Controllers\AuthenticateController::class, 'login'])->name('user.login');


Route::get('product/indiv',[App\Http\Controllers\HomeController::class, 'openindivedit']);


Route::resource('product',ProductController::class)->middleware('my_auth');
