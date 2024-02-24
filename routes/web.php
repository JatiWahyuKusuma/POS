<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FobevController;
use App\Http\Controllers\BabykidController;
use App\Http\Controllers\BeauhealthController;
use App\Http\Controllers\HomeCareController;
use App\Http\Controllers\TransaksiController;

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
    return view('home');
});
Route::prefix('Category')->group(function () {
    Route::get('/food-beverage', [FobevController::class, 'pos']); 
    Route::get('/beauty-health', [BeauhealthController::class, 'pos']); 
    Route::get('/home-care', [BabykidController::class, 'pos']);
    Route::get('/baby-kid', [HomeCareController::class, 'pos']);
});

// soal no 3
Route::get('/user/{name}/id/{id}', function ($name, $noId) {
     return 'Nama saya : '. $name." no ID : ". $noId;
});

// soal  no 4
Route::get('/transaksi', [TransaksiController::class, 'index']);

