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
    return view('layouts');
});

Route::get('/', function () {
    return view('layouts');
})->name('dashboard');
Route::group(['prefix' => 'jenis-barang'], function (){
    Route::match(['post', 'get'], '/', [\App\Http\Controllers\JenisBarangController::class, 'index'])->name('jenis-barang');
});
