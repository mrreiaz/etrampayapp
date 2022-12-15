
@extends('admin.app')
    @section('title', 'DASHBOARD')
  
 @section('content')

 <div class="page-content">
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Employees List</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->



        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4"> Employees List </h4>

                        <div class="table-responsive">
                            <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                
                            @if($users->count() > 0)
                                <thead class="table-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Emp ID</th>
                                        <th>Department</th>
                                        <th>Status</th>
                                        <th>Job Type</th>
                                        <th>Join date</th>
                                        <th style="width: 120px;">Action</th>
                                    </tr>
                                </thead><!-- end thead -->
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td><h6 class="mb-0">{{ $user->firstname }} {{ $user->lastname }}</h6></td>
                                        <td>{{ $user->userid }}</td>
                                        <td>{{ $user->department }}</td>
                                        <td>
                                            @if($user->status === 'active')
                                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                            @elseif($user->status === 'inactive')
                                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-error align-middle me-2"></i>Inactive</div>
                                            @elseif($user->status === 'suspand')
                                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-error align-middle me-2"></i>Suspand</div>
                                            @else 
                                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-danger align-middle me-2"></i>Active</div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($user->jobtype === 'Full-Time')
                                            <div class="font-size-13">Full Time</div>
                                            @elseif($user->jobtype === 'Part-Time')
                                            <div class="font-size-13">Part Time</div>
                                            @elseif($user->jobtype === 'Contract-Job')
                                            <div class="font-size-13">Contract Job</div>
                                            @else 
                                            <div class="font-size-13"> No </div>
                                            @endif
                                        </td>
                                        <td>
                                            {{Carbon\Carbon::parse($user->joindate)->isoFormat('MMMM Do YYYY')}}
                                        </td>
                                        <td>
                                            <div class="button-items">
                                                <a href="{{route('admin.getEmployeeProfileView',$user->id)}}" class="btn btn-primary btn-sm waves-effect waves-light">View</a>
                                                <a href="{{route('admin.getEmployeeProfileEdit',$user->id)}}" class="btn btn-success btn-sm waves-effect waves-light">Edit</a>
                                                <a href="{{ route('admin.getEmployeeProfileDelete',$user->id)}}" id="delete" class="btn btn-danger btn-sm waves-effect waves-light">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else 
                                    <h2>No Date</h2>
                                    @endif

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