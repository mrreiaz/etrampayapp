
@extends('admin.app')
    @section('title', 'DASHBOARD')

@section('css')
<style>
.card-title i {
    background: #ebedeb;
    padding: 5px;
}
.card-body p {
    padding-left: 30px;
}

</style>
@endsection
  
 @section('content')

 <div class="page-content">
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Profile 101</h4> 
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-12">
                <!-- Simple card -->
                <div class="card">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-1" style="margin-left: 20px;padding: 20px;">
                            <img class="card-img rounded-circle avatar-xl" src="{{asset('assets/images/small/img-2.jpg')}}" alt="Card image">
                        </div>
                        <div class="col-md-3">
                            <div class="card-body">
                                <h5 class="card-title"> Name </h5>
                                <h5 class="card-title"> EMP101 </h5>
                                <h5 class="card-title"> Phone Nuber </h5>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card-body">
                                <h5 class="card-title"> <i class=" far fa-clipboard"></i> Development</h5>
                                <p class="card-text">Dep.</p>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"> <i class=" far fa-file-alt"></i> Development</h5>
                                <p class="card-text">Dep.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <h5 class="card-title"> <i class="ri-map-pin-time-fill"></i> Joining Date</h5>
                                <p class="card-text">This .</p>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"> <i class="far fa-calendar-alt"></i> Joining Date</h5>
                                <p class="card-text">This .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

        </div>
        <!-- end row -->

        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Personal Details</h4>

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <td>First Name</td>
                                        <td>Halim</td>
                                    </tr>
                                    <tr>
                                        <td>Last Name</td>
                                        <td>MdAbdul</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
    
</div>

@endsection