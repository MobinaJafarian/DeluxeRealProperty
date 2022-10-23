<?php

namespace App\Http\Requests\Auth;


use System\Request\Request;

class ForgotRequest extends Request
{
    protected function rules()
    {
        return [
            'email' => 'required|max:64|email|exist:users,email'
        ];
    }
}