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
                    <a href="{{url('/bank-details')}}">Bank Details</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="{{url('/bank-details/view/1')}}">ICICI</a>
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
                    <span class="caption-subject font-blue-sharp bold uppercase">Edit Form</span>
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
							      <label>*Bank Name:</label>
							      <input type="text" class="form-control" name="bank_name" id="bank_name" value="" placeholder="Please Enter Bank Name" required="">
							    </div>
							    <div class="form-group">
							      <label>*Payee:</label>
							      <input type="text" class="form-control" name="payee" id="payee" value="" placeholder="Please Enter Payee" required="">
							    </div>
							    <div class="form-group">
							      <label>*Account Number:</label>
							      <input type="number" class="form-control" name="name" id="name" value="" placeholder="Please Enter Account Number" required="">
							    </div>
							    <div class="form-group">
							      <label>*IFSC:</label>
							      <input type="number" class="form-control" name="ifsc" id="ifsc" value="" placeholder="Please Enter IFSC Code" required="">
							    </div>
							    <div class="form-group">
							      <label>*Bank Branch:</label>
							      <input type="number" class="form-control" name="bank_branch" id="bank_branch" value="" placeholder="Please Enter Bank Branch" required="">
							    </div>
	                        </div>
	                        <div class="form-actions">
	                            <button type="submit" class="btn blue">Update</button>
	                            <button type="button" class="btn default" onclick="location.href = '{{url('/bank-details')}}';">Cancel</button>
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