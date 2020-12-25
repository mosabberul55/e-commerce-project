<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminPagesController;

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

Route::get("/", [PagesController::class, 'index'])->name('index');
Route::get("/contact", [PagesController::class, 'contact'])->name('contact');
Route::get("/products", [PagesController::class, 'products'])->name('products');

Route::group(['prefix' => 'admin'], function(){
  Route::get('/', [AdminPagesController::class, 'index'])->name('admin.index');

  Route::group(['prefix' => 'product'], function(){
    Route::get('/', [AdminPagesController::class, 'product_index'])->name('admin.product.index');
    Route::get('/create', [AdminPagesController::class, 'product_create'])->name('admin.product.create');
    Route::get('/edit/{id}', [AdminPagesController::class, 'product_edit'])->name('admin.product.edit');
    Route::post('/store', [AdminPagesController::class, 'product_store'])->name('admin.product.store');
    Route::post('/update/{id}', [AdminPagesController::class, 'product_update'])->name('admin.product.update');
    Route::post('/delete/{id}', [AdminPagesController::class, 'product_delete'])->name('admin.product.delete');
  });

});
