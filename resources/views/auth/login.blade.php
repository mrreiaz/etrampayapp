

@extends('admin.loginapp')
    @section('title', 'Login')



 @section('content')

<h4 class="text-muted text-center font-size-18"><b>Sign In</b></h4>
<div class="p-3">

    <form class="form-horizontal mt-3" method="POST" action="{{ route('login') }}">
    @csrf

        <div class="form-group mb-3 row">
            <div class="col-12">
                <input class="form-control" type="email" required="" name="email" placeholder="User email" required autofocus>
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="form-group mb-3 row">
            <div class="col-12">
                <input class="form-control" type="password" required="" name="password" placeholder="Password" required autocomplete="current-password" >
            </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="form-group mb-3 row">
            <div class="col-12">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="remember_me" name="remember">
                    <label class="form-label ms-1" for="remember_me">Remember me</label>
                </div>
            </div>
        </div>

        <div class="form-group mb-3 text-center row mt-3 pt-1">
            <div class="col-12">
                <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Log In</button>
            </div>
        </div>

        <div class="form-group mb-0 row mt-2">
            <div class="col-sm-12 mt-3">
                <a href="{{route('getForgotPassword')}}" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
            </div>
        </div>
    </form>
</div>
 @endsection
