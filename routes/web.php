<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ 
    HomeController, 
    TestController
};

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/test', [TestController::class, 'index'])->name('test');
