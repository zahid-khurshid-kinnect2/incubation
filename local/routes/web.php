<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome-Home', 'HomeController@welcomeHome');
/*Auth::routes();*/

Route::get('/loginUser', 'Auth\LoginController@showLoginForm');
Route::post('/loginSave', 'Auth\LoginController@login');
Route::get('logoutUser', 'Auth\LoginController@logout');

// Registration Routes...
/*Route::get('register', 'Auth\RegisterController@showRegistrationForm');
Route::post('register', 'Auth\RegisterController@register');*/

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index');

Route::get('/contact', 'HomeController@contactUs');
Route::post('/requestForm', 'HomeController@onRequestForm');

//Password Change
Route::get('change-password', 'HomeController@changePassword');
Route::post('password_change', 'HomeController@userPasswordChange');


Route::get('/dataDetail', 'HomeController@userDetail');
Route::get('/getUsrDetail/{id?}', 'HomeController@getUsrDetail');

Route::get('/about', 'HomeController@getAbout');
Route::get('/portfolio', 'HomeController@portfolio');
Route::post('/deleteRecord', 'HomeController@deleteRecord');

Route::get('/aboutOrganize', 'HomeController@aboutOrganize');
