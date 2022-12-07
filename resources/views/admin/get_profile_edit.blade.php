
@extends('admin.app')
@section('title', 'DASHBOARD')
  
 @section('content')

 <div class="page-content">
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Profile</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Profile</h4>
                                        
                        <form id="myForm" method="POST" action="{{ route('admin.getProfileUpdate') }}" enctype="multipart/form-data" >
                            @csrf
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                            {{session('status')}}
                            </div>
                            @elseif(session('error'))
                            <div class="alert alert-danger" role="alert">
                            {{session('error')}}
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Profile Picture</label>
                                                <div class="col-sm-10">
                                                    @if($user->photo != null)
                                                    <img id="showImage" src="{{$user->photo}}" alt="" width="200px">
                                                    @else
                                                    <img id="showImage" src="{{asset('assets/images/users/avatar-2.jpg')}}" width="200px" alt="">
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Uplode Profile Picture</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control  @error('photo') is-invalid @enderror" name="photo"  id="image"   />
                                                    @error('photo')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">First Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="firstname" value="{{$user->firstname}}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Last Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="lastname" value="{{$user->lastname}}">
                                                </div>
                                            </div>

                                            <!-- userid = employee ID -->
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Employee ID</label>	
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text"  value="{{$user->userid}}" disabled>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" value="{{$user->username}}" disabled>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="email" value="{{$user->email}}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Department</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select"  name="department">
                                                        <option >Select Department</option>
                                                        <option value="IT" {{ $user->department === 'IT' ? 'selected' : '' }}>IT</option>
                                                        <option value="HR" {{ $user->department === 'HR' ? 'selected' : '' }}>HR</option>
                                                        <option value="Sales" {{ $user->department === 'Sales' ? 'selected' : '' }}>Sales</option>
                                                        <option value="Others" {{ $user->department === 'Others' ? 'selected' : '' }}>Others</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Type of Job</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" name="jobtype" >
                                                        <option >Select Type of Job</option>
                                                        <option value="Full-Time" {{ $user->jobtype === 'Full-Time' ? 'selected' : '' }}>Full Time</option>
                                                        <option value="Part-Time" {{ $user->jobtype === 'Part-Time' ? 'selected' : '' }}>Part Time</option>
                                                        <option value="Contract-Job" {{ $user->jobtype === 'Contract-Job' ? 'selected' : '' }}>Contract Job</option>
                                                    </select>
                                                </div>
                                            </div>                                            

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Gender</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" name="gender" aria-label="Default select">
                                                        <option >Select Gender</option>
                                                        <option value="Female" {{ $user->gender === 'Female' ? 'selected' : '' }}>Female</option>
                                                        <option value="Male" {{ $user->gender === 'Male' ? 'selected' : '' }}>Male</option>
                                                        <option value="Others" {{ $user->gender === 'Others' ? 'selected' : '' }}>Others</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Date Of Birth</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="date" name="dateofbirth"  value="{{$user->dateofbirth}}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Join Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="date"  name="joindate" value="{{$user->joindate}}">
                                                </div>
                                            </div>
                                            

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Phone Number</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text"  name="phone" value="{{$user->phone}}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Curren Address</label>
                                                <div class="col-sm-10">
                                                    <textarea name="address" class="form-control" rows="5" spellcheck="false">{{$user->address}}</textarea>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Permanent Address</label>
                                                <div class="col-sm-10">
                                                    <textarea name="paddress" class="form-control" rows="5" spellcheck="false">{{$user->paddress}}</textarea>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1"> Update </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->       
		                </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection

@section('js')
<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>
@endsection