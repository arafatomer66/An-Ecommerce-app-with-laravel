<?php

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


/*
|--------------------------------------------------------------------------
| Front End Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Home Page Route
Route::get('/', 'Frontend\PagesController@index')->name('homepage');

// Admin Login & Registration
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');


// Visitor Login & Registration
Route::get('/register/visitor', 'Auth\RegisterController@showVisitorRegisterForm')->name('vRegister');
Route::post('/register/visitor', 'Auth\RegisterController@createVisitor')->name('visitor.register');
Route::get('/login/visitor', 'Auth\LoginController@showVisitorLoginForm')->name('vlogin');
Route::post('/login/visitor', 'Auth\LoginController@visitorLogin')->name('visitor.login');


Route::view('/admin', 'admin');
Route::view('/visitor', 'visitor');
Auth::routes();


Route::group(['prefix' => '/visitor'], function(){
	// Logged In User My Account
	Route::get('/myAccount', 'Frontend\VisitorController@index')->name('myAccount');
	Route::get('/edit', 'Frontend\VisitorController@edit')->name('editVisitor');
	Route::post('/profile/update', 'Frontend\VisitorController@update')->name('updateVisitor');
});
	
Auth::routes();



// Product Page's Route
Route::group(['prefix' => '/product'], function(){
	Route::get('/', 'Frontend\WebProductController@index')->name('product');
	Route::get('/{slug}', 'Frontend\WebProductController@show')->name('product.show');

	// Parent Category 
	Route::get('/', 'Frontend\CategoriesController@index')->name('categories.index');
	// Single Category Product List
	Route::get('/category/{id}', 'Backend\CategoryController@show')->name('categories.show');
});




/*
|--------------------------------------------------------------------------
| Backend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => '/admin'], function(){

	Route::get('/dashboard', 'HomeController@index')->name('dashboard');

	//  Product Category Routes
	Route::group(['prefix' => '/categories'], function(){
		Route::get('/manage', 'Backend\CategoryController@index')->name('manageCategory');
		// Show Create Page and Store after Submit
		Route::get('/create', 'Backend\CategoryController@create')->name('createCategory');
		Route::post('/create', 'Backend\CategoryController@store')->name('storeCategory');
		// Show Edit Page and Update after Submit
		Route::get('/edit/{id}', 'Backend\CategoryController@edit')->name('editCategory');
		Route::post('/edit/{id}', 'Backend\CategoryController@update')->name('updateCategory');
		// Delete Category From Manage
		Route::post('/delete/{id}', 'Backend\CategoryController@destroy')->name('deleteCategory');
	});

	// 	Product Brand Routes
	Route::group(['prefix' => '/brands'], function(){
		Route::get('/manage', 'Backend\BrandController@index')->name('manageBrand');
		// Show Create Page and Store after Submit
		Route::get('/create', 'Backend\BrandController@create')->name('createBrand');
		Route::post('/create', 'Backend\BrandController@store')->name('storeBrand');
		// Show Edit Page and Update after Submit
		Route::get('/edit/{id}', 'Backend\BrandController@edit')->name('editBrand');
		Route::post('/edit/{id}', 'Backend\BrandController@update')->name('updateBrand');
		// Delete Brand From Manage
		Route::post('/delete/{id}', 'Backend\BrandController@destroy')->name('deleteBrand');
	});

	// 	Product Routes
	Route::group(['prefix' => '/products'], function(){
		Route::get('/manage', 'Backend\ProductController@index')->name('manageProduct');
		// Show Create Page and Store after Submit
		Route::get('/create', 'Backend\ProductController@create')->name('createProduct');
		Route::post('/create', 'Backend\ProductController@store')->name('storeProduct');
		// Show Edit Page and Update after Submit
		Route::get('/edit/{id}', 'Backend\ProductController@edit')->name('editProduct');
		Route::post('/edit/{id}', 'Backend\ProductController@update')->name('updateProduct');
		// Delete Brand From Manage
		Route::post('/delete/{id}', 'Backend\ProductController@destroy')->name('deleteProduct');
	});


	// Division Routes
	Route::group(['prefix' => '/divisions'], function(){
		Route::get('/manage', 'Backend\DivisionController@index')->name('manageDivision');
		// Show Create Page and Store after Submit
		Route::get('/create', 'Backend\DivisionController@create')->name('createDivision');
		Route::post('/create', 'Backend\DivisionController@store')->name('storeDivision');
		// Show Edit Page and Update after Submit
		Route::get('/edit/{id}', 'Backend\DivisionController@edit')->name('editDivision');
		Route::post('/edit/{id}', 'Backend\DivisionController@update')->name('updateDivision');
		// Delete Brand From Manage
		Route::post('/delete/{id}', 'Backend\DivisionController@destroy')->name('deleteDivision');
	});

	// District Routes
	Route::group(['prefix' => '/districts'], function(){
		Route::get('/manage', 'Backend\DistrictController@index')->name('manageDistrict');
		// Show Create Page and Store after Submit
		Route::get('/create', 'Backend\DistrictController@create')->name('createDistrict');
		Route::post('/create', 'Backend\DistrictController@store')->name('storeDistrict');
		// Show Edit Page and Update after Submit
		Route::get('/edit/{id}', 'Backend\DistrictController@edit')->name('editDistrict');
		Route::post('/edit/{id}', 'Backend\DistrictController@update')->name('updateDistrict');
		// Delete Brand From Manage
		Route::post('/delete/{id}', 'Backend\DistrictController@destroy')->name('deleteDistrict');
	});

});