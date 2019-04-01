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

/* Access Files */
Route::get('files/{type}/{thumb}/{mnth}/{image}',function($type,$thumb,$month,$image){
	return San_Help::get_file($type.'/'.$thumb.'/'.$month.'/'.$image);
});
Route::get('files/{type}/{mnth}/{image}',function($type,$month,$image){
	return San_Help::get_file($type.'/'.$month.'/'.$image);
});
Route::get('files/{type}/{image}',function($type,$image){
	return San_Help::get_file($type.'/'.$image);
});
Route::get('files/{image}',function($image){
	return San_Help::get_file($image);
});
// Auth Routes
Route::namespace('Auth')->group(function () {
	Route::get('/admin/login', 'AuthController@login')->name('login_');
	Route::get('/login', 'AuthController@login')->name('login');
	Route::post('/login', 'AuthController@postLogin')->name('postlogin');
});
/***/
// Admin Routes
Route::namespace('Admin')->prefix('admin')->group(function () {
	Route::get('/', 'AdminController@index')->name('admin');
	Route::get('/logout', 'AdminController@Logout')->name('adminlogout');
	/* Provider Routes */
	Route::get('/providers', 'AdminController@providers')->name('providers');
	Route::get('/providers/{id}', 'AdminController@providers');
	Route::post('/providers', 'AdminController@addProvider')->name('postproviders');
	Route::post('/providers/update', 'AdminController@updateProvider')->name('updateproviders');
	Route::get('/providers/del/{id}', 'AdminController@deleteProvider')->name('del_provider');
	Route::get('/dashboard/{id}', 'AdminController@dashboard')->name('show_dashboard');
});

// Provider Dashboard Routes
Route::namespace('Provider')->group(function () {
	Route::get('/', 'ProviderController@index')->name('provider');
	Route::get('/dashboard', 'ProviderController@index')->name('provider');
	Route::get('/logout', 'ProviderController@Logout')->name('providerlogout');
	Route::get('/temps/{slug}', 'ProviderController@temps')->name('temps');
	Route::get('/dashboard/{slug}', 'ProviderController@moduleTemplate')->name('template');

	// Category
	Route::post('/addcategory', 'ProviderController@addCategory');

	// Service
	Route::get('/getservices', 'ProviderController@getServices');
	Route::get('/service/{id}', 'ProviderController@getService');
	Route::delete('/service/{id}', 'ProviderController@deleteService');
	Route::post('/manageservice', 'ProviderController@manageService');
});