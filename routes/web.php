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

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes();

Route::get('/builder', 'BuilderController@show')->name('builder');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/application', 'ApplicationController@overview')->name('application');
Route::get('/application/pdfexport/{id}', 'ApplicationController@pdf');
Route::get('/application/finish/{id}','ApplicationController@finish');

Route::get('/components', 'ComponentsController@comp')->name('component');
Route::post('/components/update/{id}','ComponentsController@update');


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

});

// Contactform

Route::get('contact', 'ContactFormController@create');
Route::post('contact', 'ContactFormController@store');
Route::get('contactinfo', 'ContactFormController@list');



Route::get('/applications', 'BuilderController@store');

