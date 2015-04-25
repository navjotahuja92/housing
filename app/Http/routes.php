<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', [ 'as' => 'pages.home' ,'uses' => 'WelcomeController@index']);

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('auth/facebook', [ 'as' => 'user.facbook', 'uses' => 'Auth\AuthController@facebook']);

Route::get('logout',['as' => 'user.logout',function(){
	Auth::log();
}]);

Route::get('facebook', [ 'as' => 'user.facebook', 'uses' => 'Auth\AuthController@facebook']);

Route::get('from-facebook', [ 'as' => 'user.data.facebook', 'uses' => 'Auth\AuthController@dataFromFacebook']);


