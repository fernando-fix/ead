<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Rota inicial
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/courses', [HomeController::class, 'courses_all'])->name('courses_all');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/lesson', function () {
    return view('lesson');
});

Route::get('/courses/manage', function () {
    return view('courses_manage');
})->name('courses_manage');

Route::get('/courses/create', function () {
    return view('courses_new');
})->name('courses.create');

Route::get('/course/1', function () {
    return view('course_edit');
})->name('course_edit');

// Rotas de login e registro
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout')->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/my-account', [HomeController::class, 'my_account'])->name('my_account')->middleware('auth');
Route::post('/my-account', [RegisterController::class, 'update'])->name('register.update')->middleware('auth');
