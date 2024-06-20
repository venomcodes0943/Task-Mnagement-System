<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $peojects = Project::all();
    return view('index');
})->middleware('auth')->name('index');

Route::group(['controller' => UserController::class], function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginSave')->name('loginSave');
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('registerSave');
    Route::get('logout', 'logout')->name('logout');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
    Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project');
});
