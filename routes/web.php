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

Auth::routes();

Route::get('/', ['as'=>'crw_home', 'uses'=>'CRWController@index']);
Route::get('/About CRW', ['as'=>'crw_about', 'uses'=>'CRWController@about']);
Route::get('/Our Services', ['as'=>'crw_services', 'uses'=>'CRWController@services']);
Route::get('/Blog', ['as'=>'crw_blog', 'uses'=>'CRWController@blog']);
Route::get('/Contact', ['as'=>'crw_contact', 'uses'=>'CRWController@contact']);
