<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\ResetPasswordRequest;
use App\User;

class ResetPasswordController{

    private $redirectTo = '/login';

    public function view($token)
    {
        $user = User::where('remember_token', $token)->where('remember_token_expire', '>=', date('Y-m-d H:i:s'))->get();
        if(empty($user))
        {
            die('The recovery link is not valid');
        }
        $user = $user[0];
        return view('auth.reset-password', compact('token'));
    }
    
    public function resetPassword($token)
    {
        $request = new ResetPasswordRequest();
        $inputs = $request->all();
        $user = User::where('remember_token', $token)->where('remember_token_expire', '>=', date('Y-m-d H:i:s'))->get();
        if(empty($user))
        {
            error('reset-password', 'There is no user');
            return back();
        }
        if($inputs['password'] !== $inputs['new_password'])
        {
            error('reset-password', 'does not match');
            return back();
        }
        $user = $user[0];
        $user->password = password_hash($inputs['password'], PASSWORD_DEFAULT);
        $user->save();
        return redirect($this->redirectTo);
    }
}