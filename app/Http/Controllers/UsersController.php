<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function getLogin()
    {
        return view('admin.login');
    }
    
    public function getForgetPassword()
    {
        return view('admin.forget_password');
    }
    
    public function getDashboard()
    {
        return view('admin.user_dashboard');
    }


}
