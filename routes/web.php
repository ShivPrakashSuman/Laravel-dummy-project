<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\userController;
use App\Http\Controllers\productController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\brandController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\curlController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Route::get('/{lang?}', function ($lang = null) {
//     App::setLocale($lang);
//     return view('pages.auth.login');
// });

Route::prefix('user')->group(function () {
    Route::get('/', [userController::class, 'index'])->name('user');
    Route::get('/api', [userController::class, 'api'])->name('user.api');
    Route::get('/edit/{id}', [userController::class, 'edit']);
    Route::post('/update/{id}', [userController::class, 'update'])->name('user.update');
    Route::get('/delete/{id}', [userController::class, 'delete']);
    // CSV ----
    Route::get('/export', [userController::class, 'export']); 
    Route::get('/import', [userController::class, 'import']);
    Route::post('/import/store', [userController::class, 'importStore'])->name('user.import.store');
})->middleware('auth');
Route::prefix('product')->group(function () {
    Route::get('/', [productController::class, 'index'])->name('product');
    Route::get('/add', [productController::class, 'create']);
    Route::post('/store', [productController::class, 'store'])->name('product.store');
    Route::get('/edit/{id}', [productController::class, 'edit']);
    Route::post('/update/{id}', [productController::class, 'update'])->name('product.update');
    Route::get('/delete/{id}', [productController::class, 'delete']);
})->middleware('auth');
Route::prefix('category')->group(function () {
    Route::get('/', [categoryController::class, 'index'])->name('category');
    Route::get('/add', [categoryController::class, 'create']);
    Route::post('/store', [categoryController::class, 'store'])->name('category.store');
    Route::get('/edit/{id}', [categoryController::class, 'edit']);
    Route::post('/update/{id}', [categoryController::class, 'update'])->name('category.update');
    Route::get('/delete/{id}', [categoryController::class, 'destroy']);
})->middleware('auth');
Route::prefix('brand')->group(function () {
    Route::get('/', [brandController::class, 'index'])->name('brand');
    Route::get('/add', [brandController::class, 'create']);
    Route::post('/store', [brandController::class, 'store'])->name('brand.store');
    Route::get('/edit/{id}', [brandController::class, 'edit']);
    Route::post('/update/{id}', [brandController::class, 'update'])->name('brand.update');
    Route::get('/delete/{id}', [brandController::class, 'destroy']);
    Route::get('/view/{id}', [brandController::class, 'view']);
})->middleware('auth');
Route::prefix('order')->group(function () {
    Route::get('/', [orderController::class, 'index'])->name('order');
    Route::get('/add', [orderController::class, 'create']);
    Route::post('/store', [orderController::class, 'store'])->name('order.store');
    Route::get('/edit/{id}', [orderController::class, 'edit']);
    Route::post('/update/{id}', [orderController::class, 'update'])->name('order.update');
    Route::get('/delete/{id}', [orderController::class, 'destroy']);
});
Route::prefix('curl')->group(function () {
    Route::get('/', [curlController::class, 'index'])->name('curl');
    Route::get('/dragdrop', [curlController::class, 'dragdrop']);
})->middleware('auth');

 //Auth::routes();

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::get('google/login', [LoginController::class, 'googleLogin'])->name('google.login');
Route::get('github/login', [LoginController::class, 'githubLogin'])->name('github.login');
Route::get('google/collback', [LoginController::class, 'collbackHandel_google'])->name('google.login.collback');
Route::get('github/collback', [LoginController::class, 'collbackHandel_github'])->name('github.login.collback');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/loginStore', [LoginController::class, 'loginStore'])->name('login.store');

Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/store', [RegisterController::class, 'create'])->name('register.store');
