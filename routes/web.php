<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;


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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');


Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register',[RegisterController::class,'store'])->name('register');

Route::get('/compras', function () {
    return view('compras');
})->middleware('can:compras')->name('compras');

Route::get('/ventas', function () {
    return view('ventas');
})->middleware('can:ventas')->name('ventas');

Route::get('/almacen', function () {
    return view('almacen');
})->middleware('can:almacen')->name('almacen');

Route::resource('users',UserController::class)->names('users');
Route::resource('permissions',PermissionController::class)->names('permissions');
Route::resource('roles',RoleController::class)->names('roles');
