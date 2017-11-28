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
                    <span class="active">ICICI</span>
                </li>
            </ul>
        </div>
		<div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title" style="margin-bottom: 0px">
		                <div class="caption">
		                    <span class="caption-subject font-blue-sharp bold uppercase">ICICI</span>
		                </div>
		            </div>
                    <div class="portlet-body table-responsive" style="padding-top: 0px">
                        <table class="table table-striped">
						  <tbody>
						  	<tr>
						      <th>Bank Name</th>
						      <td>ICICI</td>
						    </tr>
						    <tr>
						      <th>Payee</th>
						      <td>Danish</td>
						    </tr>
						    <tr>
						      <th>Account No.</th>
						      <td>4007006900001234</td>
						    </tr>
						    <tr>
						      <th>IFSC</th>
						      <td>PUNB400700</td>
						    </tr>
						    <tr>
						      <th>Bank Branch</th>
						      <td>Kalkaji metro station, Delhi</td>
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