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
                    <span class="active">Add</span>
                </li>
            </ul>
        </div>
		<div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-blue-sharp bold uppercase">Add Expense</span>
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
							      <label>*Expense Account:</label>
							      <select name="expense_account" id="expense_account" class="form-control">
								     <option>Select</option>
								     <option value="Danish">Danish</option>
								 </select>
								</div>
							    <div class="form-group col-md-6">
							      <label>*Expense Amount:</label>
							      <input type="number" class="form-control" name="expense_amount" id="expense_amount" value="{{ old('expense_amount') }}" placeholder="Please Enter Expense Amount" required="">
							    </div>
							    <div class="form-group col-md-6">
							      <label>Comment:</label>
							      <input type="text" class="form-control" name="comment" id="comment" value="{{ old('comment') }}" placeholder="Please Enter Comment" >
							    </div>
							    <div class="form-group col-md-6">
							    	<label>*Paying Account:</label>
								    <select name="paying_account" id="paying_account" class="form-control">
									     <option>Select</option>
									     <option value="Danish">Danish</option>
									</select>
								</div>
							    <div class="form-group col-md-6">
							      <label>*Paying Amount:</label>
							      <input type="number" class="form-control" name="paying_amount" id="paying_amount" value="{{ old('paying_amount') }}" placeholder="Please Enter paying Amount" required="">
							    </div>
							    <div class="form-group col-md-6">
							      <label>Comment:</label>
							      <input type="text" class="form-control" name="comment" id="comment" value="{{ old('hsn') }}" placeholder="Please Enter Comment" >
							    </div>
							    <div class="form-group col-md-6">
							    	<label>*RCM Nature:</label>
								    <select name="rcm" id="rcm" class="form-control">
									     <option>Select</option>
									     <option value="Danish">RCM</option>
									</select>
								</div>
							    <div class="form-group col-md-6">
							      <label>Expense Amount:</label>
							      <input type="number" class="form-control" name="expense_amount" id="expense_amount" value="{{ old('expense_amount') }}" placeholder="Expense Amount" disabled="disabled">
							    </div>
							    <div class="form-group col-md-6">
							      <label>Paying Amount:</label>
							      <input type="number" class="form-control" name="paying_amount" id="paying_amount" value="{{ old('paying_amount') }}" placeholder="Paying Amount" disabled="disabled">
							    </div>
	                        </div>
	                        <div class="form-actions col-md-12">
	                            <button type="submit" class="btn blue">Save</button>
	                            <button type="button" class="btn default" onclick="location.href = '{{url('/expenses')}}';">Cancel</button>
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
<script type='text/javascript'>
$(function(){
    var nowDate = new Date();
    var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0); 
    $('.input-group.date').datepicker({
        calendarWeeks: true,
        todayHighlight: true,
        autoclose: true,
        format: "dd-MM-yyyy",
        //startDate: today
    });
});
</script>
@endsection