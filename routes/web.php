<?php
//Route::get('/', function () { return redirect('/admin/home'); });

Route::get('/', function () {

	return view('welcome');
});

Route::post('registerForm', 'Check\RegisterCheckController@ajaxRegisterForm')->name('template.registerForm');

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::get('/storage-link', function () {
	$exitCode = Artisan::call('storage:link');
	return $exitCode;
});

Route::get('/config-cache', function () {
	$exitCode = Artisan::call('config:cache');
	return '<h1>Clear Config cleared</h1>';
});
//Clear Cache facade value:
Route::get('/clear-cache', function () {
	$exitCode = Artisan::call('cache:clear');
	return '<h1>Cache facade value cleared</h1>';
});

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
	Route::get('/home', 'HomeController@index');

	Route::get('register/ajaxRegister', 'Check\RegisterCheckController@ajaxRegister')->name('admin.register.template.ajaxRegister');

	Route::post('register/DownloadRegister', 'Check\RegisterCheckController@downloadRegister')->name('template.downloadRegister');

	Route::resource('register', 'Check\RegisterCheckController');

	Route::group(['middleware' => ['role:administrator']], function () {

		Route::resource('permissions', 'Admin\PermissionsController');

		Route::post('permissions_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);

		Route::resource('roles', 'Admin\RolesController');

		Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
		Route::resource('users', 'Admin\UsersController');
		Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
		//
	});

});
