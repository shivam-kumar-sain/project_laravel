<?php

use Illuminate\Console\View\Components\Component;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LeadController;
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

Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Protected route
// Route::get('dashboard', function () {
//     return 'Welcome to your dashboard!';
// })->middleware('auth')->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/leads', [LeadController::class, 'showLeadList'])->name('leads');
    Route::get('/settings', function () {return 'This is the settings page. Content will be added later.';})->name('settings');
});

