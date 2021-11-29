<?php

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layouts/dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/produktet','App\Http\Controllers\ProduktiController@index')->middleware(['auth'])->name('produktet');

Route::post('/rexhistro_produktin','App\Http\Controllers\ProduktiController@store')->middleware(['auth'])->name('rexhistro_produktin');

Route::get('/porositprod/{id}',[\App\Http\Controllers\PorositController::class,'index'])->middleware(['auth'])->name('porositprod');

Route::post('/ruajporosin',[\App\Http\Controllers\PorositController::class,'store'])->middleware(['auth'])->name('ruajporosin');

Route::get('/porosit',[\App\Http\Controllers\PorositController::class,'show'])->middleware(['auth'])->name('porosit');

Route::get('/perfundoporosin/{id}',[\App\Http\Controllers\PorositController::class,'updateAndDelete'])->middleware('auth')->name('perfundoporosin');

Route::get('/shitprod/{id}',[\App\Http\Controllers\ShitjetController::class,'index'])->middleware('auth')->name('shitprod');

Route::post('/ruajshitjen',[\App\Http\Controllers\ShitjetController::class,'updateAndStore'])->middleware('auth')->name('ruajshitjen');

Route::get('/shitjet',[\App\Http\Controllers\ShitjetController::class,'show'])->middleware('auth')->name('shitjet');
