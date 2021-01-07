<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\Frontend\FrontCategoriesController;
use App\Http\Controllers\Frontend\VerificationController;
use App\Http\Controllers\Backend\AdminPagesController;
use App\Http\Controllers\Backend\AdminProductsController;
use App\Http\Controllers\Backend\CategoriesController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\DistrictsController;
use App\Http\Controllers\Backend\DivisionsController;

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
Route::get("/search", [PagesController::class, 'search'])->name('search');


/*
| products Routes
| all the products for frontend
*/
Route::group(['prefix' => 'products'], function(){
  Route::get("/", [ProductsController::class, 'index'])->name('products.index');
  Route::get("/{slug}", [ProductsController::class, 'show'])->name('product.show');

  //frontend category routes
  Route::group(['prefix' => 'categories'], function(){
    Route::get('/', [FrontCategoriesController::class, 'index'])->name('category.index');
    Route::get('/{id}', [FrontCategoriesController::class, 'show'])->name('category.show');
  });
});
//verify
Route::get("/token/{token}", [VerificationController::class, 'verify'])->name('user.verification');

//admin Routes
Route::group(['prefix' => 'admin'], function(){
  Route::get('/', [AdminPagesController::class, 'index'])->name('admin.index');

  //admin product routes
  Route::group(['prefix' => 'product'], function(){
    Route::get('/', [AdminProductsController::class, 'product_index'])->name('admin.product.index');
    Route::get('/create', [AdminProductsController::class, 'product_create'])->name('admin.product.create');
    Route::get('/edit/{id}', [AdminProductsController::class, 'product_edit'])->name('admin.product.edit');
    Route::post('/store', [AdminProductsController::class, 'product_store'])->name('admin.product.store');
    Route::post('/update/{id}', [AdminProductsController::class, 'product_update'])->name('admin.product.update');
    Route::post('/delete/{id}', [AdminProductsController::class, 'product_delete'])->name('admin.product.delete');
  });
  //admin category routes
  Route::group(['prefix' => 'category'], function(){
    Route::get('/', [CategoriesController::class, 'index'])->name('admin.category.index');
    Route::get('/create', [CategoriesController::class, 'create'])->name('admin.category.create');
    Route::get('/edit/{id}', [CategoriesController::class, 'edit'])->name('admin.category.edit');
    Route::post('/store', [CategoriesController::class, 'store'])->name('admin.category.store');
    Route::post('/update/{id}', [CategoriesController::class, 'update'])->name('admin.category.update');
    Route::post('/delete/{id}', [CategoriesController::class, 'delete'])->name('admin.category.delete');
  });
  //admin brands routes
  Route::group(['prefix' => 'brands'], function(){
    Route::get('/', [BrandController::class, 'index'])->name('admin.brand.index');
    Route::get('/create', [BrandController::class, 'create'])->name('admin.brand.create');
    Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('admin.brand.edit');
    Route::post('/store', [BrandController::class, 'store'])->name('admin.brand.store');
    Route::post('/update/{id}', [BrandController::class, 'update'])->name('admin.brand.update');
    Route::post('/delete/{id}', [BrandController::class, 'delete'])->name('admin.brand.delete');
  });
  //admin brands routes
  Route::group(['prefix' => 'districts'], function(){
    Route::get('/', [DistrictsController::class, 'index'])->name('admin.district.index');
    Route::get('/create', [DistrictsController::class, 'create'])->name('admin.district.create');
    Route::get('/edit/{id}', [DistrictsController::class, 'edit'])->name('admin.district.edit');
    Route::post('/store', [DistrictsController::class, 'store'])->name('admin.district.store');
    Route::post('/update/{id}', [DistrictsController::class, 'update'])->name('admin.district.update');
    Route::post('/delete/{id}', [DistrictsController::class, 'delete'])->name('admin.district.delete');
  });
  //admin brands routes
  Route::group(['prefix' => 'divisions'], function(){
    Route::get('/', [DivisionsController::class, 'index'])->name('admin.division.index');
    Route::get('/create', [DivisionsController::class, 'create'])->name('admin.division.create');
    Route::get('/edit/{id}', [DivisionsController::class, 'edit'])->name('admin.division.edit');
    Route::post('/store', [DivisionsController::class, 'store'])->name('admin.division.store');
    Route::post('/update/{id}', [DivisionsController::class, 'update'])->name('admin.division.update');
    Route::post('/delete/{id}', [DivisionsController::class, 'delete'])->name('admin.division.delete');
  });

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
