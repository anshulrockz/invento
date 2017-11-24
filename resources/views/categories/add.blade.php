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
                    <a href="{{url('/products')}}">Products</a>
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
                    <span class="caption-subject font-blue-sharp bold uppercase">Add Product</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                	<div class="col-md-12">
                		@include('flashmessage')
                		<form method="post" action="">
	                        <div class="form-body">
	                            {{ csrf_field() }}
	                            <div class="row">
                					<div class="col-md-6">
									    <div class="form-group">
									      <label>*Generic Name:</label>
									      <input type="text" class="form-control" name="generic_name" id="generic_name" value="{{ old('generic_name') }}" placeholder="Please Generic Name" required="">
									    </div>
									</div>
									<div class="col-md-6">
									    <div class="form-group">
									      <label>*Category:</label>
									      <select name="blood_group" id="blood_group" class="form-control">
										     <option>Select</option>
										     <option value="medicine">Medicine</option>
										 </select>
									    </div>
									</div>
								</div>
								<div class="row">
                					<div class="col-md-6">
									    <div class="form-group">
									      <label>*Price:</label>
									      <input type="text" class="form-control" name="price" id="price" value="{{ old('price') }}" placeholder="Please Enter Price" required="">
									    </div>
									</div>
									<div class="col-md-6">
									    <div class="form-group">
									      	<label>*Currency:</label>
											<select name="currency" id="currency" class="form-control">
											    <option>Select</option>
												<option value="USD">USD</option>
												<option value="KES">KES</option>
											</select>
									    </div>
									</div>
								</div>
								<div class="row">
                					<div class="col-md-6">
									    <div class="form-group">
									      <label>*Strength:</label>
									      <input type="text" class="form-control" name="strength" id="strength" value="{{ old('strength') }}" placeholder="Please Enter Strength" required="">
									    </div>
									</div>
									<div class="col-md-6">
									    <div class="form-group">
									     	<label>*Unit:</label>
									    	<select name="unit" id="unit" class="form-control">
											    <option>Select</option>
												<option value="mg">MG</option>
												<option value="pkt">PKT</option>
											</select>
									    </div>
									</div>
								</div>
								<div class="row">
                					<div class="col-md-6">
									    <div class="form-group">
									    	<label>*Brand:</label>
									    	<select name="brand" id="brand" class="form-control">
											    <option>Select</option>
												<option value="omepcon">OMEPCON</option>
												<option value="atecon">ATECON</option>
											</select>
									    </div>
									</div>
									<div class="col-md-6">
									    <div class="form-group">
										    <label>*Manufacturer:</label>
										    <select name="unit" id="unit" class="form-control">
											    <option>Select</option>
												<option value="rat1">RAT1</option>
												<option value="rat2">RAT2</option>
											</select>
									    </div>
									</div>
								</div>
								<div class="row">
                					<div class="col-md-6">
									    <div class="form-group">
									      <label>*Form:</label>
									      <select name="form" id="form" class="form-control">
											    <option>Select</option>
												<option value="tablet">TABLET</option>
												<option value="capsule">CAPSULE</option>
												<option value="liquid">LIQUID</option>
											</select>
									    </div>
									</div>
									<div class="col-md-6">
									    <div class="form-group">
									      <label>*Pack Size:</label>
									      <input type="text" class="form-control" name="pack_size" id="pack_size" value="{{ old('pack_size') }}" placeholder="Please Enter Pack Size" required="">
									    </div>
									</div>
								</div>
								<div class="row">
                					<div class="col-md-6">
									    <div class="form-group">
									      <label>*Notify Quantity:</label>
									      <input type="text" class="form-control" name="notify_quantity" id="notify_quantity" value="{{ old('notify_quantity') }}" placeholder="Please Enter Notify Quantity" required="">
									    </div>
									</div>
								</div>
							</div>
	                        <div class="form-actions">
	                            <button type="submit" class="btn blue">Save</button>
	                            <button type="button" class="btn default" onclick="location.href = '{{url('/products')}}';">Cancel</button>
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