<?php

use App\Http\Controllers\ApinapiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('index', [ApinapiController::class, 'index']);
Route::post('search', [ApinapiController::class, 'search']);
Route::get('jail={id}&name={name}', [ApinapiController::class, 'getsearch']);
Route::get('jail', [ApinapiController::class, 'jail']);
