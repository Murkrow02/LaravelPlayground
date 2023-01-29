<?php

use App\Http\Controllers\GameLibraryController;
use App\Http\Controllers\GameSearchController;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
})->middleware(['auth', 'verified']);


//Game search
Route::resource('/search', GameSearchController::class)->middleware(['auth', 'verified']);
Route::post('/search_game', [GameSearchController::class, 'index', ['key' => 'asd']])->middleware(['auth', 'verified']);

//Game library
Route::resource('/library', GameLibraryController::class)->middleware(['auth', 'verified']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
