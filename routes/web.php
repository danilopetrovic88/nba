<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
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

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/', [TeamController::class, 'index'])->middleware('auth');
Route::get('/teams/{team}', [TeamController::class, 'show'])->middleware('auth');
Route::get('/players/{player}', [PlayerController::class, 'show'])->middleware('auth');
Route::get('/register', [AuthController::class, 'getRegisterForm'])->middleware('guest');
Route::get('/login', [AuthController::class, 'getLoginForm'])->middleware('guest');
Route::post('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');