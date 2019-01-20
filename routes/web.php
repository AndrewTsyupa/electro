<?php

Auth::routes();

// Tovar
Route::get('/', 'TovarController@getData');                                           // повертає всі товари на tovar
Route::get('/product/{id}', 'TovarController@productView');                           // повертає дані про товар за id
// Add Product
Route::get('/add', 'TovarController@add');                                            // додає новий товар в БД з catalog і динамічно змінює випадайку
Route::get('/addForOrder', 'TovarController@addForOrder');                            // додає новий товар в БД з soping

Route::get('/delete', 'TovarController@delete');                                      // видаляє товар
Route::get('/shoping', 'TovarController@korzina');                                    // передає на shoping дані про куплені товари

// Cart or Order
Route::post('/order', 'TovarController@order_add');                                   // створення замовлення товару
Route::get('/orders','TovarController@ordersUser');                                   // повертає на orders дані про замовника товару
Route::get('/orders/{id}', 'TovarController@ordersData');                             // інформація про куплені товари певного клієнта

// Admin
Route::get('/admin/new', 'AdminController@newProduct');                               //+ перехід на сторінку додавання нового продукту
Route::post('/admin/add', 'AdminController@addProduct');                              //+ створення нового продукту(збереження в БД)
Route::match(['get', 'post'], '/admin/edit/{id}', 'AdminController@editProduct');     // редагування продукту


// Catalog
Route::get('/admin/new-category', 'AdminController@newCategory');                     //+ перехід на сторінку створення ново категорії продуктів
Route::post('/admin/add-category', 'AdminController@addCategoryProduct');             //+ створення ново категорії продуктів
Route::get('/category/{id}', 'AdminController@categoryView');                         // сторінка категорії певного продукту з товарами

//Data
Route::get('/admin/view', 'AdminController@listProduct');                             // сторінка з списком товарів для подальшого редагування

Route::get('/delete-product', 'AdminController@deleteProduct');                       // видалення продукту з БД
Route::get('/update-image', 'AdminController@updateImage');                           // оновлення зображень при редагуванні продукту
Route::get('/delete-values', 'AdminController@deleteValues');                         // динамічне видалення властивостей продукту






































Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
