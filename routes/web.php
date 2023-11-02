<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

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

Route::get('/saludo', function () {
    return view('saludo');
});

Route::get('/', function () {
    return view('welcome');
});

Route::post('country/store', [CountryController::class, 'store'])->name('country.store');
Route::get('country/create', [CountryController::class, 'create'])->name('country.create');
Route::get('country/index', [CountryController::class, 'index'])->name('country.index');
Route::delete('country/destroy/{id}', [CountryController::class, 'destroy'])->name('country.destroy');