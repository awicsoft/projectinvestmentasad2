<?php

class LogoutController extends BaseController{
    
    function logout(){
		
		Auth::logout();
		Session::flush();
		 return Redirect::to('login')->withMessage("Sucessfully Logout");
		
	}

}

?> 