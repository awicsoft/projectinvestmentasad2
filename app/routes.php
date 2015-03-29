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
        );
Route::get('/about',  [
    'as' => 'about', 
    'uses' => 'HomeController@about'
    ] );
Route::get('/faq', [
    'as' => 'faq', 
    'uses' => 'HomeController@faq'
    ] );
Route::get('/news', [
    'as' => 'news', 
    'uses' => 'HomeController@news'
    ] );
Route::get('/support', [
    'as' => 'support', 
    'uses' => 'HomeController@support'
    ] );

//recover password
Route::get('/forget', [
    'as' => 'forget', 
    'uses' => 'HomeController@forget'
    ] );
// end recover password




//login register logout
Route::get('/register', [
    'as' => 'register', 
    'uses' => 'RegisterController@register'
    ] );

Route::post('/register',   [
    'as' => 'registerPost', 
    'uses' => 'RegisterController@doRegister'
    ]);

Route::get('/login', [
    'as' => 'login', 
    'uses' => 'LoginController@login'
    ]);

Route::post('/login', 'UserController@login');



Route::get('/logout', [
    'as' => 'logout', 
    'uses' => 'LogoutController@logout'
    ]);

//userpanel

Route::get('/user', [
    'as' => 'user', 
    'uses' => function(){
        return "sss";
    
    }
    ])->before('auth');


