
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
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">  Leaves Request List </h4>
                        <div class="table-responsive">
                            <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                
                                <thead class="table-light">
                                    <tr>
                                        <th>SL</th>
                                        <th>Employe ID</th>
                                        <th>Status</th>
                                        <th>Request Date</th>
                                        <th>Reason for Vacation</th>
                                        <th>Action </th>
                                    </tr>
                                </thead><!-- end thead -->
                                <tbody>
                                    @php 
                                    $i = 1;
                                    @endphp 
                                    @if($leaves->count() > 0)
                                    @foreach($leaves as $leave)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{ App\Models\user::find($leave->emp_id)->userid }}</td>
                                        <td>
                                            @if($leave->status == 'panding')
                                            Panding
                                            @else
                                            Approve
                                            @endif
                                            
                                        </td>
                                        <td>{{$leave->created_at}}</td>
                                        <td>{{$leave->reason}}</td>
                                        <td>
                                            <div class="button-items">
                                                <a href="{{route('admin.getLeaveRequestDetails',$leave->id)}}" class="btn btn-primary btn-sm waves-effect waves-light">View</a>
                                                <a href="{{route('admin.getLeaveRequestApproved',$leave->id)}}" class="btn btn-success btn-sm waves-effect waves-light @if($leave->status != 'panding') disabled @endif"  >Approve</a>
                                                <!-- <a href="" id="delete" class="btn btn-danger btn-sm waves-effect waves-light">Delete</a> -->
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <h2>No Data</h2>
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
