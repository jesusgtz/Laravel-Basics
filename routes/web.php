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

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::get('/portfolio', 'PortfolioController')->name('portfolio');

/*
 * Ejemplos
 */

// Route::view('/', 'home', ['nombre' => 'Jorge'])->name('home');

/* Route::get('/', function () {
	$nombre = "Jorge";
    return view('home', ['nombre' => $nombre]);
})->name('home'); */

Route::get('saludo/{nombre?}', function($nombre = "turista") {
	return "Saludos " . $nombre;
});
