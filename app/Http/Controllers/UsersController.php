<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        return view('user.user_dashboard');
    }
    
    public function getProfile()
    {
        
        $user = Auth::user();
        return view('user.user_profile',compact('user'));
    }
    
    public function getProfileEdit()
    {
        $user = Auth::user();
        return view('user.get_profile_edit',compact('user'));
    }
    
    public function getAllPaySlips()
    {
        return view('user.all_pay_slips');
    }
    
    public function getForgotPassword()
    {
        return view('user.forgotpassword');
    }


}
