
            <div class="vertical-menu">
                <div data-simplebar class="h-100">
                    <!-- User details -->
                    <div class="user-profile text-center mt-3">
                        <div class="">
                            @if( Auth::user()->photo != null)
                            <img src="{{Auth::user()->photo}}" alt="{{ Auth::user()->firstname }} {{ Auth::user()->lastname}}" class="avatar-md rounded-circle">
                            @else
                            <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-md rounded-circle">
                            @endif
                        </div>
                        <div class="mt-3">
                            <h4 class="font-size-16 mb-1">{{ Auth::user()->firstname }} {{ Auth::user()->lastname}}</h4>
                            <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
                        </div>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">

                            <li>
                                @if(Auth::user()->role === 'admin')
                                <a href="{{route('admin.dashboard')}}" class="waves-effect">
                                    <span>Dashboard</span>
                                </a>
                                @else
                                <a href="{{route('employees.dashboard')}}" class="waves-effect">
                                    <span>Dashboard</span>
                                </a>
                                @endif
                            </li>

                            @if(Auth::user()->role === 'admin')
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-shield-user-line"></i>
                                    <span>Employees</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('admin.getAllEmployee') }}">All Employees</a></li>
                                    <li><a href="{{ route('admin.getaddNewEmployee') }}">Add New Employe</a></li>
                                    <li><a href="{{route('admin.getchangeEmployeePassword')}}">Change Emp password</a></li>
                                    <!-- <li><a href="javascript: void(0);">Designation</a></li> -->
                                    <li><a href="{{route('admin.getAllDepartments')}}">Departments</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-layout-3-line"></i>
                                    <span>Payslips</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">

                                    <li>
                                        <a href="{{route('admin.getuplodePaySlip')}}" >Upload Payslips</a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{route('admin.getemployeesPaySlipSearch')}}" >Payslip Search</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-layout-3-line"></i>
                                    <span>Paid Leave Request</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li>
                                        <a href="{{route('admin.getAllLeavesList')}}" >Leave Request ({{App\Models\Leave::where('status','panding')->orderByRaw('updated_at - created_at DESC')->get()->count()}})</a>
                                    </li>
                                </ul>
                            </li>
                            @else
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-shield-user-line"></i>
                                    <span>Employees</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('employees.getprofile')}}">My Profile</a></li>
                                    <li><a href="{{route('employees.getprofileEdit')}}">Edit Profile</a></li>
                                    <li><a href="{{route('employees.changePassword')}}">Change Password</a></li>
                                    <!-- <li><a href="javascript: void(0);">Address Details</a></li>
                                    <li><a href="javascript: void(0);">Emergency Contacts</a></li> -->
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-layout-3-line"></i>
                                    <span>Payslip</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li>
                                        <a href="{{ route('employees.getallPayslips') }}" >All Payslips</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-layout-3-line"></i>
                                    <span>Paid Leave Request</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li>
                                        <a href="{{route('employees.getNewLeaveRequest')}}" >New Leave Request</a>
                                    </li>
                                    <li>
                                        <a href="{{route('employees.getAllLeaves')}}" >All Paid Leave List</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-layout-3-line"></i>
                                    <span>Leave Request</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">

                                    <li>
                                        <a href="javascript: void(0);" >Leave Request</a>
                                    </li>
                                    
                                    <li>
                                        <a href="javascript: void(0);" >All Leave Request</a>
                                    </li>
                                </ul>
                            </li> -->

                            @endif

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>