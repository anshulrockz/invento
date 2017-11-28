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
                    <a href="{{url('/firms')}}">Firms</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span class="active">Somaliland Hasscon</span>
                </li>
            </ul>
        </div>
		<div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title" style="margin-bottom: 0px">
		                <div class="caption">
		                    <span class="caption-subject font-blue-sharp bold uppercase">Somaliland Hasscon</span>
		                </div>
		            </div>
                    <div class="portlet-body table-responsive" style="padding-top: 0px">
                        <table class="table table-striped">
						  <tbody>
						  	<tr>
						      <th>Firm Logo</th>
						      <td></td>
						    </tr>
						    <tr>
						      <th>Firm Name</th>
						      <td>Somaliland Hasscon</td>
						    </tr>
						    <tr>
						      <th>Email</th>
						      <td>bishaar@hassconpharmaceuticals.com</td>
						    </tr>
						    <tr>
						      <th>Mobile</th>
						      <td>2634094582</td>
						    </tr>
						    <tr>
						      <th>Website</th>
						      <td>hassconpharmaceuticals.com</td>
						    </tr>
						    <tr>
						      <th>Landline</th>
						      <td>2634094582</td>
						    </tr>
						    <tr>
						      <th>State</th>
						      <td>Somaliland</td>
						    </tr>
						    <tr>
						      <th>City</th>
						      <td>Hargeisa</td>
						    </tr>
						    <tr>
						      <th>Address</th>
						      <td>Abaayo Road</td>
						    </tr>
						    <tr>
						      <th>Pin Code</th>
						      <td>123456</td>
						    </tr>
						    <tr>
						      <th>Permanent Account Number(PAN)</th>
						      <td>ABC123XYZ</td>
						    </tr>
						    <tr>
						      <th>TDS Account Number(TAN)</th>
						      <td>PQR123XYZ</td>
						    </tr>
						    <tr>
						      <th>Corporate Identity Number(CIN)</th>
						      <td>QWER123PQR</td>
						    </tr>
						    <tr>
						      <th>GSTIN Registration Status</th>
						      <td>ABC123XYZ</td>
						    </tr>
						    <tr>
						      <th>GST No.</th>
						      <td>ABC123XYZ</td>
						    </tr>
						    <tr>
						      <th>Authorised Signatory</th>
						      <td>Bishaar Cabdillaahi</td>
						    </tr>
						    <tr>
						      <th>Designation</th>
						      <td>Managing Director</td>
						    </tr>
						    <tr>
						      <th>Name of Contact Person</th>
						      <td>Bishaar Cabdillaahi</td>
						    </tr>
						    <tr>
						      <th>Certified</th>
						      <td>Bishaar Cabdillaahi</td>
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