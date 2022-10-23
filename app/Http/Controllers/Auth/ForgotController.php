<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\ForgotRequest;
use App\Http\Services\MailService;
use App\User;
use System\Session\Session;

class ForgotController{

    private $redirectTo = '/home';

    public function view()
    {
        return view('auth.forgot');
    }
    
    public function forgot()
    {
        if(Session::get('forgot.time') != false && Session::get('forgot.time') > time())
        {
            error('forgot', 'please wait 2 min and try again');
            return back();
        }

        else
        {
            Session::set('forgot.time', time() + 120);

            $request = new ForgotRequest();
            $inputs = $request->all();
            $user = User::where('email', $inputs['email'])->get();
            if(empty($user))
            {
                error('forgot', 'There is no user');
                return back();
            }
            $user = $user[0];
            $user->remember_token = generateToken();
            $user->remember_token_expire = date("Y-m-d H:i:s", strtotime(' + 10 min'));
            $user->save();
            $message = '
            <h2>Password recovery email</h2>
            <p>Dear user, click on the link below to recover your password</p>
            <p style="text-align: center">
                <a href="'.route('auth.reset-password.view', [$user->remember_token]).'">عوض کردن رمز عبور</a>
            </p> 
            ';
            $mailService = new MailService();
            $mailService->send($inputs['email'], 'Password recovery email', $message);
            flash('forgot', 'Recovery email sent successfully');
            return redirect($this->redirectTo);
        }
    }

}