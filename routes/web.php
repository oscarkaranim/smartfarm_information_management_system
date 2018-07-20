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



Route::get('/', 'HomeController@welcome')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'HomeController@profile')->name('profile');

Route::get('/employee', 'HomeController@employee')->name('employee');
Route::post('/employee_post', 'HomeController@employee_post')->name('employee_post');


Route::get('/payments', 'HomeController@payments')->name('payments');
Route::post('/payments_post', 'HomeController@payments_post')->name('payments_post');

Route::get('/supply', 'HomeController@supply')->name('supply');
Route::post('/supply_post', 'HomeController@supply_post')->name('supply_post');

Route::get('/produce', 'HomeController@produce')->name('produce');
Route::post('/produce_post', 'HomeController@produce_post')->name('produce_post');

Route::get('/sales', 'HomeController@sales')->name('sales');
Route::post('/sales_post','HomeController@sales_post')->name('sales_post');

Route::get('/statistics', 'HomeController@statistics')->name('statistics');

Route::get('/singleemployee/{id_number}', 'HomeController@singleemployee')->name('singleemployee');

Route::get('/employee_edit/{id_number}', 'HomeController@employee_edit')->name('employee_edit');

Route::post('/employee_edit_post/{id_number}','HomeController@employee_edit_post')->name('employee_edit_post');


Route::post('/employee_delete/{id_number}','HomeController@employee_delete')->name('employee_delete');

Route::get('/produce_edit/{id_number}', 'HomeController@produce_edit')->name('produce_edit');

Route::post('/produce_edit_post/{id_number}','HomeController@produce_edit_post')->name('produce_edit_post');

Route::post('/produce_delete/{id}','HomeController@produce_delete')->name('produce_delete');