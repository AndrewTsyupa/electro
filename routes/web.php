<?php

Auth::routes();


Route::get('/', 'TovarController@getData');
Route::get('/product/{id}', 'TovarController@productView');

Route::get('/add', 'TovarController@add');
Route::get('/delete', 'TovarController@delete');

Route::get('/shoping', 'TovarController@korzina');

Route::post('/order', 'TovarController@order_add');




Route::get('/orders','TovarController@ordersUser');
Route::get('/orders/{id}', 'TovarController@ordersData');

Route::get('/admin/new', 'AdminController@newProduct');
Route::get('/delete-product', 'AdminController@deleteProduct');
Route::post('/admin/add', 'AdminController@addProduct');

Route::get('/admin/view', 'AdminController@listProduct');
Route::match(['get', 'post'], '/admin/edit/{id}', 'AdminController@editProduct');


Route::get('/update-image', 'AdminController@updateImage');
Route::get('/delete-values', 'AdminController@deleteValues');




































Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
