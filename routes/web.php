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

Route::localizedGroup(function () {

	Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
	Route::get('site-under-construction', [App\Http\Controllers\HomeController::class, 'dev'])->name('dev');

	//services routes
	Route::get('juridichnij-autsorsing', [App\Http\Controllers\ServiceController::class, 'jurAut'])->name('jurAut');

	Route::get('vurishennja-sporiv', [App\Http\Controllers\ServiceController::class, 'vurSpor'])->name('vurSpor');
	Route::get('vurishennja-sporiv/dosudove-vurishennja-sporiv', [App\Http\Controllers\ServiceController::class, 'dosudoveVur'])->name('dosudoveVur');
	Route::get('vurishennja-sporiv/gospodarski-spory', [App\Http\Controllers\ServiceController::class, 'gospSpor'])->name('gospSpor');
	Route::get('vurishennja-sporiv/administratyvni-spory', [App\Http\Controllers\ServiceController::class, 'adminSpor'])->name('adminSpor');
	
	Route::get('korporatyvne-pravo', [App\Http\Controllers\ServiceController::class, 'korpPravo'])->name('korpPravo');
	Route::get('korporatyvne-pravo/vidkryttia-biznesu-v-ukraini', [App\Http\Controllers\ServiceController::class, 'vidkryttiaUkr'])->name('vidkryttiaUkr');
	Route::get('korporatyvne-pravo/kupivlia-hotovykh-kompanii', [App\Http\Controllers\ServiceController::class, 'kupivliaKomp'])->name('kupivliaKomp');
	Route::get('korporatyvne-pravo/zakryttia-biznesu-v-ukraini', [App\Http\Controllers\ServiceController::class, 'zakryttiaBiz'])->name('zakryttiaBiz');
	Route::get('korporatyvne-pravo/vidkryttia-biznesu-usa', [App\Http\Controllers\ServiceController::class, 'vidkryttiaUsa'])->name('vidkryttiaUsa');
});

Auth::routes(['register' => false]);

