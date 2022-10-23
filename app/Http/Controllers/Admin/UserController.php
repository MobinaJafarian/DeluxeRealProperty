<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Requests\Admin\UserRequest;
use App\Http\Services\ImageUpload;
use System\Auth\Auth;



class UserController extends AdminController
{

    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update($id)
    {
        $request = new UserRequest();
        $inputs = $request->all();
        $updatables = ['first_name', 'last_name'];
        $inputs = array_intersect_key($inputs, array_flip($updatables));
        $inputs['id'] = $id;
        $file = $request->file('avatar');
        if(!empty($file['tmp_name']))
        {
            $path = 'images/avatar/' . date('Y/M/d');
            $name = date('Y_m_d_H_i_s_') . rand(10,99);
            $inputs['avatar'] = ImageUpload::UploadAndFitImage($request->file('avatar'), $path, $name, 100, 100);
        }
        User::update($inputs);
        return redirect('admin/user');
    }

    public function changeStatus($id)
    {
        $user = User::find($id);
        if($user->is_active == 0)
        {
            $user->is_active = 1;
        }
        else
        {
            $user->is_active = 0;
        }
        $user->save();
        return back();
    }

}