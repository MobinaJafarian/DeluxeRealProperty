<?php

namespace App\Http\Controllers\Auth;


use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Services\ImageUpload;
use App\Http\Services\MailService;
use App\User;

class RegisterController{

    private $redirectTo = "/login";

    public function view()
    {
        return view("auth.register");
    }


    public function register()
    {
       $request = new RegisterRequest();
       $inputs = $request->all();
       $path = 'images/avatar/' . date('Y/M/d');
       $name = date('Y_m_d_H_i_s_') . rand(10,99);
       $inputs['avatar'] = ImageUpload::UploadAndFitImage($request->file('avatar'), $path, $name, 100, 100);
       $inputs['verify_token'] = generateToken();
       $inputs['is_active'] = 0;
       $inputs['user_type'] = 'user';
       $inputs['status'] = 0;
       $inputs['remember_token'] = null;
       $inputs['remember_token_expire'] = null;
       $inputs['password'] = password_hash($request->password, PASSWORD_DEFAULT);
       User::create($inputs);
       $message = '
       <h2>Activation email</h2>
       <p>Dear user, your registration was successful, click on the link below to activate your account</p>
       <p style="text-align: center">
       <a href="'.route('auth.activation', [$inputs['verify_token']]).'">Account activation</a>
       </p>
       ';
       $mailService = new MailService();
       $mailService->send($inputs['email'], 'Activation email', $message);

       return redirect($this->redirectTo);
    }


    public function activation($token)
    {
        $user = User::where('verify_token', $token)->get();
       if(empty($user))
       {
           die('The code is not valid');
       }
       $user = $user[0];
      $user->is_active = 1;
      $user->save();
      die('Account activated');

    }


}
