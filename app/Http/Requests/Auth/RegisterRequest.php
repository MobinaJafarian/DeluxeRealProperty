<?php 

namespace App\Http\Requests\Auth;


use System\Request\Request;

class RegisterRequest extends Request
{
    protected function rules()
    {
        return [
            'email' => "required|max:64|email|unique:users,email",
            'password' => "required|min:8|confirmed",
            'first_name' => "required",
            'last_name' => "required",
            'avatar' => "required|file|mimes:jpeg,jpg,png|max:2048",
        ];
    }
}