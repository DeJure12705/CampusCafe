<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('orders', OrderController::class);

// CRUD sa ProductController
Route::post('/create-product', [ProductController::class, 'createProduct'])->name('product.create');
Route::get('/ordermen', [ProductController::class, 'displayOrder'])->name('ordermen');

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::put('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');



