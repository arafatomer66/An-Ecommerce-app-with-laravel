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
		Route::get('/create', 'backend\BrandController@create')->name('createBrand');
		Route::post('/create', 'backend\BrandController@store')->name('storeBrand');
		// Show Edit Page and Update after Submit
		Route::get('/edit/{id}', 'backend\BrandController@edit')->name('editBrand');
		Route::post('/edit/{id}', 'backend\BrandController@update')->name('updateBrand');
		// Delete Brand From Manage
		Route::post('/delete/{id}', 'backend\BrandController@destroy')->name('deleteBrand');
	});


