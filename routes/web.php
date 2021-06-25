<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\NewsController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('produce', ProductController::class);

Route::get('/about', [AboutController::class, 'about']);


//Halaman News
Route::get('/news', [ServicesController::class, 'news']);

//Halaman Programs
Route::get('/program', [ServicesController::class, 'program']);

//Halaman Product
Route::get('/product', [ServicesController::class, 'product']);

//Halaman Contact
Route::get('/contact', [ContactController::class, 'contact']);

//Halaman Index
Route::get('/index', [IndexController::class, 'index']);

//Halaman Services
Route::get('/services', [ServicesController::class, 'services']);

Route::get('/Produce/cetak_khs', [ProductController::class, 'cetak_khs']);