<?php

class RegisterController extends BaseController{
  public function register(){
            
            return View::make('front.register');
            
        }
    function doRegister(){
        $username = Input::get('username');
        $password = Input::get('password');
        $email = Input::get('email');
        $mobile = Input::get('mobile');
        $name = Input::get('name');
        $rules =[
            'name' => 'required',
            'username'=>'required|unique:user',
            'password' => 'required',
           
            'email' => 'required|email|unique:user',
            'mobile' =>'required|numeric'
            
            ];
        $all = Input::all();
        $validator = Validator::make($all,$rules);
       
        
            if ($validator->fails())
            {
                return Redirect::to('register')->withErrors($validator);
            }
            $password = Hash::make($password);
            User::insert([
                'username' => $username,
                'password' => $password,
                'name' =>$name,
                'email' =>$email,
                'mobile' => $mobile
                
                
                
                
                    ]);
         return   Redirect::to('login')->withMessage("Sucessfully Registered");
    
            
            }

}

?> 