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
	
});