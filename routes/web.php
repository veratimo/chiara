<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
Route::get('/index', [PublicController::class, 'welcome'])->name('welcome');
Route::get('/welcome', [PublicController::class, 'welcome'])->name('welcome');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');

Route::get('/in-sicure-stabilita', [PublicController::class, 'insicureStabilita'])->name('insicureStabilita');
Route::get('/il-tubo', [PublicController::class, 'ilTubo'])->name('ilTubo');
Route::get('/il-cubo', [PublicController::class, 'ilCubo'])->name('ilCubo');
Route::get('/inside-the-outside', [PublicController::class, 'insideTheOutside'])->name('insideTheOutside');
Route::get('/the-belly', [PublicController::class, 'theBelly'])->name('theBelly');
Route::get('/the-sign', [PublicController::class, 'theSign'])->name('theSign');
Route::get('/mirrors', [PublicController::class, 'mirrors'])->name('mirrors');

Route::get('/lateralmente', [PublicController::class, 'lateralmente'])->name('lateralmente');

