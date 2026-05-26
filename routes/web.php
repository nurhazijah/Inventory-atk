<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\StokMasukController;
use App\Http\Controllers\PengeluaranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



/*
|--------------------------------------------------------------------------
| STOK MASUK
|--------------------------------------------------------------------------
*/

Route::get('/stok-masuk', [StokMasukController::class, 'index']);

Route::get('/stok-masuk/create', [StokMasukController::class, 'create']);

Route::post('/stok-masuk/store', [StokMasukController::class, 'store']);

Route::get('/stok-masuk/edit/{id}', [StokMasukController::class, 'edit']);

Route::put('/stok-masuk/update/{id}', [StokMasukController::class, 'update']);

Route::delete('/stok-masuk/delete/{id}', [StokMasukController::class, 'destroy']);



/*
|--------------------------------------------------------------------------
| PENGELUARAN
|--------------------------------------------------------------------------
*/

Route::get('/pengeluaran', [PengeluaranController::class, 'index']);

Route::get('/pengeluaran/create', [PengeluaranController::class, 'create']);

Route::post('/pengeluaran/store', [PengeluaranController::class, 'store']);

Route::get('/pengeluaran/edit/{id}', [PengeluaranController::class, 'edit']);

Route::put('/pengeluaran/update/{id}', [PengeluaranController::class, 'update']);

Route::delete('/pengeluaran/delete/{id}', [PengeluaranController::class, 'destroy']);