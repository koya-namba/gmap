<?php

use App\Http\Controllers\GmapController;
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

Route::get('/', [GmapController::class, 'index'])->name('gmaps.index');
Route::post('/gmaps/store', [GmapController::class, 'store'])->name('gmaps.store');
Route::delete('/gmaps/{gmap}', [GmapController::class, 'delete'])->name('gmaps.delete');
