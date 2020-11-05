<?php

use Illuminate\Support\Facades\Route;

/*
 
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|new App\Post




$post->save()
| Here is here you can register web routes for your application. These 
| routes are loaded by the RoteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'PostsController@index');
Route::resource('posts', 'PostsController');
Route::get('blog', 'PostsController@blog');
Route::get('featuredproducts', 'PostsController@featuredproducts');

Route::get('mainproducts', 'PostsController@mainproducts');
Route::get('individualmainproduct/{id}','PostsController@individualmainproduct'
);
Route::get('agriculturalproducts', 'PostsController@agriculturalproducts');
Route::post('cart', 'CartsController@store');
Route::post('checkout', 'CartsController@checkout');
Route::get('carts', 'CartsController@index');
Route::get('individualagriculturalproduct/{id}','PostsController@individualagriculturalproduct'
);
Route::get('individualfeaturedproduct/{id}','PostsController@individualfeaturedproduct'
);
Route::post('addfeaturedproducts', 'PostsController@addfeaturedproducts');
Route::post('addmainproducts', 'PostsController@addmainproducts');
Route::post('addagriculturalproducts', 'PostsController@addagriculturalproducts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
