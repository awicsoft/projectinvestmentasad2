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

Route::get('/addToken/{code}', function($code)
{
    Analytics::where('ID',1)->update(['token' => $code]);
    return Redirect::to('analytics');
    
});


Route::get('/analytics', 'AnalyticsController@analytics');

/*Route::get('/about','myController@aboutPage');
//Route::get('usama/', function()
//{
//	$name = "sajad";

//	return View::make('usama')->with('name',$name);
	
//});

*/

Route::get('/GenerateReport','GenerateReportController@gReportPage')->before('auth');;
Route::get('/','HomeController@index')->after('auth');
