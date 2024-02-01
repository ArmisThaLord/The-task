<?php

use App\Http\Controllers\GiftController;
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

Route::get('/gift',[GiftController::class, 'index'])->name('gift.index');
Route::get('/gift/create',[GiftController::class, 'create'])->name('gift.create');
Route::post('/gift',[GiftController::class, 'store'])->name('gift.store');
