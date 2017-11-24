@extends('layouts.backend')
@section('content')
<script src="{{asset('backend/assets/pages/scripts/modernizr.custom.js')}}" type="text/javascript"></script>
<style>
.my-toggle-class {
color: #888;
cursor: pointer;
font-size: 0.75em;
font-weight: bold;
padding: 0.5em 1em;
text-transform: uppercase;
}
</style>
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
                    <span class="active">Change Password</span>
                </li>
            </ul>
        </div>
		<div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-blue-sharp bold uppercase">Change Password</span>
                </div>
            </div>
            <div class="portlet-body form">
                <div class="row">
                	<div class="col-md-6">
                		@include('flashmessage')
                		<form method="post" action="{{ action('ChangepasswordController@save') }}">
				          	{{ csrf_field() }}
						    <div class="form-group">
						      <label>*Old Password:</label>
						      <input type="password" class="form-control" name="old_password" id="old_password" placeholder="Enter old password" required="">
						    </div>
						    <div class="form-group">
						      <label>*New Password:</label>
						      <input type="password" class="form-control" name="password" id="password" placeholder="Enter new password" required="">
						    </div>
						    <div class="form-group">
						      <label>*Confirm New Password:</label>
						      <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm new password" required="">
						    </div>
						    <button type="submit" class="btn blue">Update</button>
	                        <button type="button" class="btn default" onclick="location.href = '{{url('/')}}';">Cancel</button>
						</form>
                	</div>
                </div>
            </div>
	    </div>
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
<!-- Include the plugin. Yay! --> 
<script src="{{asset('backend/assets/pages/scripts/hideShowPassword.min.js')}}" type="text/javascript"></script>
<script>
// Example 2
$('#old_password,#password,#confirm_password').hideShowPassword({
  // Make the password visible right away.
  show: false,
  // Create the toggle goodness.
  innerToggle: true,
  // Give the toggle a custom class so we can style it
  // separately from the previous example.
  toggleClass: 'my-toggle-class',
  // Don't show the toggle until the input triggers
  // the 'focus' event.
  hideToggleUntil: 'focus',
  // Enable touch support for toggle.
  touchSupport: Modernizr.touch
});
</script>
@endsection