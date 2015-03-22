<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/




        public function login(){
            
            return View::make('front.login');
            
        }
        
        public function register(){
            
            return View::make('front.register');
            
        }
        public function faq(){
            
            return View::make('front.faq');
            
        }
        public function about(){
            
            return View::make('front.about');
            
        }
        public function news(){
            
            return View::make('front.news');
            
        }
        public function support(){
            
            return View::make('front.contact');
            
        }
        
        public function index(){
            
            return View::make('front.index');
            
        }
        public function forget(){
            
                return View::make('password.recoverPassword');
        }
}
