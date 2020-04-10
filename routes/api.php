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

Route::get('/general', 'Api\GeneralController@general');
Route::get('/report', 'Api\GeneralController@report');
Route::get('/tips', 'Api\TipController@get');
Route::get('/categories', 'Api\CategoryController@get');
Route::get('/services', 'Api\ServiceController@get');
Route::get('/services/{id}', 'Api\ServiceController@getByCat');
