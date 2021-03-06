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
	Route::get('/temps/{slug}/{type}', 'ProviderController@temps')->name('temps');
	Route::post('/temps/{slug}/{type}', 'ProviderController@temps')->name('posttemps');
	Route::get('/dashboard/{slug}', 'ProviderController@moduleTemplate')->name('template');
	Route::post('/dashboard/{slug}', 'ProviderController@moduleTemplate');

	// Category
	Route::post('/addcategory', 'ProviderController@addCategory');

	// Employee
	Route::post('/addemployee', 'ProviderController@addEmployee');
	Route::get('/employee/{id}', 'ProviderController@getEmployee');
	Route::post('/addskills', 'ProviderController@addSkills');
	Route::delete('/employee/{id}', 'ProviderController@deleteEmployee');

	// Appoinment
	Route::post('/addappointment', 'ProviderController@addAppointment');
	Route::put('/updateappointment', 'ProviderController@updateAppointment');
	Route::get('/booking/{id}', 'ProviderController@getAppointment');
	Route::delete('/booking/{id}', 'ProviderController@deleteAppointment');

	// Clock in Clock out
	Route::get('/clock/{user}', 'ProviderController@Clock')->name('user_chkin');
	Route::post('/chk_mobile', 'ProviderController@chkMobile')->name('chk_mobile');
	Route::get('/window/{type}/{id}', 'ProviderController@checkInWindow')->name('checkin_window');
	Route::get('/new_customer/{phone}', 'ProviderController@newCustomer')->name('new_customer');
	Route::get('/attendence', 'ProviderController@attendence')->name('attendence');
	Route::post('/change_clock_status', 'ProviderController@changeClockStatus')->name('change_clock_status');
	Route::post('/create_update_appointmemt', 'ProviderController@createOrUpdateAppointment')->name('create_update_appointmemt');
	
	

	// Service
	Route::get('/getservices', 'ProviderController@getServices');
	Route::get('/service/{id}', 'ProviderController@getService');
	Route::delete('/service/{id}', 'ProviderController@deleteService');
	Route::post('/manageservice', 'ProviderController@manageService');
});