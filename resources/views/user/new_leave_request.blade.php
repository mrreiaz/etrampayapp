
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
                    <h4 class="mb-sm-0">  New Leave Request </h4> 
                </div>
            </div>
        </div>
        <!-- end page title -->

        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Leave Request</h4>
                                        
                        <form id="myForm" method="POST" action="{{route('employees.postNewLeaveRequest')}}" enctype="multipart/form-data" >
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
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label  @error('factory_name') is-invalid @enderror">Fábrica</label>
                                                    @error('department')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                <div class="col-sm-10">
                                                    <select class="form-select"  name="factory_name">
                                                        <option >Select Fábrica</option>
                                                        <option value="ETRAM">ETRAM / エトラム</option>
                                                        <option value="chatoraise">Chatoraise / シャトレーゼ </option>
                                                        <option value="nakaya">Nakaya  / 中家製作所 </option>
                                                        <option value="nirasaki_kosan">Nirasaki Kosan  / 韮崎興産 </option>
                                                        <option value="fujimec">Fujimec / フジメック </option>
                                                        <option value="progress">Progress / プログレス </option>
                                                        <option value="HOS">HOSOKAWAMOKUZAI / 細川木材 </option>
                                                        <option value="mitsui">Mitsui / 三井金属 </option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="dateofbirth" class="col-sm-2 col-form-label">Date From </label>
                                                <div class="col-sm-10">
                                                    <input class="form-control   @error('date1') is-invalid @enderror " type="date" name="date1" >
                                                    @error('date1')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="dateofbirth" class="col-sm-2 col-form-label">Date</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control   @error('date2') is-invalid @enderror " type="date" name="date2" >
                                                    @error('date2')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label  @error('reason') is-invalid @enderror"> Reason for Vacation</label>
                                                     @error('reason')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                <div class="col-sm-10">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="reason" value="Escola" id=Escola> 
                                                        <label class="form-check-label" for="Escola">
                                                            Escola/ Creche 
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="reason" value="Hospital" id="Hospital">
                                                        <label class="form-check-label" for="Hospital">
                                                            Hospital
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="reason" value="Outros" id="outros">
                                                        <label class="form-check-label" for="outros">
                                                            Outros
                                                        </label>
                                                    </div>

                                                    <div>
                                                        <textarea style="display:none;" class="form-control" name="reason_text" id="otherAnswer"  cols="3" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label  @error('description') is-invalid @enderror"> Observações</label>
                                                    @error('description')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                <div class="col-sm-10">
                                                    <div >
                                                        <textarea  class="form-control" name="description"   cols="5" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1 w-100"> Send Request </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->       
		                </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('js')
<script>
        $(document).ready(function() {
            $("input[type='radio']").change(function() {
                if ($(this).val() == "Outros") {
                    $("#otherAnswer").show();
                } else {
                    $("#otherAnswer").hide();
                }
            });
        });
    </script>

@endsection