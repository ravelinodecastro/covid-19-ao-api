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

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/tips', 'TipController@index')->name('tips');
Route::get('/services', 'ServiceController@index')->name('services');

Route::get('/sitemap.xml', 'SitemapController@index');

Route::group(['middleware' => ['guest'], 'prefix' => 'admin'], function() {
    Route::get('login')->name('login')->uses('Admin\Auth\LoginController@showLoginForm');
    Route::post('login')->name('login.attempt')->uses('Admin\Auth\LoginController@login');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function() {
    Route::post('logout')->name('logout')->uses('Admin\Auth\LoginController@logout');
    Route::get('/dashboard')->name('dashboard')->uses('Admin\DashboardController');

    // Categories
    Route::get('categories')->name('categories')->uses('admin\CategoriesController@index')->middleware('remember');
    Route::get('categories/create')->name('categories.create')->uses('admin\CategoriesController@create');
    Route::post('categories')->name('categories.store')->uses('admin\CategoriesController@store');
    Route::get('categories/{category}/edit')->name('categories.edit')->uses('admin\CategoriesController@edit');
    Route::put('categories/{category}')->name('categories.update')->uses('admin\CategoriesController@update');
    Route::delete('categories/{category}')->name('categories.destroy')->uses('admin\CategoriesController@destroy');
    Route::put('categories/{category}/restore')->name('categories.restore')->uses('admin\CategoriesController@restore');

    // Services
    Route::get('services')->name('services')->uses('admin\ServicesController@index')->middleware('remember');
    Route::get('services/create')->name('services.create')->uses('admin\ServicesController@create');
    Route::post('services')->name('services.store')->uses('admin\ServicesController@store');
    Route::get('services/{service}/edit')->name('services.edit')->uses('admin\ServicesController@edit');
    Route::put('services/{service}')->name('services.update')->uses('admin\ServicesController@update');
    Route::delete('services/{service}')->name('services.destroy')->uses('admin\ServicesController@destroy');
    Route::put('services/{service}/restore')->name('services.restore')->uses('admin\ServicesController@restore');

     // Configs
     Route::get('configs')->name('configs')->uses('admin\ConfigsController@index')->middleware('remember');
     Route::post('general')->name('general.store')->uses('admin\ConfigsController@store');
     Route::put('configs/{config}')->name('configs.update')->uses('admin\ConfigsController@updateConfig');
     Route::post('general/{general}')->name('general.saveOrUpdate')->uses('admin\ConfigsController@saveOrUpdate');
});