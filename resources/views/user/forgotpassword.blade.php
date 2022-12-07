
@extends('admin.loginapp')
    @section('title', 'Login')
 @section('content')

<div class="p-3">

<h4 class="text-muted text-center font-size-18">
        <div class="form-group mb-0 row mt-2">
            <div class="col-sm-12 mt-3">
                Please contact with Etram Admin
            </div>
        </div>
        <div class="form-group mb-0 row mt-2">
            <div class="col-sm-12 mt-3">
                <a href="{{route('login')}}" class="text-muted"><i class="mdi mdi-lock"></i> Back to login Screeen </a>
            </div>
        </div>

</h4>

</div>
 @endsection
