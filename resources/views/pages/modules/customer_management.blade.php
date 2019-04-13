@php($page = 'Expense')
@extends('layouts.app')
@section('main-content')
    <div class="Saloon_web_wrapper" data-parallax="scroll" style="background:url({{url('public/provider/images/bg1.png')}});">
        <div class="appointment_summary">
            <div class="container-fluid">
                <div class="filter_lists row">
				    <a href="{{url('/')}}" class="Exit_btn d-block d-sm-block d-md-none d-lg-none"><i class="fas fa-home"></i></a>
                    <div class="col-md-6">
                        <div class="filters_byphon customer_filter allcustomer_fields">
                            <div class="form-group">
							  <input type="text" placeholder="customer name">
                            </div>
							<div class="form-group">
							<label class="">or</label>
							  <input type="text" placeholder="customer phone">
                            </div>
                        </div>
						</div>
						<div class="col-md-6">
						 <div class="filters_byphone float-right">
						    <a href="{{route('template','customer_management')}}" class="appointnment_btn active">All Customers</a>
                            <a href="{{route('template','customer_report')}}" class="report_btn customer-repr-btn">Customers Report</a>
							<a href="customer.html" class="report_btn customer-repr-btn">Customer</a>
							  <a href="{{url('/')}}" class="Exit_btn d-none d-sm-none d-md-block d-lg-block"><i class="fas fa-home"></i></a>
						</div>
						
						</div>
						 <div class="col-md-12">
						<div class="appointment_summary-table customer_list_table table-responsive" id="customer_list_table">
                            @include('includes.customer_management_list')
						  <div class="allctmr_import_export">
						  <a href="report.html" class="Print_btn importbtn">Import</a>
						   <a href="report.html" class="Export_btn eprt_tbn">Export to Excel</a>
						   </div>
						</div>
						</div>
						 </div>
               </div>
           </div>
        </div>
    </div>
 </div>
</div>
    @section('javascript')
    <script>
    var token = $('meta[name=csrf-token]').attr("content");
	var baseurl = $('meta[name=baseurl]').attr("content");

	$('body').on('click', '.pagination a', function(e) {
		e.preventDefault();
		$('.loading_').show();
		var url = $(this).attr('href');
		getCustomers(url);
		window.history.pushState("", "", url);
	});
				
	function getCustomers(url){
		axios.post(url).then((response) => {
	        $('#customer_list_table').html(response.data.list_html);
		    $('.loading_').hide();
		})
		.catch((error) => {
									
		})
	}
    $('#customer_list_table').on('click', '#select-table tbody tr', function(event) {
        $(this).addClass('highlight').siblings().removeClass('highlight');
        $('.update_appointments').addClass('update_apptinfo').siblings().removeClass('update_apptinfo');
    });
   </script>
        @endsection
    @endsection