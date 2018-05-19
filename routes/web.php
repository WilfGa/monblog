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

Route::prefix('blog')->group(function () {
  	Route::get('/', 'blog\CategoriesController@index')->name('accueil');

	Route::get('cat/{id}','blog\CategoriesController@showpost')->name('post');

	Route::get('art{cat_id}/{art_id}', 'blog\CategoriesController@show')->name('vue');
});
