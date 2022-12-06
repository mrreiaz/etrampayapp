
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
                        <h4 class="card-title">Profile</h4>
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Profile Picture</label>
                                            <div class="col-sm-10">
                                                @if($user->photo != null)
                                                <img src="{{$user->photo}}" alt="">
                                                @else
                                                <img src="{{asset('assets/images/users/avatar-4.jpg')}}" alt="">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">First Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="{{$user->firstname}}" disabled>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Last Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="{{$user->lastname}}" disabled>
                                            </div>
                                        </div>

                                        <!-- userid = employee ID -->
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Employee ID</label>	
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="{{$user->userid}}" disabled>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="{{$user->username}}" disabled>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="{{$user->email}}" disabled>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Department</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="{{$user->department}}" disabled>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Type of Job</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="{{$user->jobtype}}" disabled>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Gender</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="{{$user->gender}}" disabled>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Date Of Birth</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="{{$user->dateofbirth}}" disabled>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Join Date</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="{{$user->joindate}}" disabled>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Phone Number</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="{{$user->phone}}" disabled>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <textarea required="" class="form-control" rows="5" spellcheck="false" disabled>{{$user->address}}</textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                            <div class="col-sm-10">
                                                <a href="" class="btn btn-primary waves-effect waves-light me-1"> Edit </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div>
                </div>
            </div>
        </div>


    </div>
    
</div>

@endsection