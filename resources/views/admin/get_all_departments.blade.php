

@extends('admin.app')
    @section('title', 'DASHBOARD')
  
 @section('content')

 <div class="page-content">
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Departments List</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4"> Departments List </h4>

                        <div class="table-responsive">
                            <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                
                            @if($departments->count() > 0)
                                <thead class="table-light">
                                    <tr>
                                        <th>Serial Number</th>
                                        <th>Department Name</th>
                                        <th style="width: 120px;">Action</th>
                                    </tr>
                                </thead><!-- end thead -->
                                <tbody>
                                    @foreach ($departments as $department)
                                    <tr>
                                        <td><h6 class="mb-0">{{ $i++ }} </h6></td>
                                        <td>{{ $department->name }}</td>
                                        <td>
                                            <div class="button-items">
                                                <a href="" class="btn btn-primary btn-sm waves-effect waves-light">View</a>
                                                <a href="" class="btn btn-success btn-sm waves-effect waves-light">Edit</a>
                                                <a href="" class="btn btn-danger btn-sm waves-effect waves-light">Delete</a>
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