<?php

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
use App\Http\Controllers\API\SanphamController;
use App\Http\Controllers\API\LoaitinController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ChitietnewsController;
use App\Http\Controllers\API\NguoidungController;
use App\Http\Controllers\DoitacController;
use App\Http\Controllers\PhanhoiController;
use App\Http\Controllers\SlideController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('sanphams', SanphamController::class);
Route::resource('loaitins', LoaitinController::class);
Route::resource('news', NewsController::class);
Route::resource('chitietnews', ChitietnewsController::class);
Route::resource('newshome', NewsController::class);
Route::resource('nguoidungs', NguoidungController::class);
Route::resource('doitacs', DoitacController::class);
Route::resource('comments', PhanhoiController::class);
Route::resource('slides', SlideController::class);