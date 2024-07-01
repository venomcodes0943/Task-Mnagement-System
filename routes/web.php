<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TaskController;
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
    Route::post('project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('project/update/{id}', [ProjectController::class, 'update'])->name('project.update');

    Route::post('schedule/create', [ScheduleController::class, 'create'])->name('schedule.create');
    Route::post('schedule/update/{id}', [ScheduleController::class, 'update'])->name('schedule.update');
    Route::delete('schedule/delete/{id}', [ScheduleController::class, 'destroy'])->name('schedule.delete');

    Route::post('task/create', [TaskController::class, 'store'])->name('task.store');
});
