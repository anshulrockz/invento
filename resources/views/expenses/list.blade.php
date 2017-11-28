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
                    <span class="active">Expenses</span>
                </li>
            </ul>
        </div>
		<div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
		                <div class="caption">
		                    <span class="caption-subject font-blue-sharp bold uppercase">Expenses</span>
		                </div>
		                <div class="actions">
                            <a href="{{ url('/expenses/add') }}" class="btn btn-sm blue-sharp">
                                <i class="fa fa-plus"></i> Add New
                            </a>
                        </div>
		            </div>
		            @include('flashmessage')
                    <div class="portlet-body">
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Expense Account</th>
                                    <th>Expense Amount</th>
                                    <th>Paying Account</th>
                                    <th>Paying Amount</th>
                                    <th>Voucher Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Danish</td>
                                    <td>20000</td>
                                    <td>Anshul</td>
                                    <td>20000</td>
                                    <td>28-November-2017</td>
                                    <td>
                                        <a href="{{ url('/expenses/view/1')}}" class="btn btn-sm btn-success">
                                            <i class="fa fa-eye"></i> View
                                        </a>
                                        <a href="{{ url('/expenses/edit/1')}}" class="btn btn-sm btn-info">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to Delete?');" href="{{ url('/expenses/delete/1')}}" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>
                                    </td>
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
<script>
	$(document).ready(function(){
	    $('#dataTable').DataTable({
			"ordering": false
		});
	});
</script>
@endsection