<?php

use App\Http\Controllers\Admin\QuoteController as AdminQuoteController;
use App\Http\Controllers\Admin\MovieController as AdminMovieController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LanguageController;
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

Route::get('/change-locale/{locale}', [LanguageController::class, 'change'])->name('locale.change');

Route::view('login', 'session.create')->name('auth')->middleware('guest');

Route::controller(MovieController::class)->group(function () {
	Route::get('/', 'index')->name('home');
	Route::get('/movies/{movie:id}', 'show')->name('movie');
});

Route::controller(AuthController::class)->group(function () {
	Route::post('login', 'login')->name('login')->middleware('guest');
	Route::post('logout', 'logout')->name('logout')->middleware('auth');
});

Route::group(['middleware' => 'auth'], function () {
	Route::controller(AdminMovieController::class)->group(function () {
		Route::get('admin/movies', 'index')->name('movies.index');
		Route::post('admin/movies', 'store')->name('movies.store');
		Route::get('admin/movies/{movie}/edit', 'edit')->name('movies.edit');
		Route::patch('admin/movies/{movie}', 'update')->name('movies.update');
		Route::delete('admin/movies/{movie}', 'destroy')->name('movies.destroy');
	});

	Route::controller(AdminQuoteController::class)->group(function () {
		Route::get('admin/quotes', 'index')->name('quotes.index');
		Route::post('admin/quotes', 'store')->name('quotes.store');
		Route::get('admin/quotes/create', 'create')->name('quotes.create');
		Route::get('admin/quotes/{quote}/edit', 'edit')->name('quotes.edit');
		Route::patch('admin/quotes/{quote}', 'update')->name('quotes.update');
		Route::delete('admin/quotes/{quote}', 'destroy')->name('quotes.destroy');
	});

	Route::view('admin/movies/create', 'admin.create-movie')->name('movies.create');
});
