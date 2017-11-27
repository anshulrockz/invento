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
                    <a href="{{url('/opening-stocks')}}">Opening Stocks</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span class="active">AMOXICILLIN</span>
                </li>
            </ul>
        </div>
		<div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title" style="margin-bottom: 0px">
		                <div class="caption">
		                    <span class="caption-subject font-blue-sharp bold uppercase">AMOXICILLIN</span>
		                </div>
		            </div>
                    <div class="portlet-body table-responsive" style="padding-top: 0px">
                        <table class="table table-striped">
						  <tbody>
						  	<tr>
						      <th>Item</th>
						      <td>AMOXICILLIN</td>
						    </tr>
						    <tr>
						      <th>Category</th>
						      <td>Medicine</td>
						    </tr>
						    <tr>
						      <th>Barcode</th>
						      <td>000002</td>
						    </tr>
						    <tr>
						      <th>Expiry Date</th>
						      <td>01-March-2019</td>
						    </tr>
						    <tr>
						      <th>Quantity</th>
						      <td>9000</td>
						    </tr>
						    <tr>
						      <th>Cost</th>
						      <td>2.80</td>
						    </tr>
						    <tr>
						      <th>Amount</th>
						      <td>25200.00</td>
						    </tr>
						    <tr>
						      <th>Date</th>
						      <td>30-October-2017</td>
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