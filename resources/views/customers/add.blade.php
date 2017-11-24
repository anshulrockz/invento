@extends('layouts.backend')
@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
		<div class="page-bar">
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="{{url('/')}}"><i class="icon-home"></i> Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="{{url('/customers')}}">Customers</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span class="active">Add</span>
                </li>
            </ul>
        </div>
		<div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-blue-sharp bold uppercase">Add Customer</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                	<div class="col-md-6">
                		@include('flashmessage')
                		<form method="post" action="">
	                        <div class="form-body">
	                            {{ csrf_field() }}
							    <div class="form-group">
							      <label>*Name:</label>
							      <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Please Enter Name" required="">
							    </div>
							    <div class="form-group">
							      <label>*Email:</label>
							      <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Please Enter Email" required="">
							    </div>
							    <div class="form-group">
							      <label>*Mobile:</label>
							      <input type="number" class="form-control" name="mobile" id="mobile" value="{{ old('mobile') }}" placeholder="Please Enter Mobile" required="">
							    </div>
							    <div class="form-group">
							      <label>*Address:</label>
							      <textarea class="form-control" name="address" id="address" placeholder="Please Enter Address" required="">{{ old('address') }}</textarea>
							    </div>
	                        </div>
	                        <div class="form-actions">
	                            <button type="submit" class="btn blue">Save</button>
	                            <button type="button" class="btn default" onclick="location.href = '{{url('/customers')}}';">Cancel</button>
	                        </div>
	                    </form>
                	</div>
                </div>
            </div>
	    </div>
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
@endsection