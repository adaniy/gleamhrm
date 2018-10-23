<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile" style="background: url({{asset('assets/images/background/user-info.jpg') }}) no-repeat;">
            <!-- User profile image -->
            <div class="profile-img"> <img src="{{asset('assets/images/users/profile.png') }}" alt="user" /> </div>
            <!-- User profile text-->
            <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">{{Auth::user()->firstname}}</a>
            <div class="dropdown-menu animated flipInY"> <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a> <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a> <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
            <div class="dropdown-divider"></div> <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a> </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                {{--/////Second Start--}}
                <li> <a class="" href="{{route('admin.dashboard')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-laptop-windows"></i><span class="hide-menu">Hiring</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('applicants')}}">Application</a></li>
                        <li><a href="{{route('job.index')}}">Jobs</a></li>
                    </ul>
                </li>
                {{--<li> <a class="" href="{{route('users')}}" aria-expanded="false"><i class="mdi mdi-account-circle"></i><span class="hide-menu">Users</span></a>--}}
                {{--</li>--}}
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">People Mgmt</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('employees')}}">Employees</a></li>
                        <li><a href="{{route('organization_hierarchy.index')}}">Org Chart</a></li>
                        <li><a href="#">Teams</a></li>
                        <li><a href="#">Team Members</a></li>
                        <li><a href="#">Vendors</a></li>

                    </ul>
                </li>


                <li> <a class="has-arrow waves-effect waves-dark" href="{{route('attendance')}}"><i class="mdi mdi-alarm-check"></i><span class="hide-menu">Attendance</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <?php
                        $month = date('m');
                        $monthee= "2018_".$month;
                        ?>
                        <li><a href="{{route('attendance',['id'=>$monthee])}}">Sheet</a></li>
                        <li><a href="#">Today</a></li>
                        <li><a href="#">History</a></li>
                        <li><a href="#">Incomplete</a></li>
                        <li><a href="#">Today</a></li>
                        <li><a href="{{route('leave.show', Auth::user()->id)}}">Leave</a></li>
                        <li><a href="#">My Leaves</a></li>
                        <li><a href="#">My Attendance</a></li>
                        <li><a href="{{route('timeline')}}">Time Line</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Settings</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('documents') }}">Documents</a></li>
                        <li><a href="{{ route('branch.index') }}">Branches</a></li>
                        <li><a href="#">Departments</a></li>
                        <li><a href="#">Designations</a></li>
                        <li><a href="#">Vendor Categories</a></li>
                        <li><a href="#">Leave Management</a></li>
                        <li><a href="#">Probident Fund</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-database"></i><span class="hide-menu">Payments</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('salary.show')}}">Salary</a></li>
                        <li><a href="#">Payroll Payments</a></li>
                        <li><a href="#">Vendor Payments</a></li>
                        <li><a href="#">Bill Payments</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-apps"></i><span class="hide-menu">Manage Roles</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('roles_permissions')}}">Roles And Permissions</a></li>
                    </ul>
                </li>

                <li> <a class="" href="{{route('admin.help')}}" aria-expanded="false"><i class="mdi mdi-help-circle"></i><span class="hide-menu">Help</span></a>
                </li>

                {{--///////// Second End--}}
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item--><a href="https://www.zoho.com/mail/index1.html" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item--><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a></div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
    <!-- End Bottom points-->
</aside>