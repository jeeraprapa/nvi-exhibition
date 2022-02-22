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
})->name('http::home');

Route::get('/booth/production-network',
    [App\Http\Controllers\Booth\ProductionNetworkController::class, 'index'])
     ->name('http::booth.production-network');

Route::get('/booth/production-network/{booth}',
    [App\Http\Controllers\Booth\ProductionNetworkController::class, 'detail'])
     ->name('http::booth.production-network.detail');

Route::get('/booth/research',
    [App\Http\Controllers\Booth\ResearchController::class, 'index'])
     ->name('http::booth.research');

Route::get('/booth/research/{booth}',
    [App\Http\Controllers\Booth\ResearchController::class, 'detail'])
     ->name('http::booth.research.detail');


Route::get('/booth/assurance-vaccine',
    [App\Http\Controllers\Booth\AssuranceVaccineController::class, 'index'])
     ->name('http::booth.assurance-vaccine');

Route::get('/booth/assurance-vaccine/{booth}',
    [App\Http\Controllers\Booth\AssuranceVaccineController::class, 'detail'])
     ->name('http::booth.assurance-vaccine.detail');

Route::get('/video-award', function () {
    return view('video_award');
})->name('http::video-award');

Route::get('/hall-of-fame', function () {
    return view('trophy');
})->name('http::hall-of-fame');
