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

Route::get('/', function () {
    return view('index');
});

Route::get('/category', [
    'uses' => 'CategoryController@new'
]);

Route::get('/category/{category}', [
    'uses' => 'CategoryController@category'
]);

Route::get('/product/{id}', [
    'uses' => 'CategoryController@singleProduct',
    'as' => 'product.single'
]);
