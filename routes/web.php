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

// Route::get('/', function () {
//     return view('auth.login');
// });
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Auth::routes();
Route::get('/products',[productController::class,'index'])->name('products');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile',[AdminController::class,'profile'])->name('profile');
Route::get('/add/product', [productController::class,'add'])->name('add.product');
Route::post('/store', [productController::class,'store'])->name('store');
Route::get('/product/details/{slug}', [productController::class,'show'])->name('product.show');
Route::put('/produc/edit/{slug}', [productController::class,'update'])->name('product.edit');
Route::delete('/produc/delet/{slug}', [productController::class,'delete'])->name('product.delet');
Route::get('/{page}', [AdminController::class,'index']);





