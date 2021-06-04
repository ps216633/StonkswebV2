<?php

use Illuminate\Support\Facades\Route;
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
    return view('index');
})->name('index');
Route::get('/download', function () {
    return view('download');
})->name('download');
Route::get('/Bibliotheek', function () {
    return view('library');
})->name('library');

Auth::routes(['verify' => true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/account-info', [App\Http\Controllers\HomeController::class, 'account'])->middleware('verified')->name('account');
Route::post('update', [App\Http\Controllers\UserController::class, 'update'])->middleware('auth')->name('update');
