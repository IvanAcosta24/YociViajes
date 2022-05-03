<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
});

Route::view('master', 'layouts.master')->name('master');
Route::view('family', 'pages.family')->name('family');
Route::view('couple', 'pages.couple')->name('couple');
Route::view('luxury', 'pages.luxury')->name('luxury');
Route::view('honeymoon', 'pages.honeymoon')->name('honeymoon');

Route::view('cheap', 'pages.cheap')->name('cheap');



Route::view('about-us', 'pages.about-us')->name('about-us');







Route::view('welcome', 'welcome');
Route::view('login', 'auth.login')->name('login');
Route::view('register', 'auth.register')->name('register');

Route::post('register', [UserController::class, 'register'])->name('register');
Route::post('login', [UserController::class, 'log_in'])->name('login');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
