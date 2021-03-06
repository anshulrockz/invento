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
                    <a href="{{url('/expenses')}}">Expenses</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span class="active"></span>
                </li>
            </ul>
        </div>
		<div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title" style="margin-bottom: 0px">
		                <div class="caption">
		                    <span class="caption-subject font-blue-sharp bold uppercase">#1242</span>
		                </div>
		            </div>
                    <div class="portlet-body table-responsive" style="padding-top: 0px">
                        <table class="table table-striped">
						  <tbody>
						  	<tr>
						      <th>Voucher no.</th>
						      <td>#1242</td>
						    </tr>
						    <tr>
						      <th>Voucher Date</th>
						      <td>28-November-2017</td>
						    </tr>
						    <tr>
						      <th>Comment</th>
						      <td>NA</td>
						    </tr>
						    <tr>
						      <th>Expense Account</th>
						      <td>Danish</td>
						    </tr>
						    <tr>
						      <th>Expense Amount</th>
						      <td>20000</td>
						    </tr><tr>
						      <th>Comment</th>
						      <td>NA</td>
						    </tr>
						    <tr>
						      <th>Paying Account</th>
						      <td>Anshul</td>
						    </tr>
						    <tr>
						      <th>Paying Amount</th>
						      <td>20000</td>
						    </tr>
						    <tr>
						      <th>Comment</th>
						      <td>NA</td>
						    </tr>
						    <tr>
						      <th>RCM Nature</th>
						      <td>RMC</td>
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