<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\ExamController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureUserIsLoggedIn;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('examp.truefalse');
});


Route::get('/home', [UserController::class , 'index'])->name('home');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login/student', [AuthController::class, 'login_student']);
Route::post('/login/admin', [AuthController::class, 'login_admin']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware(EnsureUserIsLoggedIn::class);

Route::prefix('/Panel')->group(function () {
    Route::get('/', [ExamController::class , 'index'])->name('Panel')->middleware(EnsureUserIsLoggedIn::class);
    Route::get('/history', [ExamController::class , 'history'])->middleware(EnsureUserIsLoggedIn::class);
    Route::get('/show_examp/{id}', [ExamController::class, 'show_examp']);
});

Route::prefix('/Dashboard')->group(function () {
    Route::get('/', [DashboardController::class , 'index'])->name('Dashboard')->middleware(EnsureUserIsLoggedIn::class);
    Route::get('user', [DashboardController::class , 'user'])->name('Dashboard.user')->middleware(EnsureUserIsLoggedIn::class);
    Route::get('create', [DashboardController::class , 'create'])->name('Dashboard.create')->middleware(EnsureUserIsLoggedIn::class);
    Route::post('store', [DashboardController::class, 'store'])->middleware(EnsureUserIsLoggedIn::class);;
    Route::get('deleted', [DashboardController::class , 'deleted'])->name('Dashboard.deleted')->middleware(EnsureUserIsLoggedIn::class);

});



