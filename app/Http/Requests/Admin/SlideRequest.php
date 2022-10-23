<?php

namespace App\Http\Requests\Admin;


use System\Request\Request;

class SlideRequest extends Request
{

    public function rules()
    {
        if(methodField() == 'put'){
            return [
                'title' => 'required|max:191',
                'url' => 'required|max:191',
                'amount' => 'required|max:191',
                'address' => 'required|max:191',
                'body' => 'required',
                'image' => 'file|mimes:jpeg,jpg,png,gif'
            ];
        }else{
            return [
                'title' => 'required|max:191',
                'url' => 'required|max:191',
                'amount' => 'required|max:191',
                'address' => 'required|max:191',
                'body' => 'required',
                'image' => 'required|file|mimes:jpeg,jpg,png,gif'
            ];
        }
    }
}