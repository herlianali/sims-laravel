<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view('index');
});

Route::get('/login', function () {
	return view('index');
});


Route::group(['prefix' => 'admin'], function () {
	Route::get('/', 		 [AdminController::class, 'index']);
	Route::get('/admin',     [AdminController::class, 'admin']);
	Route::get('/dosen',     [AdminController::class, 'dosen']);
	Route::get('/kaprodi',   [AdminController::class, 'kaprodi']);
	Route::get('/mahasiswa', [AdminController::class, 'mahasiswa']);
	Route::get('/user',      [AdminController::class, 'user']);
	Route::get('/jadwal',    [AdminController::class, 'jadwal']);
});

