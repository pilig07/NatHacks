<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Auth;

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

Route::get('/playerexp', function () { return view('playerexp');});
Route::get('/devexp', function () { return view('devexp');});
Route::get('/aboutus', function () { return view('aboutus');});
Route::get('/contact', function () { return view('contact');});
Route::get('/flappy', function () { return view('flappy');});
Auth::routes();

Route::get('/catalog',[App\Http\Controllers\GamesController::class, 'catalog']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register/{id}',[App\Http\Controllers\Controller::class, 'register']);
Route::post('/saveUsr',[App\Http\Controllers\HomeController::class, 'saveUsr']);
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');