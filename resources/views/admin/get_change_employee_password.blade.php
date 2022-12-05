
@extends('admin.app')
    @section('title', 'DASHBOARD')
  
 @section('content')

 <div class="page-content">
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Change Employees Password</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Change Employees Password</h4>

                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Select</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="">Select Employe ID </option>
                                                    @if($users->count() > 0)
                                                        @foreach($users as $user)
                                                            <option value="1">{{ $user->userid}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>

                                        </div>
                                        <!-- end row -->
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="newpassword" class="col-sm-2 col-form-label">New Password</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="password" placeholder="*********" id="newpassword">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="retypepassword" class="col-sm-2 col-form-label">Re-type Password</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="password" placeholder="*********"  id="retypepassword">
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