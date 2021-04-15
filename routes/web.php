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
   Route::get('/manage', [App\Http\Controllers\CategoryController::class, 'index'])->name('manageCategory');
   Route::get('/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('createCategory');
   Route::post('/create', [App\Http\Controllers\CategoryController::class, 'store'])->name('storeCategory');
   Route::post('/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('editCategory');
});



