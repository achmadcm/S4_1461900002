<?php

use App\Http\Controllers\pasiencontroller0002;
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
Route::resource('dokter0002',pasiencontroller0002::class);

Route::get('pasienimport0002', [pasiencontroller0002::class, 'formimport']);
Route::post("pasienimport0002", [pasiencontroller0002::class, 'import'])->name("pasien.import");
