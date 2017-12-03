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
                    <a href="{{url('/units')}}">Units</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="{{url('/units/1')}}">{{ $unit->name }}</a>
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
                    <span class="caption-subject font-blue-sharp bold uppercase">Edit Unit</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                	<div class="col-md-6">
                		@include('flashmessage')
                		<form method="post" action="{{route('units.update',$unit->id)}}">
	                        <div class="form-body">
	                            {{ csrf_field() }}
	                            {{ method_field('PUT') }}
							    <div class="form-group">
							      <label>*Name:</label>
							      <input type="text" class="form-control" name="name" id="name" value="{{ $unit->name }}" placeholder="Please Enter Name" required="">
							    </div>
							    <div class="form-group">
							      <label>Description:</label>
							      <textarea class="form-control" name="description" id="description" placeholder="Please Enter Description">{{ $unit->description }}</textarea>
							    </div>
	                        </div>
	                        <div class="form-actions">
	                            <button type="submit" class="btn blue">Update</button>
	                            <button type="button" class="btn default" onclick="location.href = '{{url('/units')}}';">Cancel</button>
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