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
                    <span class="active">ATENOLOL</span>
                </li>
            </ul>
        </div>
		<div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title" style="margin-bottom: 0px">
		                <div class="caption">
		                    <span class="caption-subject font-blue-sharp bold uppercase">ATENOLOL</span>
		                </div>
		            </div>
                    <div class="portlet-body table-responsive" style="padding-top: 0px">
                        <table class="table table-striped">
						  <tbody>
						  	<tr>
						      <th>Generic Name</th>
						      <td>ATENOLOL</td>
						    </tr>
						    <tr>
						      <th>Category</th>
						      <td>Medicine</td>
						    </tr>
						    <tr>
						      <th>Price</th>
						      <td>1.20</td>
						    </tr>
						    <tr>
						      <th>Currency</th>
						      <td>USD</td>
						    </tr>
						    <tr>
						      <th>Strength</th>
						      <td>50</td>
						    </tr>
						    <tr>
						      <th>Unit</th>
						      <td>MG</td>
						    </tr>
						    <tr>
						      <th>Brand</th>
						      <td>ATECON</td>
						    </tr>
						    <tr>
						      <th>Manufacturer</th>
						      <td>Rat1</td>
						    </tr>
						    <tr>
						      <th>Form</th>
						      <td>TABLETS</td>
						    </tr>
						    <tr>
						      <th>Pack Size</th>
						      <td>300</td>
						    </tr>
						    <tr>
						      <th>Notify Quantity</th>
						      <td>100</td>
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