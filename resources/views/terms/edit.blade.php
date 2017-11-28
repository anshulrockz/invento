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
                    <a href="{{url('/terms')}}">Terms & Conditions</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="{{url('/terms/view/1')}}">Terms & Conditions</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span class="active">Edit</span>
                </li>
            </ul>
        </div>
		<div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-blue-sharp bold uppercase">Edit Terms & Conditions</span>
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
							      <label>*First:</label>
							      <input type="text" class="form-control" name="name" id="name" value="" placeholder="Please Enter Name" required="">
							    </div>
							    <div class="form-group">
							      <label>Second:</label>
							      <input type="text" class="form-control" name="name" id="name" value="" placeholder="Please Enter Name" required="">
							    </div>
							    <div class="form-group">
							      <label>Third:</label>
							      <input type="text" class="form-control" name="name" id="name" value="" placeholder="Please Enter Name" required="">
							    </div>
							    <div class="form-group">
							      <label>Fourth:</label>
							      <input type="text" class="form-control" name="name" id="name" value="" placeholder="Please Enter Name" required="">
							    </div>
							    <div class="form-group">
							      <label>Fifth:</label>
							      <input type="text" class="form-control" name="name" id="name" value="" placeholder="Please Enter Name" required="">
							    </div>
							    <div class="form-group">
							      <label>Sixth:</label>
							      <input type="text" class="form-control" name="name" id="name" value="" placeholder="Please Enter Name" required="">
							    </div>
	                        </div>
	                        <div class="form-actions">
	                            <button type="submit" class="btn blue">Update</button>
	                            <button type="button" class="btn default" onclick="location.href = '{{url('/terms')}}';">Cancel</button>
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