
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

                        
                                        
        <form id="myForm" method="POST" action="{{ route('admin.postuplodePaySlip') }}" enctype="multipart/form-data" >
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
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4"> Employees Payslips Uplode </h4>
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label  @error('userid') is-invalid @enderror">Select EmployeID</label>
                                        @error('userid')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
                                

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label @error('month') is-invalid @enderror">Select Month</label>
                                        @error('month')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <select class="form-control" name="month">
                                            <option>Select</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label @error('year') is-invalid @enderror">Select Year</label>
                                        @error('month')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <select class="form-control" name="year">
                                            <option>Select</option>
                                            @php 
                                                $year = date("Y");
                                                $yearnext = date("Y")+1;
                                                $yearlast = date("Y")-1;
                                            @endphp 
                                            <option value="{{$yearlast}}">{{$yearlast}}</option>
                                            <option value="{{$year}}">{{$year}}</option>
                                            <option value="{{$yearnext}}">{{$yearnext}}</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Uplode PDF File  </h4>
                                            <div class="input-group ">
                                                <input type="file" class="form-control  @error('file') is-invalid @enderror" name="file"  />
                                                @error('file')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Uplode Payslip</button>
                                </div>
                            </div>

                        </form>

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
 