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

// Route::get('/', 'HomeController@home');
// Route::get('/career', 'CareerController@career');
// Route::get('/invention', 'InventionsController@invention');
// Route::get('/achievement', 'AchievementsController@achievement');
// Route::get('/contact', 'ContactController@contact');

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AchievementsController;
use App\Http\Controllers\InventionsController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/career', [CareerController::class, 'index'])->name('career');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/achievement', [AchievementsController::class, 'index'])->name('achievement');
Route::get('/invention', [InventionsController::class, 'index'])->name('invention');

