<?php

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
use App\Http\Controllers\API\SanphamController;
use App\Http\Controllers\API\LoaitinController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DoitacController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\API\NguoidungController;
use App\Http\Controllers\API\PhanhoiController;

Route::get('/', function () {
    return view('home.index');
});
Route::get('/home', function () {
    return view('home.index');
});
Route::get('/home/author/', function () {
    return view('home.author');
});
Route::get('/home/contact', function () {
    return view('home.contact');
});
Route::get('/home/chitietnews/', function () {
    return view('home.chitietnews');
});
Route::get('/home/thuthuat', function () {
    return view('home.thuthuat');
});
Route::get('/home/computer', function () {
    return view('home.computer');
});
Route::get('/home/smartphone', function () {
    return view('home.smartphone');
});
Route::get('/home/danhgia', function () {
    return view('home.danhgia');
});
Route::get('/home/login', function () {
    return view('home.login');
});


Route::get('/admincp', function () {
    return view('admincp.trangchu');
});
Route::get('/admincp/sanpham', function () {
    return view('admincp.sanpham');
});
Route::get('/admincp/loaitin', function () {
    return view('admincp.loaitin');
});
Route::get('/admincp/news', function () {
    return view('admincp.news');
});
Route::get('/admincp/nguoidung', function () {
    return view('admincp.nguoidung');
});
Route::get('/admincp/doitac', function () {
    return view('admincp.doitac');
});
Route::get('/admincp/comment', function () {
    return view('admincp.comment');
});
Route::get('/admincp/slide', function () {
    return view('admincp.slide');
});



