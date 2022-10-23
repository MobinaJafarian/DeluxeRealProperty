<?php

namespace App\Http\Controllers\Admin;

use System\Auth\Auth;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function __construct(){

        Auth::loginById(1);
        Auth::check();
        if(Auth::user()->user_type != 'admin'){
            redirect('/login');
            exit;
        }

    }

    public function index(){
        return view("admin.index");
    }
}