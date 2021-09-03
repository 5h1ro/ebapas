<?php

use App\Http\Controllers\ApinapiController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DataController;
use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;


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

Route::get('/', function (Request $request) {
    return view('index');
});

Route::get('/regis', function (Request $request) {
    $random = Str::random(10);
    $session_id = Session::getId();
    $value = $session_id . $random . mt_rand(0000, 9999);
    $user = User::find(1);
    $user->uid = $value;
    $user->save();

    // $response = new Response();
    // $response->headers->clearCookie('ebima');
    // $response->send();
    return response()->view('welcome')->withCookie(cookie('ebima', $value));
});

Route::get('/logout', function () {
    Auth::logout();
    return Redirect::to('/');
})->name('logout');

Route::get('/error', function () {
    return view('welcome');
})->name('error');



Route::get('napi', [ApinapiController::class, 'index'])->name('napi');
Route::post('search', [ApinapiController::class, 'search'])->name('search');

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::middleware(['admin'])->group(function () {
        Route::get('cookie', [HomeController::class, 'getcookie']);
        Route::get('admin', [AdminController::class, 'index']);

        Route::get('/data', [DataController::class, 'index'])->name('data');
        Route::get('/data/add', [DataController::class, 'add'])->name('data.add');
        Route::post('/data/store', [DataController::class, 'store'])->name('data.store');
        Route::get('/data/delete/{id}', [DataController::class, 'delete'])->name('data.delete');
        Route::post('/data/update/{id}', [DataController::class, 'update'])->name('data.update');
    });
});
