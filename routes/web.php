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
	Route::get('/site-under-construction', [App\Http\Controllers\HomeController::class, 'dev'])->name('dev');

	//services routes
	Route::get('/juridichnij-autsorsing', [App\Http\Controllers\ServiceController::class, 'jurAut'])->name('jurAut');
});

Auth::routes(['register' => false]);

