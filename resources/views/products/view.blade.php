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
                    <span class="active">Mr. X</span>
                </li>
            </ul>
        </div>
		<div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title" style="margin-bottom: 0px">
		                <div class="caption">
		                    <span class="caption-subject font-blue-sharp bold uppercase">Mr. X</span>
		                </div>
		            </div>
                    <div class="portlet-body table-responsive" style="padding-top: 0px">
                        <table class="table table-striped">
						  <tbody>
						  	<tr>
						      <th>Name</th>
						      <td>Danish</td>
						    </tr>
						    <tr>
						      <th>Email</th>
						      <td>danish@techstreet.in</td>
						    </tr>
						    <tr>
						      <th>Mobile</th>
						      <td>9582287654</td>
						    </tr>
						    <tr>
						      <th>Address</th>
						      <td>Noida, UP</td>
						    </tr>
						  </tbody>
						</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
@endsection