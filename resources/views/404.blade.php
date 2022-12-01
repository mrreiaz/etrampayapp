
@extends('admin.loginapp')
    @section('title', '404')
 @section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="ex-page-content text-center">
                    <h1>404!</h1>
                    <h3>Sorry, page not found</h3><br>
                    @if(Auth::user()->role === 'admin')
                    <a class="btn btn-info mb-5 waves-effect waves-light" href="{{route('admin.dashboard')}}">Back to Your Dashboard</a>
                    @else
                    <a class="btn btn-info mb-5 waves-effect waves-light" href="{{route('employees.dashboard')}}">Back to Your Dashboard</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
