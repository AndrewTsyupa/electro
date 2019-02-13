<?php

use App\Page;


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Get Product

Route::get('/', 'TovarController@getData');
Route::get('/product/{id}', 'TovarController@productView');

// Korzina
Route::get('/shoping', 'TovarController@korzina');

// Cart or Order
Route::post('/order', 'TovarController@order_add');
Route::get('/orders', 'TovarController@ordersUser');
Route::get('/orders/{id}', 'TovarController@ordersData');

// Product
Route::get('/add', 'TovarController@add');
Route::get('/addForOrder', 'TovarController@addForOrder');
Route::get('/delete', 'TovarController@delete');


Route::get('/admin/list_admin', 'AdminController@admin');

// Product Admin Edit
Route::match(['get', 'post'], '/admin/new', 'AdminController@newProduct');
Route::match(['get', 'post'], '/admin/edit/{id}', 'AdminController@editProduct');
Route::get('/admin/view', 'AdminController@listProduct');
Route::get('/delete-product', 'AdminController@deleteProduct');
Route::get('/delete-values', 'AdminController@deleteValues');
Route::get('/update-image', 'AdminController@updateImage');

//Category
Route::match(['get', 'post'], '/admin/new-category', 'AdminController@newCategory');
Route::get('/admin/list-category', 'AdminController@listCategory');
Route::get('/admin/edit-category', 'AdminController@editCategory');
Route::get('/category/{id}', 'AdminController@categoryView');
Route::get('/delete-category', 'AdminController@deleteCategory');

//Page
Route::match(['get', 'post'], '/admin/new-page', 'AdminController@newPage');
Route::get('/admin/list-pages', 'AdminController@listPages');
Route::match(['get', 'post'], '/admin/edit-page/{id}', 'AdminController@editPages');
Route::get('/delete-page', 'AdminController@deletePage');

$pages = Page::all();
foreach ($pages as $page) {
    Route::get($page->url, 'AdminController@pagesView');
}


