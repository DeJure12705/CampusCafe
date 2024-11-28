<?php

use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/Contact-page', function () {
    return view('contact');
})->name('contactP');


Route::get('/Order-Menu', [OrderController::class, 'index'])->name('Order');

Route::get('/About-us-Page', function () {
    return view('about_us');
})->name('aboutP');

Route::get('/Rating-Page', function () {
    return view('ratings');
})->name('ratingP');


Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('orders', OrderController::class);

// CRUD sa ProductController
Route::post('/create-product', [ProductController::class, 'createProduct'])->name('product.create');
Route::get('/ordermen', [ProductController::class, 'displayOrder'])->name('ordermen');

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::put('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');

Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', [App\Http\Controllers\UserController::class, 'index'])->name('user.dashboard');
});

Route::middleware(['auth', AuthAdmin::class])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin.admin');
});
