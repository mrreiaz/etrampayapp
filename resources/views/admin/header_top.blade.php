
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('img/etram-logo.png') }}" alt="logo-sm" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('img/etram-logo.png') }}" alt="logo-dark" height="20">
                                </span>
                            </a>

                            <a href="" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('img/etram-logo.png') }}" alt="logo-sm-light" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('img/etram-logo.png') }}" alt="logo-light" height="20">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="ri-menu-2-line align-middle"></i>
                        </button>


                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-search-line"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                            </div>
                        </div>

                        <div class="dropdown d-inline-block user-dropdown">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if( Auth::user()->photo != null)
                                <img class="rounded-circle header-profile-user" src="{{Auth::user()->photo}}" alt="{{ Auth::user()->firstname }} {{ Auth::user()->lastname}}">
                                @else
                                <img class="rounded-circle header-profile-user" src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="">
                                @endif
                                
                                <span class="d-none d-xl-inline-block ms-1">{{ Auth::user()->firstname }} {{ Auth::user()->lastname}}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="{{route('admin.getprofile')}}"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item d-block" href="{{route('admin.getprofileEdit')}}"><i class="ri-settings-2-line align-middle me-1"></i> Edit Profile</a>
                                @if(Auth::user()->role === 'admin')
                                <a class="dropdown-item d-block" href="{{route('admin.changePassword')}}"><i class="ri-settings-2-line align-middle me-1"></i> Change Password</a>
                                @else
                                <a class="dropdown-item d-block" href="{{route('employees.changePassword')}}"><i class="ri-settings-2-line align-middle me-1"></i> Change Password</a>
                                @endif
                                <div class="dropdown-divider"></div>
                                <!-- <a class="dropdown-item text-danger" href="#"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a> -->
        
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();this.closest('form').submit();">
                                            <i class="ri-shut-down-line align-middle me-1 text-danger"></i> <span class="text-danger"> {{ __('Log Out') }}</span>
                                    </x-dropdown-link>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </header>
