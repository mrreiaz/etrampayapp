<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Department;
use App\Models\Payslip;
use App\Models\Leave;
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
    

    public function postProfileUpdate(Request $request)
    {
        //return $request->all();

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
        return view('admin.employee_get_profile',compact('user'));
    }

    public function getEmployeeProfileEdit($id)
    {
        $user = User::find($id);
        return view('admin.get_emp_profile_edit',compact('user'));
    }

    
    public function postEmpProfileUpdate(Request $request,$id){
        
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required', 
            'gender' => 'required', 
            'dateofbirth' => 'required', 
            'phone' => 'required', 
        ]);

        $user = User::find($id);

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
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }


    

    public function getEmployeeProfileDelete($id)
    {
        $user = User::find($id)->delete();
        $notification = [
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
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
    

    public function postaddNewEmployee(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required', 
            'gender' => 'required', 
            'dateofbirth' => 'required', 
            'phone' => 'required', 
        ]);
        $user = new User();
        $user['firstname'] = $request->firstname;
        $user['lastname'] = $request->lastname;
        $user['userid'] = $request->userid;
        $user['username'] = $request->username;
        $user['email'] = $request->email;
        $user['password'] = Hash::make($request->password);
        $user['department'] = $request->department;
        $user['jobtype'] = $request->jobtype;
        $user['gender'] = $request->gender;
        $user['dateofbirth'] = $request->dateofbirth;
        $user['joindate'] = $request->joindate;
        $user['phone'] = $request->phone;
        $user['address'] = $request->address;
        $user['paddress'] = $request->paddress;
        $user['role'] = 'employee';
        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('/upload/admin_images/'.$user->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $user['photo'] = '/upload/admin_images/'.$filename;
        }
        $user->save();
        $notification = [
            'message' => 'Employee Add Successfully',
            'alert-type' => 'success'
        ];
        return redirect()->route('admin.getAllEmployee')->with($notification);
    }
    

    public function getchangeEmployeePassword()
    {
        $users = User::orderByRaw('updated_at - created_at DESC')->get();
        return view('admin.get_change_employee_password',compact('users'));
    }
    

    public function postchangeEmployeePassword(Request $request)
    {
        
        //return $request->all();
        $request->validate([
            'userid' => 'required|int',
            'newpassword' => 'required',
            'retypepassword' => 'required',
        ]);
        
        // Update The new password 
        User::whereId($request->userid)->update([
            'password' => Hash::make($request->newpassword)
        ]);

        return back()->with("status", " Password Changed Successfully");
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
        $users = User::orderByRaw('updated_at - created_at DESC')->get();
        return view('admin.get_emp_payslip_search',compact('users'));
    }

    public function getemployeesPaySlipSearchById(Request $request)
    {
        // return $request->user_id;
        if($request->user_id == "Select"){
            return redirect()->back();
        }

        $users = User::orderByRaw('updated_at - created_at DESC')->get();
        $finduser = User::find($request->user_id);

        $userPayslips = Payslip::where('user_id', $request->user_id)->orderByRaw('updated_at - created_at DESC')->get();
        return view('admin.get_emp_payslip_search_byid',compact('userPayslips','finduser','users'));
    }
    

    // getPaySlipDelete
    

    public function getPaySlipDelete($id)
    {
        $Payslip = Payslip::find($id)->delete();
        $notification = [
            'message' => 'Payslip Updated Successfully',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    }
    


    public function getuplodePaySlip()
    {
        $users = User::orderByRaw('updated_at - created_at DESC')->get();
        return view('admin.uplode_paySlip',compact('users'));
    }
    


    public function postuplodePaySlip(Request $request)
    {
        
        //return $request->all();
        $request->validate([
            'user_id' => 'required',
            'month' => 'required', 
            'year' => 'required', 
            'file' => 'required|mimes:pdf|max:10000', 
        ]);

        // return $request->all();

        $payslip = new Payslip();
        $payslip['user_id'] = $request->user_id;
        $payslip['month'] = $request->month;
        // if($request->month == )
        $payslip['year'] = $request->year;
        // $payslip['year'] = date("Y");
        // $payslip['file'] = $request->month;
        if ($request->file('file')) {
            $file = $request->file('file');
            @unlink(public_path('/upload/payslip/'.$payslip->file));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/payslip'),$filename);
            $payslip['file'] = '/upload/payslip/'.$filename;
        }

        $payslip->save();
        return back()->with("status", " Successfully");

        // $users = User::orderByRaw('updated_at - created_at DESC')->get();
        // return view('admin.uplode_paySlip',compact('users'));
    }

    public function getAllLeavesList()
    {
        $leaves = Leave::orderByRaw('created_at ASC')->get();
        //$users = Leave::orderByRaw('updated_at - created_at DESC')->get();
        return view('admin.leaves_list',compact('leaves'));
    }
    
    

    public function getLeaveRequestDetails($id)
    {
        
        $leave = Leave::findOrFail($id);
        // return $leave;
        return view('admin.leave_request_details',compact('leave'));
    }
    
    

    public function getLeaveRequestApproved($id)
    {
        
        $leave = Leave::findOrFail($id);
        Leave::whereId($id)->update([
            'status' => 'Approved'
        ]);

        return back()->with("status", " Leave Request Approved");
    }
    
    
    
    
}


