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
                    <span class="active">Bank Details</span>
                </li>
            </ul>
        </div>
		<div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
		                <div class="caption">
		                    <span class="caption-subject font-blue-sharp bold uppercase">Bank Details</span>
		                </div>
		                <div class="actions">
                            <a href="{{ url('/bank-details/add') }}" class="btn btn-sm blue-sharp">
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
                                    <th>Name</th>
                                    <th>Payee</th>
                                    <th>Acc No.</th>
                                    <th>IFSC</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                   	<td>ICICI</td>
                                    <td>Danish</td>
                                    <td>4007006900001234</td>
                                    <td>PUNB400700</td>
                                    <td>
                                        <a href="{{ url('/bank-details/view/1')}}" class="btn btn-sm btn-success">
                                            <i class="fa fa-eye"></i> View
                                        </a>
                                        <a href="{{ url('/bank-details/edit/1')}}" class="btn btn-sm btn-info">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to Delete?');" href="{{ url('/bank-details/delete/1')}}" class="btn btn-sm btn-danger">
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