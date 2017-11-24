<ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
    <li class="nav-item active">
        <a href="{{url('/')}}" class="nav-link ">
            <i class="icon-home"></i>
            <span class="title">Dashboard</span>
        </a>
    </li>
    <li class="heading">
        <h3 class="uppercase">Administration</h3>
    </li>
	<li class="nav-item ">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-info"></i>
            <span class="title">Masters</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="{{ url('/states') }}" class="nav-link ">
                    <span class="title">States</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{ url('/sections') }}" class="nav-link ">
                    <span class="title">Sections</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{ url('/classes') }}" class="nav-link ">
                    <span class="title">Classes</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{ url('/devices') }}" class="nav-link ">
                    <span class="title">Devices</span>
                </a>
            </li>
        </ul>
    </li>
	<li class="nav-item">
        <a href="{{ url('/students') }}" class="nav-link ">
            <i class="icon-users"></i>
            <span class="title">Students</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('/attendance') }}" class="nav-link ">
            <i class="icon-calendar"></i>
            <span class="title">Attendance</span>
        </a>
    </li>
	<li class="nav-item ">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-bag"></i>
            <span class="title">Reports</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="{{url('/reports/student')}}" class="nav-link ">
                    <span class="title">Student Report</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{url('/reports/attendance')}}" class="nav-link ">
                    <span class="title">Attendance Report</span>
                </a>
            </li>
        </ul>
    </li>
	<li class="nav-item">
        <a href="{{ url('/settings') }}" class="nav-link ">
            <i class="icon-settings"></i>
            <span class="title">Settings</span>
        </a>
    </li>
    <li class="heading">
        <h3 class="uppercase">Accounts</h3>
    </li>
    <li class="nav-item">
        <a href="{{ action('Backend\EditprofileController@index') }}" class="nav-link ">
            <i class="icon-user"></i>
            <span class="title">Edit Profile</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ action('Backend\ChangepasswordController@index') }}" class="nav-link ">
            <i class="icon-key"></i>
            <span class="title">Change Password</span>
        </a>
    </li>
</ul>