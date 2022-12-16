
 
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield("title")</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
        <style>
.wrapper-page{
    max-width:850px;
    margin:0 auto;

}

.imgsize {
    width: 150px;
    margin: 0 auto;
    padding-top: 18px;
}

            </style>
    </head>

    <body  class="auth-body-bg">
        
    <div class="text-center mt-4">
        <div class="mb-3">
            <a href="" class="auth-logo">
                <img src="{{ asset('img/EtramLogo.png') }}"  style="width: 144px;" class="logo-dark mx-auto" alt="">
                <img src="{{ asset('img/EtramLogo.png') }}" style="width: 5px;" class="logo-light mx-auto" alt="">
            </a>
        </div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="my-3">Login</h4>
                                <div class="row">
                                    

                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card">
                                            
                                            @auth
                                                <a href="{{ url('/dashboard') }}">
                                                    <img src="{{ asset('img/English.png') }}" class="card-img-top imgsize" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">English</h5>
                                                    </div>
                                                </a>
                                            @else
                                                <a href="{{ route('login') }}">
                                                    <img src="{{ asset('img/English.png') }}" class="card-img-top imgsize" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">English</h5>
                                                    </div>
                                                </a>
                                            @endauth
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card">
                                            
                                            @auth
                                                <a href="{{ url('/dashboard') }}">
                                                    <img src="{{ asset('img/Japanese.png') }}" class="card-img-top imgsize" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">English</h5>
                                                    </div>
                                                </a>
                                            @else
                                                <a href="{{ route('login') }}">
                                                    <img src="{{ asset('img/Japanese.png') }}" class="card-img-top imgsize" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">日本語</h5>
                                                    </div>
                                                </a>
                                            @endauth
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card">
                                            
                                            @auth
                                                <a href="{{ url('/dashboard') }}">
                                                    <img src="{{ asset('img/Portuguese.png') }}" class="card-img-top imgsize" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">English</h5>
                                                    </div>
                                                </a>
                                            @else
                                                <a href="{{ route('login') }}">
                                                    <img src="{{ asset('img/Portuguese.png') }}" class="card-img-top imgsize" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Português</h5>
                                                    </div>
                                                </a>
                                            @endauth
                                        </div>
                                    </div>

                                    

                                </div>
                                <!-- end row -->
                                
                            </div>
                        </div>

    
                        <!-- end -->
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('assets/js/app.js')}}"></script>
    </body>
</html>

