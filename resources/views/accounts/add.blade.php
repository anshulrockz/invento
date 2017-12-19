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
                    <a href="{{url('/accounts')}}">Accounts</a>
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
                    <span class="caption-subject font-blue-sharp bold uppercase">Add Account</span>
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
							      <label>*GST %:</label>
							      <select name="gst" id="gst" class="form-control">
								     <option>Select</option>
								     <option value="4">4</option>
								     <option value="12">12</option>
								     <option value="18">18</option>
								     <option value="24">24</option>
								 </select>
							    </div>
							    <div class="form-group">
							      <label>HSN Code:</label>
							      <input type="text" class="form-control" name="hsn" id="hsn" value="{{ old('hsn') }}" placeholder="Please Enter HSN Code" >
							    </div>
							    <div class="form-group">
							      <label>*Parent Acount Name:</label>
							      <input type="text" class="form-control" name="pan" id="pan" value="{{ old('pan') }}" placeholder="Please Enter Parent Acount Name" required="">
							    </div>
							    <div class="form-group">
									 <label>*ITC Eligibility:</label>
									 <select name="itc" id="itc" class="form-control">
									     <option>Select</option>
									     <option value="0">No</option>
									     <option value="1">Yes</option>
									 </select>
								</div>
	                        </div>
	                        <div class="form-actions">
	                            <button type="submit" class="btn blue">Save</button>
	                            <button type="button" class="btn default" onclick="location.href = '{{url('/accounts')}}';">Cancel</button>
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