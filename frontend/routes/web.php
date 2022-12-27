<?php

use App\Http\Controllers\Agama34Controller;
use App\Http\Controllers\Auth34Controller;
use App\Http\Controllers\User34Controller;
use App\Http\Controllers\Detaildata34Controller;
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
    return view('welcome', [
        'page' => "Home"
    ]);
})->middleware('auth');


// auth
Route::get('/login34', [Auth34Controller::class, 'login'])->name('login');
Route::get('/register34', [Auth34Controller::class, 'register'])->name('auth34.register');
Route::get('/logout34', [Auth34Controller::class, 'logout'])->name('auth34.logout');

Route::post('/login34', [Auth34Controller::class, 'loginP'])->name('auth34.loginP');
Route::post('/register34', [Auth34Controller::class, 'registerP'])->name('auth34.registerP');

Route::middleware('auth')->group(function () {
    // agama
    Route::resource('/agama34', Agama34Controller::class)->middleware('admin');

    // my
    Route::get('/myprofile34', [User34Controller::class, 'myprofile'])->name('user34.myprofile');
    Route::put('/myprofile34/edit/image/{id}', [User34Controller::class, 'editimage'])->name('user34.editimage');
    Route::put('/myprofile34/edit/password/{id}', [User34Controller::class, 'editpassword'])->name('user34.editpassword');

    // user
    Route::resource('/user34', User34Controller::class)->middleware('admin');

    // detail
    Route::resource('/detaildata34', Detaildata34Controller::class);
});