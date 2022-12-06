
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
                        <h4 class="card-title mb-4"> Name  Payslips List </h4>
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
                                    <tr>
                                        <td>1</td>
                                        <td>2022 - January</td>
                                        <td>
                                            <div class="button-items">
                                                <a href="" class="btn btn-info btn-sm waves-effect waves-light">Download</a>
                                                <a href="" class="btn btn-primary btn-sm waves-effect waves-light">View</a>
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
