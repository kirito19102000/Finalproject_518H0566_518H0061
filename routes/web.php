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


Route::get('/', 'PageController@Test1');
Route::get('/home',[
	'as' =>'Home',
	'uses' => 'PageController@Home']);


Route::get('/product_detail/{id}',[
	'as' => 'ProductDetail',
	'uses' => 'PageController@ProductDetail']);

Route::get('/product_type/{type}',[
	'as'=> 'ProductType',
	'uses' => 'PageController@ProductType']);

Route::get('/about',[
	'as' => 'About',
 	'uses' => 'PageController@About']);
Route::get('/add_to_cart/{id}',[
	'as' => 'AddtoCart',
	'uses' => 'PageController@AddToCart']);
Route::get('/del_cart/{id}',[
	'as' => 'DelCart',
	'uses' => 'PageController@DelCart']);

Route::get('/check_out',[
	'as'=>'Checkout',
	'uses'=>'PageController@getCheckout']);

Route::post('/check_out',[
	'as'=>'Checkout',
	'uses'=>'PageController@postCheckout']);


Auth::routes();

Route::get('login',[
	'as' => 'login',
	'uses' => 'PageController@Login']);

Route::post('login',[
	'as' => 'login',
	'uses' => 'PageController@postLogin']);

Route::get('register',[
	'as' => 'register',
	'uses' => 'PageController@Register']);

Route::post('register',[
	'as' => 'register',
	'uses' => 'PageController@postRegister']);

Route::get('logout',[
	'as' => 'logout',
	'uses' => 'PageController@postLogout']);

Route::get('adminIndex',[
	'as' => 'adminIndex',
	'uses' => 'PageController@adminIndex']);

Route::get('adminLogout',[
	'as' => 'adminLogout',
	'uses' => 'Auth\LoginController@adminLogout']);

Route::get('adminLogin',[
	'as' => 'adminLogin',
	'uses' => 'Auth\LoginController@showAdminLoginForm']);
//Route::get('readerLogin', 'Auth\LoginController@showReaderLoginForm');
//Route::get('readerRegister', 'Auth\RegisterController@showReaderRegisterForm');

Route::post('adminLogin', 'Auth\LoginController@adminLogin');
//Route::post('readerLogin', 'Auth\LoginController@readerLogin');
//Route::post('readerRegister', 'Auth\RegisterController@createReader');

Route::get('usersPanel',[
	'as' => 'usersPanel',
	'uses' => 'PageController@usersPanel']);

Route::resource('/admin/users','Admin\UsersController',['except' => ['show', 'create', 'store']]);

Route::get('usersEdit',[
	'as' => 'usersEdit',
	'uses' => 'Admin\UsersController@edit']);

Route::get('usersDelete/{id}',[
	'as' => 'usersDelete',
	'uses' => 'Admin\UsersController@destroy']);

Route::get('productsPanel',[
	'as' => 'productsPanel',
	'uses' => 'PageController@productsPanel']);

Route::resource('/admin/users','Admin\ProductsController',['except' => ['show', 'create', 'store']]);

Route::get('productsEdit',[
	'as' => 'productsEdit',
	'uses' => 'Admin\ProductsController@edit']);

Route::get('productsDelete',[
	'as' => 'productsDelete',
	'uses' => 'Admin\ProductsController@destroy']);

Route::patch('productsUpdate',[
	'as' => 'productsUpdate',
	'uses' => 'Admin\ProductsController@update']);

Route::get('productCreate',[
	'as' => 'productCreate',
	'uses' => 'Admin\ProductController@create']);

/*Route::get('productsEdit/{id}', function ($id) {
    return $id;
});
*/

Route::resource('product','Admin\ProductController');

Route::get('libraryPanel',[
	'as' => 'libraryPanel',
	'uses' => 'PageController@libraryPanel']);
Route::get('Delete/{id}',[
	'as' => 'Delete',
	'uses' => 'PageController@Delete']);