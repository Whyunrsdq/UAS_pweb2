<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/landingpages', function () {
    return view('landing-pages');
});
Route::get('personalweb-wahyu', function () {
    return view('personalweb');
});
Route::get('personalwebadrian', function () {
    return view('personalwebadrian');
});
Route::get('wahyu', function () {
    return view('portofolio-wahyu');
});
