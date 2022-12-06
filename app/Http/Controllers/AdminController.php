<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Department;
use Auth;

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

    public function getChangePassword()
    {
        return view('admin.change_password');
    }


    public function getProfile()
    {
        $user = Auth::user();
        return view('admin.get_profile',compact('user'));
    }
    

    public function getprofileEdit()
    {
        $user = Auth::user();
        return view('admin.get_profile_edit',compact('user'));
    }
    

    public function getEmployeeProfileView($id)
    {
        $user = User::find($id);
        return view('admin.get_profile',compact('user'));
    }

    public function getEmployeeProfileEdit($id)
    {
        $user = User::find($id);
        return view('admin.get_profile_edit',compact('user'));
    }
    

    public function getAllEmployee()
    {
        $users = User::orderByRaw('updated_at - created_at DESC')->get();
        $departments = Department::all()->count();
        return view('admin.get_all_employee',compact('users','departments'));
    }
    

    public function getaddNewEmployee()
    {
        return view('admin.get_add_new_employee');
    }
    

    public function getchangeEmployeePassword()
    {
        $users = User::orderByRaw('updated_at - created_at DESC')->get();
        return view('admin.get_change_employee_password',compact('users'));
    }
    

    public function getAllDepartments()
    {
        $i = 1;
        $departments = Department::orderByRaw('updated_at - created_at DESC')->get();
        return view('admin.get_all_departments',compact('departments','i'));
    }

    public function getAllEmployeesPaySlips()
    {
        return view('admin.get_all_emp_payslips');
    }
    

    public function getemployeesPaySlipSearch()
    {
        return view('admin.get_emp_payslip_search');
    }
    

    public function getuplodePaySlip()
    {
        $users = User::orderByRaw('updated_at - created_at DESC')->get();
        return view('admin.uplode_paySlip',compact('users'));
    }
    
    
}


