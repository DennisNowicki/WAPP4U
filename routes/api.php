<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//List components
Route::get('components', 'ComponentsController@index');

//List singe article
Route::get('component/{id}', 'ComponentsController@show');

//Create new article
Route::post('component', 'ComponentsController@store');

//Update article
Route::put('component', 'ComponentsController@store');

//Delete article
Route::delete('component/{id}', 'ComponentsController@destroy');
