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
    return view('welcome');
});


//

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', function () {
    if(Auth::check()) {
		return redirect('users/info');
    }
});

// laravel自带的auth
//Auth::routes();

// 自定义登录
Route::get('login', 'Admin\UserController@login')->name("login");
Route::post('login', 'Admin\UserController@login');
Route::get('logout', 'Admin\UserController@logout')->name("logout");

Route::group( ['middleware' => ['auth', 'isLogined']], function() {

	Route::get('users/info', 'Admin\UserController@info');
	Route::get('resetpwd', 'Admin\UserController@resetpwd');
	Route::post('resetpwd', 'Admin\UserController@resetpwd');
	Route::get('logout', 'Admin\UserController@logout')->name("logout");

	Route::resource('users', 'Admin\UserController');
    Route::resource('posts', 'Admin\PostController');
	Route::resource('roles', 'Admin\RoleController');
	Route::resource('permissions', 'Admin\PermissionController');

});


Route::get('test','Admin\TestController@index');
Route::get('auth','Admin\TestController@auth');
Route::get('test/table', 'Admin\TestController@table');

Route::get('conf','Admin\TestController@conf');
Route::get('info','Admin\TestController@info');

Route::get('sess','Admin\TestController@sess');
Route::get('sess1','Admin\TestController@sess1');
Route::get('sess2','Admin\TestController@sess2');
Route::get('sess3','Admin\TestController@sess3');


Route::get('pluck','Admin\TestController@pluck');
Route::get('select','Admin\TestController@select');
Route::get('update','Admin\TestController@update');

