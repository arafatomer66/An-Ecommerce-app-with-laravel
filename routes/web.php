<?php

use Illuminate\Routing\RouteGroup;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| Backend web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => '/categories'] , function() {
   Route::get('/manage', [App\Http\Controllers\backend\CategoryController::class, 'index'])->name('manageCategory');
   Route::get('/create', [App\Http\Controllers\backend\CategoryController::class, 'create'])->name('createCategory');
   Route::post('/create', [App\Http\Controllers\backend\CategoryController::class, 'store'])->name('storeCategory');
   Route::get('/edit/{id}', [App\Http\Controllers\backend\CategoryController::class, 'edit'])->name('editCategory');
   Route::post('/edit/{id}', [App\Http\Controllers\backend\CategoryController::class, 'update'])->name('updateCategory');
   Route::post('/delete/{id}', [App\Http\Controllers\backend\CategoryController::class, 'destroy'])->name('deleteCategory');
});



	// 	Product Brand Routes
	Route::group(['prefix' => '/brands'], function(){
		Route::get('/manage', [App\Http\Controllers\backend\BrandController::class, 'index'])->name('manageBrand');
		// Show Create Page and Store after Submit
		Route::get('/create', [App\Http\Controllers\backend\BrandController::class, 'create'])->name('createBrand');
		Route::post('/create', [App\Http\Controllers\backend\BrandController::class, 'store'])->name('storeBrand');
		// Show Edit Page and Update after Submit
		Route::get('/edit/{id}', [App\Http\Controllers\backend\BrandController::class, 'edit'])->name('editBrand');
		Route::post('/edit/{id}', [App\Http\Controllers\backend\BrandController::class, 'update'])->name('updateBrand');
		// Delete Brand From Manage
		Route::post('/delete/{id}', [App\Http\Controllers\backend\BrandController::class, 'destroy'])->name('deleteBrand');
	});





	// 	Product  Routes
	Route::group(['prefix' => '/products'], function(){
		Route::get('/manage', [App\Http\Controllers\backend\ProductController::class, 'index'])->name('manageProduct');
		// Show Create Page and Store after Submit
		Route::get('/create', [App\Http\Controllers\backend\ProductController::class, 'create'])->name('createProduct');
		Route::post('/create', [App\Http\Controllers\backend\ProductController::class, 'store'])->name('storeProduct');
		// Show Edit Page and Update after Submit
		Route::get('/edit/{id}', [App\Http\Controllers\backend\ProductController::class, 'edit'])->name('editProduct');
		Route::post('/edit/{id}', [App\Http\Controllers\backend\ProductController::class, 'update'])->name('updateProduct');
		// Delete Brand From Manage
		Route::post('/delete/{id}', [App\Http\Controllers\backend\ProductController::class, 'destroy'])->name('deleteProduct');
	});


    // Division Routes
	Route::group(['prefix' => '/divisions'], function(){
		Route::get('/manage',  [App\Http\Controllers\backend\DivisionController::class, 'index'])->name('manageDivision');
		// Show Create Page and Store after Submit
		Route::get('/create',  [App\Http\Controllers\backend\DivisionController::class, 'create'])->name('createDivision');
		Route::post('/create',  [App\Http\Controllers\backend\DivisionController::class, 'store'])->name('storeDivision');
		// Show Edit Page and Update after Submit
		Route::get('/edit/{id}',  [App\Http\Controllers\backend\DivisionController::class, 'edit'])->name('editDivision');
		Route::post('/edit/{id}',  [App\Http\Controllers\backend\DivisionController::class, 'update'])->name('updateDivision');
		// Delete Brand From Manage
		Route::post('/delete/{id}',  [App\Http\Controllers\backend\DivisionController::class, 'destroy'])->name('deleteDivision');
	});

	// District Routes
	Route::group(['prefix' => '/districts'], function(){
		Route::get('/manage', [App\Http\Controllers\backend\DistrictController::class, 'index'])->name('manageDistrict');
		// Show Create Page and Store after Submit
		Route::get('/create', [App\Http\Controllers\backend\DistrictController::class, 'create'])->name('createDistrict');
		Route::post('/create',  [App\Http\Controllers\backend\DistrictController::class, 'store'])->name('storeDistrict');
		// Show Edit Page and Update after Submit
		Route::get('/edit/{id}',  [App\Http\Controllers\backend\DistrictController::class, 'edit'])->name('editDistrict');
		Route::post('/edit/{id}',  [App\Http\Controllers\backend\DistrictController::class, 'update'])->name('updateDistrict');
		// Delete Brand From Manage
		Route::post('/delete/{id}',  [App\Http\Controllers\backend\DistrictController::class, 'destroy'])->name('deleteDistrict');
	});


