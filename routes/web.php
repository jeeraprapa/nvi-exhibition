<?php

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

Route::get('/', function () {
    return view('index');
});


Route::get('/booth/production-network', function () {
    return view('booth.index');
})->name('booth.production-network');

Route::get('/booth/detail/1', function () {
    return view('booth.detail1');
});

Route::get('/booth/detail/2', function () {
    return view('booth.detail2');
});

Route::get('/booth/detail/3', function () {
    return view('booth.detail3');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
