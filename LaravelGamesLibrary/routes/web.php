<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\GameLibraryController;
use App\Http\Controllers\GameSearchController;
use App\Http\Controllers\ProfileController;
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

//Root application
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified']);
Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Game search
Route::resource('/search', GameSearchController::class)->middleware(['auth', 'verified']);
Route::post('/search_game', [GameSearchController::class, 'index', ['key' => 'asd']])->middleware(['auth', 'verified']);

//Game library
Route::resource('/library', GameLibraryController::class)->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
