<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\productController;

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
    return view('auth.login');
});
Auth::routes();
Route::get('/products',[productController::class,'index'])->name('products');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile',[AdminController::class,'profile'])->name('profile');
Route::get('/add/product', [productController::class,'add']);
Route::get('/{page}', [AdminController::class,'index']);



