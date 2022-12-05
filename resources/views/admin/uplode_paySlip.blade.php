
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

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4"> Employees Payslips Uplode </h4>
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Select EmployeID</label>
                                        <select class="form-control select2">
                                            <option>Select</option>
                                            @if($users->count() > 0)
                                                @foreach($users as $user)
                                                    <option value="{{$user->userid}}">{{ $user->userid }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Select Month</label>
                                        <select class="form-control select2">
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
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Uplode PDF File  </h4>
                                            <div class="input-group">
                                                <input type="file" class="form-control">
                                            </div>
                                        </div>
                                    </div>
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
 