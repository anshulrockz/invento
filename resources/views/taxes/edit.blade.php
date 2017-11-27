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
                    <a href="{{url('/taxes')}}">Taxes</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="{{url('/taxes/view/1')}}">GST</a>
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
                    <span class="caption-subject font-blue-sharp bold uppercase">Edit Customer</span>
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
	                            <input type="text" class="form-control" name="name" id="name"  placeholder="Please Enter Name" required="">
							    </div>
								<div class="form-group">
							      <label>*Rate(%):</label>
							      <input type="number" class="form-control" name="rate" id="rate"  placeholder="Please Enter Rate" required="">
							    </div>
							    <div class="form-group">
								 <label>Effective From:</label>
								 <div class="input-group date">
								   <input type="text" name="effective_from" id="effective_from"  placeholder="Please Enter Effective From" class="form-control" required=""><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								 </div>
								</div>
							    <div class="form-group">
							      <label>Description:</label>
							      <textarea class="form-control" name="description" id="description" placeholder="Please Enter Description" ></textarea>
							    </div>
							    <div class="form-group">
								 <label>*Status:</label>
								 <select name="status" id="status" class="form-control">
								     <option>Select</option>
								     <option value="Active">Active</option>
								     <option value="Inactive">Inactive</option>
								 </select>
								</div>
	                        </div>
	                        <div class="form-actions">
	                            <button type="submit" class="btn blue">Update</button>
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