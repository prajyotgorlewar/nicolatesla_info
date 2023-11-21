<?php

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


use App\Http\Controllers\HomeController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AchievementsController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/history', [HistoryController::class, 'index'])->name('history');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/achievement', [AchievementsController::class, 'index'])->name('achievement');
Route::get('/about', [AboutController::class, 'index'])->name('about');

