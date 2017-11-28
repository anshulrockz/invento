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
                    <a href="{{url('/firms')}}">Firms</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="{{url('/firms/view/1')}}">Bishaar Cabdillaahi</a>
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
                    <span class="caption-subject font-blue-sharp bold uppercase">Edit Firm</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                	<div class="col-md-12">
                		@include('flashmessage')
                		<form class="row" method="post" action="">
	                        <div class="form-body">
	                            {{ csrf_field() }}
							    <div class="form-group col-md-6">
							      <label>*Firm Name:</label>
							      <input type="text" class="form-control" name="firm_name" id="firm_name" value="{{ old('firm_name') }}" placeholder="Please Enter Firm Name" required="">
							    </div>
							    <div class="form-group col-md-6">
							      <label>Firm Logo:</label>
							      <input type="file" class="form-control" name="firm_logo" id="firm_logo" value="{{ old('name') }}" placeholder="Please Upload Firm Logo">
							    </div>
							    <div class="form-group col-md-6">
							      <label>*Email:</label>
							      <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Please Enter Email" required="">
							    </div>
							    <div class="form-group col-md-6">
							      <label>*Mobile:</label>
							      <input type="number" class="form-control" name="mobile" id="mobile" value="{{ old('mobile') }}" placeholder="Please Enter Mobile" required="">
							    </div>
							    <div class="form-group col-md-6">
							      <label>*Website:</label>
							      <input type="text" class="form-control" name="website" id="website" value="{{ old('name') }}" placeholder="Please Enter Website" required="">
							    </div>
							    <div class="form-group col-md-6">
							      <label>Landline:</label>
							      <input type="number" class="form-control" name="landline" id="landline" value="{{ old('landline') }}" placeholder="Please Enter Landline" >
							    </div>
							    <div class="form-group col-md-6">
							      <label>*State:</label>
							      <input type="text" class="form-control" name="state" id="state" value="{{ old('name') }}" placeholder="Please Enter State" required="">
							    </div>
							    <div class="form-group col-md-6">
							      <label>*City:</label>
							      <input type="text" class="form-control" name="city" id="city" value="{{ old('name') }}" placeholder="Please Enter City" required="">
							    </div>
							    <div class="form-group col-md-6">
							      <label>*Address:</label>
							      <input type="text" class="form-control" name="address" id="address" value="{{ old('name') }}" placeholder="Please Enter Address" required="">
							    </div>
							    <div class="form-group col-md-6">
							      <label>*Pin Code:</label>
							      <input type="number" class="form-control" name="pin_code" id="pin_code" value="{{ old('mopin_codebile') }}" placeholder="Please Enter Pin Code" required="">
							    </div><br />
							    <div class="form-group col-md-6">
							      <label>Permanent Account Number(PAN):</label>
							      <input type="text" class="form-control" name="pan" id="pan" value="{{ old('name') }}" placeholder="Please Enter PAN">
							    </div>
							    <div class="form-group col-md-6">
							      <label>TDS Account Number(TAN):</label>
							      <input type="text" class="form-control" name="tan" id="tan" value="{{ old('name') }}" placeholder="Please Enter TAN">
							    </div>
							    <div class="form-group col-md-6">
							      <label>Corporate Identity Number(CIN):</label>
							      <input type="text" class="form-control" name="cin" id="cin" value="{{ old('cin') }}" placeholder="Please Enter Name">
							    </div>
							    <div class="form-group col-md-6">
							      <label>GSTIN Registration Status:</label>
							      <input type="text" class="form-control" name="gstin_registration_status" id="gstin_registration_status" value="{{ old('gstin_registration_status') }}" placeholder="Please Enter GSTIN Registration Status">
							    </div>
							    <div class="form-group col-md-6">
							      <label>GST No.:</label>
							      <input type="number" class="form-control" name="gst" id="gst" value="{{ old('name') }}" placeholder="Please Enter GST No.">
							    </div>
							    <div class="form-group col-md-6">
							      <label>*Authorised Signatory:</label>
							      <input type="text" class="form-control" name="authorised_signatory" id="authorised_signatory" value="{{ old('authorised_signatory') }}" placeholder="Please Enter Authorised Signatory" required="">
							    </div>
							    <div class="form-group col-md-6">
							      <label>*Designation:</label>
							      <input type="text" class="form-control" name="Designation" id="Designation" value="{{ old('Designation') }}" placeholder="Please Enter Designation" required="">
							    </div>
							    <div class="form-group col-md-6">
							      <label>*Name of Contact Person:</label>
							      <input type="text" class="form-control" name="contact_person" id="contact_person" value="{{ old('contact_person') }}" placeholder="Please Enter Contact Person" required="">
							    </div>
							    <div class="form-group col-md-6">
							      <label>Certified:</label>
							      <input type="text" class="form-control" name="certified" id="certified" value="{{ old('certified') }}" placeholder="Please Enter Certified" >
							    </div>
	                        </div>
	                        <div class="form-actions col-md-12">
	                            <button type="submit" class="btn blue">Update</button>
	                            <button type="button" class="btn default" onclick="location.href = '{{url('/firms')}}';">Cancel</button>
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