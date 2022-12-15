
@extends('admin.app')
    @section('title', 'Change Password')
  
 @section('content')

 <div class="page-content">
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Change Password</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Change Password</h4>

                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <form method="post" action="{{ route('employees.postchangePassword') }}"  >
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
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <label for="oldpassword" class="col-sm-2 col-form-label">Old Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" name="old_password" class="form-control @error('old_password') is-invalid @enderror" id="current_password"   placeholder="Old Password" />
                                                    @error('old_password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- end row -->
                                            <div class="row mb-3">
                                                <label for="newpassword" class="col-sm-2 col-form-label">New Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" id="new_password"   placeholder="New Password" />

                                                    @error('new_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- end row -->
                                            <div class="row mb-3">
                                                <label for="retypepassword" class="col-sm-2 col-form-label">Confirm New Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" name="new_password_confirmation" class="form-control" id="new_password_confirmation"   placeholder="Confirm New Password" /> 
                                                </div>
                                            </div>
                                            <!-- end row -->
                                            <!-- end row -->
                                            <div class="row mb-3">
                                                <label for="retypepassword" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                <button class="btn btn-primary" type="submit">Update Password</button>
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </form>
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