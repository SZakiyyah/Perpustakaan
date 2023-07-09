<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPage;
use App\Http\Controllers\SessionController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', [LandingPage::class, 'index']);

Route::get('/login', [SessionController::class, 'index']);
Route::post('/process_login', [SessionController::class, 'login']); 

Route::post('/logout', [SessionController::class, 'logout'])->name('logout'); 