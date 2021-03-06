<?php

use App\Http\Controllers\ApinapiController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DataController;
use App\Http\Controllers\Admin\JailController;
use App\Http\Controllers\Admin\PkController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Models\Jail;
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

Route::get('/', [GuestController::class, 'index'])->name('index');
Route::get('/load/name={name}&type={id}', [GuestController::class, 'load']);

Route::get('/regis', function (Request $request) {
    $random = Str::random(10);
    $session_id = Session::getId();
    $value = $session_id . $random . mt_rand(0000, 9999);
    $user = User::find(1);
    $user->uid = $value;
    $user->save();

    $jail = Jail::all()->sortBy("name");
    // $response = new Response();
    // $response->headers->clearCookie('ebima');
    // $response->send();
    return response()->view('index', compact('jail'))->withCookie(cookie('ebima', $value));
});

Route::get('/logout', function () {
    Auth::logout();
    return Redirect::to('/');
})->name('logout');

Route::get('/error', function () {

    $jail = Jail::all()->sortBy("name");
    return view('index', compact('jail'));
})->name('error');



Route::get('napi', [ApinapiController::class, 'index'])->name('napi');
Route::post('search', [ApinapiController::class, 'search'])->name('search');

Route::get('/autocomplete', [GuestController::class, 'ai']);
Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::middleware(['admin'])->group(function () {
        Route::get('cookie', [HomeController::class, 'getcookie']);
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');

        Route::get('/data', [DataController::class, 'index'])->name('data');
        Route::get('/data/add', [DataController::class, 'add'])->name('data.add');
        Route::post('/data/store', [DataController::class, 'store'])->name('data.store');
        Route::get('/data/delete/{id}', [DataController::class, 'delete'])->name('data.delete');
        Route::post('/data/update/{id}', [DataController::class, 'update'])->name('data.update');


        Route::get('/jail', [JailController::class, 'index'])->name('jail');
        Route::get('/jail/add', [JailController::class, 'add'])->name('jail.add');
        Route::post('/jail/store', [JailController::class, 'store'])->name('jail.store');
        Route::get('/jail/delete/{id}', [JailController::class, 'delete'])->name('jail.delete');
        Route::post('/jail/update/{id}', [JailController::class, 'update'])->name('jail.update');


        Route::get('/pk', [PkController::class, 'index'])->name('pk');
        Route::get('/pk/add', [PkController::class, 'add'])->name('pk.add');
        Route::post('/pk/store', [PkController::class, 'store'])->name('pk.store');
        Route::get('/pk/delete/{id}', [PkController::class, 'delete'])->name('pk.delete');
        Route::post('/pk/update/{id}', [PkController::class, 'update'])->name('pk.update');

        Route::get('/type', [TypeController::class, 'index'])->name('type');
        Route::get('/type/add', [TypeController::class, 'add'])->name('type.add');
        Route::post('/type/store', [TypeController::class, 'store'])->name('type.store');
        Route::get('/type/delete/{id}', [TypeController::class, 'delete'])->name('type.delete');
        Route::post('/type/update/{id}', [TypeController::class, 'update'])->name('type.update');

        Route::get('/setting', [SettingController::class, 'index'])->name('setting');
        Route::post('/setting/store', [SettingController::class, 'store'])->name('setting.store');
    });
});
