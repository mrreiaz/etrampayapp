
@extends('admin.app')
@section('title', 'DASHBOARD')
  
 @section('css')
    <link href="{{asset('/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css">
 @endsection

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

        <form id="myForm" method="GET" action="{{ route('admin.getemployeesPaySlipSearchbyid') }}" >
            @csrf
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4"> Employees  </h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Select EmployeID</label>
                                        <select class="form-control select2" name="user_id">
                                            <option>Select</option>
                                            @if($users->count() > 0)
                                                @foreach($users as $user)
                                                    <option value="{{$user->id}}">{{ $user->userid }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Find Employe</button>
                                </div>
                            </div>

                        </form>

                    </div><!-- end card -->
                </div><!-- end card -->
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4"> {{$finduser->userid}}  Payslips List </h4>
                        <div class="table-responsive">
                            <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                
                                <thead class="table-light">
                                    <tr>
                                        <th>SL</th>
                                        <th>Month</th>
                                        <th style="width: 120px;" class="text-center">Action</th>
                                    </tr>
                                </thead><!-- end thead -->
                                <tbody>
                                    @if($userPayslips->count() > 0)
                                    
                                    @foreach ($userPayslips as $userPayslip)
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            {{$userPayslip->year}} - 
                                            @if($userPayslip->month == 1)
                                            January
                                            @elseif($userPayslip->month == 2)
                                            February
                                            @elseif($userPayslip->month == 3)
                                            March
                                            @elseif($userPayslip->month == 4)
                                            April
                                            @elseif($userPayslip->month == 5)
                                            May
                                            @elseif($userPayslip->month == 6)
                                            June
                                            @elseif($userPayslip->month == 7)
                                            July
                                            @elseif($userPayslip->month == 8)
                                            August 
                                            @elseif($userPayslip->month == 9)
                                            September 
                                            @elseif($userPayslip->month == 10)
                                            October
                                            @elseif($userPayslip->month == 11)
                                            November
                                            @elseif($userPayslip->month == 12)
                                            December 
                                            @endif
                                        
                                        </td>
                                        <td>
                                            <div class="button-items">
                                                <a href="{{$userPayslip->file}}" download class="btn btn-info btn-sm waves-effect waves-light">Download</a>
                                                <a href="{{$userPayslip->file}}" target="_blank" class="btn btn-primary btn-sm waves-effect waves-light">View</a>
                                                <a href="{{ route('admin.userPayslipDelete',$userPayslip->id)}}" id="delete"  class="btn btn-danger btn-sm waves-effect waves-light">Delete</a>
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
@section('js')

<script src="{{asset('/assets/libs/select2/js/select2.min.js')}}"></script>

<script src="{{asset('/assets/js/pages/form-advanced.init.js')}}"></script>



@endsection
 