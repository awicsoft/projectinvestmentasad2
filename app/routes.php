<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/




//FRONT END ROUTES
Route::get('/','HomeController@index')->after('auth');
Route::get('/signup',  'HomeController@register')->after('auth');
Route::get('/register',  'HomeController@register')->after('auth');

Route::get('/login',  'HomeController@login')->after('auth');


Route::get('/about',  'HomeController@about')->after('auth');
Route::get('/faq',  'HomeController@faq')->after('auth');
Route::get('/news',  'HomeController@news')->after('auth');
Route::get('/support',  'HomeController@support')->after('auth');

//recover password
Route::get('/forget',  'HomeController@forget')->after('auth');
// end recover password

//end Fron Routes