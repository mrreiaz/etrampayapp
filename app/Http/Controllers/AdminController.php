<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Department;
use Illuminate\Support\Facades\Hash;
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

    public function postChangePassword(Request $request)
    {
        
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed', 
        ]);
        
        // Match The Old Password
        if (!Hash::check($request->old_password, auth::user()->password)) {
            return back()->with("error", "Old Password Doesn't Match!!");
        }

        // Update The new password 
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)

        ]);
        return back()->with("status", " Password Changed Successfully");
        return $request;

        //return view('admin.change_password');
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
    

    public function getProfileUpdate(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if($request->firstname){ $user->firstname = $request->firstname;} 
        if($request->lastname){ $user->lastname = $request->lastname;} 
        if($request->userid){ $user->userid = $request->userid;} 
        if($request->username){ $user->username = $request->username;} 
        if($request->department){ $user->department = $request->department;} 
        if($request->jobtype){ $user->jobtype = $request->jobtype;}  
        if($request->gender){ $user->gender = $request->gender;} 
        if($request->dateofbirth){ $user->dateofbirth = $request->dateofbirth;}  
        if($request->joindate){ $user->joindate = $request->joindate;}  
        if($request->phone){ $user->phone = $request->phone;}  
        if($request->address){ $user->address = $request->address;}  
        if($request->role){ $user->role = $request->role;}  
        if($request->status){ $user->status = $request->status;}  

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('/upload/admin_images/'.$user->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $user['photo'] = '/upload/admin_images/'.$filename;
        }

        $user->save();
        $notification = [
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
        // return redirect()->back();

        // return view('admin.get_profile_edit',compact('user'));
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


