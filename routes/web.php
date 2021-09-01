<?php

use App\Http\Controllers\ApinapiController;
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

Route::get('napi', [ApinapiController::class, 'index'])->name('napi');
Route::post('search', [ApinapiController::class, 'search'])->name('search');
