
@extends('admin.app')
    @section('title', 'DASHBOARD')

@section('css')
<style>
.card-title i {
    background: #ebedeb;
    padding: 5px;
}
.card-body p {
    padding-left: 30px;
}
.card-body {
    margin-left: 35px;
}

</style>
@endsection
  
 @section('content')

 <div class="page-content">
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0"> {{ $user->firstname }} {{ $user->lastname }} Profile</h4> 
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-12">
                <!-- Simple card -->
                <div class="card">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-1" style="margin-left: 20px;padding: 20px;">
                            
                                @if( $user->photo != null)
                                <img class="card-img rounded-circle avatar-xl" src="{{$user->photo}}" alt="">
                                @else
                                <img class="card-img rounded-circle avatar-xl" src="{{asset('assets/images/small/img-2.jpg')}}" alt="">
                                @endif
                        </div>
                        <div class="col-md-3">
                            <div class="card-body">
                                <h5 class="card-title"> Name </h5>
                                <h5 class="card-title"> EMP101 </h5>
                                <h5 class="card-title"> Phone Nuber </h5>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-body">
                                <h5 class="card-title"> <i class=" far fa-clipboard"></i> Development</h5>
                                <p class="card-text">{{ $user->department }}</p>
                            </div>
                            <!-- <div class="card-body">
                                <h5 class="card-title"> <i class=" far fa-file-alt"></i> Development</h5>
                                <p class="card-text">Dep.</p>
                            </div> -->
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <h5 class="card-title"> <i class="ri-map-pin-time-fill"></i> Joining Date</h5>
                                <p class="card-text">{{Carbon\Carbon::parse($user->joindate)->isoFormat('MMMM Do YYYY')}}</p>
                            </div>
                            <!-- <div class="card-body">
                                <h5 class="card-title"> <i class="far fa-calendar-alt"></i> Joining Date</h5>
                                <p class="card-text">This .</p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

        </div>
        <!-- end row -->

        

        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">


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
                                                <a href="{{route('employees.getprofileEdit')}}" class="btn btn-primary waves-effect waves-light me-1"> Edit </a>
                                               
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