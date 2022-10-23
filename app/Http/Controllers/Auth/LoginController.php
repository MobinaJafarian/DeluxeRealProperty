<?php

namespace App\Http\Controllers\Auth;


use App\Http\Requests\Auth\LoginRequest;
use App\User;
use System\Auth\Auth;

class LoginController{

    private $redirectTo = "/home";
    private $redirectToAdmin = "/admin";

    public function view()
    {
        return view("auth.login");
    }


    public function login()
    {
        Auth::logout();
       $request = new LoginRequest();
       if(Auth::loginByEmail($request->email, $request->password))
       {
           $user = User::where('email', $request->email)->get();
           $user = $user[0];
           if($user->user_type == 'admin')
           {
               return redirect($this->redirectToAdmin);
           }
           else
           {
            return redirect($this->redirectTo);
           }
       }
       else
       {
           return back();
       }
      
    }


}
