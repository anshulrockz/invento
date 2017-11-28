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
                <a href="{{ url('/products') }}" class="nav-link ">
                    <span class="title">Products</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{ url('/categories') }}" class="nav-link ">
                    <span class="title">Categories</span>
                </a>
            </li>
            <li class="nav-item  ">
	            <a href="{{ url('/brands') }}" class="nav-link ">
	                <span class="title">Brands</span>
	            </a>
	        </li>
	        <li class="nav-item  ">
	            <a href="{{ url('/manufacturers') }}" class="nav-link ">
	                <span class="title">Manufacturers</span>
	            </a>
	        </li>
	        <li class="nav-item  ">
	            <a href="{{ url('/forms') }}" class="nav-link ">
	                <span class="title">Forms</span>
	            </a>
	        </li>
	        <li class="nav-item  ">
	            <a href="{{ url('/units') }}" class="nav-link ">
	                <span class="title">Units</span>
	            </a>
	        </li>
	        <li class="nav-item  ">
	            <a href="{{ url('/taxes') }}" class="nav-link ">
	                <span class="title">Taxes</span>
	            </a>
	        </li>
	        <li class="nav-item  ">
	            <a href="{{ url('/opening-stocks') }}" class="nav-link ">
	                <span class="title">Opening Stocks</span>
	            </a>
	        </li>
        </ul>
    </li>
    <li class="nav-item ">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-bag"></i>
            <span class="title">Firm</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="{{ url('/firms') }}" class="nav-link ">
                    <span class="title">Firm</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{ url('/terms') }}" class="nav-link ">
                    <span class="title">Terms & Conditions</span>
                </a>
            </li>
            <li class="nav-item  ">
	            <a href="{{ url('/bank-details') }}" class="nav-link ">
	                <span class="title">Bank Details</span>
	            </a>
	        </li>
        </ul>
    </li>
    <li class="nav-item ">
        <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-bag"></i>
            <span class="title">Accounts</span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li class="nav-item  ">
                <a href="{{ url('/expenses') }}" class="nav-link ">
                    <span class="title">Expenses</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{ url('/incomes') }}" class="nav-link ">
                    <span class="title">Income</span>
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