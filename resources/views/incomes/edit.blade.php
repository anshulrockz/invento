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
                    <a href="{{url('/incomes')}}">Incomes</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="{{url('/incomes/view/1')}}">#1242</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span class="active">Edit</span>
                </li>
            </ul>
        </div>
		<div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-blue-sharp bold uppercase">Edit Expense</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                	<div class="col-md-12">
                		@include('flashmessage')
                		<form class="row" method="post" action="">
	                        <div class="form-body">
	                            {{ csrf_field() }}
							    <div class="form-group col-md-6">
							      <label>Voucher no.</label>
							      <input type="text" class="form-control" name="voucher_no" id="voucher_no" value="{{ old('voucher_no') }}" placeholder="Please Enter Voucher no." >
							    </div>
							    <div class="form-group col-md-6">
								 <label>*Voucher Date:</label>
								 <div class="input-group date">
								   <input type="text" name="voucher_date" id="voucher_date" value="{{ old('voucher_date') }}" placeholder="Please Enter Voucher Date" class="form-control" required=""><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								 </div>
								</div>
							    <div class="form-group col-md-6">
							      <label>Comment:</label>
							      <input type="text" class="form-control" name="comment" id="comment" value="{{ old('comment') }}" placeholder="Please Enter Comment" >
							    </div>
							    <div class="form-group col-md-6">
							      <label>*Income Account:</label>
							      <select name="income_mode" id="income_mode" class="form-control">
								     <option>Select</option>
								     <option value="cash">Cash</option>
								 </select>
								</div>
							    <div class="form-group col-md-6">
							      <label>*Income Amount:</label>
							      <input type="number" class="form-control" name="expense_amount" id="income_amount1" value="{{ old('income_amount') }}" placeholder="Please Enter Income Amount" required="">
							    </div>
							    <div class="form-group col-md-6">
							      <label>Comment:</label>
							      <input type="text" class="form-control" name="comment" id="comment" value="{{ old('comment') }}" placeholder="Please Enter Comment" >
							    </div>
							    <div class="form-group col-md-6">
							    	<label>*Income From:</label>
								    <select name="income_from" id="income_from" class="form-control">
									     <option>Select</option>
									     <option value="Danish">Danish</option>
									</select>
								</div>
							    <div class="form-group col-md-6">
							      <label>*Income Amount:</label>
							      <input type="number" class="form-control" name="income_amount2" id="income_amount2" value="{{ old('income_amount2') }}" placeholder="Please Enter Income Amount" required="">
							    </div>
							    <div class="form-group col-md-6">
							      <label>Comment:</label>
							      <input type="text" class="form-control" name="comment" id="comment" value="{{ old('hsn') }}" placeholder="Please Enter Comment" >
							    </div>
							    <div class="form-group col-md-6">
							      <label>Income Amount:</label>
							      <input type="number" class="form-control" name="expense_amount" id="expense_amount" value="{{ old('expense_amount') }}" placeholder="Expense Amount" disabled="disabled">
							    </div>
							    <div class="form-group col-md-6">
							      <label>From Amount:</label>
							      <input type="number" class="form-control" name="paying_amount" id="paying_amount" value="{{ old('paying_amount') }}" placeholder="Paying Amount" disabled="disabled">
							    </div>
	                        </div>
	                        <div class="form-actions col-md-12">
	                            <button type="submit" class="btn blue">Update</button>
	                            <button type="button" class="btn default" onclick="location.href = '{{url('/incomes')}}';">Cancel</button>
	                        </div>
	                    </form>
                	</div>
                </div>
            </div>
	    </div>
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
@endsection