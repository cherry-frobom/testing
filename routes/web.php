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

#frontend views
// Route::get('/', ['as' => 'home', function () {
//     return view('index');
// }]);

//Route::get('/', 'PostController@index')->name('home');
Route::get('/', ['as' => 'home', function () {
    return view('index');
}]);


//Route::resource('users', 'UsersController');

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('posts', 'PostController');
Route::resource('products', 'ProductController');
Route::resource('productsettings', 'ProductSettingController');

//Route::resource('register','TestController');
Route::get('/home/create', 'TestController@create');
Route::get('register', function () {
	return view('posts/register');
});
Route::post('register', 'TestController@store')->name('register');
Route::get('login', function () {
	return view('posts/login');
});
Route::post('login', 'TestController@show')->name('login');
Route::post('create', 'PostController@store')->name('create');
Route::post('update/{id}', ['as' => 'posts.update', 'uses' => 'PostController@update']);
Route::get('destroy/{id}', ['as' => 'posts.destroy', 'uses' => 'PostController@destroy']);

Route::get('logout', function () {
	Sentinel::logout();
	return view('posts/login');
});
Route::resource('category', 'CategoryController');
Route::get('client', 'ClientController@index');
Route::get('my-theme', function () {
	return view('welcome3');
})->name('my-theme');


