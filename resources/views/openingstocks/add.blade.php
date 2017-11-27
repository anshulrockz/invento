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
                    <span class="active">Add</span>
                </li>
            </ul>
        </div>
		<div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-blue-sharp bold uppercase">Add Opening Stock</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                	<div class="col-md-6">
                		@include('flashmessage')
                		<form method="post" action="">
	                        <div class="form-body">
	                            {{ csrf_field() }}
	                            <div class="form-group">
								 <label>*Category:</label>
								 <select name="category" id="category" class="form-control">
								     <option>Select</option>
								     <option value="Medicine">Medicine</option>
								 </select>
								</div>
								<div class="form-group">
								 <label>*Item:</label>
								 <select name="item" id="item" class="form-control">
								     <option>Select</option>
								     <option value="amoxicillin">AMOXICILLIN</option>
								 </select>
								</div>
							    <div class="form-group">
							      <label>Barcode:</label>
							      <input type="text" class="form-control" name="barcode" id="barcode" value="{{ old('barcode') }}" placeholder="Please Enter Barcode" >
							    </div>
							    <div class="form-group">
								 <label>*Expiry Date:</label>
								 <div class="input-group date">
								   <input type="text" name="expiry_date" id="expiry_date" value="{{ old('expiry_date') }}" placeholder="Please Enter Expiry Date" class="form-control" required=""><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								 </div>
								</div>
							    <div class="form-group">
							      <label>*Quantity:</label>
							      <input type="number" class="form-control" name="quantity" id="quantity" value="{{ old('quantity') }}" placeholder="Please Enter Quantity" required="">
							    </div>
							    <div class="form-group">
							      <label>*Cost:</label>
							      <input type="number" class="form-control" name="cost" id="cost" value="{{ old('cost') }}" placeholder="Please Enter Cost" required="">
							    </div>
							    <div class="form-group">
								 <label>*Date:</label>
								 <div class="input-group date">
								   <input type="text" name="date" id="date" value="{{ old('date') }}" placeholder="Please Enter Date" class="form-control" required=""><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								 </div>
								</div>
	                        </div>
	                        <div class="form-actions">
	                            <button type="submit" class="btn blue">Save</button>
	                            <button type="button" class="btn default" onclick="location.href = '{{url('/opening-stocks')}}';">Cancel</button>
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