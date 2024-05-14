<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassicCarController;
use App\Http\Controllers\LuxuryCarController;
use App\Http\Controllers\SportCarController;
use App\Http\Controllers\FamilyCarController;




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

Route::resource('classic_cars', ClassicCarController::class);

Route::resource('luxury_cars', LuxuryCarController::class);

Route::resource('sport_cars', SportCarController::class);

Route::resource('family_cars', FamilyCarController::class);