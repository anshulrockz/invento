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
                    <a href="{{url('/forms')}}">Forms</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span class="active">TABLETS</span>
                </li>
            </ul>
        </div>
		<div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title" style="margin-bottom: 0px">
		                <div class="caption">
		                    <span class="caption-subject font-blue-sharp bold uppercase">TABLETS</span>
		                </div>
		            </div>
                    <div class="portlet-body table-responsive" style="padding-top: 0px">
                        <table class="table table-striped">
						  <tbody>
						  	<tr>
						      <th>Name</th>
						      <td>TABLETS</td>
						    </tr>
						    <tr>
						      <th>Description</th>
						      <td>TABLETS</td>
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