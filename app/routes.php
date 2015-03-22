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
Route::get('/', [
    'as' => 'index', 
    'uses' => 'HomeController@index'
    ]
        )->after('auth');


Route::get('/register', [
    'as' => 'register', 
    'uses' => 'HomeController@register'
    ] )->after('auth');

Route::post('/register',   [
    'as' => 'registerPost', 
    'uses' => 'HomeController@registerPost'
    ])->after('auth');

Route::get('/login', [
    'as' => 'login', 
    'uses' => 'HomeController@login'
    ])->after('auth');


Route::get('/about',  [
    'as' => 'about', 
    'uses' => 'HomeController@about'
    ] )->after('auth');

Route::get('/faq', [
    'as' => 'faq', 
    'uses' => 'HomeController@faq'
    ] )->after('auth');
Route::get('/news', [
    'as' => 'news', 
    'uses' => 'HomeController@news'
    ] )->after('auth');
Route::get('/support', [
    'as' => 'support', 
    'uses' => 'HomeController@support'
    ] )->after('auth');

//recover password
Route::get('/forget', [
    'as' => 'forget', 
    'uses' => 'HomeController@forget'
    ] )->after('auth');
// end recover password

//end Front Routes