
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

    </div>
    
</div>

@endsection
@section('js')

<script src="{{asset('/assets/libs/select2/js/select2.min.js')}}"></script>

<script src="{{asset('/assets/js/pages/form-advanced.init.js')}}"></script>



@endsection
 