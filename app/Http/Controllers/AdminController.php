<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Department;

class AdminController extends Controller
{    
    public function getDashboard()
    {
        
        // $dateOfBirth = '1994-07-02';
        // $years = Carbon::parse($dateOfBirth)->age;

        $users = User::orderByRaw('updated_at - created_at DESC')->get();
        $departments = Department::all()->count();

        return view('admin.admin_dashboard',compact('users','departments'));
    }
}


