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
Route::get('/', 'AuthController@showLoginForm');
Route::name('login')->post('/login', 'AuthController@login');

Route::name('password.request')->get('password/reset', 'ForgotPasswordController@showLinkRequestForm');
Route::name('password.email')->post('password/email', 'ForgotPasswordController@sendResetLinkEmail');

Route::name('password.reset')->get('password/reset/{token}', 'ResetPasswordController@showResetForm');
Route::name('password.update')->post('password/reset', 'ResetPasswordController@reset');


Route::group(['middleware' => 'auth'], function () {
    Route::name('logout')->post('/logout', 'AuthController@logout');
});
Route::get('/dashboard', function (){
    return view('auth::dashboard');
});

