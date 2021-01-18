<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Route::resource('products', ProductController::class);
use App\Http\Controllers\daftarController;
Route::resource('daftar', daftarController::class);
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
use App\Http\Controllers\FormController;
Route::resource('forms', FormController::class);

Route::get('/', function () {
    return view('home2');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('panduan', function () {
    return view('panduan');
});
Route::get('FAQ', function () {
    return view('FAQ');
});
Route::get('panduan', function () {
    return view('panduan');
});
Route::get('home2', function () {
    return view('home2');
});
// Route::get('/home', 'BlogController@home');
// Route::get('/home/panduan', 'BlogController@panduan');
// Route::get('/home/FAQ', 'BlogController@FAQ');