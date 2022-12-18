<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
// use App\Controllers\TestController;

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
        'result' => Product::all()
    ]);
});
Route::get('/static', function () {
    return view('static');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/authorization', function () {
    return view('authorization');
});
