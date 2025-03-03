<?php

use App\Events\HelloEvent;
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

Route::get('/sender', function () {
    broadcast(new HelloEvent(date('Y-m-d H:i:s') . " Selamat Datang"));
});


Route::get('/home', function () {
    return view('home');
});
