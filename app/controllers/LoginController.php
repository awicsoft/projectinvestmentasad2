<?php

class LoginController extends BaseController{
     public function login(){
            
            return View::make('front.login');
            
        }
        
        
	function loginPost(){
	
		$userdata = array(
				'username'	=> Input::get('username'),
				'password' 	=> Input::get('password')
			);
                       // var_dump($userdata);
			// attempt to do the login
			if (Auth::attempt($userdata,true)) {
			// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				return Redirect::to('user');

			} else {

				// validation not successful, send back to form
                            return Redirect::to('login')->withMessage("WRONG DETAILS");
            
			}

			 
			

	}
    
}

?> 