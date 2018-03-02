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

Route::get('/', function () {
    return view('welcome');
});


Route::get('ideology', function () {
    return view('ideology');
});

Route::get('about', function () {
    return view('about');
});

Route::get('how_it_works', function () {
    return view('how_it_works');
});

Route::get('packages', function () {
    return view('packages');
});

Route::post('/', 'MessageController@store');

Route::get('/login', 'LoginController@show');

Route::post('/login', 'LoginController@post')->name('login');

Route::get('/register', 'RegisterController@show');

Route::post('/register', 'RegisterController@post');

Route::post('/logout', 'LoginController@logout')->name('logout');

Route::get('/backoffice', 'BackofficeController@index')->name('backoffice');

Route::post('/backoffice', 'BackofficeController@confirm');

Route::get('/backoffice/message', 'BackofficeController@message');

Route::get('/details/{id}', 'BackofficeController@beneficiary_details')->name('details');

Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

Route::get('/generate_links', 'DashboardController@generate_links');

Route::get('/refferals', 'DashboardController@refferals');

Route::get('/grade_level', 'DashboardController@grade_level');

Route::get('/payouts', 'DashboardController@payouts');

Route::get('/notifications', 'DashboardController@notifications');

Route::post('/notifications', 'DashboardController@confirm');

Route::get('/message', 'DashboardController@message');

Route::get('/beneficiaries', 'DashboardController@beneficiaries');

Route::post('/beneficiaries', 'DashboardController@request');

Route::post('/gemtrust', 'DashboardController@gemtrust');

Route::get('/settings', 'DashboardController@show');

Route::post('/settings', 'DashboardController@settings');

Route::get('/signup', 'SignupController@show');

Route::post('/signup', 'SignupController@create');