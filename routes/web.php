<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassicCarController;
use App\Http\Controllers\LuxuryCarController;
use App\Http\Controllers\SportCarController;
use App\Http\Controllers\FamilyCarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarOrderController;


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

Route::get('/', function () {
    return view('welcome');
});

 // backend

Route::resource('classic_cars', ClassicCarController::class);

Route::resource('luxury_cars', LuxuryCarController::class);

Route::resource('sport_cars', SportCarController::class);

Route::resource('family_cars', FamilyCarController::class);

// frntend
Route::get('/sportcars', [HomeController::class, 'getSportCars']);
Route::get('/familycars', [HomeController::class, 'getFamilyCars']);
Route::get('/luxurycars', [HomeController::class, 'getLuxuryCars']);
Route::get('/classiccars', [HomeController::class, 'getClassicCars']);


Route::post('/carorders/store', [CarOrderController::class, 'store'])->name('carorders.store');
Route::get('/carorders/{id}', [CarOrderController::class, 'show'])->name('carorders.show');

Route::get('/about', [HomeController::class, 'index'])->name('about');
Route::get('/receipt', [HomeController::class, 'receipt'])->name('receipt');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
