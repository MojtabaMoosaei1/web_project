<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\ExamController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureUserIsLoggedIn;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('welcome');
});



Route::post('/register', [AuthController::class, 'register']);


Route::prefix('/Panel')->group(function () {
    Route::get('/', [ExamController::class , 'index'])->name('Panel')->middleware(EnsureUserIsLoggedIn::class);
    Route::get('/history', [ExamController::class , 'history'])->middleware(EnsureUserIsLoggedIn::class);
});

Route::get('/Dashboard', [DashboardController::class , 'index'])->name('Dashboard')->middleware(EnsureUserIsLoggedIn::class);
Route::get('Dashboard/user', [DashboardController::class , 'user'])->name('Dashboard.user')->middleware(EnsureUserIsLoggedIn::class);





Route::post('/login', [AuthController::class, 'login']);


Route::get('/home', [UserController::class , 'index'])->name('home');


Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware(EnsureUserIsLoggedIn::class);

