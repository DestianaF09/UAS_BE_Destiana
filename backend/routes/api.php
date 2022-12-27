<?php

use App\Http\Controllers\Api\Agama34Controller;
use App\Http\Controllers\api\Detaildata34Controller;
use App\Http\Controllers\api\User34Controller;
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

route::resource('/agama34', Agama34Controller::class);

route::resource('/detaildata34', DetailData34Controller::class);

route::resource('/user34', User34Controller::class);
Route::put('/user34/update/image/{id}', [User34Controller::class, 'editimage'])->name('user34.editimage');
Route::put('/user34/update/password/{id}', [User34Controller::class, 'editpassword'])->name('user34.editpassword');

// detail
route::resource('/detaildata34', Detaildata34Controller::class);
