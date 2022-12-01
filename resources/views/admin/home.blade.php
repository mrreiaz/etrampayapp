
@extends('admin.app')
    @section('title', 'DASHBOARD')
  
 @section('content')

 <div class="page-content">
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <div class="col-xl-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-14 mb-2">Total Employees</p>
                                <h4 class="mb-2">1452</h4>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-primary rounded-3">
                                    <i class="ri-user-3-line font-size-24"></i>  
                                </span>
                            </div>

                        </div>                                            
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-14 mb-2">Total departments</p>
                                <h4 class="mb-2">2</h4>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-primary rounded-3">
                                    <i class="ri-home-smile-line font-size-24"></i>  
                                </span>
                            </div>

                        </div>                                            
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-14 mb-2">Total Full Time Employees</p>
                                <h4 class="mb-2">2</h4>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-primary rounded-3">
                                    <i class="ri-home-smile-line font-size-24"></i>  
                                </span>
                            </div>

                        </div>                                            
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-14 mb-2">Total Part Time Employees</p>
                                <h4 class="mb-2">2</h4>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-primary rounded-3">
                                    <i class="ri-home-smile-line font-size-24"></i>  
                                </span>
                            </div>

                        </div>                                            
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->


        </div><!-- end row -->


        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4"> Employees List </h4>

                        <div class="table-responsive">
                            <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                <thead class="table-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Emp ID</th>
                                        <th>Position</th>
                                        <th>Status</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th style="width: 120px;">Action</th>
                                    </tr>
                                </thead><!-- end thead -->
                                <tbody>
                                    <tr>
                                        <td><h6 class="mb-0">Charles Casey</h6></td>
                                        <td>ET101</td>
                                        <td>Web Developer</td>
                                        <td>
                                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                        </td>
                                        <td>
                                            23
                                        </td>
                                        <td>
                                            04 Apr, 2021
                                        </td>
                                        <td>
                                            <div class="button-items">
                                                <a href="" class="btn btn-primary btn-sm waves-effect waves-light">View</a>
                                                <a href="" class="btn btn-success btn-sm waves-effect waves-light">Edit</a>
                                                <a href="" class="btn btn-danger btn-sm waves-effect waves-light">Delete</a>
                                            </div>
                                        </td>
                                    </tr>

                                        <!-- end -->
                                </tbody><!-- end tbody -->
                            </table> <!-- end table -->
                        </div>
                    </div><!-- end card -->
                </div><!-- end card -->
            </div>
        </div>
        <!-- end row -->
    </div>
    
</div>

@endsection