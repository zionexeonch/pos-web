<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\DiscountController;

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

// Route::get('/', function () {
//     return view('home.index');
// });

Route::get('/', [AuthController::class, 'indexLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('prosesLogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('prosesLogout');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::resource('product', ProductController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('promo', PromoController::class);
    Route::resource('discount', DiscountController::class);
});
