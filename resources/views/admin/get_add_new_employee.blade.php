
@extends('admin.app')
@section('title', 'DASHBOARD')
  
 @section('content')

 <div class="page-content">
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add New Employee</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add New Employee</h4>
                        
                                        
                        <form id="myForm" method="POST" action="{{ route('admin.postaddNewEmployee') }}" enctype="multipart/form-data" >
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
                                                <img id="showImage" src="{{asset('assets/images/users/avatar-2.jpg')}}" width="200px" alt="">
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
                                                    <input class="form-control @error('firstname') is-invalid @enderror" type="text" name="firstname" placeholder="First Name">
                                                    @error('firstname')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Last Name</label>
                                            <div class="col-sm-10">
                                                    <input class="form-control @error('lastname') is-invalid @enderror" type="text" name="lastname" placeholder="Last Name">
                                                    @error('lastname')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                            </div>
                                        </div>

                                        <!-- userid = employee ID -->
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Employee ID</label>	
                                            <div class="col-sm-10">
                                                <input class="form-control @error('userid') is-invalid @enderror" type="text" placeholder="Employee ID" name="userid">
                                                @error('userid')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                    <input class="form-control @error('username') is-invalid @enderror" name="username" type="text" placeholder="Username">
                                                    @error('username')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                    <input class="form-control  @error('email') is-invalid @enderror" placeholder="Email" type="email" name="email" >
                                                    @error('email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="newpassword" class="col-sm-2 col-form-label">New Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="new_password"   placeholder="Password" />
                                                @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label  @error('department') is-invalid @enderror">Department</label>
                                                    @error('department')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                <div class="col-sm-10">
                                                    <select class="form-select"  name="department">
                                                        <option >Select Department</option>
                                                        <option value="IT">IT</option>
                                                        <option value="HR">HR</option>
                                                        <option value="Sales">Sales</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label   @error('jobtype') is-invalid @enderror">Type of Job</label>
                                                    @error('jobtype')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                <div class="col-sm-10">
                                                    <select class="form-select" name="jobtype" >
                                                        <option >Select Type of Job</option>
                                                        <option value="Full-Time">Full Time</option>
                                                        <option value="Part-Time">Part Time</option>
                                                        <option value="Contract-Job">Contract Job</option>
                                                    </select>
                                                </div>
                                            </div> 

                                            <div class="row mb-3">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label   @error('gender') is-invalid @enderror">Gender</label>
                                                    @error('gender')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                <div class="col-sm-10">
                                                    <select class="form-select" name="gender" aria-label="Default select">
                                                        <option >Select Gender</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Date Of Birth</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control   @error('dateofbirth') is-invalid @enderror " type="date" name="dateofbirth" placeholder="Date of Birth" >
                                                    @error('dateofbirth')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Join Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control @error('joindate') is-invalid @enderror " type="date"  name="joindate" placeholder="Join Date">
                                                    @error('joindate')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Phone Number</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control @error('phone') is-invalid @enderror" type="text"  name="phone" placeholder="07021658832">
                                                    @error('phone')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Curren Address</label>
                                                <div class="col-sm-10">
                                                    <textarea name="address" class="form-control @error('address') is-invalid @enderror" rows="5" spellcheck="false" placeholder="Curren Address"></textarea>
                                                    @error('address')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Permanent Address</label>
                                                <div class="col-sm-10">
                                                    <textarea name="paddress" class="form-control  @error('paddress') is-invalid @enderror" rows="5" spellcheck="false" placeholder="Permanent Address"></textarea>
                                                    @error('paddress')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light me-1"> Save </button>
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