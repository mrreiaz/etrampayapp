<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Department;
use App\Models\Payslip;
use App\Models\Leave;
use Illuminate\Support\Facades\Hash;

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
        $user = Auth::user();
        return view('user.user_dashboard',compact("user"));
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
    // 
    
    
    public function getChangePassword()
    {
        return view('user.get_change_password');
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

        //return view('admin.change_password');
    }

    public function postProfileEdit(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required', 
            'gender' => 'required', 
            'dateofbirth' => 'required', 
            'phone' => 'required', 
        ]);
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
        if($request->status){ $user->status = $request->status;}  
        if($request->paddress){ $user->paddress = $request->paddress;}  

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('/upload/admin_images/'.$user->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $user['photo'] = '/upload/admin_images/'.$filename;
        }

        $user->save();
        $notification = [
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }
    
    public function getAllPaySlips()
    {
        $user = Auth::user();
        $userPayslips = Payslip::where('user_id',$user->id)->orderByRaw('updated_at - created_at DESC')->get();
        return view('user.all_pay_slips',compact('userPayslips','user'));
    }
    
    public function getForgotPassword()
    {
        return view('user.forgotpassword');
    }
    
    public function getNewLeaveRequest()
    {
        return view('user.new_leave_request');
    }
    
    public function postNewLeaveRequest(Request $request)
    {
        //return $request->all();
        $request->validate([
            'factory_name' => 'required', 
            'date1' => 'required', 
            'reason' => 'required', 
            'description' => 'required', 
        ]);
        $userId = Auth::user()->id;
        //return $request->all();

        $leave = new Leave();
        $leave->emp_id = $userId;
        $leave->factory_name = $request->factory_name;
        $leave->date1 = $request->date1;
        $leave->date2 = $request->date2;
        $leave->reason = $request->reason;
        $leave->reason_text = $request->reason_text;
        $leave->description = $request->description;
        //return $leave;

        $leave->save();
        $notification = [
            'message' => 'Save Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);


    }

    
    public function getAllLeaves()
    {
        $leaves = Leave::where('emp_id',Auth::user()->id)->orderBy('id','asc')->get();
        return view('user.all_leaves',compact('leaves'));
    }


    

}
