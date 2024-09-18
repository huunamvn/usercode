<?php

use App\Http\Controllers\Admins\AccountController;
use App\Http\Controllers\Admins\AdminDashboardController;
use App\Http\Controllers\Admins\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', [AdminDashboardController::class, 'index']) -> name('dashboard');

Route::get('loginAdmin', [AccountController::class, 'index']) -> name('loginAdmin');

Route::get('users', [UserController::class, 'index']) -> name('users');
Route::get('create', [UserController::class, 'create']) -> name('create');



