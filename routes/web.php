<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->middleware('auth')->name('index');

Route::group(['controller' => UserController::class], function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginSave')->name('loginSave');
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('registerSave');
    Route::get('logout', 'logout')->name('logout');
});


