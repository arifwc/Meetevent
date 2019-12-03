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

Route::get('/login', function () {
    return view('login');
});

Route::get('/contact', function () {
    return view('contact');
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

Route::get('/order', [
    'uses' => 'TransactionController@order',
    'as' => 'product.order'
]);

Route::post('/rent', 'TransactionController@nyewa');

Route::get('/finish', function () {
    return view('finish');
});

// Route::get('/test/{category}',function($category){
//     $vendor = App\Vendor::where('category',$category)->get();

//     foreach($vendor as $vend){
//         echo $vend->name."<br>";
//         foreach($vend->product as $product){
//             echo $product->name."<br>";
//         }
    
//     }
     
// });

Auth::routes(['verify' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/logout', ['uses' => 'Auth\LoginController@logout']);

