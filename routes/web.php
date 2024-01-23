<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Auth\Events\Login;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'login'])->name('login');                                  // NAMED ROUTES : digunakan untuk menamai routes menjadi yang di dalam kurung
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');           // Routes ini punya nama ('actionlogin')

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');             // middleware auth digunakan untuk validate apakah sesuai dengan authentication token
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');