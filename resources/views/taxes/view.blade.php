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
                    <span class="active">GST</span>
                </li>
            </ul>
        </div>
		<div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title" style="margin-bottom: 0px">
		                <div class="caption">
		                    <span class="caption-subject font-blue-sharp bold uppercase">GST</span>
		                </div>
		            </div>
                    <div class="portlet-body table-responsive" style="padding-top: 0px">
                        <table class="table table-striped">
						  <tbody>
						  	<tr>
						      <th>Name</th>
						      <td>GST</td>
						    </tr>
						    <tr>
						      <th>Rate(%)</th>
						      <td>18</td>
						    </tr>
						    <tr>
						      <th>Effective From</th>
						      <td>29-May-2017</td>
						    </tr>
						    <tr>
						      <th>Description</th>
						      <td>NA</td>
						    </tr>
						    <tr>
						      <th>Status</th>
						      <td>Active</td>
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