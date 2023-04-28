<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentication\AuthController;

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

Route::get('/login', [AuthController::class,'showLoginForm'])->middleware('alreadyLoggedIn');
Route::post('login-user', [AuthController::class,'loginUser'])->name('login-user');
Route::get('/admin-dashboard', [AuthController::class, 'openAdminDashboard'])->middleware('isLoggedIn');
Route::get('/logout', [AuthController::class, 'logoutUser']);
