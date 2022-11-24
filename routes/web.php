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

	Route::get('dogovir-ofertu', [App\Http\Controllers\HomeController::class, 'oferta'])->name('oferta');
	Route::get('polituka-konfidencijnosti', [App\Http\Controllers\HomeController::class, 'konfident'])->name('konfident');

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

	Route::get('tenderne-pravo', [App\Http\Controllers\ServiceController::class, 'tendernePravo'])->name('tendernePravo');

	Route::get('podatkove-pravo', [App\Http\Controllers\ServiceController::class, 'podatkovePravo'])->name('podatkovePravo');
	
	Route::get('mihratsiine-pravo', [App\Http\Controllers\ServiceController::class, 'mihratsiinePravo'])->name('mihratsiinePravo');
	Route::get('mihratsiine-pravo/otrymannia-ipn-inozemtsiu', [App\Http\Controllers\ServiceController::class, 'otrymanniaIpn'])->name('otrymanniaIpn');
	Route::get('mihratsiine-pravo/otrymannia-dozvolu-inozemtsiu', [App\Http\Controllers\ServiceController::class, 'otrymanniaDoz'])->name('otrymanniaDoz');
	Route::get('mihratsiine-pravo/otrymannia-posvidky-na-prozhyvannia', [App\Http\Controllers\ServiceController::class, 'otrymanniaPos'])->name('otrymanniaPos');
	
	Route::get('intelektualna-vlasnist', [App\Http\Controllers\ServiceController::class, 'intelektVlasnist'])->name('intelektVlasnist');
	
	Route::get('bukhhalterskyi-autsorsing', [App\Http\Controllers\ServiceController::class, 'bukhhalterskyiAut'])->name('bukhhalterskyiAut');

	Route::get('blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.main');
	Route::get('blog/{slug?}', [App\Http\Controllers\BlogController::class, 'category'])->where(['slug' => '[a-zA-Z0-9-]+'])->name('blog.category');

	//mailto 
	Route::post('mail', [App\Http\Controllers\MailController::class, 'send']);

});

Auth::routes(['register' => false]);

