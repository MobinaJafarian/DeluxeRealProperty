<?php

namespace App\Http\Requests\Admin;

use System\Request\Request;

class CommentRequest extends Request
{
    public function rules(){
      
            return [
                'comment' => 'required|max:500',
             ];
    }
}