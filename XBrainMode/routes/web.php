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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/catalogo', 'HomeController@catalog');
Route::get('/register/{id}',[App\Http\Controllers\HomeController::class, 'register']);
Route::post('/saveUsr','HomeController@saveUsr');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');