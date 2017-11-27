<?php

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

Route::get('login', [ 'as' => 'login', 'uses' => 'LoginController@index']);
Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@login']);

Route::group(['middleware' => 'auth'], function () {
	
	//Dashboard
	Route::get('/','WelcomeController@index');

	//Edit Profile
	Route::get('/edit-profile','EditprofileController@index');
	Route::post('/edit-profile','EditprofileController@save');
	
	//Change password
	Route::get('/change-password','ChangepasswordController@index');
	Route::post('/change-password','ChangepasswordController@save');
	
	//Logout
	Route::get('/logout','LoginController@logout');
	
	//Customers
	Route::get('/customers','CustomerController@index');
	Route::get('/customers/add','CustomerController@add');
	Route::post('/customers/add','CustomerController@save');
	Route::get('/customers/edit/{id}','CustomerController@edit');
	Route::post('/customers/edit/{id}','CustomerController@update');
	Route::get('/customers/view/{id}','CustomerController@view');
	Route::get('/customers/delete/{id}','CustomerController@delete');
	
	//Products
	Route::get('/products','ProductController@index');
	Route::get('/products/add','ProductController@add');
	Route::post('/products/add','ProductController@save');
	Route::get('/products/edit/{id}','ProductController@edit');
	Route::post('/products/edit/{id}','ProductController@update');
	Route::get('/products/view/{id}','ProductController@view');
	Route::get('/products/delete/{id}','ProductController@delete');
	
	//Categories
	Route::get('/categories','CategoryController@index');
	Route::get('/categories/add','CategoryController@add');
	Route::post('/categories/add','CategoryController@save');
	Route::get('/categories/edit/{id}','CategoryController@edit');
	Route::post('/categories/edit/{id}','CategoryController@update');
	Route::get('/categories/view/{id}','CategoryController@view');
	Route::get('/categories/delete/{id}','CategoryController@delete');
	
	//Brands
	Route::get('/brands','BrandController@index');
	Route::get('/brands/add','BrandController@add');
	Route::post('/brands/add','BrandController@save');
	Route::get('/brands/edit/{id}','BrandController@edit');
	Route::post('/brands/edit/{id}','BrandController@update');
	Route::get('/brands/view/{id}','BrandController@view');
	Route::get('/brands/delete/{id}','BrandController@delete');
	
	//Manufacturers
	Route::get('/manufacturers','ManufacturerController@index');
	Route::get('/manufacturers/add','ManufacturerController@add');
	Route::post('/manufacturers/add','ManufacturerController@save');
	Route::get('/manufacturers/edit/{id}','ManufacturerController@edit');
	Route::post('/manufacturers/edit/{id}','ManufacturerController@update');
	Route::get('/manufacturers/view/{id}','ManufacturerController@view');
	Route::get('/manufacturers/delete/{id}','ManufacturerController@delete');
	
	//Forms
	Route::get('/forms','FormController@index');
	Route::get('/forms/add','FormController@add');
	Route::post('/forms/add','FormController@save');
	Route::get('/forms/edit/{id}','FormController@edit');
	Route::post('/forms/edit/{id}','FormController@update');
	Route::get('/forms/view/{id}','FormController@view');
	Route::get('/forms/delete/{id}','FormController@delete');
	
	//Units
	Route::get('/units','UnitController@index');
	Route::get('/units/add','UnitController@add');
	Route::post('/units/add','UnitController@save');
	Route::get('/units/edit/{id}','UnitController@edit');
	Route::post('/units/edit/{id}','UnitController@update');
	Route::get('/units/view/{id}','UnitController@view');
	Route::get('/units/delete/{id}','UnitController@delete');
	
	//Taxes
	Route::get('/taxes','TaxController@index');
	Route::get('/taxes/add','TaxController@add');
	Route::post('/taxes/add','TaxController@save');
	Route::get('/taxes/edit/{id}','TaxController@edit');
	Route::post('/taxes/edit/{id}','TaxController@update');
	Route::get('/taxes/view/{id}','TaxController@view');
	Route::get('/taxes/delete/{id}','TaxController@delete');
	
	//Opening Stocks
	Route::get('/opening-stocks','OpeningStockController@index');
	Route::get('/opening-stocks/add','OpeningStockController@add');
	Route::post('/opening-stocks/add','OpeningStockController@save');
	Route::get('/opening-stocks/edit/{id}','OpeningStockController@edit');
	Route::post('/opening-stocks/edit/{id}','OpeningStockController@update');
	Route::get('/opening-stocks/view/{id}','OpeningStockController@view');
	Route::get('/opening-stocks/delete/{id}','OpeningStockController@delete');
	
});