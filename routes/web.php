<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//UserController

Route::get('/get_project', [UserController::class, 'search'])->name('get_project');
Route::get('/create', [UserController::class, 'create']);
Route::get('/signup', [UserController::class, 'signup'])->name('signup');
Route::get('/signin', [UserController::class, 'signin'])->name('signin');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/store', [UserController::class, 'store_user'])->name('store');
Route::get('/verify-email', [UserController::class, 'verify_email'])->name('verify-email');
Route::get('/verify-phone', [UserController::class, 'verify_phone']);
Route::get('/verify', [UserController::class, 'verify'])->name(('verify'));
Route::get('/forgot-pass', [UserController::class, 'password'])->name('forgot-pass');
Route::get('/forgot-pass-phone', [UserController::class, 'pass_phone'])->name('forgot-pass-phone');
Route::get('/forgot-pass-mail', [UserController::class, 'pass_email'])->name('forgot-pass-mail');
//TaskController

Route::get('/index', [TaskController::class, 'index'])->name('index');
Route::get('/create-task', [TaskController::class, 'create'])->name('create-task');
Route::post('/store-task', [TaskController::class, 'store'])->name('store-task');

 
//Route::resource('tasks', TaskController::class);
//Route::resource('projects', ProjectController::class);
Route::get('/index-project', [ProjectController::class, 'index'])->name('index-project');
Route::get('/create-project', [ProjectController::class, 'create'])->name('create-project');
Route::post('/store-project', [ProjectController::class, 'store'])->name('store-project');