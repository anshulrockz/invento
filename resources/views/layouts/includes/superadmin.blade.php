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
                <a href="{{ url('/under-construction') }}" class="nav-link ">
                    <span class="title">Menu 1</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{ url('/under-construction') }}" class="nav-link ">
                    <span class="title">Menu 2</span>
                </a>
            </li>
            <li class="nav-item  ">
	            <a href="{{ url('/under-construction') }}" class="nav-link ">
	                <span class="title">Menu 3</span>
	            </a>
	        </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="{{url('/customers')}}" class="nav-link ">
            <i class="icon-users"></i>
            <span class="title">Customers</span>
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
                <a href="{{ url('/under-construction') }}" class="nav-link ">
                    <span class="title">Menu 1</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{ url('/under-construction') }}" class="nav-link ">
                    <span class="title">Menu 2</span>
                </a>
            </li>
            <li class="nav-item  ">
	            <a href="{{ url('/under-construction') }}" class="nav-link ">
	                <span class="title">Menu 3</span>
	            </a>
	        </li>
        </ul>
    </li>
	<li class="nav-item">
        <a href="{{url('/settings')}}" class="nav-link ">
            <i class="icon-settings"></i>
            <span class="title">Settings</span>
        </a>
    </li>
    <li class="heading">
        <h3 class="uppercase">Accounts</h3>
    </li>
    <li class="nav-item">
        <a href="{{ action('EditprofileController@index') }}" class="nav-link ">
            <i class="icon-user"></i>
            <span class="title">Edit Profile</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ action('ChangepasswordController@index') }}" class="nav-link ">
            <i class="icon-key"></i>
            <span class="title">Change Password</span>
        </a>
    </li>
</ul>